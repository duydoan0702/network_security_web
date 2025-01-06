<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('public/frontend/css/user_login.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
	<style>
		.success-alert {
			position: absolute;
			top: 10%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #2ecc71;
			color: white;
			padding: 15px 25px;
			border-radius: 5px;
			font-size: 1.2em;
			text-align: center;
			display: none;
			z-index: 1000;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>

<body>
	@if (session('message'))
		<div id="successAlert" class="success-alert">{{ session('message') }}</div>
	@endif

	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="{{ url('user/signUp') }}" method="POST">
				@csrf
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="text" name="user_name" value="{{ old('user_name') }}" placeholder="User name" autocomplete="off" required>
	
				@error('user_name')
					<span class="error-message">{{ $message }}</span>
				@enderror
				
				<input type="email" name="user_email" value="{{ old('user_email') }}" placeholder="Email" autocomplete="off" required>
	
				@error('user_email')
					<span class="error-message">{{ $message }}</span>
				@enderror
				
				<input type="password" name="user_password_signup" value="{{ old('user_password_signup') }}" placeholder="Password" autocomplete="off" required>
	
				@error('user_password_signup')
					<span class="error-message">{{ $message }}</span>
				@enderror
				
				<button name="signUp" type="submit">Sign up</button>
			</form>
		</div>

		<div class="login">
			<form action="{{ url('user/logIn') }}" method="POST">
				@csrf
				<label for="chk" aria-hidden="true">Login</label>
				<input type="text" name="user_nameOrEmail" placeholder="User name or Email" autocomplete="off" required>
	
				@error('user_nameOrEmail')
					<span class="error-message">{{ $message }}</span>
				@enderror
				
				<input type="password" name="user_password_login" id="user_password" placeholder="Password" autocomplete="off" required>

				@error('user_password_login')
					<span class="error-message">{{ $message }}</span>
				@enderror
				
				<div class="forget-password-container">
					<a href="{{ url('user/sendOTP') }}">Quên Mật Khẩu?</a>
					<input type="checkbox" name="show_password" id="show_password">
				</div>
				<button name="login" type="submit">Login</button>
			</form>
		</div>
	</div>
	<script>
        window.onload = function() {
            const alertBox = document.getElementById('successAlert');
            if (alertBox) {
                alertBox.style.display = 'block';
                setTimeout(function() {
                    alertBox.style.display = 'none';
                    const chkElement = document.getElementById('chk');
                    if (chkElement) {
                        chkElement.checked = true;
                    }
                }, 3000);
            }

            // Phần hiển thị thông báo lỗi
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(function(error) {
                setTimeout(function() {
                    error.style.display = 'none';
                }, 3000);
            });

            // Hiển thị mật khẩu
            const showPasswordCheckbox = document.getElementById('show_password');
            const passwordInput = document.getElementById('user_password');
            if (showPasswordCheckbox && passwordInput) {
                showPasswordCheckbox.addEventListener('change', function() {
                    passwordInput.type = this.checked ? 'text' : 'password';
                });
            }
        };
    </script>

	<script src="{{ asset('public/frontend/js/show_password.js') }}"></script>	
</body>
</html>
