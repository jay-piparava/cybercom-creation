<?php

require "../lib/DataSource.php";
use App\DataSource;

$data = new DataSource();
if(isset($_POST['action']))
{
	$table = 'user';
	$id = $id=$_POST['row_id'];
	$data = new DataSource();
	if($data->searchDataEmail($table,$id)){
		echo "fail";
	} else {
		echo "success";
	}
}
?>