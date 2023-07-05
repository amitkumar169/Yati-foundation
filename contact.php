<?php
	require "DBManager.php";

	$Nget=$_POST["Name"];
	$Eget=$_POST["Email"];
	$Mget=$_POST["Messages"];
	$dt= new date('d/m/y');
	echo "Name is : $Nget, <br> Email is : $Eget <br> Messages is $Mget <br> $dt";
?>