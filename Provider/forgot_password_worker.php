<?php
	session_start();
	ob_start();
	
	unset($_SESSION["provider"]);
	require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php require_once("title.php"); ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Forgot Password?
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email ID is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="email" name="uname" placeholder="Enter Email ID">
						<span class="focus-input100"></span>
					</div>

					<?php
						if(isset($_SESSION["msg"]))
						{
							echo $_SESSION["msg"];
							unset($_SESSION["msg"]);
						}
					?>
                      <br><br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="done">
							Find Username
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="Login/vendor/animsition/js/animsition.min.js"></script>
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="Login/vendor/select2/select2.min.js"></script>
	<script src="Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="Login/vendor/countdowntime/countdowntime.js"></script>
	<script src="Login/js/main.js"></script>

</body>
</html>
<?php
	if(isset($_POST["done"]))
	{
		$uname = $_POST["uname"];
		$query = "select * from providers where email = '$uname'";
		
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
			$con->close();
			$_SESSION["validuser"]=$uname;
			header("location:ask_sec_que_worker.php");
		}
		else
		{
			$con->close();
			$_SESSION["msg"] = "Invalid Username";
			header("location:forgot_password_worker.php");
		}
	}
?>