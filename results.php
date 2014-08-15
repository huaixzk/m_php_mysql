<!DOCTYPE html>
<html>
<head>
<title>Book-O-Rama Search Results</title>
<meta charset="utf-8">
</head>
<body>
<h1>Book-O-Rama Search Results:</h1>

<?php
	//create short variable names
	$searchtype=$_POST['searchtype'];
	$searchterm=trim($_POST['searchterm']);
	var_dump($searchtype);
	Var_dump($searchterm);
if($searchtype <> "all"&& !$searchterm)
{
	echo 'You have not entered search details. Please go back and <del>try again</del>.';
	exit;
}

if(!get_magic_quotes_gpc())
{
	$searchtype = addslashes($searchtype);
	$searchterm = addslashes($searchterm);

	@ $db = new mysqli('localhost', 'user', '00', 'mydb');

	if(mysqli_connect_errno()){
		echo 'Error: could not connect to database. Please try again later.';
		exit;
	}
	if($searchtype <> "all")
	$query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
	else
	$query = "select * from books";
	$result = $db->query($query);

	$num_results = $result->num_rows;
if($num_results == 0)
echo '<p>No results matched here;Retry search with another word.</p>';
else
echo '<p>Numbers of books found: '.$num_rows."</p>";

	for($i = 0; $i < $num_results; $i++){
		$row = $result->fetch_assoc();
		echo "<p><strong>".($i+1).". Title: ";
		echo htmlspecialchars(stripslashes($row['title']));
		echo "</strong><br />Author:";
		echo stripslashes($row['author']);
		echo "<br />ISBN:";
		echo stripslashes($row['isbn']);
		echo "<br />Price: ";
		echo stripslashes($row['price']);
		echo "</p>";
	}

	$result -> free();
	$db -> close();
}
?>
</body>
</html>
