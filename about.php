<!DOCTYPE html>
<html lang="en">
     <head>
     <title>About</title>
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

    <!--
    // Email obfuscator script 2.1 by Tim Williams, University of Arizona
    // Random encryption key feature by Andrew Moulden, Site Engineering Ltd
    // This code is freeware provided these four comment lines remain intact
    // A wizard to generate this code is at http://www.jottings.com/obfuscator/
    { coded = "zsaMzL.m4as@WhsIM.b4h"
      key = "ZAYXFgqm0p7zwj4a5cHS9JRxBOWEhKukdiytslb2VDN13T8PnQ6UevIorLMCGf"
      shift=coded.length
      link=""
      for (i=0; i<coded.length; i++) {
        if (key.indexOf(coded.charAt(i))==-1) {
          ltr = coded.charAt(i)
          link += (ltr)
        }
        else {     
          ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
          link += (key.charAt(ltr))
        }
      }
    }
    //-->
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
                    <h3 id="beliefs">What we believe</h3>
                </div>
                <div class="box bx1 tbox">
                    <p class="text1">At the core of what we believe is the gospel of Jesus Christ – the glorious truth that Jesus Christ died and was raised so that sinners would be reconciled to God.</p>
                    <p>The gospel is our primary passion and driving influence in our church’s preaching, worship, small groups, and outreach. Our Statement of Faith can be found on 
                                the <a href="http://www.sovereigngraceministries.org/about-us/what-we-believe.aspx" class="link-1">Sovereign Grace Churches website</a>.</p>
                </div>
                <div class="clear"></div>
                <div class="box middle">
                    <h3 id="gettinginvolved">Getting Involved</h3>
                </div>
                <div class="box bx1 tbox">
                    <p>Thank you for wanting to become more involved in the life and ministry of Grace Church.  If you are new to Grace Church, please visit our I'm New page to learn more about our sunday services
                    and meeting location. Because we’re new, we don’t yet have the necessary processes and procedures in place for some serving roles.  But if you’re willing and available, we can probably find something for you to do!  Here are some things to think about or look forward to if you’d like to get plugged into 
                    our family:</p>

                    <p class="text1">Small Groups</p>
                    <p>Designed to help us apply Scripture to our lives, enjoy Biblical fellowship, and pursue ministry to each other and our community.  Please email <script type="text/javascript" language="javascript">document.write("<a class='link-1' href='mailto:"+link+"'>"+link+"</a>")</script> if you’re interested 
                        in joining a small group.</p>
                    <p>Our Welcome Table at the front door is staffed by helpful people who can answer your questions.</p>

                    <p class="text1">Membership class</p>
                    <p>Our member’s class will provide an introduction to Grace Church.  It’s a great way to connect with our pastor, get your questions answered, and determine if this is where God wants you 
                        to be.  Check out our Membership page here.</p>

                    <p class="text1">Serving Opportunities</p>
                    <p>If you want to find a place to serve, please fill out the contact form.  While we can’t promise you’ll be able to serve immediately, it will help to know your desires.  
                        Thanks again for wanting to use your gifts to serve others for God’s glory!</p>
                </div>
                <div class="box middle">
                    <h3 id="pastor">Our Pastor</h3>
                </div>
                <div class="box bx1 tbox">
                    <p class="text1">Larry Malament</p>
                    <p>Larry serves as the Senior Pastor for Grace Church of Clarksburg through leadership, preaching, and pastoral care.  He also serves Sovereign Grace Churches by helping plant 
                        and care for churches in Asia.  Larry and his wife Marilyn have been married for 34 years and have 3 married children and 3 grandchildren.  He loves golf and cheers for the 
                        University of North Carolina.</p>
                </div>
            </div>
        </div>
    </div>


</div>
<!--==============================footer=================================-->
<?php //include("footer.html"); ?>

</body>
</html>