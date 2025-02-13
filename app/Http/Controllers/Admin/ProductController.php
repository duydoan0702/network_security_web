<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class ProductController extends Controller
{
    public function add_product(){
        $this->AuthLogin();
        
        $cate_product = DB::table('tbl_category_product')
            ->orderby('category_id', 'desc')
            ->get();

        return view('admin.add_product')
            ->with('cate_product', $cate_product);

    }

    public function save_product(Request $request){
        $this->AuthLogin();

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_slug'] = $request->product_slug;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;

        $get_image = $request->file('product_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;

            DB::table('tbl_product')->insert($data);

            Session::put('message', 'Thêm sản phẩm thành công');

            return Redirect::to('all_product');
        }
    }

    private function AuthLogin(){
        if(!Session::get('admin_id')){
            return Redirect::to('admin')->send();
        }
    }

    public function all_product() {
        $this->AuthLogin();
        
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->orderby('tbl_product.product_id', 'desc')
            ->get();
    
        $manager_product = view('admin.all_product')
            ->with('all_product', $all_product); 
    
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }

    public function unactive_product($product_id) {
        $this->AuthLogin(); 

        DB::table('tbl_product')
            ->where('product_id', $product_id)
            ->update(['product_status' => 1]);
    
        Session::put('message', 'Sản phẩm đã được ẩn thành công');
        return Redirect::to('all_product');
    }
    
    public function active_product($product_id) {
        $this->AuthLogin();

        DB::table('tbl_product')
            ->where('product_id', $product_id)
            ->update(['product_status' => 0]);
    
     
        Session::put('message', 'Sản phẩm đã được kích hoạt thành công');
  
        return Redirect::to('all_product');
    }

    public function edit_product($product_id) {
        $this->AuthLogin();
    
        $cate_product = DB::table('tbl_category_product')
            ->orderBy('category_id', 'desc')
            ->get();
    
        $edit_product = DB::table('tbl_product')
            ->where('product_id', $product_id)
            ->get();
    
        $manager_product = view('admin.edit_product')
            ->with('edit_product', $edit_product)
            ->with('cate_product', $cate_product);
    
        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }
    

    public function update_product(Request $request, $product_id){
        $this->AuthLogin();

        // get date from form
        $data = [
            'product_name' => $request->product_name,
            'product_slug' => $request->product_slug,
            'product_price' => $request->product_price,
            'product_desc' => $request->product_desc,
            'product_content' => $request->product_content,
            'category_id' => $request->product_cate,
            'product_status' => $request->product_status,
        ];

        // Kiểm tra nếu có hình ảnh mới
        if ($get_image = $request->file('product_image')) {
            $image_name = pathinfo($get_image->getClientOriginalName(), PATHINFO_FILENAME);
            $new_image = $image_name . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;
        }

        DB::table('tbl_product')->where('product_id', $product_id)->update($data);

        Session::put('message', 'Cập nhật sản phẩm thành công');
        return redirect('all_product');
    }

    public function delete_product($product_id)
    {
        $this->AuthLogin();

        DB::table('tbl_product')->where('product_id', $product_id)->delete();

        Session::put('message', 'Xóa sản phẩm thành công');
        return redirect('all_product');
    }


    public function details_product($product_id)
    {
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1') 
            ->orderby('category_id', 'desc')
            ->get();

        $details_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->where('tbl_product.product_id', $product_id)
            ->get();

        $category_id = null;
        $product_slug = null;
        foreach ($details_product as $key => $value) {
            $category_id = $value->category_id;
            $product_slug = $value->product_slug;
        }

        $related_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->where('tbl_category_product.category_id', $category_id)
            ->whereNotIn('tbl_product.product_slug', [$product_slug])
            ->get();

        return view('pages.product.show-details', [
            'category' => $cate_product,
            'product_details' => $details_product,
            'relate' => $related_product
        ]);

    }


    
}
