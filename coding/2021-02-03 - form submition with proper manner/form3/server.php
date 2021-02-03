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
$name = $lname = $gender = $month = $year = $daye = $country = $email = $phone = $password = $cpassword ='';
$namee = $lnamee = $gendere = $monthe = $yeare = $daye = $countrye = $emaile = $phonee = $passworde = $cpassworde = $agree ='';
if (isset($_POST['submit'])) {
	if (empty($_POST['name'])) {
		$namee = $namees;
	} else {
	 $name = test_input($_POST['name']);
	}
	if (empty($_POST['lname'])) {
		$lnamee = $lnamees;
	} else {
	 $lname = test_input($_POST['lname']);
	}
	if (empty($_POST['gender'])) {
		$gendere = $genderes;
	} else {
	 $gender = test_input($_POST['gender']);
	}
	if (empty($_POST['day'])) {
		$daye = $dayes;
	} else {
	 $day = test_input($_POST['day']);
	}
	if (empty($_POST['month'])) {
		$monthe = $monthes;
	} else {
	 $month = test_input($_POST['month']);
	}
	if (empty($_POST['year'])) {
		$yeare = $yeares;
	} else {
	 $year = test_input($_POST['year']);
	}
	if (empty($_POST['country'])) {
		$countrye = $countryes;
	} else {
	 $country = test_input($_POST['country']);
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
	if (empty($_POST['phone'])) {
		$phonee = $phonees;
	} else {
	 $phone = test_input($_POST['phone']);
	}
	if (empty($_POST['password'])) {
		$passworde = $passwordes;
	} else {
		if ($_POST['password'] == $_POST['cpassword']) {
			$password = test_input($_POST['password']);
		} else {
			$cpassworde = 'Password Doesnot match.';
		}
	 $password = test_input($_POST['password']);
	}
	if (empty($_POST['cpassword'])) {
		$cpassworde = $cpasswordes;
	} else {
	 $cpassword = test_input($_POST['cpassword']);
	}
	if (empty($_POST['accept'])) {
		$agree = $agrees;
	}
	if (!empty($name) && !empty($lname) && !empty($gender) && !empty($month) && !empty($year) && !empty($day) && !empty($country) && !empty($email) && !empty($phone) && !empty($password) &&  empty($agree)) {
		$bdate = "$day - $month - $year";
		if ($password == $cpassword) {
			//insert data
			$qry = "insert into form3 values ('','$name','$lname','$bdate','$gender','$email','$phone','$password')";
			mysqli_query($conn,$qry);
			header('location:form_practice_3.php');
		}	
	}
}
fetch_data('*','form3');
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
		    echo "<table>";
	        echo "<tr>";
	            echo "<th>id</th>";
	            echo "<th>First</th>";
	            echo "<th>lastname</th>";
	            echo "<th>Date Of Birth</th>";
	            echo "<th>gender</th>";
	            echo "<th>Email</th>";
	            echo "<th>Phone</th>";
	            echo "<th>Password</th>";
	        echo "</tr>";
			while($data = mysqli_fetch_array($result)){
				echo "<tr>";
	            	echo "<td>".$data['id']."</td>";
	            	echo "<td>".$data['name']."</td>";
	            	echo "<td>".$data['lname']."</td>";
	           		echo "<td>".$data['dob']."</td>";
	           		echo "<td>".$data['gender']."</td>";
	           		echo "<td>".$data['email']."</td>";
	           		echo "<td>".$data['phone']."</td>";
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