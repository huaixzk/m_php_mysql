<?php
	echo "<ul>";
	foreach( $_SERVER as $i => $j)
	{
		echo "<li><i>$i</i></li>";
	//	echo "<li><b>$j</b></li>";
	//	echo "<ol>";
	//	var_dump($j);
	//	echo "</ol>";
	}

	echo "</ul><hr>";
	
	echo count($_SERVER)."<hr>";
	var_dump(disk_free_space($_SERVER['DOCUMENT_ROOT'])/1024);

?>
