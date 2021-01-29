<?php

$dir = 'files';

if($file = opendir("$dir/")) {
	echo "looking inside's $dir :<br>";
	while ($files = readdir($file)) {
		echo "<a href='$dir/$files'>$files</a> <br>";
	}
}

?>