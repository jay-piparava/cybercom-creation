<?php

require 'mysql_connect_nd_select_db.php';
$qry = 'select * from food';

if($result = mysqli_query($conn ,$qry)) {
	while ($qry_row = mysqli_fetch_assoc($result)) {
		echo "<br>".$qry_row['food name'] ."  ". $qry_row['calaries'] ."  ". $qry_row['healthy_unhealthy'];
	}
} else {
	echo mysqli_error($conn);
}

?>