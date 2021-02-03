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

$email = $pass = '';
$emaile = $passe = '';
if (isset($_POST['submit'])) {
	if (empty($_POST['email'])) {
		$emaile = $emailes;
	} else {
		$email = test_input($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$emaile = "Invalid email format...";
  			$email = '';
		}
	}
	if (empty($_POST['pass'])) {
		$passe = $passes;
	} else {
		$pass = test_input($_POST['pass']);
	}
	if (!empty($email) && !empty($pass)) {
		//insert data
		$qry = "insert into form5 values ('','$email','$pass')";
		mysqli_query($conn,$qry);
		header('location:form_practice_5.php');
		
	}
}
fetch_data('*','form5');
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
function fetch_data($column,$table){
	global $conn;
	$qry = "select $column from $table";
	if($result = mysqli_query($conn, $qry)){
		if(mysqli_num_rows($result) > 0){
		    echo "<table border='1'>";
	        echo "<tr>";
	            echo "<th>id</th>";
	            echo "<th>Email</th>";
	            echo "<th>Password</th>";
	        echo "</tr>";
			while($data = mysqli_fetch_array($result)){
				echo "<tr>";
	            	echo "<td>".$data['id']."</td>";
	            	echo "<td>".$data['email']."</td>";
	            	echo "<td>".$data['pass']."</td>";
	           	echo "</tr>";
			}            	
	    	echo "</table>";	
		} else{
		    echo "No data found";
		}
	} else {
		echo "Error:";
	} 
}
?>