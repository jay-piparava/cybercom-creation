<?php

require_once('connect.php');
if (isset($_POST['submit'])) {
	$search = $_POST['search'];
	if (!empty($search)) {
		$qry = "select name from search where name like '%".mysqli_real_escape_string($conn,$search)."%'";
		if($result = mysqli_query($conn,$qry))
		{
			if ($row = mysqli_num_rows($result) > 0) {
				while ($data = mysqli_fetch_assoc($result)) {
					echo $data['name']."<br>";
				}
			} else {
				echo "No Matching Data........";
			}
		} else {
			echo mysqli_error($conn);
		}
	} else {
		echo "Enter Value....";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<form action="#" method="post">
		<input type="text" name="search" placeholder="Enter value for search...">&nbsp;&nbsp;<input type="submit" name="submit">
		
	</form>
</body>
</html>