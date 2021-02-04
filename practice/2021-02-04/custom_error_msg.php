<?php

$server = 'localhost';
$uname = 'root';
$pass = '';
$dbname = 'php_test1';

class ServerException extends Exception {
	public function getErrorMessage(){
		return "Error Caugth on ".$this->getLine()."in File ".$this->getFile()."Code is :".$this->getCode();
	}
}

class DatabaseException extends Exception {
	public function getErrorMessage(){
		return "Error Caugth on ".$this->getLine()."in File ".$this->getFile()."Code is :".$this->getCode();
	}
}

try {
	if (!@$conn = mysqli_connect($localhost,$uname,$pass)) {
		throw new ServerException("Could not connect with server..",405);
	} elseif (!@mysqli_select_db($conn,$dbname)) {
		throw new DatabaseException("Cant select Database...",101);
	} else {
		echo "Connected.........";
	}

} catch(ServerException $e) {
	echo "Error : ".$e->getErrorMessage();

} catch(DatabaseException $e) {
	echo "Error : ".$e->getErrorMessage();
}

?>