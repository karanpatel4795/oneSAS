<?php
	session_start();
	ob_start();
	require_once("connection.php");

	$un = $_POST["uname"];
	$ps = $_POST["upass"];
	
	$ps = sha1($ps);
	
	$query = "select * from providers where email = '$un' and password = '$ps'";
	
	$result = $con->query($query);
	
	if($result->num_rows > 0)
	{
		$con->close();
		$_SESSION["provider"]=$un;
		header("location:home.php");
	}
	else
	{
		$con->close();
		$_SESSION["msg"]="Invalid Username / Password";
		header("location:index.php");
	
	}
?>