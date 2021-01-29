<?php

$file = 'file_rename.txt';
$rand = rand(1000,9999);
if(@rename($file, "$rand.txt")) {
	echo "File <strong>$file</strong> renamed to <strong>$rand.txt</strong>successfully....";
} else {
	echo "Error in rnameing file <strong>$file</strong>...";
}

?>