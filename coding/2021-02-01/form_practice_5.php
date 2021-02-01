<?php

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	echo "<center><b> Data : </b><br>";
	echo "Email : $email<br>";
	echo "Password : $pass";
	echo "</center>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form practice 5</title>
	<link rel="stylesheet" type="text/css" href="form_practice_5.css">
</head>
<body>
	<center><br><br><br>
		<form action="#" method="post" name="form">
		<div class="div">
		<div>
			<label>Email</label><br>
			<input type="text" name="email" id="email" onblur="requiredfiled('erroremail','email')">
			<label id="erroremail"></label>
		</div>
		<div>
			<label>Password</label><br>
			<input type="Password" name="pass" id="pass" onblur="requiredfiled('errorpass','pass')">
			<label id="errorpass"></label>
		</div>
		<div><input type="submit" name="submit" value="submit" value="signIn" id="form5"></div>
	</div>
	</form>
	</center>
	<script type="text/javascript" src="form_practice_5.js"></script>
</body>
</html>