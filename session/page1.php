<?php
session_start();

$_SESSION['sss_var'] = "Hello world!!";
$_SESSION['ss_var'] = "a";
$_SESSION['sesvar'] = "ccHello world!!";
$_SESSION['ses_vr'] = "Heccssllo world!!";
$_SESSION['sess_'] = "Hello ssworld!!";

	echo "the conteng of xxxxx is ".$_SESSION['sess_var']."<br />";
?>
<a href='page2.php'>Next Page</a>

<?php
	echo "<hr><ol>";

	foreach ($_SESSION as $i)
		echo "<li>$i</li>";
	echo "</ol>";



?>
