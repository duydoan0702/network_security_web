<?php 
use Illuminate\Support\Facades\URL;
?>
<div class="navbar">
  <div class="logo">
    <a href="#">CNTT</a>
  </div>
  <div class="nav-links">
    <a href="{{ url::to('user/home') }}">TRANG CHỦ</a>
    <a href=" {{ url::to('user/product')}}">SẢN PHẨM</a>
    <a href="{{url::to('user/practice')}}">LUYỆN TẬP</a>
    <a href="#">GIAO LƯU</a>
    <a href="{{ url::to('user/train')}}">ĐÀO TẠO</a>
    <a href="{{url::to('user/contact')}}">LIÊN HỆ</a>
  </div>
  <div class="icons">
    <div class="menu-icon icon-container">
      <i class="fa fa-bars"></i>
      <div class="menu-dropdown dropdown-content">
        <a href="#">Cài đặt</a>
        <a href="{{asset('user/help')}}">Trợ giúp & hỗ trợ</a>
      </div>
    </div>
    <div class="user-icon icon-container">
      <i class="fa fa-user"></i>
      <div class="user-dropdown dropdown-content">
        <button href='{{url::to('/user/logIn')}}'">Đăng Nhập</button>
        <button onclick="window.location.href='{{url::to('/user/logOut')}}'">Đăng Xuất</button>
      </div>
    </div>
  </div>
</div>

