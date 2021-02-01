<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$Subject = $_POST['sub'];
	$mas = $_POST['msg'];
	echo "<center><b>Data:</b><br>";
	echo "Name : $name<br>";
	echo "Email : $email<br>";
	echo "Subject : $Subject<br>";
	echo "Message : $mas<br>";
	echo "</center>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>form 4</title>
	<link rel="stylesheet" type="text/css" href="form_practice_4.css">
</head>
<body><br><br>
	<center>
		<br><br>
		<form action="#" method="post">
		<div class='outer'><form>
			<div><input class="type" placeholder="Name" name='name' type="text" id="name" onblur="requiredfiled('errname','name')">
				<span id="errname"></span>
			</div>
			<div><input class="type" placeholder="Email" name="email" type="text" id="email" onblur="requiredfiled('erremail','email')">
				<span id="erremail"></span>
			</div>
			<div><input class="type" placeholder="Subject" type="text" name="sub" id="sub" onblur="requiredfiled('errsub','sub')">
				<span id="errsub"></span>
			</div>
			<div><textarea class="area" placeholder="Message..." name="msg" name="msg" id="msg" rows="5" onblur="requiredfiled('errmsg','msg')"></textarea>
				<span id="errmsg"></span>
			</div>
			<label id='lbl'></label>
			<div><input type="submit" class="submit" id="form4" value="SEND MESSAGE" name="submit"></div>
		</div>
	</form>
	</center>
	<script type="text/javascript" src="form_practice_4.js"></script>
</body>

</html>