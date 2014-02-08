<?php
$file=$_REQUEST['file'];
// Fail if request tries to get to a higher directory or isn't for an MP3 files
if (strpos($file, "./") or !substr($file, -4) === '.mp3')
	return;

header('Content-disposition: attachment; filename="' . explode("/",$file)[1] . '"');
header('Content-type: audio/mp3');
readfile('media/audio/' . $file );
?>

