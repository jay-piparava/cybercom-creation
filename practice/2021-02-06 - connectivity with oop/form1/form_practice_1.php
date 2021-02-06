<?php

require './errors/errors.php';
require 'server.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form practice 1</title>
	<link rel="stylesheet" type="text/css" href="./vender/form_practice_1.css">
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
					<td class="form-input"><input class="form-input" type="text" name="name" id="name" data-error="#nameerror" value="<?php echo $name;  ?>">
					<span id="nameerror"><?php echo $nameerror; ?></span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>Password:</p></td>
					<td class="form-input"><input class="form-input" type="password" name="password" id="password" data-error="#passworderror" value="<?php echo $password; ?>">
					<span id="passworderror"><?php echo $passworderror; ?></span>
					</td>
				</tr>
				<tr>
					<td class="form-heading"><p>Address:</p></td>
					<td class="form-input"><textarea class="form-input" name="add" id="add" data-error="#addresserror"><?php echo $address; ?></textarea>
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
					<td><?php
							if($gender == 'Male'){ ?>
								<input type="radio" id="male" name="gender" value="Male" data-error="#radioerror" checked>Male
								<input type="radio" id="female" name="gender" value="Female" data-error="#radioerror">Female
						<?php } else if ($gender == "Female") { ?>
								<input type="radio" id="male" name="gender" value="Male" data-error="#radioerror">Male
								<input type="radio" id="female" name="gender" value="Female" data-error="#radioerror" checked>Female
						<?php } else { ?>
								<input type="radio" id="male" name="gender" value="Male" data-error="#radioerror" >Male
								<input type="radio" id="female" name="gender" value="Female" data-error="#radioerror">Female
								<br><span id="radioerror"><?php echo $generr; ?></span>
						<?php }?>	
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
					<td colspan="2" align="center"><input type="file" name="file" id="file" data-error="#fileerror" value="<?php echo $file; ?>">
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
	<script type="text/javascript" src="./js/form_practice_1.js"></script>
</body>
</html>