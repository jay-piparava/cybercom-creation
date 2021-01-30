<?php

if(isset($_POST['pass'])) {
	if(!empty($_POST['pass'])) {
		$pass = md5($_POST['pass']);
		$handler = fopen('hash.txt','r');
		$match_pass = fread($handler, filesize('hash.txt'));
		fclose($handler);
		$match_pass;
		if ($match_pass === $pass) {
			echo "Password match.......";
		} else {
			echo "Incorrect Password....";
		}
	} else {
		echo "Please Enter Password.";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>MD5 Example</title>
</head>
<body>
	<form action="#" method="post">
		Password : <input type="password" name="pass"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html> 