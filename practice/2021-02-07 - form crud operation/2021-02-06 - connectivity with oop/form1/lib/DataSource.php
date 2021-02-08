<?php

namespace App;
/**
 * class for connect database and perform a crud operation on it...
 */
class DataSource
{
	const HOST = 'localhost11';

	const USERNAME = 'root';

	const PASSWORD = '';

	const DATABASENAME = 'php_test';

	private $conn;
	
	function __construct()
	{
		$this->conn = $this->getConnection();	
	}

	//connection function for connect a database.....
	public function getConnection() {

		$this->conn = mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DATABASENAME);

		if ($this->conn) {
			return $this->conn;
		} else {
			echo "Could not connect with server.....";
		}
	}

	//function for insert record
	//public function
}

?>