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
        
        	<div class="tables">
              <div class="bs-example widget-shadow" data-example-id="hoverable-table">
            
            		<table class="table table-hover"> <thead> 
                    <tr> 
                      <th>Sr.</th>
                            <th>User Name</th>
                            <th>Provider Name</th>
                            <th>Category</th>
                            <th>Email</th>
                            <th>Feedback</th>
                            <th>Rate</th>
                            <th>Time</th>
                           
                    </tr> </thead>
                    <tbody>
					   <?php
                          $query = "select * from ratting where feedbacktoadmin = '1'";
                          $result = $con->query($query);
                          						  
							  $cnt = 1;
                              while($row = $result->fetch_assoc())
                              {
								  $providername = $row['provider'];
							  	  $customername = $row['uname'];
								  $feedback = $row['feedback'];
								  $rate = $row['rate'];
								  $time = $row['time'];
								  
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
								  							  							  
								  $query2 = "select * from providers where email = '$providername'";
								  $result2 = $con->query($query2);
								  if($result2->num_rows > 0)
								  {
								  	while($row = $result2->fetch_assoc())
									{
									echo "    <td>$row[firstname] $row[lastname]</td>
											  <td>$row[category]</td>
                                          	  <td>$row[email]</td>";
									}
								   }
								  								                                
                                  echo "  <td>$feedback</td>
										  <td>$rate</td>
										  <td>$time</td>
                                          
                                      </tr>";
                                      $cnt++;
                              }
                       ?>
                
                      </tbody>
                    </table>
            
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