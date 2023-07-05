<?php
session_start();
if(isset($_SESSION["aid"]))
{
	
}
else
{
	echo "<script>alert('First Login Then Goto NaxtZone');window.location.href='../L.php'</script>";
}
?>


<html>
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet"/>
<link href="../css/font-awesome.min.css" rel="stylesheet"/>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="min-height:90px;background:orange;font-size:40px;text-align:center;">
<h1 style="text-align:center;text-shadow:2px 2px 2px red;margin-top:8px;">ADMIN ZONE</h1>
</div></div>
<div class="row">
<div class="col-sm-2" style="min-height:500px;background:silver;">
<a href="dashboard.php" style="text-decoration:none;margin-top:10px;text-shadow:2px 2px 2px white;">Dashboard</a><br/><br/>
<a href="volunteer.php" style="text-decoration:none;text-shadow:2px 2px 2px white;">Volunteer Management</a><br/><br/>
<a href="donate.php" style="text-decoration:none;text-shadow:2px 2px 2px white;">Donate Management</a><br/><br/>
<a href="contact.php" style="text-decoration:none;text-shadow:2px 2px 2px white;">Contact Management</a><br/><br/>
<a href="add.php" style="text-decoration:none;text-shadow:2px 2px 2px white;">Add News</a><br/><br/>
<a href="news.php" style="text-decoration:none;text-shadow:2px 2px 2px white;">News Management</a><br/><br/>
<a href="change.php" style="text-decoration:none;text-shadow:2px 2px 2px white;">Change Password</a><br/><br/>
<a href="logout.php" style="text-decoration:none;text-shadow:2px 2px 2px white;">Logout</a><br/><br/>
</div>
<div class="col-sm-10" style="min-height:600px;background:darkred;">
<h1 style="text-align:center;color:white;text-shadow:2px 2px 2px white;">Change Password</h1>


<form action="#" method="post" style="min-height:200px;width:50%;margin-left:300px;">
<span style="color:white">Old Password</span><input type="password" name="opass" class="form-control"/><br/><br/>
<span style="color:white">New Password</span><input type="password" name="npass" class="form-control"/><br/><br/>
<span style="color:white">confirm Password</span><input type="password" name="cpass" class="form-control"/><br/><br/>
<button type="submit">
Change Password</button>
</form>

</div></div>
<div class="row">
<div class="col-sm-12" style="min-height:50px;background:black;text-align:center;">
Copyright &copy Mecatredz Technology Developed & Designed By Amit Kumar
</div>
</div>
</div>
</body>
</html>