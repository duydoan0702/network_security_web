<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{('public/frontend/css/login.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form action="./controller/registerController.php" method="POST">
					<label for="chk" aria-hidden="true">Sign up</label>	
					<input type="text" name= "name" placeholder="User name" autocomplete="off" required="">
					<input type="email" name="email" placeholder="Email" autocomplete="off" required="">
					<input type="password" name="password" placeholder="Password" autocomplete="off" required="">
					<button name="signUp" type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="./controller/loginController.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="nameOrEmail" placeholder="User name or Email" autocomplete="off" required="">
					<input type="password" name="password" placeholder="Password" autocomplete="off" required="">
					<button name="login" type="submit">Login</button>
				</form>
			</div>
	</div>
</body>
</html>
