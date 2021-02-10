<?php 
namespace App;
@session_start();
/**
 * class for connect database and perform a crud operation on it...
 */
class DataSource
{
	const HOST = 'localhost';

	const USERNAME = 'root';

	const PASSWORD = '';

	const DATABASENAME = 'test_php';

	private $conn;
	
	function __construct()
	{
		$this->conn = $this->getConnection();	
	}

	//connection function for connect a database.....
	public function getConnection() {

		$this->conn = @mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DATABASENAME);

		if ($this->conn) {
			return $this->conn;
		} else {
			echo "Could not connect with server.....";
		}
    }
    //function for login
    public function login($qry){
        $email = '';
		if ($res = mysqli_query($this->conn , $qry)) {
            if (mysqli_num_rows($res) > 0) {
                while ($data = mysqli_fetch_assoc($res)) {
                     $email = $data['email'];
                }
                $_SESSION['user_email']=$email;
                return true;
            } else {
                return false;
            }
            return $datas;
        } else {
            echo "<script>alert('Error in query...');</script>";
        }
    }

    //function for insert record
	public function insert($column,$values,$table){
		$column = implode(',', $column);
		$values1 = array();
		foreach ($values as $val) {
			array_push($values1,"'".$val."'");
		}
		$values = implode(',', $values1);
		echo $qry = "insert into $table ($column) values($values)";
		if (mysqli_query($this->conn,$qry)) {
			return true;
		} else {
			return false;
		}
	}

	//function for update records...
	public function update($fileds,$values,$table,$fileds_to_update,$selection){
		$done = array();
		for ($i=0; $i < count($fileds); $i++) {
			$data = $fileds[$i]."='".$values[$i]."'"; 
			array_push($done, $data);
		}
		$set = implode(',', $done);
		$qry = "update $table set $set where $fileds_to_update = '$selection'";
		if ($res = mysqli_query($this->conn , $qry)) {
			return true;
		} else {
			return false;
		}
	}

	//function for getData from Database..
	public function getData($fileds,$table){
		$filed = implode(',', $fileds);
		$datas = array();
	 	$qry = "select $filed from $table";
	 	if ($res = mysqli_query($this->conn , $qry)) {
	 		if (mysqli_num_rows($res) > 0) {
	 			while ($data = mysqli_fetch_assoc($res)) {
	 				array_push($datas, $data);	
	 			}
	 		} else {
	 			return false;
	 		}
	 		return $datas;
	 	} else {
	 	}
	}

	public function getDataWithId($fileds,$table,$selection){
		$filed = implode(',', $fileds);
		$datas = array();
	 	$qry = "select $filed from $table where id=$selection";
	 	if ($res = mysqli_query($this->conn , $qry)) {
	 		if (mysqli_num_rows($res) > 0) {
	 			while ($data = mysqli_fetch_assoc($res)) {
	 				array_push($datas, $data);	
	 			}
	 		} else {
	 			return false;
	 		}
	 		return $datas;
	 	} else {
	 		echo "<script>alert('Error in query...');</script>";
	 	}
	 }

	 //function for delete a data....
	public function deleteData($table,$id) {
		$qry = "delete from $table where id = $id";
		if (mysqli_query($this->conn,$qry)) {
			return true;
		} else {
			return false;
		}
	}

	public function searchData($table,$title) {
		$qry = "select * from $table where title = '".$title."'";
		
		if ($res = mysqli_query($this->conn , $qry)) {
	 		if (mysqli_num_rows($res) > 0) {
	 			return true;
	 		} else {
	 			return false;
	 		}
	 		
	 	} else {
	 		return false;
	 	}
	}
	public function searchDataEmail($table,$title) {
		$qry = "select * from $table where email = '".$title."'";
		
		if ($res = mysqli_query($this->conn , $qry)) {
	 		if (mysqli_num_rows($res) > 0) {
	 			return true;
	 		} else {
	 			return false;
	 		}
	 		
	 	} else {
	 		return false;
	 	}
	}
	

}

?>