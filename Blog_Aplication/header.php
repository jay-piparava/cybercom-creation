<?php
@session_start();

if (!isset($_SESSION['user_email'])) {
	header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact page</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	</head>
	<body>
	    <div class="fixed-header">
	        <div class="container">
	            <nav>
	            	<h1 class="title">Blog</h1>
	                <a href="categoty.php">Category</a>
	                <a href="blog.php">Blog</a>
	                <a href="logout.php">Logout</a>
	            </nav>
	        </div>
	    </div>