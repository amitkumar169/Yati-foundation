<?php
require "DBManager.php";
$uploadir="C:/wamp/www/YATI Foundation/addnews/";
$uploadfile=$uploadir.basename($_FILES["file"]["name"]);
$title=$_POST["title"];
$vpic=$_FILES["file"]["name"];
$newsdec=$_POST["newsdec"];
$ddt=date('d/m/Y');
$cmd="insert into addnews values('$title','$vpic','$newsdec','$ddt')";
$db=new DBManager();
$x=$db->ExecuteQuery($cmd);
if($x==true)
{
if(move_uploaded_file($_FILES["file"]["tmp_name"],$uploadfile))	
{
	echo "<script>alert('News Uploaded');window.location.href='../admin/add.php'</script>";
}
}
else
{
	echo "<script>alert('Your Request is not completed');window.location.href='../admin/add.php'</script>";
}
?>

kaha 