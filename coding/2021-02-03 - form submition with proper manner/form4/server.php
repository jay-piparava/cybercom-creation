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
$name = $email = $subject = $msg = '';
$namee = $emaile = $subjecte = $msge = '';
if (isset($_POST['submit'])) {
	if (empty($_POST['name'])) {
		$namee = $namees;
	} else {
		 $name = test_input($_POST['name']);
	}
	if (empty($_POST['email'])) {
		$emaile = $emailes;
	} else {
		 $email = test_input($_POST['email']);
		 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$emaile = "Invalid email format...";
  			$email = '';
		}
	}
	if (empty($_POST['sub'])) {
		$subjecte = $subjectes;
	} else {
		 $subject = test_input($_POST['sub']);
	}
	if (empty($_POST['msg'])) {
		$msge = $msges;
	} else {
		 $msg = test_input($_POST['msg']);
	}
	if (!empty($name) &&! empty($email) &&! empty($subject) && !empty($msg)) {
		//insert data
		$qry = "insert into form4 values ('','$name','$email','$subject','$msg')";
		mysqli_query($conn,$qry);
		header('location:form_practice_4.php');
		
	}
}
fetch_data('*','form4');
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
	            echo "<th>Name</th>";
	            echo "<th>Email</th>";
	            echo "<th>Subject</th>";
	            echo "<th>Message</th>";
	        echo "</tr>";
			while($data = mysqli_fetch_array($result)){
				echo "<tr>";
	            	echo "<td>".$data['id']."</td>";
	            	echo "<td>".$data['name']."</td>";
	            	echo "<td>".$data['email']."</td>";
	           		echo "<td>".$data['subject']."</td>";
	           		echo "<td>".$data['message']."</td>";
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