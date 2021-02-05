<?php

if (isset($_GET['find'])) {
	$find = $_GET['find'];
	$msg = '';

}
if ($conn = mysqli_connect('localhost','root','','php_test')) {
	$qry = "select name from searching where name like '".mysqli_real_escape_string($conn,$find)."%'";
	$result = mysqli_query($conn,$qry);
	if (mysqli_num_rows($result) > 0) {
		$msg = "Email already exists.....";
		if ($find == '') {
			$msg = "";
		}
		echo $msg;
	}
}

?>