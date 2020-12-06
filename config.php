<?php
	$con = mysqli_connect("localhost","root","")or die("Connection Error");
	mysqli_select_db($con,"ajax")or die("database error");
?>