<?php

$age = 10;
try {
	if ($age > 18) {
		echo "Done...";
	} else {
		throw new Exception("Your age is not enougth...");
		
	}
} catch (Exception $e) {
	echo "Error: ".$e->getMessage();
}

?>