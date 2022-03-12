<?php
	require_once("session.php");
	require_once("connection.php");
	
	$sr = $_GET["sr"];
	$stat = $_GET["stat"];
	
	$query = "update providers set status = $stat where sr = $sr";
	$con->query($query);
	
	$con->close();
	
	header("location:providers.php");	
?>