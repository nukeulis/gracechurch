<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Welcome</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
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
                    <h3>Sovereign Grace Churches</h3>
                </div>
                <div class="box bx1 tbox">
                    <p><strong>Grace Church</strong> of Clarksburg is privileged to be associated with and a part of <a href="http://www.sovereigngraceministries.org/" class="link-1">Sovereign Grace Churches</a>, a family of more than 80 local Christian churches in the U.S. and across the world</p>

                    <p>With other Sovereign Grace churches we share:</p>

                    <ul class="bullet-list">
                      <li>A passion to see the gospel of Jesus Christ affect our lives and proclaimed to the world</li>
                      <li>A vision to establish, equip, and develop local churches</li>
                      <li>A commitment to a theology that is essentially reformed and continuationist</li>
                      <li>A desire to glorify God in our public and private lives </li>
                      <li>A vision to establish, equip, and develop local churches</li>
                    </ul>

                    <p>As part of its commitment to equip and develop local churches, Sovereign Grace Churches:</p>
                    <ul class="bullet-list">
                      <li>Produces resources (books, teaching, music)</li>
                      <li>Hosts conferences (Pastors, WorshipGod, The Clash, etc.)</li>
                      <li>Trains leaders in its Pastors College</li>
                    </ul>

                    <p>You can learn more about Sovereign Grace Churches on their <a href="http://www.sovereigngraceministries.org/" class="link-1">website</a></p>
                </div>
            </div>
        </div>
</div>


</div>
<!--==============================footer=================================-->
<?php //include("footer.html"); ?>

</body>
</html>