<?php
require "lib/DataSource.php";
use App\DataSource;

$title = $content = $url = $metatitle = $file ="";

if (isset($_POST['submit'])) {
	
	if (empty($_POST['title'])) {
	} else {
		$title = test_input($_POST['title']);
	}
	if (empty($_POST['content'])) {
	} else {
		$content = test_input($_POST['content']);
	}
	if (empty($_POST['url'])) {
	} else {
		$url = test_input($_POST['url']);
	}
	if (empty($_POST['title'])) {
	} else {
		$title = test_input($_POST['title']);
	}
	if (empty($_POST['meta'])) {
	} else {
		$metatitle = test_input($_POST['meta']);
	}
	if (empty($_POST['file'])) {
	} else {
		$file = test_input($_POST['file']);
	}
	if (!empty($title) && !empty($content) && !empty($url) && !empty($metatitle) && !empty($file)) {
		
		$date = date("Y-m-d");
		$filed = array('title','content','url','meta_title','file','created_at');
		$values = array($title,$content,$url,$metatitle,$file,$date);
		$tablename = 'category';
		$data = new DataSource();
		if($data->insert($filed,$values,$tablename)){  
			$_SESSION['insert']="Record added successfully..";
			header('location:categoty.php');
		} else {
			echo "<script>alert('Error In Insert Record.....');</script>";
		}
	}
	else {
		echo "All fileds are required...";
	}

}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>