<?php
require_once('errors.php');
require_once('server.php');

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
			<div><input class="type" placeholder="Name" name='name' type="text" id="name" data-error="#errname" value="<?php echo $name; ?>">
				<br><span id="errname"><?php echo $namee; ?></span>
			</div>
			<div><input class="type" placeholder="Email" name="email" type="text" id="email" data-error="#erremail" value="<?php echo $email; ?>">
				<br><span id="erremail"><?php echo $emaile; ?></span>
			</div>
			<div><input class="type" placeholder="Subject" type="text" name="sub" id="sub" data-error="#errsub" value="<?php echo $subject;?>">
				<br><span id="errsub"><?php echo $subjecte; ?></span>
			</div>
			<div><textarea class="area" placeholder="Message..." name="msg" name="msg" id="msg" rows="5" data-error="#errmsg"><?php
			echo $msg; ?></textarea>
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