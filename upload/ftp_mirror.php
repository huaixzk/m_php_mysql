<html>
<head>
	<title>Mirror Backup</title>
</head>
<body>
<h1>Mirror update</h1>

<?php
	// set up variablies - change these to suit application
	$host = "192.168.71.128";
	$user = "ftp";
	$password = "";
	$remotefile = "/var/ftp/svn/php_mysql.tar.bz2";
	$localfile = "/tmp/php_mysql.tar.bz2"

// connect to host
	$conn = ftp_connect("localhost");
	
	if(!$conn)
	{
		echo "Error: could not connect to ftp server<br/>";
		exit;
	}
	echo "Connected to $host.<br />";

// login to host

	$result = @ ftp_login($conn, $user, $password);
	if(!$result)
	{
		echo "Error: could not log in as $user <br />";
		ftp_quit($conn);
	}
	echo "Logged in as $user<br />";

	// check file times to see if an update.

echo "Checking file timne ..<br />"
if(file_exists($localfile))
{
	$localtime = filemtime($localfile);
	echo "Local file last updated:";
	echo date("G:i j-M-Y", $localtime);
	echo "<br />";
}
else 
	$localtime = 0 ;
	$remotetime = ftp_mdtm($conn, $remotefile);
	if(!($remotetime >= 0))
	{
		// not there || not support mode time
		echo "Cannot access remote file time.<br />";
		$remotetime = $localtime+1;
	}
	else 
	{
		echo "Remote file last updated:";
		echo date("G:i j-M-Y", $remotetime);
		echo "<br />";
	}
	
	if(!($remotetime > $localtime))
	{
		echo "Local copy is up to date!<br />";
		exit;
	}
	
	// download
	echo "Getting file from server...<br />";
	$fp = fopen($localfile, "w");
	if(!$success = ftp_fget($conn, $fp, $remotefile, FTP_BINARY))
	{
		echo "Error: donot download<br />";
		exit;
	}
	fclose($fp);
	echo "File downloaded successfully!!";
	ftp_quit($conn);
?>

</body>
</html>
