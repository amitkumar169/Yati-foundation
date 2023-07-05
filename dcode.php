<?php
require "DBManager.php";
$name=$_POST["name"];
$email=$_POST["email"];
$mob=$_POST["mob"];
$amount=$_POST["amount"];
$pd=$_POST["pd"];
$add=$_POST["add"];
$dt=date('d/m/Y');


$db=new DBManager();
$cmd="insert into donate values('$name','$email','$mob','$amount','$pd','$add','$dt')";
$x=$db->ExecuteQuery($cmd);
if($x=true)
{
	echo "<script>alert('Thanks for donation as soon as we contact you');window.location.href='../D.php'</script>";
}
else
{
	echo "<script>alert('Your Request is not completed');window.location.href='../D.php'</script>";
}
?>