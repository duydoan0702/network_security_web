<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('public/frontend/css/user_login.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    @if (session('message'))
		<div class="text-alert">{{ session('message') }}</div>	
	@endif
    <div class="main">
        <div class="reset-password">
            <form action="{{URL::to('user/confirmPassword')}}" method="post">
                @csrf
                <label for="reset-password" aria-hidden="true">Reset Password</label>

                <input type="password" name="password" placeholder="Mật khẩu mới" required autocomplete="off">
                <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu mới" required autocomplete="off">

                <button type="submit" name="change">Change</button>
            </form>
        </div>
    </div>

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }
        .main {
            width: 350px;
            height: auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
            padding: 20px;
            text-align: center;
        }
        label {
            font-size: 1.8em;
            color: #573b8a;
            margin-bottom: 20px;
            font-weight: bold;
            display: block;
        }
        input {
            width: 80%;
            height: 30px;
            margin: 10px auto;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }
        button {
            width: 80%;
            height: 40px;
            margin: 10px auto;
            color: #fff;
            background: #573b8a;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
        }
        button:hover {
            background: #6d44b8;
        }
        .text-alert {
            color: #e74c3c;
            font-weight: bold;
            padding: 10px;
            background-color: #fbe3e4;
            border: 1px solid #e74c3c;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</body>
</html>