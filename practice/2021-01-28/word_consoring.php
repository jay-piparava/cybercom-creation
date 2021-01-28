<?php

if( isset($_POST['u_input'] ) && !empty($_POST['u_input'])) {
	echo "<center>";
	$str = $_POST['u_input'];
	$find = array("Hello" ,"Student" ,"Marwadi university");
	$replace = array("Hi", "Intern" ,"Cybercom Creation");
	echo $new_str = str_ireplace($find, $replace, $str);
	echo "</center>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Find and replace text</title>
</head>
<body>
	<center><hr>
		<form action="#" method="post">
			<textarea rows="6" cols="30" name="u_input">
				<?php 
					if (isset($str)) {
						echo $str; 	
					}
				?>
			</textarea><br><br>
			<input type="submit" value="Find and replace">			
		</form>
	</center>
</body>
</html>