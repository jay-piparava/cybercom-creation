<?php

if (isset($_GET['name']) && !empty($_GET['name'])) {
	$name = $_GET['name'];
	$lower_name = strtolower($name);

	if ($lower_name == 'jay') {
		echo "YOu are good person $name";
	}
}

?>
<form method="get" action="#">
	<input type="text" name="name">
	<br>
	<input type="submit" name="submit">
</form>