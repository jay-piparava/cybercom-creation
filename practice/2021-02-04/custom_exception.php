<?php

$server = 'localhost';
$uname = 'root';
$pass = '';
$dbname = 'php_test1';

class ServerException extends Exception {}

class DatabaseException extends Exception {}

try {
	if (!@$conn = mysqli_connect($localhost,$uname,$pass)) {
		throw new ServerException("Could not connect with server..");
	} elseif (!@mysqli_select_db($dbname)) {
		throw new DatabaseException("Cant select Database...");
	} else {
		echo "Connected.........";
	}

} catch(ServerException $e) {
	echo "Error : ".$e->getMessage();

} catch(DatabaseException $e) {
	echo "Error : ".$e->getMessage();
}

?>