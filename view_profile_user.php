<?php 
	require_once("connection.php");
	require_once("session.php");
											  
	$query = "select * from user where email = '$uname'";
  
	$result = $con->query($query);
	
	if($result->num_rows  > 0)
	{
		while($row = $result->fetch_assoc())
		{
			  $fname = $row["fname"];
			  $lname = $row["lname"];
			  $city = $row["city"];
			  $gender = $row["gender"];
			  $email = $row["email"];
			  $phone = $row["phone"];
			  $photo = $row["photo"];			  
		}
	}
 	else
	{
		$con->close();
		$_SESSION["msg"]="Invalid User";
	}
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

<!-- section -->
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2><?php echo $fname; ?> <?php echo $lname; ?>'s Profile</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- full price table -->
        <div class="price_table row" style="margin-top: 0;">
          <!-- price table one -->
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
          </div>
          <!-- end price table one -->
          <!-- price table two -->
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 price_table_active">
          <?php 
                              if(isset($_SESSION["msg"]))
                              {
                                  echo $_SESSION["msg"];
                                  unset($_SESSION["msg"]);
                              }
                            ?>
            <div class="row">
              <div class="price_table_inner margin_bottom_30">
                <div class="price_head text_align_center white_fonts">
                  <img src='<?php echo $photo; ?>' height="100" width="100" border="2" style="border-radius:15px;">
                </div>
                <div class="price_contant">
                  <div class="price_cont">
                    <p>Name: <?php echo $fname; ?> <?php echo $lname; ?></p>
                    <p>City: <?php echo $city; ?></p>
                    <p>Gender: <?php echo $gender; ?></p>
                    <p>Email ID: <?php echo $email; ?></p>
                    <p>Phone Number: <?php echo $phone; ?></p>
                  </div>
                </div>
                <div class="price_bottom">
                  <div class="center"> <a href="manage_user_profile.php" class="btn main_bt">Update Profile</a> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end price table two -->
          <!-- price table three -->
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
          </div>
          <!-- end price table three -->
        </div>
        <!-- end full price table -->
      </div>
    </div>
  </div>
</div>


<!-- end section -->

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
