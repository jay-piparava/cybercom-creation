<?php

if (isset($_POST['nm']) && isset($_POST['lnm']) && isset($_POST['gender'])) {
	echo "Name : ".$_POST['nm']."<br>";
	echo "Last Name : ".$_POST['lnm']."<br>";
	echo "Hobby : ";
	if (!empty($_POST['cricket'])) {
		echo " ".$_POST['cricket'];	
	}
	if (!empty($_POST['football'])) {
		echo " ".$_POST['football'];
	}
	if (!empty($_POST['basketball'])) {
		echo " ".$_POST['basketball'];
	}
	echo "<br>Gender : ".$_POST['gender']."<br>";
} 

?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
	<form action="#" method="post">
		Name : <input type="text" name="nm"><br><br>
		last name :<input type="text" name="lnm"><br><br>
		Hobby :Cricket<input type="checkbox" name="cricket"  value="cricket">
				Football<input type="checkbox" name="football"  value="football">
				Basketball<input type="checkbox" name="basketball"  value="basketball"><br><br>
		gender:male<input type="radio" id="male" name="gender" value="male">
  				female<input type="radio" id="female" name="gender" value="female"><br><br>
  	<input type="submit" name="submit"><input type="reset" name="cancel">
	</form>
</body>
</html>