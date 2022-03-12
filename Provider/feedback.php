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
				
<!--=============================================================== Code Here =========================================================================-->              <div class="tables">
				
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Ratting</h4>
						<table class="table table-hover"> <thead> 
                        <tr> 
                          <th>Sr.</th>
                          <th>Customer Name</th>
                          <th>Feedback</th>
                          <th>Ratting</th>
                        </tr> </thead> 
                        <tbody> 
                          <?php
			  	$query = "select * from ratting where provider = '$uname'";
				$result = $con->query($query);
				$cnt = 1;
				
				while($row = $result->fetch_assoc())
				{
					$rate = $row["rate"];
					$feedback = $row["feedback"];
					$customername = $row['uname'];
					$query1 = "select * from user where email = '$customername'";
					$result1 = $con->query($query1);
					if($result1->num_rows > 0)
					{
					  while($row = $result1->fetch_assoc())
					  {
					  echo "<tr>
								<td>$cnt</td>
								<td>$row[fname] $row[lname]</td>";
					  }
					}
					echo"<td>$feedback</td>
							<td>$rate</td>
							</tr>";
							$cnt++;
				}
			 ?><tr><th colspan='3' style="text-align:center;"">
             <?php 
			 	$query = "select * from providers where email = '$uname'";
				$result = $con->query($query);
				while($row = $result->fetch_assoc())
				{
					echo "Overall Ratting:  ";  echo $row["rate"];	
				}
			 ?></th><tr>
                        </tbody> 
                      </table>
					</div>				
				</div>                  		
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