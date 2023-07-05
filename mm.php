<html>
<body>
<?php
$conn=mysqli_connect("localhost","root","","yatidb");
if($conn==true)
{
echo "Connection is ok";
}
else
{
return false;
}
mysqli_connect_error();
?>
</body>
</html>
