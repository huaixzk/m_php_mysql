<?php
	chdir($_SERVER['DOCUMENT_ROOT/html/m']);

///	 exec version
	echo "<pre>";
//unix

	exec("ls -al", $result);

	foreach($result as $line)
	echo "$line\n";

	echo "</pre>";
	echo "<br/><hr><br>";

?>
