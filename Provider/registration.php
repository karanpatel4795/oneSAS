<?php
	session_start();
	ob_start();
	require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php require_once("title.php"); ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Register an Account
					</span>
				</div>

				<form class="login100-form validate-form" action="reg_process.php" method="post" enctype="multipart/form-data">
                 <?php
				  if(isset($_SESSION["msg"]))
				  {
					  echo $_SESSION["msg"];
					  unset($_SESSION["msg"]);
				  }
				?>
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">First Name</span>
						<input class="input100" type="text" name="fname" placeholder="Enter First Name" required>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="lname" placeholder="Enter Last Name" required>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Address Of Work</span>
						<input class="input100" type="text" name="address" placeholder="Enter Address" required>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">City</span>
						<input class="input100" type="text" name="city" placeholder="Enter City" required>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Gender</span>
						<select class="form-control" name="gen" required>
                        	<option disabled>-- Select Gender --</option>
                        	<option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Email ID</span>
						<input class="input100" type="email" name="email" placeholder="Enter Email ID" required>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Mobile Number</span>
						<input class="input100" type="text" name="phone" placeholder="Enter Mobile Number" required>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Category</span>
							<select class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required name="cate">
							<?php 
                                $query = "select * from category where status = 1";
                                $result = $con->query($query);
                                
                                while($row = $result->fetch_assoc())
                                {
                                    echo "<option>$row[cname]</option>";
                                }
                            ?>
							</select>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Security Question 1</span>
							<select class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required name="secque1">
							<?php 
                                $query = "select * from securityquestion";
                                $result = $con->query($query);
                                
                                while($row = $result->fetch_assoc())
                                {
                                    echo "<option>$row[question]</option>";
                                }
                            ?>
							</select>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Security Answer 1</span>
						<input class="input100" type="text" name="secans1" placeholder="Enter Answer" required>
						<span class="focus-input100"></span>
					</div>
                    
                     <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Security Question 2</span>
							<select class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required name="secque2">
							<?php 
                                $query = "select * from securityquestion";
                                $result = $con->query($query);
                                
                                while($row = $result->fetch_assoc())
                                {
                                    echo "<option>$row[question]</option>";
                                }
                            ?>
							</select>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Security Answer 2</span>
						<input class="input100" type="text" name="secans2" placeholder="Enter Answer" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Minimum Charges (INR)</span>
						<input class="input100" type="text" name="charges" placeholder="Enter Minimum Charge" required>
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Experience (Year)</span>
						<input class="input100" type="number" name="exp" placeholder="Enter Experience in Year" required maxlength="2">
						<span class="focus-input100"></span>
					</div>
                    
                     <div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Photo</span>
						<input class="input100" type="file" name="photo" placeholder="Enter Experience in Year">
						<span class="focus-input100"></span>
					</div>
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
						
                     <div class="wrap-input100 validate-input m-b-18" data-validate = " Confirm Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="cpass" placeholder="Enter confirm password">
						<span class="focus-input100"></span>
					</div>
  
                       
					<div class="flex-sb-m w-full p-b-30">

						<div>
                            <a href="index.php" class="txt1">
								Already a member
							</a>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
						Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="Login/vendor/animsition/js/animsition.min.js"></script>
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="Login/vendor/select2/select2.min.js"></script>
	<script src="Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="Login/vendor/countdowntime/countdowntime.js"></script>
	<script src="Login/js/main.js"></script>

</body>
</html>