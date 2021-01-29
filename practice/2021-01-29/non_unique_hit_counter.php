<?php

function hit_count(){
	$file = 'non_unique_hit_counter.txt';
	$handler = fopen($file, 'r');
	$count = fread($handler, filesize($file));
	fclose($handler);
	$current_count = $count + 1;
	$handler = fopen($file, 'w');
	fwrite($handler, $current_count);
	echo "<h1>This page is visited by $current_count users.....</h1>";
}
hit_count();
?>