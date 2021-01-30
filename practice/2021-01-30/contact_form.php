<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['qry'])) {
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['qry'])){
	 	$name = $_POST['name'];
	 	$send_to = $_POST['email'];
	 	$qry = $_POST['qry'];
	 	if (mail($send_to, "Query form a $send_to","$name \n $qry")) {
	 		echo "we will in touch with you soon.....";
	 	} else {
	 		echo "some error occured....";
	 		echo "<br><b>You entered data.....<br></b>";
	 		echo "<br>name : $name";
	 		echo "<br>Email : $send_to";
	 		echo "<br>Your Query : $qry";
	 	}
	} else {
		echo "All fileds are required.....";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact form</title>
</head>
<body>
	<form action="#" method="post">
		Name : <input type="text" name="name"><br><br>
		Email : <input type="Email" name="email"><br><br>
		Query : <textarea name="qry"></textarea><br><br>
		<input type="submit" value="Send Query">
	</form>
</body>
</html>