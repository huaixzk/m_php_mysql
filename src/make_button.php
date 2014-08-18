<?php
// check we have the apprapriate variable data
// variables are button-text and color

	$button_text = $_REQUEST['button_text'];
	$color = $_REQUEST['color'];
	
	if(empty(!$button_text) || empty(!$color))
	{
		echo "Could not create image - form not filled out correctly.";
		exit;
	}

	// create an image of the right background and check size
	$im = imagecreatefrompng($color.'button.png');
	
	$width_image = imagesx($im);
	$height_image = imagesy($im);

	// our images need an 18 pixel margin in fom the edge of the image
	$width_imge_wo_marigns = $width_image - (2*18);
	$height_image_wo_marigns = $heighn_image - (2*18);
	//Work out if the font size will fit and make it smaller until it does
	// Start out with the biggest size that will reasonably fit our buttons 
	$font_size = 33;
	
	putenv();




?>
