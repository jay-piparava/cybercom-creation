<?php

require "lib/DataSource.php";
require "errors/errors.php";
use App\DataSource;

$prifix = $fname = $lname = $email = $phone = $info = $password = $cpassword = '';
$prifixe = $fnamee = $lnamee = $emaile = $phonee = $infoe = $passworde = $cpassworde = $agree ='';
if (isset($_POST['reg'])) {
	if (empty($_POST['prifix'])) {
		$prifixe = $prifixError;
	} else {
	 $prifix = test_input($_POST['prifix']);
	}
	if (empty($_POST['lname'])) {
		$lnamee = $lnameError;
	} else {
	 $lname = test_input($_POST['lname']);
	}
	if (empty($_POST['fname'])) {
		$fnamee = $fnameError;
	} else {
	 $fname = test_input($_POST['fname']);
	}
	if (empty($_POST['email'])) {
		$emaile = $emailError;
	} else {
	 	$email = test_input($_POST['email']);
	 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$emaile = "Invalid email format...";
  			$email = '';
		}
	}
	if (empty($_POST['phone'])) {
		$phonee = $phoneError;
	} else {
	 $phone = test_input($_POST['phone']);
	}
	if (empty($_POST['password'])) {
		$passworde = $passError;
	} else {
		if ($_POST['password'] == $_POST['cpassword']) {
			$password = test_input($_POST['password']);
		} else {
			$cpassworde = 'Password Doesnot match.';
		}
	 $password = test_input($_POST['password']);
	}
	if (empty($_POST['cpassword'])) {
		$cpassworde = $passError;
	} else {
	 $cpassword = test_input($_POST['cpassword']);
	}
	if (empty($_POST['accept'])) {
		$agree = $acceptError;
	}
	if (empty($_POST['info'])) {
		$infoe = $infoError;
	} else {
	 $info = test_input($_POST['info']);
	}
	if (!empty($prifix) && !empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($info) && !empty($password) && !empty($cpassword) &&  empty($agree)) {
		
		$filed = array('prifix','first_name','last_name','mobile','email','password','information','created_at');
		$date = date('Y-m-d');
		$password = md5($password);
		$values = array($prifix,$fname,$lname,$phone,$email,$password,$info,$date);
		$tablename = 'user';
		$data = new DataSource();
		if($data->insert($filed,$values,$tablename)){  
			//$_SESSION['insert'] = "Record inserted Successfully...";
			header('location:index.php');
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