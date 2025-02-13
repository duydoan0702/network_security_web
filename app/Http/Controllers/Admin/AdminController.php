<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
session_start();
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }

    public function show_dashboard(){
        return view('admin.dashboard');
    }

    public function LogIn(Request $request){
        $admin_email = $request->input('admin_email');
        $admin_password =  md5($request->input('admin_password'));

        $result = DB::table('tbl_admin')
                    ->where('admin_email', $admin_email)
                    ->where('admin_password', $admin_password)
                    ->first();
        if($result) {
           Session::put('admin_name', $result->admin_name);
           Session::put('admin_id',$result->admin_id);
           return view('admin.dashboard'); 
        }else{
            Session::put('message', 'Mật khẩu hoặc email không đúng, vui lòng nhập lại');
            return Redirect::to('/admin');
        }
    }

    public function logout(){
        Session::put('admin_name','null');
        Session::put('admin_id','null');
        return Redirect::to ('/admin');
    }
    
    // kiem tra dang nhap
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');

        if($admin_id){
            return Redirect::to('/admin/show-dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function add_product(){
        $this->AuthLogin();
        return view('admin.add_product');
    }



}
