<html>
<head>
	<title>Browse Directories</title>
</head>
<body>
<h1>Browsing</h1>

<?php
	$dir = $_SERVER['DOCUMENT_ROOT']."/html/m";
	$files1 = scandir($dir);
	$files2 = scandir($dir, 1);

	echo "<p>Upload directory is $dir</p>";
	echo "<p>Directory Listing in alohable order, ascending:</p><ul>";

	foreach($files1 as $file)
	{
		if ($file != "." && $file != "..")
			echo "<li>$file</li>";
	}
	echo "</ul>";
	echo "<hr>";
	echo "<p>Upload directory is $dir</p>";
	echo "<p>Directory Listing in alphabetical, deacending:</p><ul>";

	foreach( $files2 as $file )
	{
		if($file != "." && $file != "..")
			echo "<li>$file</li>";
	}
	echo "</ul>";
?>

</body>
</html>
