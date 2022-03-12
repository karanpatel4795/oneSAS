<?php
	require_once("session.php");
	require_once("connection.php");
	
	$query = "select * from providers where email = '$uname'";
	
	$result = $con->query($query);
	
	if($result->num_rows  > 0)
				{
					while($row = $result->fetch_assoc())
					{
						$path = $row["photo"];
					}
				}
	
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
				
<!--=============================================================== Code Here =========================================================================-->               <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
        	<div class="forms">
            <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4> Change Profile Picture  </h4>
						</div>
						<div class="form-body">
							
                            <div class="form-group"> 
                            	<label for="exampleInputEmail1">Current Password </label> 
                            	<input type="password" name="pass" class="form-control" id="exampleInputEmail1" placeholder="enter current password" required> 
                            </div> 
                            
                            <div class="form-group"> 
                            	<label for="exampleInputEmail1">New Profile Picture </label> 
                            	<input type="file" name="photo" class="form-control" id="exampleInputEmail1" placeholder="choose new profile Picture" required> 
                            </div> 
                              <div>
							<?php 
                              if(isset($_SESSION["msg"]))
                              {
                                  echo $_SESSION["msg"];
                                  unset($_SESSION["msg"]);
                              }
                            ?>
                     </div>                          
                            <button type="submit" class="btn btn-default" name="done">Submit</button> 
						</div>
					</div>
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
		$photo = $_FILES["photo"];	
		$src = $photo["tmp_name"];
		$type = $photo["type"];
		
		$pass = sha1($pass);
		
		$query = "select * from providers where email = '$uname' and password = '$pass'";
		
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
		
		  if($type == "image/jpg" || $type == "image/jpeg")
		  {
			  if(strpos($path,".jpg"))
			  {
				  move_uploaded_file($src,$path);
			  }
			  else
			  {
				  $des = str_replace("jpg","png",$path);
				  $query = "update providers set photo = '$des' where email = $uname";
				  $con->query($query);
				  move_uploaded_file($src,$path);
				  header("location:account_info.php");
			  }
		  }
		  else if($type == "image/png")
		  {
			  if(strpos($path,".png"))
			  {
				  move_uploaded_file($src,$path);
			  }
			  else
			  {
				  $des = str_replace("png","jpg",$path);
				  $query = "update providers set photo = '$des' where  email = $uname";
				  $con->query($query);
				  move_uploaded_file($src,$path);
				  header("location:account_info.php");	
			  }
		  }
		  else
		  {
			  $_SESSION["msg"]="Invalid File Selected";
			  header("location:change_profile_picture_provider.php");
		  }
		}
		else
		{
			$con->close();
			$_SESSION["msg"] = "Invalid Current Password";
			header("location:change_profile_picture_provider.php");
		}
	}
?>