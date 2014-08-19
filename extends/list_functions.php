<?php
	echo "Function sets supported in this install are:<br />";
	$extensions = get_loaded_extensions();
	
	foreach($extensions as $each_ext)
	{
		echo "$each_ext <br />";
		echo "<ul>";
		$ext_func = get_extension_funcs($each_ext);
		foreach($ext_func as $func)
		{
			echo "<li>$func</li>";
		}
	echo "</ul>";
	}

echo get_current_user();
?>
