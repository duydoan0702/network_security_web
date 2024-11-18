<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class ProductController extends Controller
{
    public function add_product(){

    }

    public function save_product(){

    }

    private function AuthLogin(){
        if(!Session::get(admin_id)){
            return Direct::to('admin')->send();
        }
    }
}
