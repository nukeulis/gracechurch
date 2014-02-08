<!DOCTYPE html>
<html lang="en">
<?php
$file=$_REQUEST['file'];
?>	<head>
	<title><?=$file ?></title>
	</head>
	<body>
		<h1><?=$file ?></h1>
		<p>
		<audio controls autoplay><source src='media/audio/<?=$file ?>' type='audio/mpeg'>Your browser doesn't support the audio element</audio>
		</p>
	</body>
</html>