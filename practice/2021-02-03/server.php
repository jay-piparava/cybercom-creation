<?php
require 'connect.php';
if (isset($_POST['submit'])) {
	if(!empty($_POST['user']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['pass'])) {
		$user = $_POST['user'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$pass = $_POST['pass'];
		echo $query = "insert into user values ('','$user','$pass','$fname','$lname')";
		mysqli_query($conn,$query);
		header('location:login.php');
	} else {
		echo "Enter all data...";
	}
}

?>