<?php
require "lib/DataSource.php";
use App\DataSource;

$title = $content = $url = $cat = $file ="";

if (isset($_POST['submit'])) {
	
	if (empty($_POST['title'])) {
	} else {
		echo $title = test_input($_POST['title']);
	}
	if (empty($_POST['content'])) {
	} else {
		echo $content = test_input($_POST['content']);
	}
	if (empty($_POST['url'])) {
	} else {
		echo $url = test_input($_POST['url']);
	}
	if (empty($_POST['cat'])) {
	} else {
		echo $cat = test_input($_POST['cat']);
	}
	if (empty($_POST['file'])) {
	} else {
		echo $file = test_input($_POST['file']);
	}
	if (!empty($title) && !empty($content) && !empty($url) && !empty($cat) && !empty($file)) {
		
		$date = date("Y-m-d");
		$user_id = $_SESSION['id'];
		$filed = array('user_id','title','url','category','content','image','publish_at','created_at');
		$values = array($user_id,$title,$url,$cat,$content,$file,$date,$date);
		$tablename = 'blog_post';
		$data = new DataSource();
		if($data->insert($filed,$values,$tablename)){  
			$_SESSION['insert']="Record added successfully..";
			header('location:blog.php');
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