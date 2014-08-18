##array list function##

1. for ($i =0; $i < count($array); $i++) $array[$i]
2. foreach($array as $i) $i
3. while($tmp = each($array)) $tmp['key'] $tmp['0']  $tmp['value'] $tmp['1']
4 while(list($i, $j) = each($array))  $i $array['key']  $j $array['value']

3&4 should `reset($array)` later if you want to use them.
