<?php
	session_start();
	ob_start();
	require_once("connection.php");
	$uname = $_SESSION["validuser"];
?>
<!DOCTYPE html>
<html>
<head>
<title><?php require_once("title.php"); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="agileits-main"> 
	<div class="w3top-nav">	
				
				<div class="clear"></div>
			</div>	
		<div class="header-main">
		<h2>Reset Password</h2>
        
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
						<form action="#" method="post">
							<div class="icon1">
								<input type="password" name="npass" placeholder="Enter new Password" required="required"/>
							</div>
                            
                            <div class="icon1">
								<input type="password" name="cpass" placeholder="Enter Confirm Password" required="required"/>
							</div>
              
							<div class="bottom">
								<input type="submit" value="Done" name="done">
							</div>
					</form>	
					
                         <div>
								<p><a><?php
								  if(isset($_SESSION["msg"]))
								  {
									  echo $_SESSION["msg"];
									  unset($_SESSION["msg"]);
								  }
							     ?></a></p>
                        </div>
					</div>
				</div>
			</div>
 	
	</div>

	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="copyright w3-agile">
		<p><?php require_once("copyright.php"); ?></p>
	</div>
	<!-- //copyright --> 
</body>
</html>

<?php
	if(isset($_POST["done"]))
	{
		$npass = $_POST["npass"];
		$cpass = $_POST["cpass"];
		
		if($npass == $cpass)
		{
			$npass = sha1($npass);
			$query = "update login_admin set password = '$npass' where uname = '$uname'";
			$con->query($query);
			$con->close();
			$_SESSION["msg"]="Password Reset Successfully";
			header("location:index.php");
		}
		else
		{
			$con->close();
			$_SESSION["msg"] = "Confirm Password Does not Match";
			header("location:change_forgot_password_admin.php");
		}
	}
?>