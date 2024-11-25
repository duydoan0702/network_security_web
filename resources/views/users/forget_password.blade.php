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
		<div class="forget_password">
			<form action="{{ url('/forget-password') }}" method="POST">
				@csrf
				<label for="forget-password" aria-hidden="true">Forget Password</label>
				<input type="email" name="user_email" value="{{ old('user_email') }}" placeholder="Enter your email" autocomplete="off" required>
				<button name="send_reset_link" type="submit">Send Reset Link</button>
			</form>
			<div class="back_to_login">
				<a href="{{ url('/user') }}">Back to Login</a>
			</div>
		</div>
	</div>

</body>
</html>
