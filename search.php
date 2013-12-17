<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Search</title>
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
     <script src="search/search.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>

     <script>

     $(function(){
      $().UItoTop({ easingType: 'easeOutQuart' });
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
<body class="">
    <div class="main">
<!--==============================header=================================-->

        <header>
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
                            <a onclick="document.getElementById('search').submit()" class="btn"><i class="icon-search"></i></a>
                            <div class="clear"></div>
                        </form>
                        <div class="socials">
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-facebook"></i></a>
                            <a href="#"><i class="icon-google-plus"></i></a>
                            <a href="#"><i class="icon-camera-retro"></i></a>
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
                    <h3>Search result:</h3>
                </div>
                <div class="box bx1">
                    <div id="search-results"></div>
                </div>
            </div>
        </div>
    </div>


</div>
<!--==============================footer=================================-->
<?php include("footer.html"); ?>

</body>
</html>