<?php

require 'mysql_connect_nd_select_db.php';
if(isset($_POST['uh']) && !empty($_POST['uh'])) {
	$type = $_POST['uh'];
	$qry = "select * from food where healthy_unhealthy = '$type'";
	if ($result = mysqli_query($conn , $qry)) {
		if(mysqli_num_rows($result) > 0) {
			while ($data = mysqli_fetch_assoc($result)) {
				echo $data['food name']."have a ".$data['calaries'].".<br>";
			}
		} else {
			echo "No result found.....";
		}
	} else {
		echo mysqli_error($conn);
	}
} else {
	echo "Select value....";
}

?>
<form action="#" method="POST">
	<select name="uh">
		<option value="h">Healthy</option>
		<option value="u">Un healthy</option>
	</select>
	<br><br>
	<input type="submit" name="Submit">
</form>
