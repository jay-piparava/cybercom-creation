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
$name = $pass = $gender = $address = $day = $month = $year = $game = $status = $check = '';
$nameerr = $passerr = $generr = $adderr = $dayerr = $montherr = $yearerr = $gameerr = $staterr = $checkerr = '';
if (isset($_POST['submit'])) {
	if (empty( $_POST['name'])) {
		$nameerr = $nameerrs;
	} else {
		$name = test_input($_POST['name']);
	}
	if (empty( $_POST['password'])) {
		$passerr = $passerrs;
	} else {
		 $pass = test_input($_POST['password']);
	}
	if(empty( $_POST['gender'])) {
		$generr = $generrs;
	} else {
		 $gender = test_input($_POST['gender']);
	}
	if (empty( $_POST['address'])) {
		$adderr = $adderrs;
	} else {
		 $address = test_input($_POST['address']);
	}
	if (empty( $_POST['day'])) {
		$dayerr = $dayerrs;
	} else {
		 $day = test_input($_POST['day']);
	}
	if (empty( $_POST['month'])) {
		$montherr = $montherrs;
	} else {
		 $month = test_input($_POST['month']);
	}
	if (empty( $_POST['year'])) {
		$yearerr = $yearerrs;
	} else {
		 $year = test_input($_POST['year']);
	}
	if (empty( $_POST['merrage'])) {
		$staterr = $staterrs;
	} else {
		 $status = test_input($_POST['merrage']);
	}
	if(!empty($_POST['chkarr'])){
      
        $game = $_POST['chkarr'];
         $game = implode(" ", $game);
    } else {
    	$gameerr = $gameerrs;
    }
    if (empty( $_POST['accept'])) {
		$checkerr = $checkerrs;
	}
	 $bdate = "$year-$month-$day";
	if(!empty($name) && !empty($pass) && !empty($gender) && !empty($address) && !empty($day) && !empty($month) && !empty($year) && !empty($game) && !empty($status) && empty($check)){
		//for insert a data
		$qry = "insert into form2 values ('','$name','$pass','$gender','$address','$bdate','$game','$status')";
		mysqli_query($conn,$qry);
	
		//Close connection
		mysqli_close($conn);
		header('location:form_practice_2.php');
	}
}
//calling data display function
fetch_data('*','form2');
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
//get data function
function fetch_data($column,$table){
	global $conn;
	$qry = "select $column from $table";
	if($result = mysqli_query($conn, $qry)){
		if(mysqli_num_rows($result) > 0){
		    echo "<table>";
	        echo "<tr>";
	            echo "<th>id</th>";
	            echo "<th>First Name</th>";
	            echo "<th>Password</th>";
	            echo "<th>Gender</th>";
	            echo "<th>Address</th>";
	            echo "<th>Date Of Birth</th>";
	            echo "<th>Game</th>";
	            echo "<th>Merrage Status</th>";
	        echo "</tr>";
			while($data = mysqli_fetch_array($result)){
				echo "<tr>";
	            	echo "<td>".$data['id']."</td>";
	            	echo "<td>".$data['name']."</td>";
	            	echo "<td>".$data['password']."</td>";
	           		echo "<td>".$data['gender']."</td>";
	           		echo "<td>".$data['address']."</td>";
	           		echo "<td>".$data['dob']."</td>";
	           		echo "<td>".$data['game']."</td>";
	           		echo "<td>".$data['mstatus']."</td>";
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