<?php  

if (isset($_POST['text'])) {
	$data = $_POST['text'];
	if (!empty($data)) {
		if ($conn = mysqli_connect('localhost','root','','php_test')) {
			$qry = "insert into searching values ('','".mysqli_real_escape_string($conn,$data)."')";
			if(mysqli_query($conn,$qry)){
				echo "Record inserted Successfully......";
			} else {
				echo "Try Again....";
			}
		}
	} else {
		echo "Please Enter Data...";
	}
}
 
?>