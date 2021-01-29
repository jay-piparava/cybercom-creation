<?php

$file = fopen('explode.txt', 'r');
$data = fread($file, filesize('explode.txt'));
$data1 = explode(',', $data);
fclose($file);
foreach ($data1 as $name) {
	echo "$name<br>";
}

?>