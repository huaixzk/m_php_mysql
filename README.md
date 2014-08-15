##PHP & MYSQL##

* use trim() to skip the space at start and end.
> $searchterm = trim($_POST['searchterm']);
* get_magic_quotes_gpc()
* addslashes()
* stripslashes()
* `htmlspecilalchars()`   *& < > "*

```
if(!get_magic_quotes_gpc())
{
	$searchtype = addslashes($searchtype);
	$searchterm = addslashes($searchterm);
}
```
- htmlspecialchars()
```
	echo htmlspecialchars(stripslashes($row['title']));
```

###DB About###

- `db` connect:

``@ $db = new mysqli('localhost', 'user', 'password', 'db_name');`` 
> the way to connect mysql database : class OOP  !! db is a class object

``@ $db = mysqli_connect('localhost', 'user', 'password', 'db_name');``
> db will be a resource object

###DB_CXHECK###

```
if (mysqli_connect_errno()){
	echo 'Error: Could not connect to database. Please try again later.';
	exit;
}
```

###DB USAGE##

``$db->select_db(db_name);``

``mysqli_select_db(db_resource, db_name);``

---------------

###DB SEARCH Select###

$query = "select * from table_name where ".$searchtype." like '%".$searchterm."%'";

$result = $db->query($query);

or : $result = mysqli_query($db_resource, $query);

$num_results = $result->num_rows;

$num_results = $mysql_num_roes($result);

###Result Desl###

for($i = 0; $i < $num_results; $i++)
// process results
{ }
$row = $result -> fetch_assoc();
$row = mysqli_fetch_assoc($result);

###DB Free###

$db->free();
mysqli_free_result($db);

$db->close();
mysqli_close($db);

$db->affected_rows;
mysqli_affected_rows();

----------


###

