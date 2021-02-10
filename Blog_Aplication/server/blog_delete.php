<?php

require "../lib/DataSource.php";
use App\DataSource;

$data = new DataSource();
if(isset($_POST['action']))
{
	$table = 'blog_post';
	$id = $id=$_POST['row_id'];
	$data = new DataSource();
	if($data->deleteData($table,$id)){
		echo "success";
	} else {
		echo "error";
	}
}
?>