<?php

require "../lib/DataSource.php";
require "../errors/errors.php";
use App\DataSource;

$data = new DataSource();
if(isset($_POST['action'])){
    $id=$_POST['row_id'];
    if($data->deleteData('form2',$id)){
        echo "success";
	} else {
		echo "error";
    }

}
?>