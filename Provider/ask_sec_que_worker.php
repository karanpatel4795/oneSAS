<?php
	session_start();
	ob_start();
	require_once("connection.php");
	unset($_SESSION["authenticate"]);
	$uname = $_SESSION["validuser"];
	
	$query = "select * from providers where email = '$uname'";
	
	$result = $con->query($query);
	
	while($row = $result->fetch_assoc())
	{
		$secque1 = $row["sec_que1"];
		$secque2 = $row["sec_que2"];
	}
	
	if($secque1 == "" and $secque2 == "")
	{
		$_SESSION["msg"]="Please contact system admin";
		header("location:index.php");
	}
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
						Reset Password
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email ID is required">
						<span class="label-input100">Security Answer 1</span>
						<input class="input100" type="text" name="secans1" placeholder="<?php echo $secque1; ?>">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email ID is required">
						<span class="label-input100">Security Answer 2</span>
						<input class="input100" type="text" name="secans2" placeholder="<?php echo $secque2; ?>">
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
							Submit Answers
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
		$secans1 = $_POST["secans1"];
		$secans2 = $_POST["secans2"];
		
		$query = "select * from providers where sec_ans1 = '$secans1' and sec_ans2 = '$secans2' and email = '$uname'";
		
		echo $query;
		
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
			$con->close();
			$_SESSION["authenticate"]=$uname;
			header("location:change_forgot_password_worker.php");
		}
		else
		{
			$con->close();
			$_SESSION["msg"] = "Invalid Answers";
			header("location:ask_sec_que_worker.php");
		}
	}
?>