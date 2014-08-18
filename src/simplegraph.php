<?php
	// set up image
	$height = 200;
	$width = 200;
	
	$im = imagecreatetruecolor($width, $height);
	$white = imagecolorallocate($im, 255, 255, 255);
	$blue = imagecolorallocate($im, 0, 0, 64);
	// draw on image
	imagefill($im, 0, 0, $blue);
	imageline($im, 0, 0, $width, $heigth, $white);
	imagestring($im, 5, 10, 100, 'Sales', $white);
	
	// output image 
	Header("Content-type: image/png");
//	imagepng($im);
	imagejpeg($im);

	//clean up
	imagedestroy($im);
?>
<?php
	echo "<hr>";
?>
