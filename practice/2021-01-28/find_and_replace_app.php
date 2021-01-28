<?php

if( isset($_POST['u_input'] ) && isset($_POST['search']) && isset($_POST['replace'])) {
	$data = $_POST['u_input'];
	$search = $_POST['search'];
	$replace = $_POST['replace'];
	$search_len = strlen($replace);
	$data1 = '';
	$data2 = '';
	$offset = 0;
	if (!empty($data) && !empty($search) && !empty($replace)) {
		while ($str_pos = strpos($data, $search ,$offset)) {
			$offset = $str_pos + $search_len;
			$data = substr_replace($data, $replace, $str_pos ,$search_len);
		}
		echo "<center>";
			echo $data;
		echo "</center>";	
	} else {
		echo "fill data properly...";
	}
	$data1 = $_POST['u_input'];
	echo "<center><b>Another way with str_replace()</b><br>";
	echo $data2 = str_replace($search, $replace, $data1);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Find and replace Application</title>
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
			<b>Search For :</b><br>
				<input type="text" name="search"><br><br>
			<b>Replace With :</b><br>
				<input type="text" name="replace"><br><br>
			<input type="submit" value="Find and replace">			
		</form>
	</center>
</body>
</html>