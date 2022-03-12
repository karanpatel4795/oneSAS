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
<body id="default_theme" class="make_appointment">
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
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>Update Security Questions</h2>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form">
              <div class="form_section">
                <form class="form_contant" action="#" method="post">
                  <fieldset class="row">
                  
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="Current Password" type="password" required name="upass">
                  </div> <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                  </div>
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                    
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="Security Answer 1" type="text" required name="secans1">
                  </div>
                  
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <select class="form-control" id="exampleInputName" name="secque2" required >
                                
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
                    
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="Security Answer 2" type="text" required name="secans2">
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h4><?php 
                              if(isset($_SESSION["msg"]))
                              {
                                  echo $_SESSION["msg"];
                                  unset($_SESSION["msg"]);
                              }
                            ?></h4>
              </div>
            </div>
							    
                  <div class="center">
                    <button class="btn main_bt" name="done">Update</button>
                  </div>
                  </fieldset>
                </form>
              </div>
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
 
 <?php
	if(isset($_POST["done"]))
	{
		$pass = $_POST["upass"];
		$secque1 = $_POST["secque1"];	
		$secans1 = $_POST["secans1"];
		$secque2 = $_POST["secque2"];	
		$secans2 = $_POST["secans2"];
		
		$pass = sha1($pass);
		
		$query = "select * from user where email = '$uname' and password = '$pass'";
		
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
			$query ="update user set sec_que1 = '$secque1', sec_ans1 = '$secans1', sec_que2 = '$secque2', sec_ans2 = '$secans2' where email= '$uname'";		
			$con->query($query);
			echo $query;
			$con->close();
			$_SESSION["msg"] = "Password Recovery Question Updated";
			header("location:view_profile_user.php");
		}
		else
		{
			$con->close();
			$_SESSION["msg"] = "Invalid Current Password";
			header("location:change_sec_que_user.php");
		}
	}
?>