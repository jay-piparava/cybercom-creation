<?php

$match = "pass123";
if(isset($_POST['pass'])){
	$pass = $_POST['pass'];
	if (!empty($pass)) {
		if ($match == $pass) {
			echo "Password match....";
		} else {
			echo "Password not match...";
		}
	} else {
		echo "Enter Password.....";
	}
}

?>
<form action="#" method="post">
	<b>Password:</b><br>
	<input type="password" name="pass"><br><br>
	<input type="submit" name="submit">
</form>