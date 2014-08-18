
<?php
	session_start();
	echo "<hr><ol>";

	foreach ($_SESSION as $i)
		echo "<li>$i</li>";
	echo "</ol>";



?>
