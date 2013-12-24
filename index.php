<!DOCTYPE html>
<html lang="en">
<head>
    <title>Grace Church of Clarksburg: Clarksburg, MD</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/camera.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript">

     
  $(function(){
      jQuery('#camera_wrap').camera({
        loader: false,
        pagination: false ,
        thumbnails: true,
        height: '49.30232558139535%',
        caption: false,
        navigation: true,
        fx: 'mosaic',
        cols: 4
      });

      $().UItoTop({ easingType: 'easeOutQuart' });
      
      $("nav ul li a[href='index.php']").parent().addClass('current'); // need to set this manually because sometimes the URL is '/' because default page
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
<body class="page1">
    <div class="main">
        <header>

            <!--==============================header=================================-->
            <div class="container_12">
                <div class="grid_12">
                    <h1>
                        <a href="index.php"><img src="images/logo-2x.png"></a>
                    </h1>
                    <div class="head_top">
                        <form id="search" action="search.php" method="GET">
                            <input type="text" name="s">
                            <a onclick="$('#search').submit()" class="btn"><i class="icon-search"></i></a>
                            <div class="clear"></div>
                        </form>
                        <div class="socials">
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-facebook"></i></a>
                            <!--<a href="#"><i class="icon-google-plus"></i></a>
                            <a href="#"><i class="icon-camera-retro"></i></a>-->
                        </div>
                    </div>

                    <?php include("menu.html"); ?>

                    <div class="clear"></div>
                </div>
            </div>
        </header>

    <div class="content">

        <!--=======flashy stuff================================-->
        <div class="container_12">
            <div class="slider_wrapper">
                <div class="grid_12 alpha omega">

                        <div id="camera_wrap" class="">
                            <div data-src="images/slide.jpg" data-thumb="images/thumb.jpg">
                                <div class="caption fadeIn">
                                    <h2>love<span>Love God, love people, love life</span></h2>
                                </div>
                            </div>
                            <div data-src="images/slide1.jpg" data-thumb="images/thumb1.jpg">
                                <div class="caption fadeIn">
                                    <h2>hope<span>Here hope triumphs over sorrow
                                    </span></h2>
                                </div>
                            </div>
                            <div data-src="images/slide2.jpg" data-thumb="images/thumb2.jpg">
                                <div class="caption fadeIn">
                                    <h2>faith<span>Dive deeper into the faith!</span></h2>
                                </div>
                            </div>
                            <div data-src="images/slide3.jpg" data-thumb="images/thumb3.jpg">
                                <div class="caption fadeIn">
                                    <h2>grace<span>Living in God’s amazing grace</span></h2>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="camera_thumbs_cont"></div>
        </div>

        <div class="page1_block">
            <div class="container_12">
                <div class="grid_6">
                    <div class="box maxheight">
                        <a href="contact.php" class="icon"><i class="icon-map-marker"></i></a>
                        <div class="p1_title">Meeting Location</div>
                        <span class="text1">Directions to Cedar Grove Elementary School</span>
                    </div>
                </div>
                <div class="grid_6">
                    <div class="box maxheight">
                        <a href="welcome.php" class="icon"><i class="icon-user"></i></a>
                        <div class="p1_title">I'm New Here</div>
                        <span class="text1">What Grace Church is all about</span>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="grid_6">
                    <div class="box maxheight">
                        <a href="media.php" class="icon"><i class="icon-microphone"></i></a>
                        <div class="p1_title">Listen</div>
                        <span class="text1">Recent Messages at Grace Church</span>
                    </div>
                </div>
                <div class="grid_6">
                    <div class="box maxheight">
                        <a href="contact.php" class="icon"><i class="icon-envelope"></i></a>
                        <div class="p1_title">Questions</div>
                        <span class="text1">Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--==============================footer=================================-->
    <?php include("footer.html"); ?>

</body>
</html>
