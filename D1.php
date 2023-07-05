<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function{
			alert("hello");
		})
	</script>
	<style type="text/css">
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<! this is a header row>
		<div class="row">
			<div class="col-sm-12" style="min-height: 90px; background-color: blue; text-align: center;font-size: 40px; color: white;"> Welcome to Admin Zone</div>
		</div>

		<! this is a container row>
		<div class="row">
			<div class="col-sm-2" style="min-height: 600px;background-color: silver;">
				<br/>
				<a href="#">DashBoard</a><br/><br/>
				<a href="#">Voulnteer Management</a><br/><br/>
				<a href="#">Donate Management</a><br/><br/>
				<a href="#">Contact Management</a><br/><br/>
				<a href="#">Add News</a><br/><br/>
				<a href="#">news Management</a><br/><br/>
				<a href="#">Change Password</a><br/><br/>
				<a href="#">Log Out</a><br/><br/>
			</div>
			<!Thsis is container of webpage>
			<div class="col-sm-10" style="min-height: 600px;">
				<div class="row">
					<div class="col-sm-3" style="min-width: 2000px background-image:linear-gradient(to left ,blue,white,red); margin: 10px;"></div>
					<div class="col-sm-3" style="min-width: 2000px background-color:green;"></div>
					<div class="col-sm-2" style="min-width: 2000px background-color:blue;"></div>
					<div class="col-sm-3"  style="min-width: 2000px background-color:red;"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12" style="min-height: 50px; background-color:black;text-align: center;color: white; font-size: 20px;">
				Copyrighted by &copy developed by Shyam verma
			</div>
		</div>
	</div>
</body>
</html>