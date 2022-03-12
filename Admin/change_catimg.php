<?php
	require_once("session.php");
	require_once("connection.php");
	
	$path = $_GET["path"];
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
        
        
        <div class="tables">
            <div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
            	
                <img src="<?php echo $path;?>" height="200" width="200">
			<form action="#" method="post" enctype="multipart/form-data">
				<hr>
				Select New Photo for Category :
				<input type="file" name="photo" required>
				<br>
                <input type="submit" class="btn btn-primary btn-block" value="Change now" name="done">
				<?php
					if(isset($_SESSION["msg"]))
					{
						echo $_SESSION["msg"];
						unset($_SESSION["msg"]);
					}
				?>
			</form>
            
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
		$photo = $_FILES["photo"];	
		$src = $photo["tmp_name"];
		$type = $photo["type"];
		
		
		
		if($type == "image/jpg" || $type == "image/jpeg")
		{
			if(strpos($path,".jpg"))
			{
				move_uploaded_file($src,$path);
			}
			else
			{
				$des = str_replace("jpg","png",$path);
				$query = "update category set cimage = '$des' where cimage = $path";
				$con->query($query);
				move_uploaded_file($src,$path);
				
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
				$query = "update category set cimage = '$des' where cimage = $path";
				$con->query($query);
				move_uploaded_file($src,$path);
				header("location:change_catimg.php?path=$path");	
			}
		}
		else
		{
			$_SESSION["msg"]="Invalid File Selected";
			header("location:change_catimg.php?path=$path");
		}
	}
?>