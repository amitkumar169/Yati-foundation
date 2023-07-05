<?php
require "DBManager.php";
$uploadir="C:/wamp/www/YATI Foundation/vonunteers/";
$uploadfile=$uploadir.basename($_FILES["file"]["name"]);
$name=$_POST["name"];
$email=$_POST["email"];
$mob=$_POST["mob"];
$gender=$_POST["gender"];
$vpic=$_FILES["file"]["name"];
$add=$_POST["add"];
$dt=date('d/m/Y');
$cmd="insert into volunteer values('$name','$gender','$email','$mob','$vpic','$add','$dt')";
$db=new DBManager();
$x=$db->ExecuteQuery($cmd);
if($x==true)
{
if(move_uploaded_file($_FILES["file"]["tmp_name"],$uploadfile))	
{
	echo "<script>alert('Thanks for become a Volunteer');window.location.href='../V.php'</script>";
}
}
else
{
	echo "<script>alert('Your Request is not completed');window.location.href='../V.php'</script>";
}
?>

kaha 