<?php
require_once('connector.php');
$email = $pass = '';
$emaile = $passe = '';
if (isset($_POST['submit'])) {
	if (empty($_POST['email'])) {
		$emaile = "Please enter Email....";
	} else {
		$email = test_input($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$emaile = "Invalid email format...";
  			$email = '';
		}
	}
	if (empty($_POST['pass'])) {
		$passe = "Please enter Password....";
	} else {
		$pass = test_input($_POST['pass']);
	}
	if (!empty($email) && !empty($pass)) {
		//insert data
		$qry = "insert into form5 values ('','$email','$pass')";
		mysqli_query($conn,$qry);
		fetch_data('*','form5');
	}
}
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
<!DOCTYPE html>
<html>
<head>
	<title>Form practice 5</title>
	<link rel="stylesheet" type="text/css" href="form_practice_5.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>
<body>
	<center><br><br><br>
		<form action="#" method="post" id="form">
		<div class="div">
		<div>
			<label>Email</label><br>
			<input type="text" name="email" id="email" data-error="#erroremail">
			<br><span id="erroremail"><?php echo $emaile  ?></span>
		</div>
		<div>
			<label>Password</label><br>
			<input type="Password" name="pass" id="pass" data-error="#errorpass">
			<br><span id="errorpass"><?php echo $passe ?></span>
		</div><br>
		<div><input type="submit" name="submit" value="signIn"></div>
	</div>
	</form>
	</center>
	<script type="text/javascript" src="form_practice_5.js"></script>
</body>
</html>