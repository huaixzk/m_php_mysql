<!DOCTYPE html>
<html>
<head>
<title>User Register</title>
<meta charset="utf-8">
</head>
<body>

<?php
	$name = $_POST['name'];
	$passwd = $_POST['passwd'];
	$passwd2 = $_POST['passwd2'];
	
	if((!isset($name))||(!isset($passwd))||(!isset($passwd2)))
	{
		// not entered anything	
?>
<h1>User Register: </h1>
<form action="register.php" method="POST">
<p>Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name">
<p>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="passwd">
<p>Password:(again) <input type="password" name="passwd2">
<p><input type="submit" name="register" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>
<?php
	} else if($passwd <> $passwd2){
	echo '<p>The passwords you entered donot match; check it and <del>try again.</del></p>';
	exit;
} else {
	$mysql = mysqli_connect('localhost', 'test', '00');
	
	if(!$mysql)
	{
		echo "<p>connect mysql failed, check it.</p>";
		exit;
	}
	
	$db = mysqli_select_db($mysql, 'auth');
	if(!$db)
	{
		echo "<p>connect to datebase failed, check it.</p>";
		exit;
	}
	$insert = "insert into authorized_users values ('".$name."', '".sha1($passwd)."')";
	
 	$result = mysqli_query($mysql, $insert);
	if(!$result)
	{
		echo "<p>failed register for datebase insert; connect to the<a href=\"mailto://hz@huaixiaoz.com\">Webmaster</a> to deal with this or <del>try again later.</del></p>";
		exit;
	}
	
	$row = mysqli_affected_rows($mysql);
	if($row == 1)
	{
		echo "<p>register successed. Go to <a href=\"secretdb.php\">Log IN?</a></p>";
		exit;
	}
	else 
	{
		echo "<p>failed register; connect to the<a href=\"mailto://hz@huaixiaoz.com\">Webmaster</a> to deal with this or <del>try again later.</del></p>";
		//echo "<p>register failed; </p>";
		exit;
	}
	
#	mysqli_free_result($result);
	mysqli_close($mysql);
}

?>

</body>
</html>

