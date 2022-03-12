<?php
	require_once("session.php");	
	require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title><?php require_once("title.php"); ?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<link rel="stylesheet" href="users/css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="users/css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="users/css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="users/css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="users/css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="users/css/animate.css" />
<link rel='stylesheet' href='users/css/hizoom.css'>
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="users/revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="users/revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="users/revolution/css/navigation.css" />
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="index.php"><img src="users/images/logos/logo2.png" alt="logo" width="200" height="200"/></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <?php
			
				if(isset($_SESSION["user"]))
				{
					require_once("menu1.php");
				}
				else
				{
					require_once("menu.php");
				}			
			?>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Booking Detail</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Booking</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="product-table">
          <table class="table">
            <thead>
              <tr>
                <th>Sr.</th>
                  <th>Category</th>
                  <th>Provider Name</th>
				  <th>Time</th>
                 <th>Status</th> 
				  <th>Cancel</th>
				 </tr>
              </tr>
            </thead>
            <tbody>
           <?php
	$query = "select providers.category, booking.sr, booking.providername, booking.time from providers, booking where providers.email = booking.providername and canbyuser=0 and canbyprovider = 0 and completeorder = 0";
	
	//echo $query;
	$result = $con->query($query);
	
		$cnt = 1;
		while($row = $result->fetch_assoc())
		{
			$cancel = "<a href='canc_booking.php?sr=$row[sr]'>Cancel</a>";
		
			echo  "<tr>
                  <td>$cnt</td>
                  <td>$row[category]</td>
                  <td>$row[providername]</td>
                  <td>$row[time]</td>
				  <td>Pending</td>
                  <td><b>$cancel</b></td>
                </tr>";
				$cnt++;
		}
?>
			 </tbody>
          </table>
        </div>
      </div>
      </div><br><hr><br>
      <div class="col-md">
        <div class="side_bar">
          <div class="side_bar_blog">
          <h4>Other Links</h4>
            <div class="categary">
              <ul>
                <li><a href="view_canby_pro.php"><i class="fa fa-angle-right"></i> View Cancelled Orders by Provider</a></li>
                <li><a href="view_canby_you.php"><i class="fa fa-angle-right"></i> View Cancelled Orders by You</a></li>
                <li><a href="view_completed.php"><i class="fa fa-angle-right"></i> View Completed Orders</a></li>
                <li><a href="iview_all_bookings.php"><i class="fa fa-angle-right"></i> View All Orders</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<?php require_once("footer_user.php"); ?>
<!-- end footer -->

<!-- js section -->
<script src="users/js/jquery.min.js"></script>
<script src="users/js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="users/js/menumaker.js"></script>
<!-- wow animation -->
<script src="users/js/wow.js"></script>
<!-- custom js -->
<script src="users/js/custom.js"></script>
<!-- revolution js files -->
<script src="users/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="users/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="users/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="users/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="users/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="users/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="users/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="users/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="users/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="users/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="users/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src='users/js/hizoom.js'></script>
<script>
        $('.hi1').hiZoom({
            width: 300,
            position: 'right'
        });
        $('.hi2').hiZoom({
            width: 400,
            position: 'right'
        });
    </script>
</body>
</html>
