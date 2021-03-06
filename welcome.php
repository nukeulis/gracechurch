<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Welcome</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/icons/favicon.ico">
     <link rel="shortcut icon" href="images/icons/favicon.ico" />
     <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
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
        <a href="index.php">
          <img src="images/icons/Grace-Church-Header-Glow.jpg" alt="Grace Church">
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
                    <h3>Welcome</h3>
                </div>
                <div class="box bx1 tbox">
                    <p class="text1">We're glad you're here</p>
                    <p><strong>Grace Church</strong> is a new church of ordinary people who have been transformed by an extraordinary gospel - Jesus Christ died and was raised so that sinners would be reconciled to God. This is the good news we have a passion to proclaim, live, and share. We invite you to join us Sundays at 10:00 am at <a href="contact.php" class="link-1">Cedar Grove Elementary School</a> on Ridge Rd (Rt.27) between Clarksburg and Damascus.</p>

                    <p class="text1">Sunday Meetings</p>
                    <p>Every Sunday we seek to remember and celebrate what is of first importance: Jesus, the Son of God, has come in the flesh to live a perfect life on our behalf, die a substitutionary death, and rise from the dead, so that we might be forgiven and reconciled to God. This gospel, or good news, is what we remind ourselves of as we sing, pray, read Scripture, give, hear God's Word preached, participate in the sacraments, and fellowship together.</p>
                    <p>Our Welcome Table at the front door is staffed by helpful people who can answer your questions.</p>

                    <p class="text1">Children's Ministry</p>
                    <p>Our children's ministry provides care and instruction for 1-year-olds through fifth graders. Check out our <a href="gracekids.php" class="link-1">Grace Kids</a> for information on what the children's ministry looks like and how it works.</p>
                    <p>During the meeting we provide a room with a video feed for moms with infants.</p>

                    <p class="text1">Accessibility</p>
                    <p>Grace Church meets in an accessible facility.  However, if you require wheelchair access, designated parking or seating, directions to our accessible restrooms, or additional assistance, please don't hesitate to ask us.</p>

                </div>
            </div>
        </div>
    </div>


</div>
<!--==============================footer=================================-->
<?php include("footer.html"); ?>

</body>
</html>