<?php
	require_once("session.php");
	require_once("connection.php");
	$sr = $_GET["sr"];
	
	$query = "update booking set completeorder = 1, notify = 1 where sr = $sr";
	$con->query($query);
	
	
	header("location:booking.php");
?>