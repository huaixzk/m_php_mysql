<html>
<head>
	<title>rowse Directories</title>
</head>
<body>
<h1>Broseing</h1>

<?php
	$dir = dir($_SERVER['DOCUMENT_ROOT']."/html/m");
	
	echo "<p>Handle is $dir->handle</p>";
	echo "<p>Upload directory is $dir->path</p>";
	echo "<p>Directory  Listing:</p><ul>";

	while(false !== ($file = $dir->read()))
	{
		// strip out the two entries of . and ..
		if($file != "." && $file != "..")
			echo "<li>$file</li>";
	}
	echo "</ul>";
	$dir->close();
?>

</body>
</html>
