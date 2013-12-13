﻿<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
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
                        <h3>our mission </h3>
                    </div>
                    <div class="box bx1">
                        <div class="text1">Aenean nonummy hendrerit  auris. Praesent justo dolor, lobortis quis,  ater lobortis dignissim, pulvinar ac, lorem estibulum se.</div>
                        Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis  parturient montes, nascetur ridiculus. Bus. Nulla dui. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, ater lorem. Estibulum sed ante onec sagittis euismod purus. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis  parturient montes, nascetur ridic. Lus. Bus. Nulla dui. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, ater lorem. Estibulum.
                    </div>
                    <a href="#" class="link1 ln1">more</a>
                    <div class="box head">
                        <h3>who we are</h3>

                    </div>
                    <div class="box bx1 off1">
                        <div class="text1">Rendrerit  auris. Praesent justo dolor, lobortis quis,  ater lobortis dignissim, pulvinar ac, lorem estibulum seren amet lorem.</div>
                        <p class="p1">Cum sociis natoque penatibus et magnis  parturient montes, nascetur ridiculus. Bus. Nulla dui. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, ater lorem. Estibulum sed ante onec sagittis ser euismod purus. Phasellus porta. Fusce suscipit varius mi. Cum sociis nato.</p>
                        <img src="images/page2_img1.jpg" alt="" class="img_inner fleft">
                        <div class="extra_wrapper">
                            <div class="text1">Praesent justo dolor, lobortis quis,  ater lo.</div>
                            <p>Cum sociis natoque penatibus et magnis  parturient montes, nascetur ridiculus. Bus. Nulla dui. Praesent justo dolor, ater lobortis quis, lobortis dignissim, pulvinar ac, ater lorem lores. Estibulum sed ante onec sagittis ser.</p>
                            <a href="#" class="link1">more</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="head box">
                        <h3>about Membership</h3>
                    </div>
                    <div class="box bx1">
                        <div class="text1">Raesent justo dolor, lobortis quis,  ater lobortis dignissim, pulvin.</div>
                        <p class="p2">Magnis  parturient montes, nascetur ridiculus. Bus. Nulla dui. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, ater lorem. Estibulum sed ante onec sagittis ser euismod purus. Phasellus porta. Fusce suscipit varius mi. Cum sociis nato lroem porta sren amet haslleis.</p>
                        <ul class="list">
                            <li><a href="#">Proin dictum elementum velit lroep orta ser</a></li>
                            <li><a href="#">Fusce euismod consequat amet an</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet consectet lorem</a></li>
                            <li><a href="#">Er adipiscing elit aters ater portas</a></li>
                        </ul>
                        <ul class="list">
                            <li><a href="#">Proin dictum elementum velit lroep orta ser</a></li>
                            <li><a href="#">Fusce euismod consequat amet an</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet consectet lorem</a></li>
                            <li><a href="#">Er adipiscing elit aters ater portas</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="box head ">
                        <h3>our advantages </h3>
                    </div>
                    <div class="box bx1 off1">
                        <ul class="list1">
                            <li>
                                <div class="count">1</div>
                                <div class="extra_wrapper">
                                    <div class="col1"><a href="#">Phasellus porta. Fusce suscipit. </a></div>varius mi. Cum sociis natoque ser penatibus et magnis  part.
                                </div>
                            </li>
                            <li>
                                <div class="count">2</div>
                                <div class="extra_wrapper">
                                    <div class="col1"><a href="#">Fusce suscipit lroe porta seren. </a></div>varius mi. Cum sociis natoque ser penatibus et magnis  part.
                                </div>
                            </li>
                            <li>
                                <div class="count">3</div>
                                <div class="extra_wrapper">
                                    <div class="col1"><a href="#">Phasellus porta. Fusce suscipit. </a></div>varius mi. Cum sociis natoque ser penatibus et magnis  part.
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="head box">
                        <h3>your quotes</h3>
                    </div>
                    <div class="box bx1">
                        <blockquote>
                            Lorem ipsum dolor siter ater amet, conser sect etuer adipires scing elit, sed diamser nonmyse nibh euismod tincidu. Lorem ste ri psum dolor siter ater amet, con stre posretr. Lorem ipsum dolor siter ater am.
                            <div class="alright">
                                <div class="text1">John Franklin </div>
                            </div>
                        </blockquote>
                        <blockquote>
                            Sum dolor siter ater amet, conser sect etuer adipires scing elit, sed diamser nonmyse nibh euismod tincidu. Lorem ste ri psum dolor siter ater amet, con stre posretr orem ipsum dolor siter ater am port.
                            <div class="alright">
                                <div class="text1">Marta Healy</div>
                            </div>
                        </blockquote>
                        <blockquote>
                            Lorem ipsum dolor siter ater amet, conser sect etuer adipires scing elit, sed diamser nonmyse nibh euismod tincidu. Lorem ste ri psum dolor siter ater amet, con stre posretr. Lorem ipsum dolor siter ater am.
                            <div class="alright">
                                <div class="text1">Julia Berzkalna</div>
                            </div>
                        </blockquote>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>