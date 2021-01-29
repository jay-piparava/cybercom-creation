<?php

if(isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])){
	//here we use htmlentity so that the user input is secured.
	$day = htmlentities($_GET['day']);
	$month = htmlentities($_GET['month']);
	$year = htmlentities($_GET['year']);
	if (!empty($day) && !empty($month) && !empty($year)) {
		echo $day;
		echo "<br>$month";
		echo "<br>$year";
	} else {
		echo "Fill all fileds.....";
	}
}
?>
<form action="#" method="get">
	<b>DAY:</b><br>
	<input type="text" name="day"><br><br>
	<b>MONTH:</b><br>
	<input type="text" name="month"><br><br>
	<b>YEAR:</b><br>
	<input type="text" name="year"><br><br>
	<input type="submit" name="submit">
</form>
