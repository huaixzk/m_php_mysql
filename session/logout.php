<?php
session_start();

$old_user = $_SESSION['vaild_user'];
unset($_SESSION['vaild_user']);
session_destroy();
?>
<html>
<body>
<h1>Log out</h1>
<?php
if(!empty($old_user))
{
	echo "Logged out!!<br />";
} else {
	echo "you were not logged in, and so have not been logged out<br />";

}

?>
<a href="authmain.php">Back to Login?</a>
</body>
</html>
