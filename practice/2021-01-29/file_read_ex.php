<?php

$data = @file('file_read_ex.txt') or die('ubable to open');
foreach ($data as $data1) {
	echo "$data1<br>";
}

?>