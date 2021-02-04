<?php

/**
 * Class for connecting a database.....
 */
class DatabaseConnector
{
	
	function __construct($host,$username,$password)
	{
		echo "Attrmpting.....<br>";
		if ($this->connect($host,$username,$password)) {
			echo "Connected To the $host";
		} else {
			echo "Connection Failed.....";
		}
		
	}

	function connect($host,$username,$password)
	{
		if (!@mysqli_connect($host,$username,$password)) {
			return false;
		} elseif (mysqli_connect($host,$username,$password)) {
			return true;
		}
	}
}

$connect = new DatabaseConnector('localhost','root1','');

?>