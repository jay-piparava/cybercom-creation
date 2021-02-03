<?php

session_start();
if (isset($_SESSION['user_id'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>You are logged in <?php echo $_SESSION['name']; ?><a href="logout.php">Log out</a></h1>
</body>
</html>
<?php
} else {
	header('location:login.php');
}
?>