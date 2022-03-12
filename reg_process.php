<?php
	session_start();
	ob_start();
	require_once("connection.php");
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$gen = $_POST["gen"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$secque1 = $_POST["secque1"];
	$secans1 = $_POST["secans1"];
	$secque2 = $_POST["secque2"];
	$secans2 = $_POST["secans2"];
	$photo = $_FILES["photo"];
	$pass = $_POST["pass"];
	$cpass = $_POST["cpass"];
	
	if($pass == $cpass)
	{
		$query = "select * from user where email = '$email'";
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
			$con->close();
			$_SESSION["msg"]="$email is Already Registered";
			header("location:registration_users.php");
		}
		else
		{
			$type = $photo["type"];
			if($type == "image/jpg" || $type == "image/jpeg" )
			{
				$src = $photo["tmp_name"];
				$des = "users_img/$email.jpg";
				$pass = sha1($pass);
				
				$query = "insert into user (fname, lname, address, city, gender, email, phone, sec_que1, sec_ans1, sec_que2, sec_ans2, photo, password, status) values ('$fname', '$lname', '$address', '$city', '$gen', '$email', '$phone', '$secque1', '$secans1', '$secque2', '$secans2','$des', '$pass' , 1)";
				//echo $query;
				
				
				$con->query($query);
				if($con->error)
				{
					echo $con->error;
				}
				move_uploaded_file($src,$des);
				$con->close();
				$_SESSION["msg"]="$email Account is Created";
				header("location:login_users.php");	
			}
			else
			{
				$con->close();
				$_SESSION["msg"]="Must Select *.JPG Files Only";
				header("location:registration_users.php");	
			}
		}
	}
	else
	{
		$con->close();
		$_SESSION["msg"]="Confirm Password Does not Match";
		header("location:registration_users.php");
	}
?>