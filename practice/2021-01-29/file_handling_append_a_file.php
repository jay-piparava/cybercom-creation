<?php

echo "<hr>";
echo "<b>Content of file</b><br>";
$data = file('file_append_ex.txt');
foreach ($data as $data1) {
	echo "$data1,";
}

if (isset($_GET['name'])) {
	if (!empty($_GET['name'])) {
		$file = fopen('file_append_ex.txt', 'a');
		$data = htmlentities($_GET['name']);
		fwrite($file, "\n$data");
		fclose($file);
	} else {
		echo "<br>Enter Data.....";
	}
}

?>
<form method="get" action="#">
	<input type="text" name="name">
	<br><br><input type="submit" value="Add name....">
</form>