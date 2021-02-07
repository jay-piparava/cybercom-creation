<?php
session_start();

require "lib/DataSource.php";
require "errors/error.php";
use App\DataSource;

$name = $email = $phone = $title ="";
$nerror = $eerror = $ephone = $terror ="";


if (isset($_POST['submit'])) {
	
	if (empty($_POST['name'])) {
		$nerror = $nameError;
	} else {
		$name = test_input($_POST['name']);
	}
	if (empty($_POST['email'])) {
		$eerror = $emailError;
	} else {
		$email = test_input($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$eerror = "Invalid email format...";
  			$email = '';
		}
	}
	if (empty($_POST['phone'])) {
		$ephone = $phoneError;
	} else {
		$phone = test_input($_POST['phone']);
	}
	if (empty($_POST['title'])) {
		$terror = $titleError;
	} else {
		$title = test_input($_POST['title']);
	}
	$date = $_POST['date'];
	if (!empty($name) && !empty($email) && !empty($phone) && !empty($title) && !empty($date)) {
		
		$filed = array('name','email','phone','title','created');
		$values = array($name,$email,$phone,$title,$date);
		$tablename = 'users';
		$data = new DataSource();
		if($data->insert($filed,$values,$tablename)){  
			$_SESSION['insert'] = "Record inserted Successfully...";
			header('location:contacts.php');
		} else {
			echo "<script>alert('Error In Insert Record.....');</script>";
		}
	}

	
}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>