<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
	ob_start();
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
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="Provider/index.php">Login as Service Provider</a> </div>
          </div>
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
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <?php
	
	$query = "select * from category where status = 1";	
	
	$result = $con->query($query);
	
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "<div class='col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='admin/$row[cimage]' alt='' height='300px' width='100%' > </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a>$row[cname]</a></h4>
            </div>
            <div class='product_price'>
              <p><span><a href='view_providers.php?cname=$row[cname]'>Show Providers</a></span></p>
            </div>
          </div>
        </div>
      </div>";
		}
	}
	else
	{
		echo "<hr>No Category in Database<hr>";
	}
?>
        </div>
      </div>
      <div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>OUR SERVICE</h4>
            <div class="categary">
              <ul>
              <?php
	
			  $query = "select * from providers where status = 1";	
			  
			  $result = $con->query($query);
			  
			  if($result->num_rows > 0)
			  {
				  while($row = $result->fetch_assoc())
				  {
					  echo "<li><a href='view_providers.php?cname=$row[category]'><i class='fa fa-angle-right'></i>$row[city]</a></li>";
				  }
			  }
			  ?>
                
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

</body>
</html>
