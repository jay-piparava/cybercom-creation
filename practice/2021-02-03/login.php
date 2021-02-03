<?php
session_start();
require_once('connect.php');
if (isset($_POST['submit'])) {
	$username = $_POST['uname'];
	$pass = $_POST['pass'];
	$id = '';
	$name = '';
	if (!empty($username) && !empty($pass)) {
		$qry = "select username , password ,id , firstname from user where username = '".mysqli_real_escape_string($conn,$username)."' and password = '".mysqli_real_escape_string($conn,$pass)."'";
		if ($res = mysqli_query($conn,$qry)) {
			if ($row = mysqli_num_rows($res) > 0) {
				while ($data = mysqli_fetch_assoc($res)) {
					$id = $data['id'];
					$name = $data['firstname'];
				}
				echo "Valid";
				$_SESSION['user_id'] = $id;
				$_SESSION['name'] = $name;
				header('location:dashboard.php');
			} else {
				echo "Invalid username or password...";
			}
		} else {
			echo mysqli_error($conn);
		}
	} else {
		echo "Please enter Username and PassWord....";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="#" method="post">
		User Name : <input type="text" name="uname"><br><br>
		PassWord : <input type="PassWord" name="pass"><br><br>
		<input type="submit" name="submit" value="Login"><br>
		Not a user...<a href="registration.php">Register now </a>
	</form>
</body>
</html>