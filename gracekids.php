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
          <img src="images/icons/logo-2x.png" alt="Grace Church">
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
                    <h3>Grace "Kids"</h3>
                </div>
                <div class="box bx1 tbox">
                    <p class="text1">Overview</p>
                    <p>Christian parents have the unique privilege and responsibility of raising their children in the discipline and instruction of the Lord (Eph. 6:4).  It’s no easy task! 
                      That’s why at Grace Church Kids we count it a joy to assist parents on Sunday morning by helping your children:</p>

                    <ul class="bullet-list">
                      <li>Enjoy fun, interactive, and educational times together</li>
                      <li>Read and learn from the Bible (the whole thing)</li>
                      <li>Understand how each part of the bible points to Jesus</li>
                    </ul>

                    <p class="text1">How it Works</p>
                    <p>If you have children that are walking, 5 years old and under, you can bring them a few minutes before the service starts to the Grace Kids check-in area.  An usher will 
                      be happy to direct you there when you arrive.  A trained and qualified volunteer will gladly get your children signed up, issue nametags, and give you a special laminated 
                      tag to help ensure your children’s safety and security.  Each of our children’s ministry workers has had a thorough background check.  Of course, if you want to keep your 
                      children with you for the entire meeting, please do!</p>

                    <p>Children ages 5 – 10 will begin the morning in the main meeting with their parents.  They’ll be dismissed to their classes right before the sermon begins.  Again, if 
                      you’d rather have your children stay with you for the whole meeting that is great.</p>

                    <p>Moms can take noisy children or hungry infants to our “Mom’s with babies” area in the hallway behind the auditorium where there are rockers and a changing table.</p>
                </div>
            </div>
        </div>
</div>


</div>
<!--==============================footer=================================-->
<?php include("footer.html"); ?>

</body>
</html>