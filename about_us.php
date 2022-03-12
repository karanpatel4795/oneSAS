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
<div class="bg_load"> <img class="loader_animation" src="users/images/loaders/loader_1.png" alt="#" /> </div>
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
<!-- ================================ Code Here ========================== -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h2>What we do</h2>
          <h3><p style="text-justify:auto;">One Site Any Service Provides a platform that allows skilled and experienced professionals to connect with User looking for Specific services.</p></h3>
          <ul>
            <li><i class="fa fa-check-circle"></i>All the Professionals, though experienced and skilled.</li>
            <li><i class="fa fa-check-circle"></i>Undergo intensive training modules before being allowed to list their services on the plateform. </li>
            <li><i class="fa fa-check-circle"></i>Once on the plateform, Our match-making algorithm identifies professionals who are closest to user's requirements and availble at the requested time and date.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="users/images/it_service/post-06.jpg" alt="#" /> </div>
      </div>
    </div>
    
  </div>
</div>
<div class="section padding_layout_1 light_silver gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>About Service</h2>
            <p class="large">Our Mission is to empower millions of service professionals by delivering services <br>at-home in a way that has never been experienced before.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-wrench"></i></div>
                <h4 class="service-heading">Honest Services</h4>
                <p>The Service Providers are Authenticated and honest towards their work. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-history"></i></div>
                <h4 class="service-heading">Expert team</h4>
                <p>The Service Providers are Experienced in their Occupation.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-heart-o"></i></div>
                <h4 class="service-heading">Affordable services</h4>
                <p>Service Charge is Affordable to Users.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Our Leadership Team</h2>
            <p class="large">Our experts have been featured in press numerous times.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="admin_img/IMG_20191201_201856.jpg" alt="#" height="270"> </div>
          <div class="team_feature_head">
            <h4>Karan Kumbhani</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="admin_img/IMG-20210417-WA0001.jpg" alt="#" height="270"> </div>
          <div class="team_feature_head">
            <h4>Krupal Bhuva</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="admin_img/IMG-20210417-WA0007.jpg" alt="#" height="270"> </div>
          <div class="team_feature_head">
            <h4>Jignesh Dudharejiya</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="admin_img/500074000786_84191.jpg" alt="#" height="270"> </div>
          <div class="team_feature_head">
            <h4>Raj Kothari</h4>
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
