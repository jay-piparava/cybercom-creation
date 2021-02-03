<?php
require_once('connector.php');
$name = $email = $subject = $msg = '';
$namee = $emaile = $subjecte = $msge = '';
if (isset($_POST['submit'])) {
	if (empty($_POST['name'])) {
		$namee = "Please Enter Name..";
	} else {
		 $name = test_input($_POST['name']);
	}
	if (empty($_POST['email'])) {
		$emaile = "Please Enter Email..";
	} else {
		 $email = test_input($_POST['email']);
		 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$emaile = "Invalid email format...";
  			$email = '';
		}
	}
	if (empty($_POST['sub'])) {
		$subjecte = "Please Enter Name..";
	} else {
		 $subject = test_input($_POST['sub']);
	}
	if (empty($_POST['msg'])) {
		$msge = "Please Enter Name..";
	} else {
		 $msg = test_input($_POST['msg']);
	}
	if (!empty($name) &&! empty($email) &&! empty($subject) && !empty($msg)) {
		//insert data
		$qry = "insert into form4 values ('','$name','$email','$subject','$msg')";
		mysqli_query($conn,$qry);
		fetch_data('*','form4');
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
<!DOCTYPE html>
<html>
<head>
	<title>form 4</title>
	<link rel="stylesheet" type="text/css" href="form_practice_4.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js">
	</script>
</head>
<body><br><br>
	<center>
		<br><br>
		<form action="#" method="post" id="form">
		<div class='outer'><form>
			<div><input class="type" placeholder="Name" name='name' type="text" id="name" data-error="#errname">
				<br><span id="errname"><?php echo $namee; ?></span>
			</div>
			<div><input class="type" placeholder="Email" name="email" type="text" id="email" data-error="#erremail">
				<br><span id="erremail"><?php echo $emaile; ?></span>
			</div>
			<div><input class="type" placeholder="Subject" type="text" name="sub" id="sub" data-error="#errsub">
				<br><span id="errsub"><?php echo $subjecte; ?></span>
			</div>
			<div><textarea class="area" placeholder="Message..." name="msg" name="msg" id="msg" rows="5" data-error="#errmsg"></textarea>
				<br><span id="errmsg"><?php echo $msge; ?></span>
			</div>
			<label id='lbl'></label>
			<div><input type="submit" class="submit" id="form4" value="SEND MESSAGE" name="submit"></div>
		</div>
	</form>
	</center>
	<script type="text/javascript" src="form_practice_4.js"></script>
</body>

</html>