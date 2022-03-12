<?php
	session_start();
	ob_start();
	require_once("connection.php");
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
        <h2>Forgot your password?</h2>
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
                    <div class="text-center mt-4 mb-5">
                    	
                      
                    </div>
						<form action="#" method="post">
							<div class="icon1">
								<input type="email" name="uname" placeholder="email@example.com" required="required"/>
							</div>
              
							<div class="bottom">
								<input type="submit" value="Find Username" name="done">
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
		$uname = $_POST["uname"];
		$query = "select * from login_admin where uname = '$uname'";
		
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
			$con->close();
			$_SESSION["validuser"]=$uname;
			header("location:ask_sec_que_admin.php");
		}
		else
		{
			$con->close();
			$_SESSION["msg"] = "Invalid Username";
			header("location:forgot_password_admin.php");
		}
	}
?>