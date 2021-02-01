<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$pass = $_POST['password'];
	$add = $_POST['address'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$mrg = $_POST['merrage'];
	echo "<center><b>Your Data</b><br>";
	echo "<br>your name : $name";
	echo "<br>your Gender : $gender";
	echo "<br>your Password : $pass";
	echo "<br>your Address : $add";
	echo "<br>your Birthdate : $day - $month - $year";
	echo "<br>your are : $mrg";
	echo "<br>your Hobby : <br>";;
	if(!empty($_POST['chkarr'])){
      foreach($_POST['chkarr'] as $checked){
        echo $checked."</br>";
      }
    } else {
    	echo "<br>No hobby Selected..";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form practice 2</title>
	<link rel="stylesheet" type="text/css" href="form_practice_2.css">
</head>
<body>
	<center><br><br><br>
		<form action="#" method="post" name="form">
		<div><table>
			<tr>
				<td>First name</td>
				<td><input type="text" name="name" id="name" onblur="requiredfiled('errname','name')" onkeyup="requiredfiled('errname','name')">
					<label class="error" id="errname"></label>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password" onblur="requiredfiled('errpass','password')">
					<label class="error" id="errpass"></label>
				</td>
			</tr><tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="Male" checked> Male
					<input type="radio" name="gender" value="Female"> Female
				</td>
			</tr><tr>
				<td>Address</td>
				<td><textarea name="address" id="address" onblur="requiredfiled('erradd','address')"></textarea>
					<label class="error" id="erradd"></label>
				</td>
			</tr><tr>
				<td>Dob</td>
				<td><select name ='month'>
					<?php $month = Array ('January','February','March','April','May','June','July','August','September','October','November','December' );
						for ($i=0; $i < 12; $i++) { 
							echo "<option>$month[$i]</option>";
						}
					?>
					</select>
					<select name ='day'>
					<?php 
						for ($i=1 ;$i < 31; $i++) { 
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name ='year'>
					<?php 
						for ($i=1991; $i < 2021; $i++) { 
							echo "<option>$i</option>";
						}
					?>
					</select>
				</td>
			</tr><tr>
				<td>Select game:</td>
				<td><input type="checkbox" name="chkarr[]" value="Hocky"> Hocky
					<input type="checkbox" name="chkarr[]" value="Football"> Football
					<input type="checkbox" name="chkarr[]" value="Cricket"> Cricket
					<input type="checkbox" name="chkarr[]" value="Football"> vollyBall
				</td>
			</tr>
			<tr>
				<td>MARITAL STATUS</td>
				<td>
					<input type="radio" name="merrage" value="Marrid" checked> Marrid
					<input type="radio" name="merrage" value="UnMarrid"> Unmarrid
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" id="form2">
					<input type="reset" name="reset">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="accept" id="accept" onclick="acceptcondition(this)"><b>I accept all argument</b>
				<spam class="error" id="erraccept">You must agree the condition</spam>
				</td>
			</tr>
		</table>
	</div>
	</form>
	</center>
	<script type="text/javascript" src="form_practice_2.js"></script>
</body>
</html>