<?php 
require "lib/DataSource.php";
require "errors/errors.php";
use App\DataSource;

$data = new DataSource();
$files = array('title','meta_title','url','content','file');
$table = 'category';
$selection = $_GET['id'];
$result = $data->getDataWithId($files,$table,$selection);

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
		$file=$result[0]['file'];
	} else {
		$file = test_input($_POST['file']);
	}
	if (!empty($title) && !empty($content) && !empty($url) && !empty($metatitle) && !empty($file)) {
		
		$date = date("Y-m-d");
		$data = new DataSource();
		$filed = array('title','content','url','meta_title','file','updated_at');
		$values = array($title,$content,$url,$metatitle,$file,$date);
		$table = 'category';
		if($data->update($filed,$values,$table,'id',$selection)) {
			$_SESSION['update_msg']="Record updated successfully..";
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