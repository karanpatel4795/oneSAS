<?php
	require_once("session.php");
	require_once("connection.php");
	
	$cps = $_POST["cps"];
	$nps = $_POST["nps"];
	$ncps = $_POST["ncps"];
	
	$cps = sha1($cps);
	
	$query = "select * from providers where email = '$uname' and password = '$cps'";
	
	$result = $con->query($query);
	
	if($result->num_rows > 0)
	{
		if($nps == $ncps)
		{
			$nps = sha1($nps);
			$query = "update providers set password = '$nps' where email = '$uname'";
			$con->query($query);
			
			$con->close();
			$_SESSION["msg"]="Password Updated";
			header("location:account_info.php");
		}
		else
		{
			$con->close();
			$_SESSION["msg"]="Confirm Password does not Match";
			header("location:Change_password_provider.php");
		}
	}
	else
	{
		$con->close();
		$_SESSION["msg"]="Invalid Current Password";
		header("location:Change_password_provider.php");
	}
?>	