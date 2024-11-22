<?php

namespace App\Http\Controllers;

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
        return Redirect::to('/show_cart');
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
        return view('pages.cart.show_cart', compact(
            'cate_product',
            'meta_desc',
            'meta_keywords',
            'meta_title',
            'url_canonical'
        ));
    }
}
