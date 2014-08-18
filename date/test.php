<?php

	echo date("jS Y M H:i")."<br />";
	echo date("jS Y M G:i")."<br />";

	echo date("jS F Y G:i")."<br />";
	echo mktime();
	echo "<hr>";
	echo date('U');
	echo "<br />";
//	var_dump(getdate());
//$str = getdate();
	echo "<ul>";
	foreach( getdate() as $i=>$j)
		echo "<li>$i\t$j</li>";
	echo "</ul>";
	echo "<hr>";
	
$string = getdate();
	while ($i = each($string))
	//	echo $i['key'];
{	var_dump($i); echo "<br />";}
echo "<hr>";
while($i = each($_SERVER))
{
	echo $i['key']." => ".$i['value']."<br/>";
}
echo "<hr>";
reset($_SERVER);
while(list($i, $j) = each($_SERVER))
{
	//echo $i['key']." => ".$i['value']."<br/>";
	echo $i." => ".$j."<br />";
}

echo "<hr>for to array:<br />";
$count = count($_SERVER);
	var_dump($count);
for ($i = 0; $i < $count; $i++)
	echo $_SERVER[0]."<br />";
?>
