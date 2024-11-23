<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view('user_login');
    }

    public function logIn(Request $request){
        $user_nameOrEmail = $request->input('user_nameOrEmail');
        $user_password = $request->input('user_password');

        $result = DB::table('user_table')
            ->where('user_name', $user_nameOrEmail) 
            ->orWhere('user_email' , $user_nameOrEmail)
            ->first();

        if($result && Hash::check($user_password, $result->user_password)){
            Session::put('user_id', $result->user_id);
            return Redirect('/home-page');
        }else{
            Session::put('messaeg', 'Mật khẩu hoặc email không đúng, vui lòng nhập lại');
            return Redirect::to('/user');
        }
    }


    public function signUp(Request $request){
        $user_name = $request->input('user_name');
        $user_email = $request->input('user_email');
        $user_password = $request->input('user_password');

        $result = DB::table('user_table')
            ->where('user_name', $user_name)
            ->orWhere('user_email', $user_email)
            ->first();
        if($result){
            Session::put('message', 'Tên người dùng hoặc email đã tồn tại, vui lòng chọn tên khác.');
            return Redirect::to('/user');
        }else{
            DB::table('user_table')->insert([
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_password' => Hash::make($user_password),
            ]);
            Session::put('message', 'Đăng ký thành công, vui lòng đăng nhập');
            return Redirect::to('/user');
        }
    }

    public function show_homepage(){
        return view('users.home');
    }

    public function AuthLogin(){
        $user_id = Session::get('user_id');
        if($user_id){
            return Redirect::to('home-page');
        }else{
            return Redirect::to('user')->send();
        }
    }
}
