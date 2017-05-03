<?php
include "conn.php";
include "core.php";
if(loggedin())
{
@$name=getuserfield('username');
echo "<div id='welcome'>Welcome ".$name."</div>";
}





?>

<html>
<head>
  <link href="js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <link href="index1.css" rel="stylesheet" type="text/css" />
	<link href="common1.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
	
<title>Home</title>

</head>
<body>

			<div id="top">
		<div id="navigation">
		<script>
		function call1()
		{
		printf("facebook");
		return false;
		}
		</script>
		 <div style="margin-left:400px";><a href="https://www.facebook.com/11bit0146"><img src="fb.png" onmouseover="return call1()"></a>&nbsp;&nbsp <img src="gplus.png" >&nbsp;&nbsp <img src="twit.png">&nbsp;&nbsp <img src="you.png">&nbsp;&nbsp <img src="link.png">&nbsp;&nbsp <img src="flickr.png">&nbsp;&nbsp <img src="pinterest.png"></div>
      
				<div class="albuminfo" style="margin-top:-20px";><u style="color:grey";></u> :&nbsp; <b>9092489091</b></a><br><u style="color:grey";></u> :&nbsp;<b>9092489091<b></div> 
			<h1 style="margin-top:-28px";><b><u><a href="home.php">Real Estate Marketing</a></u></b></h1><br>
			<div class="topmenu">
             <ul>
			   <h1> <b style="position:absolute;margin-left:950px";><a href=""></a></b> <h1>
              <li><a href ="home.php">Home</a></li>
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
	



    <div class="div1">
     <br><br><br>
    </div>
    
    <div id="sliderFrame">
        <div id="slider">
            <a href="http://www.menucool.com/jquery-slider" target="_blank">
                <img src="a1.jpg" alt="A Big Market Of Reality" />
            </a>
            <a class="lazyImage" href="a2.jpg" title="Get Your Best Deal Here">Pure JavaScript</a>
            <a href="http://www.menucool.com/javascript-image-slider"><b data-src="a12.jpg">Image Slider</b></a>
            <a class="lazyImage" href="a4.jpg" title="">Slide 4</a>
        </div>
        <!--thumbnails-->
        <div id="thumbs1">
            <div class="thumb">
                <div class="frame"><img src="a1.jpg" /></div>
                <div class="thumb-content"><p>Business</p>Customise your Business Value</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="a2.jpg" /></div>
                <div class="thumb-content"><p>Customizable</p>Real Estate Marketing Storms </div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="a12.jpg" /></div>
                <div class="thumb-content"><p>Big Bang</p>Meet With Experience People</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="a4.jpg" /></div>
                <div class="thumb-content"><p>Integration</p>Get The Best Deal</div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        <div style="clear:both;height:0;"></div>
    </div>
<div id="box1">
<marquee><h2><font color=rgb(49,32,37) class="regular">Welcome to the Real Estate Marketing!!!</font></h2></marquee>
<img src="a12.jpg" width=430 height=240 style="margin-left:35px; margin-top:40px; float:left;">
<p style="z-index=1; margin-top:50px; color:rgb(203,216,190); margin-right:15px; margin-left:485px;" align=left><font color=red><u>Introducing</u></font>Looking for your dream home? Plot development and housing in Pakistan is expanding faster than you can keep track of, but we’re here to help. With brand new residential and commercial real estate available on a weekly basis in major cities like Lahore, Karachi, and Islamabad, Lamudi.pk has quickly become Pakistan’s #1 real estate marketplace for listing, buying, and renting property. We make it easy to find your next apartment, house, or plot online. With so many house hunters and investors currently in the search to buy or rent commercial and residential properties, here at Lamudi we are dedicated to making your next buying or selling process as carefree and smooth as possible.
</p><br><br><br><br><br><hr color=black>
<marquee><h2><font color=rgb(49,32,37) class="regular">Get The Best Deal Online!!!</font></h2></marquee>
<img src="19.jpg" width=430 height=240 style="margin-left:35px; margin-top:40px; float:left;">
<p style="z-index=1; margin-top:50px; color:rgb(203,216,190); margin-right:15px; margin-left:485px;" align=left><font color=red><u>Introducing</u></font>Are you interested in a commercial or residential property, buying an apartment, pre-finished house, a plot for sale or building your dream house to to your exact specifications? Then this is the right place for you! No matter what your goal, at Lamudi we provide top-notch quality apartments, condos, houses, and plots with the latest features, improvements, and architectural designs all within your affordable price range. Here you can discover your dream properties in Pakistan based on region, city and area all from the comfort of your home. Be sure to visit our online channel or one of our certified agents today and let Lamudi take care of the rest.
</p><br><br><br><br><br><hr color=black>
<marquee><h2><font color=rgb(49,32,37) class="regular">Get The Best Deal Online!!!</font></h2></marquee>
<img src="12.jpg" width=430 height=240 style="margin-left:35px; margin-top:40px; float:left;">
<p style="z-index=1; margin-top:50px; color:rgb(203,216,190); margin-right:15px; margin-left:485px;" align=left><font color=red><u>Introducing</u></font> While our local online directory provides you with the most convenient, accurate, up-to-date property listing available in Pakistan, we also strive to give you the best experience possible by extending our service beyond your virtual search. Thanks to our certified agent program, you’re in good hands from day one with one of our experienced real estate consultants, as they take all of the hassle and guess work out of the process by offering you seamless service until the moment you take possession of your new property. Not just a website, at Lamudi we are committed to providing you with the highest quality, full-service, real estate network possible.
</p><br><br><br><br><br><hr color=black><br><br><br><br>

</div>

</body>

</html>



</form>