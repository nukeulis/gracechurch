<!DOCTYPE html>
<html lang="en">
	<head>
      <title>Media</title>
      <meta charset="utf-8">
      <meta name="format-detection" content="telephone=no" />
      <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
      <link rel="icon" href="images/icons/favicon.ico">
      <link rel="shortcut icon" href="images/icons/favicon.ico" />
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
	  <script src="js/jquery.tablesorter.min.js"></script>
	  <script>
	  $(function () {
		$().UItoTop({ easingType: 'easeOutQuart' });
		$("a.various").fancybox();
		var pathname = window.location.pathname;
		pathname = pathname.substring(pathname.lastIndexOf('/') + 1);
		$("nav ul li a[href='" + pathname + "']").parent().addClass('current');
		$("#sermons").tablesorter( {sortList: [[3,1]]} ); 
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
   <body>
      <div class="main">
         <header>
            <!--==============================header=================================-->            
            <div class="container_12">
               <div class="grid_12">
                  <h1><a href="index.php"><img src="images/icons/logo3.jpg"></a></h1>
                  <div class="head_top">
                     <form id="search" action="search.php" method="GET">
                        <input type="text" name="s"><a onclick="$('search').submit()" class="btn"><i class="icon-search"></i></a><div class="clear"></div>
                     </form>
                     <div class="socials">
						 <a href="#"><i class="icon-twitter"></i></a>
						 <a href="#"><i class="icon-facebook"></i></a>
					 </div>
                  </div>
                  <?php include("menu.html"); ?>                
               </div>
               <div class="clear"></div>
            </div>
         </header>
         <!--=======content================================-->        
         <div class="content">
            <div class="container_12">
               <div class="grid_12">
                  <div class="box head">
                     <h3>Sermons</h3>
                  </div>
                  <div class="box bx1 tbox">
                     <table class="table1 tablesorter" id="sermons">
                        <thead>
                           <tr>
                              <th>Sermon</th>
                              <th>Speaker</th>
                              <th>Series</th>
                              <th>Date</th>
                              <th>Listen</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php
                            
                        include('/home/gracech1/php/MP3/in-mp3.inc');
                        $SID="abcdefghijklm";
                        Init_MP3_lib($SID,"tmp".$dir_sep,32768); // Initialize the library
                            
						$Directory = new RecursiveDirectoryIterator('media/audio/');
						$Iterator = new RecursiveIteratorIterator($Directory);
						$Regex = new RegexIterator($Iterator, '/^.+\.mp3$/i', RecursiveRegexIterator::GET_MATCH);
						foreach($Regex as $path)
						{
                            //ShowID3v2Tag( $path[0]);
                            global $ID3v23FrameTypes,$ID3v22FrameTypes;
                            FGetID3v2Tag($path[0],2,$TAG,$FRAME_ID,$FRAME_OFFSET,$FRAME_SIZE,$FRAME_FLAGS,$FRAME_ENCODING,$FRAME_LANGUAGE,$FRAME_DATA,$FRAME_EXTRA);
							for($elem=0;$elem<$TAG["nb_frames"];$elem++){
								if ($FRAME_ID[$elem] == "TT2"){
									$TT2 = $FRAME_DATA[$elem];
								}
								if ($FRAME_ID[$elem] == "TP1"){
									$TP1 = $FRAME_DATA[$elem];
								}
								if ($FRAME_ID[$elem] == "TAL"){
									$TAL = $FRAME_DATA[$elem];
								}
								//"TT2" "TP1" "TAL" "TRK" "TPA" "TYE" "TCO" "TEN" "COM" "COM" "COM"
								//print("<!-- [" . $FRAME_DATA[$elem] . " :: " . $FRAME_ID[$elem] . "]-->");	
							}
							echo("<tr>");
							echo("<td>" . explode(" - ",$TT2)[0] . "</td>");//TT2
							echo("<td>" . $TP1 . "</td>");//TP1
							echo("<td>" . $TAL . "</td>");//TP1
							echo("<td>" . explode(" - ",$TT2)[1] . "</td>");//TT2
							echo("<td><a href='" . $path[0] . "'>mp3</a></td>");
							echo("</tr>");
						}
						?>
						</tbody>
						</table>
					</div>
					<a href="media.php" class="link1 lnk1">view all</a>                
				</div>
            </div>
             <!--
			<div class="container_12">
               <div class="grid_12">
					<div class="video">
						<a id="books" class="various iframe img-bot"><img src="images/icons/page4_img1.jpg" alt=""><span></span></a>
						<a href="#" class="videolink">Books</a>
					</div>
				</div>
			</div>
			<div class="container_12">
               <div class="grid_12">
					<div class="video">
						<a id="music" class="various iframe img-bot"><img src="images/icons/page4_img2.jpg" alt=""><span></span></a>
						<a href="#" class="videolink">Music</a>
					</div>
				</div>
			</div>
                 -->
         </div>
      </div>
      <!--==============================footer=================================-->    
	  <?php include("footer.html"); ?>
   </body>
</html>