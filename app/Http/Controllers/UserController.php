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
            return Redirect::intended('/home-page');
        }else{
            Session::flash('message', 'Mật khẩu hoặc email không đúng, vui lòng nhập lại');
            return Redirect::to('/user');
        }
    }


    public function signUp(Request $request){
        $user_name = $request->input('user_name');
        $user_email = $request->input('user_email');
        $user_password = $request->input('user_password');

        $this->checkPassword($user_password);
        if (Session::has('message')) {
            return Redirect::back()->withInput();
        }

        $result = DB::table('user_table')
            ->select('user_id', 'user_password')
            ->where('user_name', $user_name)
            ->orWhere('user_email', $user_email)
            ->first();
        if($result){
            Session::flash('message', 'Tên người dùng hoặc email đã tồn tại, vui lòng chọn tên khác.');
            return Redirect::back()->withInput();
        }else{
            DB::table('user_table')->insert([
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_password' => Hash::make($user_password),
            ]);
            Session::flash('message', 'Đăng ký thành công, vui lòng đăng nhập');
            return Redirect::to('/user');
        }
    }

    private function checkPassword(String $user_password){
        $errors = [];
    
        if(strlen($user_password) < 8){
            $errors[] = "Mật khẩu quá ngắn! Phải có ít nhất 8 ký tự.";
        }
        if(!preg_match("#[0-9]+#", $user_password)){
            $errors[] = "Mật khẩu phải bao gồm ít nhất một chữ số!";
        }
        if(!preg_match("#[a-zA-Z]+#", $user_password)){
            $errors[] = "Mật khẩu phải bao gồm ít nhất một chữ cái!";
        }

        if(!empty($errors)){
            session::flash('message', implode(" ", $errors));
        }
    

    }

    public function forget_password(){
        return view('users.forget_password');
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
