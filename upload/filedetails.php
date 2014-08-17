<html>
<head>
<title>File Details</title>
</head>
<body>

<?php
	$current_dir = $_SERVER['DOCUMENT_ROOT']."/html/m/upload";
	$file =$_GET['filename'];
	$file = basename($file);
var_dump($current_dir);
var_dump($file);
//	$file = basename($file);
	
echo "<h1>Details of file:".$file."</h1>";
echo "<h2>File data</h2>";
var_dump($file);
echo "<hr>";
echo "File fast accessed:".date("jS F Y H:i", fileatime($file))."<br>";
echo "File fast accessed:".date("jS F Y H:i", filemtime($file))."<br>";

$user = posix_getpwuid(fileowner($file));
echo "File owner:".$user['name']."<br>";

$group = posix_getgrgid(filegroup($file));
echo "File group: ".$group['name']."</br>";

echo "File permissions: ".decoct(fileperms($file))."<br>";

echo "File type: ".filetype($file)."<br>";
echo "File size: ".filesize($file)."bytes<br>";

echo "<hr>";
echo "<h2>File tests:</h2>";

echo "is_dir: ".(is_dir($file)?"true":"false")."<br>";
echo "is_executable: ".(is_executable($file)?"true":"false")."<br>";

echo "is_file: ".(is_file($file)?"true":"false")."<br>";
echo "is_link ".(is_link($file)?"true":"false")."<br>";
echo "is_readable: ".(is_readable($file)?"true":"false")."<br>";
echo "is_writable: ".(is_writable($fie)?"true":"false")."<br>";


?>
</body>
</html>
