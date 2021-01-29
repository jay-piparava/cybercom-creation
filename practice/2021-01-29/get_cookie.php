<?php

//get cookie value
if (isset($_COOKIE['color'])) {
	$color = $_COOKIE['color'];
	echo "<body bgcolor = $color>";
	echo "<h1>you got website in your faviourite color...</h1>";
} else {
	echo "goto set_cookie.php and then come here...";
}

?>