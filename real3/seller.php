<?php
include "conn.php";
include "core.php";
if(loggedin())
{
@$name=getuserfield('username');
echo "<div id='welcome' style='margin-top:100px;z-index:11;height:55px';>Welcome ".$name."</div>";

if(isset($_POST['username'])&&isset($_POST['state'])&&isset($_POST['district'])&&isset($_POST['location']))
{
$username=$_POST['username'];
$state=$_POST['state'];
$district=$_POST['district'];
$location=$_POST['location'];

if(!empty($username)&&!empty($state)&&!empty($district)&&!empty($location))
{
if($username==$name)
{
$sql = mysql_query("insert into location values('$username','$state','$district','$location')");
if($sql)
{
//header('Location : sellerdetails.php');
echo "<script> window.location='sellerdetails.php'; </script>";
}
}
else
echo "<div id='seller'>incorrect username </div>";
}
}
}
?>
<!DOCTYPE html>

<html lang="en" class="no-js">
	<head>
	<style>
	#seller
	{
	color:Red;
	position:absolute;
	z-index:11;
	margin-top:340px;
	margin-left:1070px;
	}
	</style>
	
		<title>Seller</title>
		
		<link rel="shortcut icon" href="../favicon.ico">
		
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<script src="js/modernizr.custom.25376.js"></script>
	</head>
	
	<body >
		<div id="perspective" class="perspective effect-rotateleft" style="background:url(22.jpg);background-repeat:no-repeat; background-size:cover" ;>
			<div class="container" style="background:url(23.jpg);background-repeat:no-repeat; background-size:cover" ;>
				<div class="wrapper"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
					
					<header class="codrops-header">
						<h1 style="color:White";>Real Estate Marketing<span style="color:white";>An Online Property Market</span></h1>	
					</header>
					<div class="main clearfix">
						<div class="column">
							<p><button id="showMenu">Seller</button></p>
							<p style="color:black";>Click on this button to see the what's new for the Seller.</p>
						</div>
							<div class="column1">
							<nav class="codrops-demos">
							<h2 style="color:black";>Enter Your Location Details:</h2>
							<form name="seller" action="seller.php" method="POST">
							<strong style="color:white";>Username:</strong>&nbsp; <input type="text" name="username" style="margin-left:13px";/><br><br>
							<strong style="color:white";>State:</strong>&nbsp; <select width=50 style="margin-left:45px"; name='state'>
									 <option value='0'>--Select State--</option><option value="Sindh">Sindh</option><option value="Punjab">Punjab</option><option value="Balochistan">Balochistan</option><option value="KPK">KPK</option><option value="Gilgit-Balistan">Gilgit-Balistan</option><option value="Tribal Belt">Tribal Belt</option><option value="Islamabad Capital Territory">Islamabad Capital Territory</option><option value="Kashmir">Kashmir</option></select></td></tr>
		
								</select><br><br>
							<strong style="color:White";>District:</strong>&nbsp;<input type="text" name="district" style="margin-left:38px";/><br><br>
							<strong style="color:white";>Location:</strong>&nbsp;<input type="text" name="location" style="margin-left:28px";/><br><br>
							<input type="submit" name=submit value="  Submit  " style="margin-left:92px"; />
							</form>
							</nav>
							</div>
						
						<div class="related">
							<p style="color:White";>For More Details Contact Us:</p>
							
						</div>
					</div><!-- /main -->
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav right vertical" >
				<a href="home.php" class="icon-home">Home</a>
				<a href="products.php" class="icon-news" >Buy/Sell</a>
				<a href="blogs/index.php" class="icon-image" >Blogs & News</a>
				<a href="buyer/sellerentry.php" class="icon-lock">Seller Details</a>
				<a href="buyer.php" class="icon-upload">Buyer</a>
				<a href="blogs/sitedesigner.php" class="icon-star">Contact Us</a>
				<a href="password/changepassword.php" class="icon-mail">Change Password</a>
				<a href="logout.php" class="icon-lock">Logout</a>
				
			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
	</body>

</html>