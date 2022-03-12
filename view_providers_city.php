<?php	
	if(!isset($_SESSION))
	{
		session_start();
	}
	ob_start();
	require_once("connection.php");
	
	$cname = $_GET["cname"];
	$city= $_GET["city"];
	//echo $city;
	//echo $cname;
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
<!-- site icons -->
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
<!-- zoom effect -->
<link rel='stylesheet' href='users/css/hizoom.css'>
<!-- end zoom effect -->
</head>
<body id="default_theme" class="it_serv_shopping_cart shopping-cart">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="users/images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
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
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title"><?php echo $cname; ?></h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Providers list</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1 Shopping_cart_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="product-table">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>City</th>
                <th>Gender</th>
                <th>Email ID</th>
                <th>Phone No.</th>
                <th>Experience</th>
                <th>Minimum Charges</th>
                <th>Rates</th>
                <th> </th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
            <?php
	
	$query = "select * from providers where category = '$cname' and city = '$city' and status = 1";	
	
	$result = $con->query($query);
	
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "<tr>
                <td class='col-sm-8 col-md-6'><div class='media'> <a class='thumbnail pull-left'> <img style='border-radius:50px' src='provider/$row[photo]' alt='' height='100' width='100' ></a>
                <div class='media-body'><h4 class='media-heading'><a>$row[firstname] $row[lastname]</a></h4></div></td>
                <td class='col-sm-1 col-md-1 text-center'><div class='media-body'><h4 class='media-heading'><a>$row[city]</a></h4></div></td>
				<td class='col-sm-1 col-md-1 text-center'><div class='media-body'><h4 class='media-heading'><a>$row[gender]</a></h4></div></td>
				<td class='col-sm-1 col-md-1 text-center'><div class='media-body'><h4 class='media-heading'><a>$row[email]</a></h4></div></td>
				<td class='col-sm-1 col-md-1 text-center'><div class='media-body'><h4 class='media-heading'><a>$row[phone]</a></h4></div></td>
				<td class='col-sm-1 col-md-1 text-center'><div class='media-body'><h4 class='media-heading'><a>$row[exp]</a></h4></div></td>
				<td class='col-sm-1 col-md-1 text-center'><div class='media-body'><h4 class='media-heading'><a>$row[charges]</a></h4></div></td>
				<td class='col-sm-1 col-md-1 text-center'><div class='media-body'><h4 class='media-heading'><a>$row[rate]</a></h4></div></td>
				<td class='col-sm-1 col-md-1'><a href='View_providers_details.php?provider=$row[email] & cname=$cname'><button type='button' class='bt_main' title='View Service provider's Profile'>View</button></a></td>
                <td class='col-sm-1 col-md-1'><a href='bookings.php?provider=$row[email] & cname=$cname'><button type='button' class='bt_main' title='Book Now'>Book</button></a></td>
              </tr>";
			}
		}
		else
		{
			echo "<hr>No Category in Database<hr>";
		}
?>		
			 </tbody>
          </table>
          <table class="table">
            <tbody>
              <tr class="cart-form">
                <td class="actions">
                  <a href="view_all_category.php"><button class="button" type="submit">View Other Category</button></a>
                </td>
              </tr>
            </tbody>
          </table>
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

<!-- zoom effect -->
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
