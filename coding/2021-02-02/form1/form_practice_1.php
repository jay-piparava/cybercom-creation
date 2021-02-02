<?php
	$name = $password = $address = $age = $file = $gender = '';
	$nameerror = $passworderror = $addresserror = $ageerror = $fileerror = $generr = $checkboxError = '';
if (isset($_POST['submit'])) {
	
	if (empty($_POST['name'])) {
		$nameerror = "Name is Required.";
	} else {
		$name = test_input($_POST['name']);
	}
	if (empty($_POST['password'])) {
		$passworderror = "Password is Required.";
	} else {
		$password = test_input($_POST['password']);
	}
	if (empty($_POST['add'])) {
		$addresserror = "Address is Required.";
	} else {
		$address = trim(htmlentities($_POST['add']));
	}
	if (empty($_POST['age'])) {
		$ageerror = "Age is Required.";
	} else {
		$age = test_input($_POST['age']);
	}
	if (empty($_POST['file'])) {
		$fileerror = "File is Required.";
	} else {
		$file = test_input($_POST['file']);
	}
	if (empty($_POST['gender'])) {
		$generr = "Gender is Required.";
	} else {
		$gender = test_input($_POST['gender']);
	}
	// echo "<center><b>Your Data </b>";
	// echo "<br>Your Name : $name";
	$p1 = $password;
	// echo "<br>Your Address : $address";
	// echo "<br>Your Gender : $gender";
	// echo "<br>Your Age : $age";
	// echo "<br>Your File : $file";
	// echo "<br>Your Hobby :<br>";
	$check = '';
	if(!empty($_POST['checkarr'])){
      
        $check = $_POST['checkarr'];
        $check = implode(" ", $check);
    } else {
    	$checkboxError = "Select atleast one.....";
    }
	//now we insert this data in to a database
	require_once('connector.php');

	function fetch_data($column,$table){
		global $conn;
		$qry = "select $column from $table";
		if($result = mysqli_query($conn, $qry)){
		    if(mysqli_num_rows($result) > 0){
		    	echo "<table>";
	            echo "<tr>";
	                echo "<th>id</th>";
	                echo "<th>Name</th>";
	                echo "<th>Password</th>";
	                echo "<th>Address</th>";
	                echo "<th>Game</th>";
	                echo "<th>Age</th>";
	                echo "<th>Gender</th>";
	                echo "<th>File</th>";
	            echo "</tr>";
				while($data = mysqli_fetch_array($result)){
					echo "<tr>";
	            		echo "<td>".$data['id']."</td>";
	            		echo "<td>".$data['name']."</td>";
	            		echo "<td>".$data['password']."</td>";
	            		echo "<td>".$data['address']."</td>";
	            		echo "<td>".$data['game']."</td>";
	            		echo "<td>".$data['age']."</td>";
	            		echo "<td>".$data['gender']."</td>";
	            		echo "<td>".$data['file']."</td>";
	            	echo "</tr>";
				}            	
	        echo "</table>";	
		    } else{
		        echo "No data found";
		    }
		} else {
			echo "Error:".mysql_errno();
		} 
	}
		//insert data
		$qry = "insert into form1 values ('','$name','$p1','$address','$check','$gender','$age','$file')";
		mysqli_query($conn,$qry);
		fetch_data('*','form1');
		// Close connection
		mysqli_close($conn);
}
function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form practice 1</title>
	<link rel="stylesheet" type="text/css" href="form_practice_1.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>
<body>
	<center>
		<form action="#" id="myform" method="post">
			<table border="2">
				<tr>
					<td colspan="2" class="heading"><h1>User Form</h1></td>
				</tr>
				<tr>
					<td class="form-heading"><p>Enter Name:</p></td>
					<td class="form-input"><input class="form-input" type="text" name="name" id="name" data-error="#nameerror">
					<span id="nameerror"><?php echo $nameerror; ?></span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>Password:</p></td>
					<td class="form-input"><input class="form-input" type="password" name="password" id="password" data-error="#passworderror">
					<span id="passworderror"><?php echo $passworderror; ?></span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>Address:</p></td>
					<td class="form-input"><textarea class="form-input" name="add" id="add" data-error="#addresserror"></textarea>
					<span id="addresserror"><?php echo $addresserror; ?></span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>select Game:</p></td>
					<td><input type="checkbox" id="hocky" data-error="#checkboxError" name="checkarr[]" value="Hocky">Hocky<br>
						<input type="checkbox" id="football" data-error="#checkboxError" name="checkarr[]" value="Football">Football<br>
						<input type="checkbox" data-error="#checkboxError" id="badmintan" name="checkarr[]" value="Badmintan">Badmintan<br>
						<input type="checkbox" data-error="#checkboxError" id="cricket" name="checkarr[]" value="Cricket">Cricket<br>
						<input type="checkbox" id="vollyball" data-error="#checkboxError" name="checkarr[]" value="Vollyball">Vollyball<br>
						<span id="checkboxError"><?php echo $checkboxError; ?></span>
					</td>
					
				</tr>
				<tr>
					<td class="form-heading"><p>Gender:</p></td>
					<td><input type="radio" id="male" name="gender" value="Male" data-error="#radioerror" >Male
						<input type="radio" id="female" name="gender" value="Female" data-error="#radioerror">Female
						<br><span id="radioerror"><?php echo $generr; ?></span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>Select Age:</p></td>
					<td>
						<select class="form-input" name="age" id="age" data-error="#selecterror">
							<option value="">--Select Age--</option>
						<?php
						for ($i=1 ; $i <= 50; $i++) { 
							echo "<option id='$i;' name='$i;'>$i</option>";
						 } 
						?>
						</select>
						<br><span id="selecterror"><?php echo $ageerror; ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="file" name="file" id="file" data-error="#fileerror">
					<br><span id="fileerror"><?php echo $fileerror; ?></span>	
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="reset" name="reset" value="Reset">
									<input type="submit" name="submit" id="form1" value="Submit form">
				</td>
				</tr>
			</table>
		</form>
	</center>
	<script type="text/javascript" src="form_practice_1.js"></script>
</body>
</html>