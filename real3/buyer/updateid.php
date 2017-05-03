<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
	
		<title>Buyer details</title>
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


	</head>
<?php
include "conn.php";
include "core.php";
if(loggedin())
{
@$name=getuserfield('username');
echo "<div id='component' style='margin-top:100px;float:right;z-index:11;height:55px;';><b style='color:black';>Welcome ".$name."</b></div><br>";
$result=mysql_query("select * from advancedetails where username='".$name."'");
 
 echo "<div class='component' style='margin-top:100px ;position:absolute;margin-left:270px';>
				<table class=''>
					<thead>
						<tr>
							<th>Seller_ID</th><th>Owner</th><th>category</th><th>Sub-category</th><th>Property</th><th>location</th><th>Email</th><th>Contact</th><th>Area</th><th>Price</th><th>Date</th><th>Address</th><th>Buy/sell</th>
						</tr>
					</thead>";
					$i=0;
					
while($row = mysql_fetch_array($result))
  {
  if($row['sellbuy']=="sold")
  {
   echo "<tbody><tr style='color:red'><td>".$row['id']."</td><th>".$row['ownername']."</th><td>". $row['category']."</td><td>". $row['subcategory']."</td><td>". $row['property']."</td><td>". $row['location']."</td><td>". $row['email']."</td><td>". $row['contact']."</td><td>". $row['area']."</td><td>". $row['price']."</td><td>". $row['date']."</td><td>". $row['address']."</td><td>". $row['sellbuy']."</td>";
	
  }
  else
  {
  echo "<tbody><tr><td>".$row['id']."</td><th>".$row['ownername']."</th><td>". $row['category']."</td><td>". $row['subcategory']."</td><td>". $row['property']."</td><td>". $row['location']."</td><td>". $row['email']."</td><td>". $row['contact']."</td><td>". $row['area']."</td><td>". $row['price']."</td><td>". $row['date']."</td><td>". $row['address']."</td><td>". $row['sellbuy']."</td>";
	}
	echo "</tr></tbody>";
 }
 
 echo "</table></div>"; 


if(isset($_POST['id'])&&isset($_POST['sellbuy'])&&isset($_POST['category'])&&isset($_POST['sub'])&&isset($_POST['property'])&&isset($_POST['location'])&&isset($_POST['owner'])&&isset($_POST['email'])&&isset($_POST['contact'])&&isset($_POST['area'])&&isset($_POST['price'])&&isset($_POST['date'])&&isset($_POST['address']))
{
$sellbuy=$_POST['sellbuy'];
$id=$_POST['id'];
$category=$_POST['category'];
$sub=$_POST['sub'];
$property=$_POST['property'];
$location=$_POST['location'];
$owner=$_POST['owner'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$area=$_POST['area'];
$price=$_POST['price'];
$date=$_POST['date'];
$address=$_POST['address'];
$result=mysql_query("SELECT * FROM advancedetails WHERE id=$id");
while($row=mysql_fetch_array($result))
{
mysql_query("UPDATE advancedetails SET sellbuy='$sellbuy',category='$category',subcategory='$sub',property='$property',email='$email',location='$location',ownername='$owner',contact='$contact',area='$area',price='$price',date='$date',address='$address'  where id=$id");
echo "<div id='match1'>Updation  is successfully done</div>";
}
}

}


?>

	<body>
		<div class="container">
			<!-- Top Navigation -->
			
			<header style="margin-top:-30px;margin-left=0px;position:relative";>
				<div onmousemove='displayMessage(this)'><h1>Real Estate Marketing <em>Revisited </em> <span>We Tried to Find Out Best Deals For You</span></h1>	</div>
				<nav class="codrops-demos">
					<a href="../home.php" title="Basic Usage">Home</a>
					<a href="../seller.php" title="Biaxial Headers">Seller</a>
					<a  href="../buyer.php" title="Wide Tables">Buyer</a>
					<a  href="update.php" title="Wide Tables">Update</a>
					<a  href="" title="Wide Tables">Others</a>
				</nav>
			</header>
			
			
					<form action="" method="post" style="position:relative;margin-top:490px;margin-left:600px";><strong>Enter your Seller_ID:</strong><input type="text" name="id" />
			<h1><u style="color:black";>Advance Details:</u></h1><br>
						
								<strong style="color:black";>On Sell/Sold:</strong>&nbsp; <select name="sellbuy" width=50 style="margin-left:13px";>
									 <option value='0'>--Select Category--</option>
									<option value="sold">Sold</option>
									<option value="on sell">On Sell</option>
									
								</select><br><br>
								<strong style="color:black";>Category:</strong>&nbsp; <select name="category" width=50 style="margin-left:40px";>
									 <option value='0'>--Select Category--</option>
									<option value="Agriculture">Agriculture</option>
									<option value="Industrial">Industrial</option>
									<option value="Residential">Residential</option>
								</select><br><br>
								<strong style="color:black";>Sub-Category:</strong>&nbsp; <select  name="sub" width=50 style="margin-left:11px";>
									 <option value='0'>--Select Sub-Category--</option>
									<option value="Farm">Farm</option>
									<option value="Factory">Factory</option>
									<option value="Buildings">Buildings</option>
									<option value="Industry">Indusrty</option>
								</select><br><br>
								<strong style="color:black";>Property Type:</strong>&nbsp; <select name="property" width=50 style="margin-left:7px";>
									 <option value='0'>--Select Property--</option>
									<option value="Rent">Rent</option>
									<option value="Purchase">Purchase</option>
									<option value="Buy">Buy</option>
									
								</select><br><br>
								<strong style="color:black";>Location:</strong>&nbsp; <select name="location" width=50 style="margin-left:45px"; >
									 <option value='0'>--Select State--</option><option value="Sindh">Sindh</option><option value="Punjab">Punjab</option><option value="Balochistan">Balochistan</option><option value="KPK">KPK</option><option value="Gilgit-Balistan">Gilgit-Balistan</option><option value="Tribal Belt">Tribal Belt</option><option value="Islamabad Capital Territory">Islamabad Capital Territory</option><option value="Kashmir">Kashmir</option></select></td></tr>
		
								</select><br><br>
								<strong style="color:black";>Owner's Name:</strong>&nbsp;<input type="text" name="owner" style="margin-left:7px";/><br><br>
								<strong style="color:black";>Email:</strong>&nbsp;<input type="text" name="email"style="margin-left:68px";/><br><br>
								<strong style="color:black";>Contact No:</strong>&nbsp;<input type="text" name="contact"style="margin-left:32px";/><br><br>
								<strong style="color:black";>Area(sq.feets):</strong>&nbsp;<input type="text" name="area"style="margin-left:13px"; /><br><br>
								<strong style="color:black";>Price:</strong>&nbsp;<input type="text" name="price" style="margin-left:72px";/><br><br>
								<strong style="color:black";>Date:</strong>&nbsp;<input type="text" name="date" style="margin-left:75px";/><br><br>
								<strong style="color:black;position:absolute;margin-top:50px";>Address:</strong>&nbsp;<textarea name='address' cols='30' rows='7' style="margin-left:110px";></textarea><br>
							
			<input type="submit" >
			</form>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>