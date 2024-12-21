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
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(){
        return view('user_login');
    }

    public function logIn(LogInRequest $request){
   
        $user_nameOrEmail = $request->input('user_nameOrEmail');
        $user_password = $request->input('user_password_login');

        $result = DB::table('user_table')
            ->where('user_name', $user_nameOrEmail) 
            ->orWhere('user_email' , $user_nameOrEmail)
            ->first();

        if($result && Hash::check($user_password, $result->user_password)){
            Session::put('user_id', $result->user_id);
            return Redirect::intended('/product');
        }else{
            Session::flash('message', 'Mật khẩu hoặc email không đúng, vui lòng nhập lại');
            return Redirect::to('/user');
        }
    }


    public function signUp(SignUpRequest $request){
        $user_name = $request->input('user_name');
        $user_email = $request->input('user_email');
        $user_password = $request->input('user_password_signup');

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

    public function sendOTP(){
        return view('users.forget_password');
    }


    public function sendVerificationCode(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email',
        ]);

        $user_email = $request->input('user_email');

        $user = DB::table('user_table')->where('user_email', $user_email)->first();
        if (!$user) {
            return Redirect::back()->with('message', 'Email không tồn tại trong hệ thống!');
        }

        $verificationCode = rand(1000, 9999);
        $otpExpiry = now()->addMinutes(1);

        Session::put('verification_code', $verificationCode);
        Session::put('verification_email', $user_email);
        Session::put('otp_expiry', $otpExpiry);

        $data = ['verificationCode' => $verificationCode];

        Mail::send('emails.mail', $data, function ($message) use ($user_email) {
            $message->to($user_email)
                ->subject('Mã xác nhận lấy lại mật khẩu');
        });

        return Redirect::to('user/verifyOTP')->with('message', 'Mã OTP đã được gửi đến email của bạn!');
    }

    public function confirmOTP(Request $request){
        $digit1 = $request->input('otp_digit1');
        $digit2 = $request->input('otp_digit2');
        $digit3 = $request->input('otp_digit3');
        $digit4 = $request->input('otp_digit4');

        $userOTP = $digit1.$digit2.$digit3.$digit4;
        $storeOTP = session::get('verification_code');
        $otpExpiry = Session::get('otp_expiry');

        if (!$otpExpiry || now()->greaterThan($otpExpiry)) {
            return Redirect::back()->with('message', 'Mã OTP đã hết hạn, vui lòng yêu cầu mã mới!');
        }
        if($userOTP == $storeOTP){
            session::forget('verification_code');
            Session::forget('otp_expiry');
            return Redirect('user/resetPassword');
        }else{
            return Redirect::back()->with('message', 'Mã OTP không chính xác, vui lòng thử lại!');
        }
    }

    public function resetPassword(Request $request){
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);
        $password = $request->input('password');
        $password_conformation =$request->input('password_confirmation');
        $email = session::get('verification_email');

        if($password === $password_conformation){
            DB::table('user_table')
                ->where('user_email', $email)
                ->update(['user_password' => Hash::make($password)]);

            Session::forget('verification_email');  
            
            return Redirect::to('/user')->with('message', 'Mật khẩu đã được thay đổi thành công. Vui lòng đăng nhập lại.');
        }else{
            return Redirect::back()->with('message', 'Mật khẩu xác nhận không khớp, vui lòng thử lại.');
        }
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
