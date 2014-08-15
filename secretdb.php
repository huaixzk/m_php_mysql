<?php
	$name = $_POST['name'];
	$passwd = $_POST['passwd'];

	if ((!isset($name)) || (!isset($passwd))){
		//visitor need to enter a name and password.
	

?>

<h1>Please Log in</h1>
<p>This page is sectet.</p>

<form action="secretdb.php" method="post">
<p>Username: <input type="text" name="name"></p>
<p>Password: <input type="password" name="passwd"></p>
<p><input type="submit" name="submit" value="Log In"> 
<a href="register.php">Register</a></p>
</form>
<?php
	} else {
	// connect to mysql
	$mysql = mysqli_connect('localhost', 'test', '00');
	
if(!$mysql){
	echo "Cannot connect to database;";
	exit;
}

//	select the approriate database
$selected = mysqli_select_db($mysql, 'auth');
if(!$selected){
	echo "Cannot Select database;";
	exit;
}
	
//	query the database to see if there is a record which matches 
//$
$query = "select count(*) from authorized_users where name = '".$name."' and password = '".sha1($passwd)."' or name = '".$name."' and password = '".$passwd."'";
#$query = "select count(*) from authorized_users where name = '".$name."' and password = '".sha1($passwd)."'";
$result = mysqli_query($mysql, $query);
if(!$result){
	echo "Cannot run query.";
	exit;
}

	$row = mysqli_fetch_row($result);
	$count = $row[0];
	
	if($count > 0) {
// visitor's name and password combination are correct
	echo "<h1> Here it is!</h1>
		<p>I bet you are glad you can see this secret page.</p>";
	echo "<p><a href=\"search.html\">Books for serch</a></p>";
	echo "<p><a href=\"new_book.html\">Want to add a Book?</a></p>";
} else {
	// visitors's name and password combination are not correct;
	echo "<h1>Go Away!</h1>
		<p>You are not authorized to use this resource.</p>";
}
}
?>
