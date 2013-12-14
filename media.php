<!DOCTYPE html>
<html lang="en">
<head>
    <title>Media</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.fancybox-1.3.4.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script>
        $(document).ready(function () {
            $(function () {
                $("a.various").fancybox();
                var pathname = window.location.pathname;
                pathname = pathname.substring(pathname.lastIndexOf('/') + 1);
                $("nav ul li a[href='" + pathname + "']").parent().addClass('current');
            });
        });

        $(document).ready(function () {
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
                        </form> <div class="socials">
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-facebook"></i> </a>
                        </div>
                    </div>

                    <?php include("menu.html"); ?>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>

        <!--=======content================================-->
        <div class="content">
            <div class="container_12">
                <div class="grid_8">
                    <div class="box head">
                        <h3>Sermons</h3>
                    </div>
                    <div class="box bx1 tbox">
                        <table class="table1">
                            <thead>
                                <tr>
                                    <td>Sermon</td>
                                    <td>Speaker</td>
                                    <td>Date</td>
                                    <td>PDF</td>
                                    <td>Listen</td>
                                    <td>Watch</td>
                                </tr>
                            </thead>
                            <tbody>
                                <!--
                                <tr>
                                    <td>Answering God's Call, What Am I Going To Do Now? part 4</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                <tr>
                                    <td>Answering God's Call, Should I Answer It? Part 3</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                <tr>
                                    <td>Answering God's Call, What Am I Going To Do Now? part 2</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                <tr>
                                    <td>Answering God's Call, What Am I Going To Do Now? part 1</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                <tr>
                                    <td>Left Behind Part 6: What role does Israel play in End Times?</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                <tr>
                                    <td>Left Behind Part 5: What role does Israel play in End Times?</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                <tr>
                                    <td>Left Behind Part 4: What role does Israel play in End Times?</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                <tr>
                                    <td>Left Behind Part 3: What role does Israel play in End Times?</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                <tr>
                                    <td>Left Behind Part 2: What role does Israel play in End Times?</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                <tr>
                                    <td>Left Behind Part 1: What role does Israel play in End Times?</td>
                                    <td>Bradley Grosh</td>
                                    <td>04/05/13</td>
                                    <td><a href="#">pdf</a></td>
                                    <td><a href="#">listen</a></td>
                                    <td><a href="#">Watch</a></td>
                                </tr>
                                -->
                            </tbody>
                        </table>
                    </div>
                    <a href="#" class="link1 lnk1">view all</a>
                </div>
                <div class="grid_4">
                    <div class="video">
                        <a href="#" class="various iframe img-bot">
                            <img src="images/page4_img1.jpg" alt=""><span></span>
                        </a>
                        <a href="#" class="videolink">Books</a>
                    </div>
                    <div class="video">
                        <a href="$" class="various iframe img-bot">
                            <img src="images/page4_img2.jpg" alt=""><span></span>
                        </a>
                        <a href="#" class="videolink">Music</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>