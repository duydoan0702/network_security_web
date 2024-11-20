<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1') 
            ->orderBy('category_id', 'desc') 
            ->get(); 

        return view('pages.home')->with('category', $cate_product);
    }
}
