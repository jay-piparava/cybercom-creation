<?php

$file = file('file_read_ex.txt') or die('unable to open filr...');
foreach ($file as $data) {
	echo "$data ,";
}
fclose($file);

?>