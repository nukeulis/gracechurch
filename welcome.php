<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Welcome</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/font-awesome.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>

     <script>

     $(function(){
      $().UItoTop({ easingType: 'easeOutQuart' });
      var pathname = window.location.pathname;
      pathname = pathname.substring(pathname.lastIndexOf('/') + 1);
      $("nav ul li a[href='"+pathname+"']").parent().addClass('current');
    });   
     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->
</head>
<body class=""><div class="main"> <header> 

<!--==============================header=================================-->
 <div class="container_12">
  <div class="grid_12">
   <h1>
        <a href="index.html">
          <img src="images/logo-2x.png" alt="Grace Church">
        </a>
      </h1>
      <div class="head_top">
       
         <form id="search" action="search.php" method="GET">
                      <input type="text" name="s">                           
            <a onClick="document.getElementById('search').submit()" class="btn"><i class="icon-search"></i></a>
                     <div class="clear"></div>
         </form> <div class="socials">
          <a href="#"><i class="icon-twitter"></i></a>
          <a href="#"><i class="icon-facebook"></i> </a>
        </div>
      </div>
  

<?php include("menu.html"); ?>

     <div class="clear"></div>
    </div>
</div>
</header>

<!--=======content================================-->
 <div class="content">
   <div class="container_12">
    <div class="grid_12">
      <div class="box head">
        <h3>Welcome:</h3>
      </div>
      <div class="box bx1 tbox">
	 <p>We're glad you're here</p>
	 <p><strong>Grace Church</strong> is a new church of ordinary people who have been transformed by an extraordinary gospel - Jesus Christ died and was raised so that sinners would be reconciled to God. This is the good news we have a passion to proclaim, live, and share. We invite you to join us Sundays at 10:00 am at <strong>Cedar Grove Elementary School on Ridge Rd (Rt.27) between Clarksburg and Damascus</strong>.</p>
	 <p>Some things to know if you plan to visit us on a Sunday. First, we'd love to have you visit.</p>
	 <p>Here are some other things you'll want to know:</p>

	<ul class="list">
		<li>Our Welcome Table at the front door is staffed by helpful people who can answer your questions.</li>
		<li><strong>Grace Church</strong> meets in an accessible facility</li>
		<li>However, if you require wheelchair access, designated parking or seating, directions to our accessible restrooms, or additional assistance, please don't hesitate to ask us.</li>
		<li>Our children's ministry provides care and instruction for 1-year-olds through fifth graders. Check out our <strong><a href="#">Grace Kids</a></strong> for information on what the children's ministry looks like and how it works.</li>
		<li>During the meeting we provide a room with a video feed for moms with infants.</li>
		<li>Every Sunday we seek to remember and celebrate what is of first importance: Jesus, the Son of God, has come in the flesh to live a perfect life on our behalf, die a substitutionary death, and rise from the dead, so that we might be forgiven and reconciled to God. This gospel, or good news, is what we remind ourselves of as we sing, pray, read Scripture, give, hear God's Word preached, participate in the sacraments, and fellowship together.</li>
	</ul>

      </div>
       </div>
    </div>
</div>


</div>
<!--==============================footer=================================-->
<?php include("footer.html"); ?>

</body>
</html>