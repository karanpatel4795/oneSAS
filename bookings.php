<?php
	require_once("session.php");
	require_once("connection.php");
	
	$provider = $_GET["provider"];
	$cname = $_GET["cname"];
	
	$query = "insert into booking (category, uname, providername) values ('$cname', '$uname', '$provider')";
	$con->query($query);
	
	$con->close();
	
	header("location:booking.php");
?>