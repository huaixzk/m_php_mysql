<!DOCTYPE html>
<html>
<head>
<title>Book-O-Rama Book Entry Results</title>
<meta charset="utf-8">
</head>
<body>
<h1>Book-O-Rama Book Entry Results</h1>

<?php
	// create short variable names
	
$isbn = $_POST['isbn'];
$author = $_POST['author'];
$title = $_POST['title'];
$price = $_POST['price'];

if(!$isbn||!$author||!$title||!$price){
	echo "you have not entered all the required details<br />"
	."Please go back and <del>try again</del>";
	exit;
}

if(!get_magic_quotes_gpc())
{
	$isbn = addslashes($isbn);
	$author =  addslashes($author);
	$title = addslashes($title);
	$price = doubleval($price);
}
	$db = new mysqli('localhost', 'user', '00', 'mydb');
	
if(mysqli_connect_errno())
{
	echo 'Error: Could not connect to database. Please <del>try again later.</del>';
	exit;
}

$insert = "insert into books values
			('".$isbn."', '".$author."', '".$title."', '".$price."')";
$result = $db->query($insert);

if($result){
	echo $db->affected_rows."book inserted into database.";
} else {
	echo "An error has occurred. The item was not added.";
}

$db->close();
?>
</body>
</html>
