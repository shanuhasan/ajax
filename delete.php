<?php
	include_once("config.php");
	$get_id = $_GET['del'];
	
	$delete = "delete from user where id='$get_id'";
	$query = mysqli_query($con,$delete);
	if($query>0)
	{
		echo "<script>window.open('display.php','_self')</script>";
	}
	else
	{
		echo "Error";
	}
?>