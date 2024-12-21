<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    
    public function save_cart(Request $request)
    {
        $productId = $request->input('productid_hidden');
        $quantity = $request->input('qty');

        // Truy vấn thông tin sản phẩm từ cơ sở dữ liệu
        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();

        if (!$product_info) {
            return Redirect::back()->with('error', 'Sản phẩm không tồn tại.');
        }

        // Tạo dữ liệu sản phẩm để thêm vào giỏ hàng
        $data = [
            'id' => $product_info->product_id,
            'qty' => $quantity,
            'name' => $product_info->product_name,
            'price' => $product_info->product_price,
            'weight' => $product_info->product_price,
            'options' => [
                'image' => $product_info->product_image,
            ],
        ];

        Cart::add($data);
        return Redirect::to('/show-cart');
    }

    public function show_cart(Request $request)
    {

        $meta_desc = "Giỏ hàng của bạn";
        $meta_keywords = "Giỏ hàng";
        $meta_title = "Giỏ hàng";
        $url_canonical = $request->url();

        // Lấy dữ liệu danh mục sản phẩm và thương hiệu
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', 1)
            ->orderBy('category_id', 'desc')
            ->get();

        // Trả về view với dữ liệu
        return view('pages.cart.show_cart', [
            'category' => $cate_product,
            'meta_desc' => $meta_desc,
            'meta_keywords' => $meta_keywords,
            'meta_title' => $meta_title,
            'url_canonical' => $url_canonical,
        ]);
        
    }

    public function delete_to_cart($rowId)
    {
        Cart::update($rowId, 0);
        return Redirect::to('/show-cart');
    }

    public function update_cart_quantity(Request $request)
    {
        $rowId = $request->input('rowId_cart');
        $quantity = $request->input('cart_quantity');

        Cart::update($rowId, $quantity);
        return Redirect::to('/show-cart');
    }

    public function login_checkout(){
        return view('user_login');
    }

    public function checkout()
    {
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', 0)
            ->orderBy('category_id', 'desc')
            ->get();

        //$city = City::orderBy('matp', 'ASC')->get();

        return view('pages.cart.show_checkout',
            [
                'category' => $cate_product,
                //'city' => $city,
            ]);
    }

    public function save_checkout_customer(Request $request){
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_notes'] = $request->shipping_notes;
        $data['shipping_status'] = 1;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        $data['shipping_method'] = $request->shipping_method;
        Session::put('shipping_id', $shipping_id);

        return Redirect::to('/payment');
    }

    public function payment(){
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', 1)
            ->orderBy('category_id', 'desc')
            ->get();

        return view('pages.cart.payment')->with('category', $cate_product);
    }
}
