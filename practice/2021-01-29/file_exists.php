<?php

$filename = 'explode.txt';
if(file_exists($filename)) {
	echo "File already exists....";
} else {
	echo "file not exists";
}
//for inside another directory
$filename1 = 'files/first.txt';
if(file_exists($filename1)) {
	echo "File already exists....";
} else {
	echo "file not exists";
}

?>