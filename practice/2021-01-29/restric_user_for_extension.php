<?php
if (isset($_FILES['file']['name'])) {
	if(!empty($_FILES['file']['name'])) {
		$name = $_FILES['file']['name'];
		$size = $_FILES['file']['size'];
		// echo $type = $_FILES['file']['type'];
		$tmp_loc = $_FILES['file']['tmp_name'];
		$ext = strtolower(substr($name ,strpos($name, '.')+1));
		// echo $error = $_FILES['file']['error'];
		// echo "<pre>";
		// print_r($_FILES);
		if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'image/jpeg') {
			$location = 'uploads/';
			if (move_uploaded_file($tmp_loc, $location.$name)) {
				echo "File Uploaded Successfully.....";
			} else {
				echo "Problem to upload file...";
			}	
		} else {
			echo "File must be jpg , jpeg , image/jpeg....";
		}
		
	} else {
		echo "Please choose a file jpg , jpeg , image/jpeg....";
	} 
} 

?>
<form action="#" method="post" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="Upload file">
</form>