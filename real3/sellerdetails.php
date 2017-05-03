<?php
include "conn.php";
include "core.php";
if(loggedin())
{
@$name=getuserfield('username');
echo "<div id='welcome' style='margin-top:100px;z-index:11;height:55px';>Welcome ".$name."</div>";

if(isset($_POST['username'])&&isset($_POST['category'])&&isset($_POST['sub'])&&isset($_POST['property'])&&isset($_POST['location'])&&isset($_POST['owner'])&&isset($_POST['email'])&&isset($_POST['contact'])&&isset($_POST['area'])&&isset($_POST['price'])&&isset($_POST['date'])&&isset($_POST['address']))
{
$username=$_POST['username'];
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
$flag=0;
if($username==$name)
{ 
$query=mysql_query("select * from advancedetails");
while($row=mysql_fetch_array($query))
{
if(($row['category']==$category)&&($row['subcategory']==$sub)&&($row['property']==$property)&&($row['location']==$location)&&($row['ownername']==$owner)&&($row['email']==$email)&&($row['contact']==$contact)&&($row['area']==$area)&&($row['price']==$price))
{
$flag=1;
}
}
if($flag==1)
{
echo "<center><div style='color:white;margin-top:0;position:absolute;z-index:5;margin-left:500px';>You Data is Already Proceeded <a href='buyer/sellerentry.php' style='color:red';>Keep Patient..we are searching BEST DEAL for You.!!</a><div></center>";

}
else
{

$sql = mysql_query("insert into advancedetails values('$username','$category','$sub','$property','$location','$owner','$email','$contact','$area','$price','$date','$address','on sell')");
//echo $sql;
mysql_query("insert into contact values('$username','$contact');");
mysql_query("insert into property values('$username','$category')");
mysql_query("insert into subproperty values('$username','$sub')");
mysql_query("insert into feature values('$username','$property')");
echo "<center><div style='color:white;margin-top:0;position:absolute;z-index:5;margin-left:700px';>Your Query Is Proceeded..<a href='buyer/sellerentry.php' style='color:red';>check your details</a><div></center>";
}
}
else
echo "<div id='seller'>incorrect username </div>";
}

}





?>
<html>
<head>
  
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <link href="index1.css" rel="stylesheet" type="text/css" />
	<link href="common1.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
	
<title>Seller Details</title>
<script>

function call1()
{
var a=document.getElementById("s").value;

if(a=="1")
{
window.location ="seller.php";
}

}
function call2()
{
var p=document.getElementById("b").value;
if(p=="2") 
{window.location= "buyer.php";
}}
</script>
	
</head>
<body style="height:100";>

			<div id="top">
		<div id="navigation">
		<script>
		function call()
		{
		printf("facebook");
		return false;
		}
		</script>
		 <div style="margin-left:400px";><a href=" "><img src="fb.png" onmouseover="return call1()"></a>&nbsp;&nbsp <img src="gplus.png" >&nbsp;&nbsp <img src="twit.png">&nbsp;&nbsp <img src="you.png">&nbsp;&nbsp <img src="link.png">&nbsp;&nbsp <img src="flickr.png">&nbsp;&nbsp <img src="pinterest.png"></div>
      
				<div class="albuminfo" style="margin-top:-20px";><u style="color:grey";></u> :&nbsp; <b></b></a><br><u style="color:grey";></u> :&nbsp;<b><b></div> 
			<h1 style="margin-top:-28px";><b><u><a href="mainpage.php">Real Estate Marketing</a></u></b></h1><br>
			<div class="topmenu">
             <ul>
              <li><a href="home.php">Home</a></li>
             <li><a href="products.php">Buy/Sell</a></li>	
             <li><a href="blogs/index.php" >Blogs & News</a></li>
             <li><a href="blogs/sitedesigner.php">Contact Us</a></li>
			 <li><a href="password/changepassword.php">Change Password</a></li>
             <li><a href="logout.php">Logout</a></li>
             
			
			 </ul>
         </div>
		 
			<div class="clear"></div>
		</div>
		<div class="tab" id="toptab"><a href="javascript:void(0)" title="Toggle info" class="showhint">&nbsp;</a></div>
	</div>
	



        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        
<div id="box9" style="height:800px;margin-top:170px;";>
<br><br>
<marquee><h2><font color=white class="regular">All Fields Are Mandatory!!</font></h2></marquee>
	<form name="advance" method="POST" action="" style="margin-left:400px;margin-top:50px"; >
								<h1><u style="color:white";>Advance Details:</u></h1><br>
								<strong style="color:white";>Username:</strong>&nbsp;<input type="text" name="username" style="margin-left:37px";/><br><br>
								<strong style="color:white";>Category:</strong>&nbsp; <select name="category" width=50 style="margin-left:40px";>
									 <option value='0'>--Select Category--</option>
									<option value="Agriculture">Agriculture</option>
									<option value="Industrial">Industrial</option>
									<option value="Residential">Residential</option>
								</select><br><br>
								<strong style="color:white";>Sub-Category:</strong>&nbsp; <select  name="sub" width=50 style="margin-left:11px";>
									 <option value='0'>--Select Sub-Category--</option>
									<option value="Farm">Farm</option>
									<option value="Factory">Factory</option>
									<option value="Buildings">Buildings</option>
									<option value="Industry">Indusrty</option>
								</select><br><br>
								<strong style="color:white";>Property Type:</strong>&nbsp; <select name="property" width=50 style="margin-left:7px";>
									 <option value='0'>--Select Property--</option>
									<option value="Rent">Rent</option>
									<option value="Purchase">Purchase</option>
									<option value="Buy">Buy</option>
									
								</select><br><br>
								<strong style="color:white";>Location:</strong>&nbsp; <select name="location" width=50 style="margin-left:45px"; >
									 <option value='0'>--Select State--</option><option value="Sindh">Sindh</option><option value="Punjab">Punjab</option><option value="Balochistan">Balochistan</option><option value="KPK">KPK</option><option value="Gilgit-Balistan">Gilgit-Balistan</option><option value="Tribal Belt">Tribal Belt</option><option value="Islamabad Capital Territory">Islamabad Capital Territory</option><option value="Kashmir">Kashmir</option> </select></td></tr>
		
								</select><br><br>
								<strong style="color:white";>Owner's Name:</strong>&nbsp;<input type="text" name="owner" style="margin-left:7px";/><br><br>
								<strong style="color:white";>Email:</strong>&nbsp;<input type="text" name="email"style="margin-left:68px";/><br><br>
								<strong style="color:white";>Contact No:</strong>&nbsp;<input type="text" name="contact"style="margin-left:32px";/><br><br>
								<strong style="color:white";>Area(sq.feets):</strong>&nbsp;<input type="text" name="area"style="margin-left:13px"; /><br><br>
								<strong style="color:white";>Price:</strong>&nbsp;<input type="text" name="price" style="margin-left:72px";/><br><br>
								<strong style="color:white";>Date:</strong>&nbsp;<input type="text" name="date" style="margin-left:75px";/><br><br>
								<strong style="color:white;position:absolute;margin-top:50px";>Address:</strong>&nbsp;<textarea name='address' cols='30' rows='7' style="margin-left:110px";></textarea><br>
								<br><input type="submit" value="  Submit  " style="margin-left:115px";/>
							
								</form>

</div>

</body>

</html>



</form>