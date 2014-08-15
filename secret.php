<?php
$name = $_POST['name'];
$passwd = $_POST['passwd'];
	
	if ((!isset($name)) || (!isset($passwd))){
	//Visitor needs to enter a name and password
//	dd}
?>

<h1>Please Log in</h1>
<p>This page is secret.</p>
<form method="POST" action="secret.php">
<p>Username: <input type="text" name="name"></p>
<p>Password: <input type="password" name="passwd"></p>
<p><input type="submit" name="submit" value="Log in"></p>
</form>

<?php
	} else if (($name == "user")&&($passwd == "pass")){
	//visitor's name and password combination are correct
	echo '<h1>Here it is !</h1>
	<p>I bet you are glad you can see this secret page.</p>';
} else {
	//visitor's name and password combination are not correct
	echo '<h1>Go Away!</h1>
	<p>You are not authorized to use this resource.</p>';
}
?>

