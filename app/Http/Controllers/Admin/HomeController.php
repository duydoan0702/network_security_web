<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // SEO setup
        $meta_desc = "Cập nhật mô tả trang chủ của bạn tại đây."; // Mô tả trang
        $meta_keywords = "Cập nhật từ khóa của bạn tại đây"; // Từ khóa SEO
        $meta_title = "Trang chủ - Website của bạn"; // Tiêu đề trang
        $url_canonical = $request->url(); // URL hiện tại của trang

        // Lấy danh mục sản phẩm
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1') // Lọc danh mục có trạng thái hoạt động
            ->orderby('category_id', 'desc') // Sắp xếp theo ID giảm dần
            ->get();

        
         // Lấy danh sách sản phẩm mới nhất
        $all_product = DB::table('tbl_product')
            ->where('product_status', '0') // Chỉ lấy sản phẩm đang hoạt động
            ->orderby('product_id', 'desc') // Sắp xếp theo ID giảm dần
            ->limit(15) // Lấy 15 sản phẩm mới nhất
            ->get();

        // Truyền dữ liệu sang view
        return view('pages.home', [
            'category' => $cate_product,
            'all_product' => $all_product,
            'meta_desc' => $meta_desc,
            'meta_keywords' => $meta_keywords,
            'meta_title' => $meta_title,
            'url_canonical' => $url_canonical,
        ]);

    }
}
