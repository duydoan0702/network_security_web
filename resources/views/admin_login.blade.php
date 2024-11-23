<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập quản trị</title>
    <link href="{{ asset('public/backend/css/admin_login.css') }}" rel="stylesheet">
    
</head>
<body>
    <div class="login-container">
        <form action="{{URL::to('/home-page')}}" method="post" class="login-form">
            @csrf
            <h1>Chào Mừng 👏</h1>
            <p>Vui lòng nhập thông tin chi tiết của bạn!</p>

            @if (session('message'))
                <span class="text-alert">{{ session('message') }}</span>
            @endif

            <div class="form-group">
                <label for="email">Email:</label>
                <div class="input-with-icon">
                    <input
                        type="email"
                        id="email"
                        name="admin_email"
                        placeholder="Email Của Bạn"
                        required
                    />
                    <img
                        alt="Email Icon"
                        title="Email Icon"
                        src="{{ asset('public/backend/images/gmail.webp') }}"
                        class="input-icon"
                    />
                </div>
            </div>

            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <div class="input-with-icon">
                    <input
                        type="password"
                        id="password"
                        name="admin_password"
                        placeholder="Mật Khẩu Của Bạn"
                        required
                    />
                    <img
                        alt="Password Icon"
                        title="Password Icon"
                        src="{{ asset('public/backend/images/lock.png') }}"
                        class="input-icon"
                    />
                </div>
            </div>

            <input type="submit" class="submit-btn" name="login" value="Đăng Nhập">
            <div class="form-links">
                <a href="#" title="Reset Password">Quên Mật Khẩu?</a>
                <a href="#" title="Create Account">Tạo Tài Khoản</a>
            </div>
        </form>
    </div> 
</body>
</html>
