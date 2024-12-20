<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add_category_product');
    }

    public function all_category_product(){
        $this->AuthLogin();
        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product', $all_category_product);
        return view('admin_layout')->with('admin.all_category_product', $manager_category_product);
    }

    public function save_category_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_product_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('add_category_product');
    }

    public function AuthLogin(){
            $admin_id = Session::get('admin_id');
            if($admin_id){
                return Redirect::to('dashboard');
            }else{
                return Redirect::to('admin')->send();
            }
    }

    public function unactive_category_product($category_product_id){
        $this->AuthLogin();

        DB::table('tbl_category_product')
            ->where('category_id', $category_product_id)
            ->update(['category_status' => 0]);

        Session::put('message', 'Ẩn danh mục sản phẩm, cập nhập thành công');

        return Redirect::to('all_category_product');
    }

    public function active_category_product($category_product_id)
    {   
        $this->AuthLogin();

        DB::table('tbl_category_product')
            ->where('category_id', $category_product_id)
            ->update(['category_status' => 1]);

        Session::put('message', 'Kích hoạt danh mục sản phẩm thành công');

        return Redirect::to('all_category_product');
    }

    public function show_category_home(Request $request, $slug_category_product)
    {
        // Lấy danh sách danh mục 
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1')
            ->orderBy('category_id', 'desc')
            ->get();

        // Lấy danh sách sản phẩm thuộc danh mục
        $category_by_id = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
            ->where('tbl_category_product.slug_category_product', $slug_category_product)
            ->get();

        // Lấy thông tin SEO từ danh mục
        $meta_desc = '';
        $meta_keywords = '';
        $meta_title = '';
        $url_canonical = $request->url();

        foreach ($category_by_id as $product) {
            $meta_desc = $product->category_desc;
            $meta_keywords = $product->category_product_keywords;
            $meta_title = $product->category_name;
            break; // Lấy thông tin từ sản phẩm đầu tiên (nếu có)
        }

        // Lấy tên danh mục
        $category_name = DB::table('tbl_category_product')
            ->where('slug_category_product', $slug_category_product)
            ->limit(1)
            ->get();

        // Truyền dữ liệu tới view
        return view('pages.category.show_category', [
            'category' => $cate_product,
            'category_by_id' => $category_by_id,
            'category_name' => $category_name,
            'meta_desc' => $meta_desc,
            'meta_keywords' => $meta_keywords,
            'meta_title' => $meta_title,
            'url_canonical' => $url_canonical,
        ]);
    }

}