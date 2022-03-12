<?php

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "onesas";
	
	$con = new mysqli($hostname, $username, $password, $database);
	
	if($con->error)
	{
		die("Connection not Established ".$con->error);
	}

?>