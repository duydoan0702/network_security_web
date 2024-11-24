<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\LogInRequest;

class UserController extends Controller
{
    public function index(){
        return view('user_login');
    }

    public function logIn(LogInRequest $request){
   
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


    public function signUp(SignUpRequest $request){
        $user_name = $request->input('user_name');
        $user_email = $request->input('user_email');
        $user_password = $request->input('user_password');

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
