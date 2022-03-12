<?php
	require_once("session.php");
	require_once("connection.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php  require_once("title.php");?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php  require_once("navigation_left.php"); ?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<?php  require_once("top_notification_bar.php");?>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<?php require_once("admin_profile.php"); ?>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<?php require_once("home_main_content.php"); ?> 
        	<div class="forms">
            <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<form  action="#" method="post"> 
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
                                    
                            <button type="submit" class="btn btn-default" name="done">Set Questions</button> 
						</div>
                        </form>
                        <div>
							<?php 
                              if(isset($_SESSION["msg"]))
                              {
                                  echo $_SESSION["msg"];
                                  unset($_SESSION["msg"]);
                              }
                            ?>
                     </div>
					</div>
                 </div>
			</div>
		</div>
	<!--footer-->
	<div class="footer">
	   <p><?php require_once("copyright.php"); ?></p>		
	</div>
    <!--//footer-->
	</div>	
</body>
</html>
<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
    <!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
    <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
    
    <?php
	if(isset($_POST["done"]))
	{
		$pass = $_POST["pass"];
		$secque1 = $_POST["secque1"];	
		$secans1 = $_POST["secans1"];
		$secque2 = $_POST["secque2"];	
		$secans2 = $_POST["secans2"];
		
		$pass = sha1($pass);
		
		$query = "select * from login_admin where uname = '$uname' and password = '$pass'";
		
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
			$query ="update login_admin set sec_que1 = '$secque1', sec_ans1 = '$secans1', sec_que2 = '$secque2', sec_ans2 = '$secans2' where uname= '$uname'";		
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
			header("location:change_sec_que_admin.php");
		}
	}
?>