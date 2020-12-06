<?php
	// $con = mysqli_connect("localhost","root","")or die("Connection Error");
	// mysqli_select_db($con,"ajax")or die("Database Error");
	include_once("config.php");
	
	$name =  $_POST['name'];
	$pass =  $_POST['pass'];
	
	$insert = "insert into user(name,pass)values('$name','$pass')";
	$run = mysqli_query($con,$insert);
	if($run>0)
	{
		echo "Insert";
		
	}
	else
	{
		echo "Not Insert";
	}
?>