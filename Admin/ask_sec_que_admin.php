<?php
	session_start();
	ob_start();
	require_once("connection.php");
	unset($_SESSION["authenticate"]);
	$uname = $_SESSION["validuser"];
	
	$query = "select * from login_admin where uname = '$uname'";
	
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
		<h2>security questions</h2>
        
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
						<form action="#" method="post">
							<div class="icon1">
								<input type="text" name="secans1" placeholder="<?php echo $secque1; ?>" required="Please Enter Answer"/>
							</div>
                            
                            <div class="icon1">
								<input type="text" name="secans2" placeholder="<?php echo $secque2; ?>" required="Please Enter Answer"/>
							</div>
              
							<div class="bottom">
								<input type="submit" value="Submit Answers" name="done">
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
		$secans1 = $_POST["secans1"];
		$secans2 = $_POST["secans2"];
		
		$query = "select * from login_admin where sec_ans1 = '$secans1' and sec_ans2 = '$secans2' and uname = '$uname'";
		
		echo $query;
		
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
			$con->close();
			$_SESSION["authenticate"]=$uname;
			header("location:change_forgot_password_admin.php");
		}
		else
		{
			$con->close();
			$_SESSION["msg"] = "Invalid Answers";
			header("location:ask_sec_que_admin.php");
		}
	}
?>