<?php

require 'config.php';
foreach ($block as $ip) {
	if ($ip == $ipadd) {
		die('Your ip address is blocked for thia site.....');
	}
}

?>

<h1>Welcome</h1>