<?php
	session_start();
	ob_start();
	
	unset($_SESSION["user"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title><?php require_once("title.php"); ?></title>

    <!-- Icons font CSS-->
    <link href="Login_Users/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="Login_Users/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="Login_Users/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="Login_Users/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="Login_Users/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                 <div class="card-body">
                    <h2 class="title">Login as User</h2>
                    <form method="post" action="login_process.php">
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email ID" name="uname">
                        </div>
                        
                        
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="upass">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                    <br><div class="custom1">
                    <?php
						if(isset($_SESSION["msg"]))
						{
							echo $_SESSION["msg"];
							unset($_SESSION["msg"]);
						}
					  ?></div><br>
					  <a class="custom" href="forgot_password_user.php">Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;
                      <a class="custom" href="registration_users.php">Create an account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="Login_Users/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="Login_Users/vendor/select2/select2.min.js"></script>
    <script src="Login_Users/vendor/datepicker/moment.min.js"></script>
    <script src="Login_Users/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="Login_Users/js/global.js"></script>

</body>

</html>
<!-- end document-->
<style>
.custom{
	color: #7A7A7A;
}
.custom:hover{
	color: #1BAC05;
}
.custom1{
	color:#ED0723;
}
</style>