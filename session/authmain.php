<?php
session_start();
//unset($_SESSION['vaild_user']);
if(isset($_POST['userid']) && isset($_POST['password']))
{
	// if the user has just tried to log in
	$userid = $_POST['userid'];
	$password = $_POST['password'];

	$db_conn = new mysqli('localhost', 'test', '00', 'auth');

	if(mysqli_connect_errno())
	{
		echo "Connect to database failed; mysqli_connect_errno()";
		exit;
	}
	
	$query = "select * from authorized_users where name = '$userid' and password = sha1('$password')";
	$result = $db_conn->query($query);
	if($result -> num_rows)
	{
		$_SESSION['vaild_user'] = $userid;
	}
	$db_conn->close();
}
?>
<html>
<body>
<h1>Home Page</h1>

<?php
if(isset($_SESSION['vaild_user']))
{
	echo "you are logged in as:".$_SESSION['vaild_user']."<br />";
	echo "<a href=\"logout.php\">Logout</a>";
} else {
	if(isset($userid))
	{
		echo "Could not log you in<br />";
	} else {
		echo "You are not logged in";
	}

echo "<form method=\"post\" action=\"authmain.php\">";
echo "<table>";
echo "<tr><td>Userid:</td>";
echo "<td><input type=\"text\" name=\"userid\"></td></tr>";
echo "<tr><td>Password:</td>";
echo "<td><input type=\"password\" name=\"password\"></td></td>";
echo "<tr><td colspan=\"2\" align=\"center\">";
echo "<input type=\"submit\" value=\"Log In\"></td></tr>";
echo "<table></form>";
}
?>
<br />
<a href="members_only.php">Members section</a>
</body>
</html>
