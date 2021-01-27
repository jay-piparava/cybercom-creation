<?php

$str = "This is a string. is this a string.";
$offset = 0;
$find = 'is';
$length = strlen($find);

while ($str_pos = strpos($str, $find, $offset)) {
	echo "<br>$find is find at position $str_pos.";
	$offset = $str_pos + $length;
}

?>