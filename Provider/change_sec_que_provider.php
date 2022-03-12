<?php
	require_once("session.php");
	require_once("connection.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php require_once("title.php"); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="web/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='web/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="web/js/jquery-1.11.1.min.js"></script>
<script src="web/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="web/js/metisMenu.min.js"></script>
<script src="web/js/custom.js"></script>
<link href="web/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php require_once("left_nevi_menu.php"); ?>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-right">			
				<?php require_once("provider_profile.php"); ?>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<?php require_once("top_notification.php"); ?>		
				
<!--=============================================================== Code Here =========================================================================-->               <form  action="#" method="post"> 
                        <div class="form-group"> 
                        <div class="form-title">
							<h4> Change Security Question </h4>
						</div>
                        
                         <div class="form-body"> 
                            <div class="form-group">
                            <label for="exampleInputEmail1">Current Password </label> 
                            <input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="enter current password"required> 
                            </div>
                         
                         	<div class="form-group">
						   		<label for="exampleInputEmail1">Security Question 1 : </label> 
                           		<select class="form-control" id="exampleInputName" name="secque1" required >
                                
								  <?php $query = "select * from securityquestion";
		
								  $result = $con->query($query);
								  
								 	 if($result->num_rows > 0)
									  {
										  while($row = $result->fetch_assoc())
										  {
											  echo "<option> $row[question] </option>";
										  }
								 	 } 
								  ?>
                                 </select>
                                
                            </div> 
                          	<div class="form-group">
                            <label for="exampleInputEmail1">Enter Security Answer 1</label> 
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Answer 1" name="secans1" required> 
                            </div>
                                
                              <div class="form-group">
						   		<label for="exampleInputEmail1">Security Question 2 : </label> 
                           		<select class="form-control" id="exampleInputName" name="secque2" required>
                                <?php $query = "select * from securityquestion";
		
								  $result = $con->query($query);
								  
								 	 if($result->num_rows > 0)
									  {
										  while($row = $result->fetch_assoc())
										  {
											  echo "<option> $row[question] </option>";
										  }
								 	 } 
								  ?>
                                
                                </select>
                            </div> 
                            
                            <div class="form-group">
                            <label for="exampleInputEmail1">Enter Security Answer 2</label> 
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Answer 2" name="secans2" required> 
                            </div>  
                              <?php 
                              if(isset($_SESSION["msg"]))
                              {
                                  echo $_SESSION["msg"];
                                  unset($_SESSION["msg"]);
                              }
                            ?>      
                            <button type="submit" class="btn btn-default" name="done">Set Questions</button> 
						</div>
                        </form>
                		
			</div>
		</div>
	<!--footer-->
	<div class="footer">
	   <?php require_once("copyright.php"); ?>
	</div>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="web/js/Chart.bundle.js"></script>
    <script src="web/js/utils.js"></script>

	
	<!-- side nav js -->
	<script src='web/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->	
	<!-- Bootstrap Core JavaScript -->
   <script src="web/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>

<?php
	if(isset($_POST["done"]))
	{
		$pass = $_POST["pass"];
		$secque1 = $_POST["secque1"];	
		$secans1 = $_POST["secans1"];
		$secque2 = $_POST["secque2"];	
		$secans2 = $_POST["secans2"];
		
		$pass = sha1($pass);
		
		$query = "select * from providers where email = '$uname' and password = '$pass'";
		
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
			$query ="update providers set sec_que1 = '$secque1', sec_ans1 = '$secans1', sec_que2 = '$secque2', sec_ans2 = '$secans2' where email= '$uname'";		
			$con->query($query);
			echo $query;
			$con->close();
			$_SESSION["msg"] = "Password Recovery Question Updated";
			header("location:account_info.php");
		}
		else
		{
			$con->close();
			$_SESSION["msg"] = "Invalid Current Password";
			header("location:change_sec_que_provider.php");
		}
	}
?>