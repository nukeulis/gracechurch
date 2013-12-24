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
                  <h1><a href="index.php"><img src="images/logo-2x.png"></a></h1>
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
                     <table class="table1" id="sermons">
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


function ShowID3v2Tag($whichFile){
	global $ID3v23FrameTypes,$ID3v22FrameTypes;
	print("<p><b>".$whichFile."</b></p>\n");
	print("<p><blockquote>\n");
	$err=FGetID3v2Tag($whichFile,2,$TAG,$FRAME_ID,$FRAME_OFFSET,$FRAME_SIZE,$FRAME_FLAGS,$FRAME_ENCODING,$FRAME_LANGUAGE,$FRAME_DATA,$FRAME_EXTRA);
	print("<font color=\"blue\">FGetID3v2Tag error code result: ".$err."</font><br />\n");
	print("<font color=\"blue\">\$TAG[\"err\"] returns: ".$TAG["err"]."</font><br />\n");

	print("<font color=\"blue\">\$TAG[\"err_str\"] returns: ".$TAG["err_str"]."</font><br />\n");
	if($err!=0){
		print("</blockquote></p>\n");		
		return;
	}
	if($TAG["vers"]==0){
		Print("<i>No Tag v2.x</i><br />");
		return;
	}
	print("<b>ID3 Tag v2.x is present</b><br />");
	print("Version: ".$TAG["vers"].".".$TAG["vers_major"].".".$TAG["vers_rev"]."<br />");
	print("Flags: ".$TAG["flags"]."<br />");
	print("&nbsp;&nbsp;&nbsp;Unsynchronization: ".($TAG["flag_unsync"]==0 ? "No" : "yes")."<br />");
	print("&nbsp;&nbsp;&nbsp;Extended Header: ".($TAG["flag_exthdr"]==0 ? "No" : "yes")." (version 2.3 or above only)<br />");
	print("&nbsp;&nbsp;&nbsp;Experimental: ".($TAG["flag_exper"]==0 ? "No" : "yes")." (version 2.3 or above only)<br />");
	print("Tag Size: ".$TAG["size"]." bytes<br />");
	print("Number of frames: ".$TAG["nb_frames"]."<br />");
	print("<table border=\"1\">\n");
	print("<tr><td>Offset</td><td>ID</td><td>Type</td><td>Size</td><td>Encoding</td><td>Language</td><td>Flags</td><td>Data</td></tr>\n");
	for($elem=0;$elem<$TAG["nb_frames"];$elem++){
		print("<tr><td>".$FRAME_OFFSET[$elem]."</td><td>".$FRAME_ID[$elem]."</td><td>");
		if ($TAG["vers_major"]==3){
			print($ID3v23FrameTypes[$FRAME_ID[$elem]]);
		} else {
			if ($TAG["vers_major"]==2){
				print($ID3v22FrameTypes[$FRAME_ID[$elem]]);
			}
		}
		print("</td><td>".$FRAME_SIZE[$elem]."</td><td>".$FRAME_ENCODING[$elem]."</td><td>".$FRAME_LANGUAGE[$elem]."</td>");
		$flags=$FRAME_FLAGS[$elem];
		print("<td>".$flags);
		$ShowData=1;
		if($flags!=0){ print("<br />"); }
		if($flags & 128){ print("Compressed<br />"); $ShowData=1; }
		if($flags & 64){ print("Encrypted<br />"); $ShowData=0; }
		print("</td><td>");
		if($ShowData){
			if($FRAME_EXTRA[$elem]!=""){
				if($FRAME_ID[$elem]=="APIC"){
					$ar_extra=unserialize($FRAME_EXTRA[$elem]);
					print("MIME type: ".$ar_extra["mime_type"]."<br />");
					print("Picture Type: ".$ar_extra["pic_type"]." (".$ar_extra["pic_type_str"].")<br />");
					print("Description: ".$ar_extra["description"]."<br />");
				} else {
					print($FRAME_EXTRA[$elem]."<br />");
				}
			}
			if($FRAME_ID[$elem]=="APIC"){
				print("<img src=\"".$FRAME_DATA[$elem]."\" border=\"0\">");
			} else {
				print(str_replace(chr(13),"<br />",$FRAME_DATA[$elem]));
			}
		}
		print("</td></tr>\n");
	}
	print("</table>\n");
	print("</blockquote></p>\n");		
}
                            
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
			<div class="container_12">
               <div class="grid_12">
					<div class="video">
						<a id="books" class="various iframe img-bot"><img src="images/page4_img1.jpg" alt=""><span></span></a>
						<a href="#" class="videolink">Books</a>
					</div>
				</div>
			</div>
			<div class="container_12">
               <div class="grid_12">
					<div class="video">
						<a id="music" class="various iframe img-bot"><img src="images/page4_img2.jpg" alt=""><span></span></a>
						<a href="#" class="videolink">Music</a>
					</div>
				</div>
			</div>
         </div>
      </div>
      <!--==============================footer=================================-->    
	  <?php include("footer.html"); ?>
   </body>
</html>