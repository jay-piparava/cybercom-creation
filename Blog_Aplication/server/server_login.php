<?php

require "lib/DataSource.php";
require "errors/errors.php";
use App\DataSource;

$pass = $email ="";
$flag = 0;
$passerr = $eerror = $loginerr ="";

if (isset($_POST['Login'])) {
	if (empty($_POST['email'])) {
		$eerror = $emailError;
	} else {
		$email = test_input($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$eerror = "Invalid email format...";
  			$email = '';
		}
	}
	if (empty($_POST['password'])) {
		$passerr = $passError;
	} else {
		$pass = test_input($_POST['password']);
	}
	if (!empty($pass) && !empty($email)) {
        $data = new DataSource();
        $pass = md5($pass);
        $qry = "select email,id from user where email = '$email' and password = '$pass'";
        if($data->login($qry)){
        	$data = new DataSource();
        	$fileds=array('lastlogin');
        	$values=array(date("Y-m-d"));
        	$fild_to_select = 'email';
        	$select = $_SESSION['user_email'];
        	$data->update($fileds,$values,'user',$fild_to_select,$select);
        	$flag = 1;
            //header('location:blog.php');
        } else {
            $loginerr = "username or passeord are incorrect....";
        }
        if ($flag) {
        	header('location:blog.php');
        }else
        echo "no";
	}
}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>