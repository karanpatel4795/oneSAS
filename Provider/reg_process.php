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
	$cate = $_POST["cate"];
	$secque1 = $_POST["secque1"];
	$secans1 = $_POST["secans1"];
	$secque2 = $_POST["secque2"];
	$secans2 = $_POST["secans2"];
	$charges = $_POST["charges"];
	$exp = $_POST["exp"];	
	$photo = $_FILES["photo"];
	$pass = $_POST["pass"];
	$cpass = $_POST["cpass"];
	
	if($pass == $cpass)
	{
		$query = "select * from providers where email = '$email'";
		$result = $con->query($query);
		
		if($result->num_rows > 0)
		{
			$con->close();
			$_SESSION["msg"]="$email is Already Registered";
			header("location:registration.php");
		}
		else
		{
			$type = $photo["type"];
			if($type == "image/jpg" || $type == "image/jpeg" )
			{
				$src = $photo["tmp_name"];
				$des = "images/$email.jpg";
				$pass = sha1($pass);
				
				$query = "insert into providers (firstname, lastname, address, city, gender, email, phone, category, sec_que1, sec_ans1, sec_que2, sec_ans2, charges, exp, photo, password, status) values ('$fname', '$lname', '$address', '$city', '$gen', '$email', '$phone', '$cate', '$secque1', '$secans1', '$secque2', '$secans2', $charges, $exp, '$des', '$pass' , 1)";
				//echo $query;
				
				$con->query($query);
				
				move_uploaded_file($src,$des);
				$con->close();
				$_SESSION["msg"]="$email Account is Created";
				header("location:index.php");	
			}
			
			else
			{
				$con->close();
				$_SESSION["msg"]="Must Select *.JPG Files Only";
				header("location:registration.php");	
			}
		}
	}	
	else
	{
		$con->close();
		$_SESSION["msg"]="Confirm Password Does not Match";
		header("location:registration.php");
	}
?>