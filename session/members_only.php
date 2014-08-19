<?php
	session_start();

	echo "<h1>Members only</h1>";
	// check session variable

if(isset($_SESSION['vaild_user']))
{
	echo "<p>You are logged in as ".$_SESSION['vaild_user']."</p>";
	echo "<p>Members only content goes here</p>";
}	else {
	echo "<p>You are not logged in</p>";
	echo "<p>Only Logged in members may see this page.";
}

echo "<a href=\"authmain.php\">Back to main page</a>";


?>
