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
		 	
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="{{ url('user/signUp') }}" method="POST">
				@csrf
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="text" name="user_name" value="{{old ('user_name')}}" placeholder="User name" autocomplete="off" required>
				<input type="email" name="user_email" value="{{old ('user_email')}}" placeholder="Email" autocomplete="off" required>
				<input type="password" name="user_password" value="{{old ('user_password')}}" placeholder="Password" autocomplete="off" required>
				<button name="signUp" type="submit">Sign up</button>
			</form>
		</div>

		<div class="login">
			<form action="{{ url('user/logIn')}}" method="POST">
				@csrf
				<label for="chk" aria-hidden="true">Login</label>
				<input type="text" name="user_nameOrEmail" placeholder="User name or Email" autocomplete="off" required>
				<input type="password" name="user_password" id="user_password" placeholder="Password" autocomplete="off" required>
				<div class="forget_password">
					<a href="{{ url('user/forget-password')}}">Quên Mật Khẩu?</a>
					<input type="checkbox" name="show_password" id="show_password">
				</div>
				<button name="login" type="submit">Login</button>
			</form>
		</div>
	</div>

	<script src="{{ asset('public/frontend/js/show_password.js') }}"></script>	
</body>
</html>
