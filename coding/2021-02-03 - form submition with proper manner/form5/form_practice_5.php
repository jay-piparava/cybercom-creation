<?php
require_once('errors.php');
require_once('server.php');

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
			<input type="text" name="email" id="email" data-error="#erroremail" value="<?php echo $email; ?>">
			<br><span id="erroremail"><?php echo $emaile  ?></span>
		</div>
		<div>
			<label>Password</label><br>
			<input type="Password" name="pass" id="pass" data-error="#errorpass" value="<?php echo $pass; ?>">
			<br><span id="errorpass"><?php echo $passe ?></span>
		</div><br>
		<div><input type="submit" name="submit" value="signIn"></div>
	</div>
	</form>
	</center>
	<script type="text/javascript" src="form_practice_5.js"></script>
</body>
</html>