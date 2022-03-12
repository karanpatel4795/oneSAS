<?php
	require_once("session.php");
	require_once("connection.php");
	
	$sr = $_GET["sr"];
	$stat = $_GET["stat"];
	
	$query = "update category set status = $stat where sr = $sr";
	$con->query($query);
	
	$con->close();
	
	header("location:category.php");	
?>