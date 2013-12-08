﻿<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Main page</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
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
     <script  src="js/jquery.touchSwipe.min.js"></script>
     <script>

     
  $(function(){
      jQuery('#camera_wrap').camera({
        loader: false,
        pagination: false ,
        thumbnails: true,
        height: '49.30232558139535%',
        caption: false,
        navigation: true,
        fx: 'mosaic'
      });
      $().UItoTop({ easingType: 'easeOutQuart' });
      var pathname = window.location.pathname;
      pathname = pathname.substring(pathname.lastIndexOf('/') + 1);
      $("nav ul li a[href='"+pathname+"']").parent().addClass('current');
    });
    
    
    $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false, prev: '.prev',next: '.next', width: 220, items:      {
      visible : {min: 1,
       max: 4
     },
     height: 'auto',
     width: 220,
    }, responsive: true, 
    scroll: 1, 
    mousewheel: false,
    swipe: {onMouse: true, onTouch: true}});
    } );  
    
    $(window).load (
    function(){$('.carousel2').carouFredSel({auto: false, prev: '.prev1',next: '.next1', width: 220,      items: {
      visible : {min: 1,
       max: 1
     },
     height: 'auto',
    }, responsive: true, 
    scroll: 1, 
    mousewheel: false,
    swipe: {onMouse: true, onTouch: true}});
    } );  
    
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
<body class="page1"><div class="main"> <header> 

<!--==============================header=================================-->
 <div class="container_12">
  <div class="grid_12">
   <h1>
        <a href="index.html">
          <img src="images/logo-2x.png">
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
          <!--<a href="#"><i class="icon-google-plus"></i></a>
          <a href="#"><i class="icon-camera-retro"></i></a>-->
        </div>
      </div>

<?php include("menu.html"); ?>

     <div class="clear"></div>
    </div>
</div>

<!--=======flashy stuff================================-->

<div class="container_12">
<div class="slider_wrapper">
<div class="grid_12">
  <div class="grid_11 prefix_1 alpha omega">
     
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
      </div></div>
      </div>
  </div>
</div>

</header>
<div class="page1_block">
  <div class="container_12">
    <div class="grid_6">
      <div class="box maxheight">
        <a href="#" class="icon"><i class="icon-map-marker"></i></a>
        <div class="p1_title">Meeting Location</div>
        Directions to Clarksburg Middle School
      </div>
    </div>
    <div class="grid_6">
      <div class="box maxheight">
        <a href="#" class="icon">
          <i class="icon-user"></i>
        </a>
        <div class="p1_title">I'm New Here</div>What Grace Church is all about
      </div>
    </div>
    <div class="clear"></div>
    <div class="grid_6">
      <div class="box maxheight">
        <a href="#" class="icon">
          <i class="icon-microphone"></i>
        </a>
        <div class="p1_title">Listen</div>Recent Messages at Grace Church
      </div>
    </div>
    <div class="grid_6">
      <div class="box maxheight">
        <a href="#" class="icon">
          <i class="icon-envelope"></i>
        </a>
        <div class="p1_title">Questions</div>Praesent vestibulum
      </div>
    </div>
  </div>
</div>
<!--=======content================================-->
 <div class="content page1">
   <div class="container_12">
    <div class="grid_12">
      <div class="box head">
       <a href="#" class="next"></a> <a href="#" class="prev"></a>
        <h3>upcoming events</h3>
      </div>
      <div class="car_div">
        <ul class="carousel1">
          <li>
            <div class="box maxheight1">
              <img src="images/page1_img1.jpg" alt="">
              <div class="pad1">
              <time datetime="2013-01-01">04/18</time>
              <div class="text1">Aenean nonummy hendrerit</div>Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis  parturient montes, nascetur ridiculus.
              </div>
            </div>
            <a href="#" class="link1">more</a>
          </li>
          <li>
            <div class="box maxheight1">
              <img src="images/page1_img2.jpg" alt="">
              <div class="pad1">
              <time datetime="2013-01-01">04/18</time>
              <div class="text1">Aenean nonummy hendrerit</div>Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis  parturient montes, nascetur ridiculus.
            </div>
            </div>
            <a href="#" class="link1">more</a>
          </li>
          <li>
            <div class="box maxheight1">
              <img src="images/page1_img3.jpg" alt="">
              <div class="pad1">
              <time datetime="2013-01-01">04/18</time>
              <div class="text1">Aenean nonummy hendrerit</div>Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis  parturient montes, nascetur ridiculus.
            </div>
            </div>
            <a href="#" class="link1">more</a>
          </li>
          <li>
            <div class="box maxheight1">
              <img src="images/page1_img4.jpg" alt=""> <div class="pad1">
              <time datetime="2013-01-01">04/18</time>
             
              <div class="text1">Aenean nonummy hendrerit</div>Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis  parturient montes, nascetur ridiculus.
              </div>
            </div>
            <a href="#" class="link1">more</a>
          </li>
           <li>
            <div class="box maxheight1">
              <img src="images/page1_img2.jpg" alt="">
              <div class="pad1">
              <time datetime="2013-01-01">04/18</time>
              <div class="text1">Aenean nonummy hendrerit</div>Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis  parturient montes, nascetur ridiculus.
            </div>
            </div>
            <a href="#" class="link1">more</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="grid_12"> <a href="#" class="next1"></a><a href="#" class="prev1"></a>
      <div class="quote_title">
        Testimonials
      </div>
     
      <ul class="carousel2">
        <li>
          <div class="box">„ Praesent vestibulustie lacus. Aenean nonummy hendrerit mauris...<span>John Priston, California</span><a href="#" class="link1">read full story</a><div class="clear"></div></div>
        </li>
        <li>
          <div class="box">„ Praesent vestibulustie lacus. Aenean nonummy hendrerit mauris...<span>Bradley Grosh, New Jersey</span><a href="#" class="link1">read full story</a><div class="clear"></div></div>
        </li>
        <li>
          <div class="box">„ Praesent vestibulustie lacus. Aenean nonummy hendrerit mauris...<span>Alex Smith, Oklahoma</span><a href="#" class="link1">read full story</a><div class="clear"></div></div>
        </li>
      </ul>
    </div>
  </div>
</div>



</div>
<!--==============================footer=================================-->
<?php include("footer.html"); ?>

</body>
</html>