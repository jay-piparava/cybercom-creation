<?php
if (isset($_POST['submit'])) {
	$name = test_input($_POST['name']);	
	$password = test_input($_POST['password']);
	$address = test_input($_POST['add']);
	$age = $_POST['age'];
	$file = $_POST['file'];
	$gender = $_POST['gender'];
	echo "<center><b>Your Data </b>";
	echo "<br>Your Name : $name";
	echo "<br>Your Password : $password";
	echo "<br>Your Address : $address";
	echo "<br>Your Gender : $gender";
	echo "<br>Your Age : $age";
	echo "<br>Your File : $file";
	echo "<br>Your Hobby :<br>";
	if(!empty($_POST['checkarr'])){
      foreach($_POST['checkarr'] as $checked){
        echo $checked."</br>";
      }
    } else {
    	echo "<br>No hobby Selected..";
    }
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
</head>
<body>
	<center>
		<form action="#" name="myform" method="post">
			<table border="2">
				<tr>
					<td colspan="2" class="heading"><h1>User Form</h1></td>
				</tr>
				<tr>
					<td class="form-heading"><p>Enter Name:</p></td>
					<td class="form-input"><input class="form-input" type="text" name="name" id="name" onblur="namecheck()">
					<span id="nameerror">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>Password:</p></td>
					<td class="form-input"><input class="form-input" type="password" name="password" id="password" onblur="passcheck()">
					<span id="passworderror">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>Address:</p></td>
					<td class="form-input"><textarea class="form-input" name="add" id="add" onblur="addcheck()"></textarea>
					<span id="addresserror">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>select Game:</p></td>
					<td><input type="checkbox" id="hocky" name="checkarr[]" value="Hocky">Hocky<br>
						<input type="checkbox" id="football" name="checkarr[]" value="Football">Football<br>
						<input type="checkbox" id="badmintan" name="checkarr[]" value="Badmintan">Badmintan<br>
						<input type="checkbox" id="cricket" name="checkarr[]" value="Cricket">Cricket<br>
						<input type="checkbox" id="vollyball" name="checkarr[]" value="Vollyball">Vollyball<br>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>Gender:</p></td>
					<td><input type="radio" id="male" name="gender" value="Male" onchange="gencheck()">Male
						<input type="radio" id="female" name="gender" value="Female" onchange="gencheck()">Female
						<br><span id="gendererror">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>Select Age:</p></td>
					<td>
						<select class="form-input" name="age" id="age">
						<?php
						for ($i=1 ; $i <= 50; $i++) { 
							echo "<option id='$i;' name='$i;'>$i</option>";
						 } 
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="file" name="file" id="file" onblur="filecheck()">
					<span id="fileerror">&nbsp;</span>	
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