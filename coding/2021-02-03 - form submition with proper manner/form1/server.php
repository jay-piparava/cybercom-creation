<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//variables for store value..
$name = $password = $address = $age = $file = $gender = $check = '';

//for set error message
$nameerror = $passworderror = $addresserror = $ageerror = $fileerror = $generr = $checkboxError = '';

if (isset($_POST['submit'])) {
	
	if (empty($_POST['name'])) {
		$nameerror = $nameerrors;
	} else {
		$name = test_input($_POST['name']);
	}
	if (empty($_POST['password'])) {
		$passworderror = $passworderrors;
	} else {
		$password = test_input($_POST['password']);
	}
	if (empty($_POST['add'])) {
		$addresserror = $addresserrors;
	} else {
		$address = trim(htmlentities($_POST['add']));
	}
	if (empty($_POST['age'])) {
		$ageerror = $ageerrors;
	} else {
		$age = test_input($_POST['age']);
	}
	if (empty($_POST['file'])) {
		$fileerror = $fileerrors;
	} else {
		$file = test_input($_POST['file']);
	}
	if (empty($_POST['gender'])) {
		$generr = $generrs;
	} else {
		$gender = test_input($_POST['gender']);
	}
	
	$p1 = $password;
	
	if(!empty($_POST['checkarr'])){
      
        $check = $_POST['checkarr'];
        $check = implode(" ", $check);
    } else {
    	$checkboxError = $checkboxErrors;
    }
	//now we insert this data in to a database
	if(!empty($name) && !empty($password) && !empty($address) && !empty($age) && !empty($file) && !empty($gender) && !empty($check)) {
		//insert data
 		$qry = "insert into form1 values ('','$name','$p1','$address','$check','$gender','$age','$file')";
 		if(mysqli_query($conn,$qry))
 		{
 			echo "<script>alert('Record inserted successfully.....');</script>";
 		}
 		//get data from database
 		fetch_data('*','form1');
 		// Close connection
 		mysqli_close($conn);
 		header('location:form_practice_1.php');
	} 
}
fetch_data('*','form1');
function fetch_data($column,$table){
	global $conn;
	$qry = "select $column from $table";
	if($result = mysqli_query($conn, $qry)){
		if(mysqli_num_rows($result) > 0){
		    echo "<table>";
	        echo "<tr>";
	            echo "<th>id</th>";
	            echo "<th>Name</th>";
	            echo "<th>Password</th>";
	            echo "<th>Address</th>";
	            echo "<th>Game</th>";
	            echo "<th>Age</th>";
	            echo "<th>Gender</th>";
	            echo "<th>File</th>";
            echo "</tr>";
			while($data = mysqli_fetch_array($result)){
				echo "<tr>";
	          		echo "<td>".$data['id']."</td>";
	           		echo "<td>".$data['name']."</td>";
	           		echo "<td>".$data['password']."</td>";
	           		echo "<td>".$data['address']."</td>";
	           		echo "<td>".$data['game']."</td>";
	           		echo "<td>".$data['age']."</td>";
	           		echo "<td>".$data['gender']."</td>";
	           		echo "<td>".$data['file']."</td>";
	           	echo "</tr>";
			}            	
	    echo "</table>";	
		} else{
		    echo "No data found";
	    }
	} else {
		echo "Error:".mysql_errno();
	} 	
}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>