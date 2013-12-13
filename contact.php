<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">

    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/forms.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script>
        $(document).ready(function () {
            $().UItoTop({ easingType: 'easeOutQuart' });
            var pathname = window.location.pathname;
            pathname = pathname.substring(pathname.lastIndexOf('/') + 1);
            $("nav ul li a[href='" + pathname + "']").parent().addClass('current');
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
        <header>

            <!--==============================header=================================-->
            <div class="container_12">
                <div class="grid_12">
                    <h1>
                        <a href="index.php">
                            <img src="images/logo-2x.png">
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
                <div class="grid_4">
                    <div class="box head">
                        <h3>Church Office</h3>
                    </div>
                    <div class="box bx1">
                        <address>
                            <dl>
                                <dt class="text1">Mailing Address</dt>
                                    <dd>8975 Amelung Street<br />
                                    Frederick, MD 21704</dd>
                                <dt><span>Church Phone:</span>
                                    301-810-5707</dt>
                                <dt><span>E-mail:</span>
                                    <img src="images/email-lm.png" /></dt>
                            </dl>
                        </address>
                    </div>
                </div>
                <div class="grid_8">
                    <div class="box head">
                        <h3>Meeting Place</h3>
                    </div>
                    <div class="box bx1">
                        <div class="map">
                            <address>
                                <dl>
                                    <dt class="text1">Cedar Grove Elementary School</dt>
                                        <dd>24001 Ridge Rd.<br />
                                        Germantown, MD 20876</dd>
                                </dl>
                            </address>
                            <figure class="img_inner">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3089.7270208261852!2d-77.232232!3d39.249068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1eb1ea6690dcc29e!2sCedar+Grove+Elementary+School!5e0!3m2!1sen!2sus!4v1386904947670" width="600" height="450" frameborder="0" style="border:0"></iframe>
                            </figure>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!--==============================footer=================================-->
<?php //include("footer.html"); ?>

</body>
</html>
