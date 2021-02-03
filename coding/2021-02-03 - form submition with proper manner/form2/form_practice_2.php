<?php
require_once('errors.php');
require_once('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form practice 2</title>
	<link rel="stylesheet" type="text/css" href="form_practice_2.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js">
	</script>
</head>
<body>
	<center><br><br><br>
		<form action="#" method="post" id="form">
		<div><table class="table">
			<tr>
				<td>First name</td>
				<td><input type="text" name="name" id="name" data-error="#errname" value="<?php echo $name; ?>">
					<br><span class="error" id="errname"><?php echo $nameerr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password" data-error="#errpass" value="<?php echo $pass; ?>">
					<br><span class="error" id="errpass"><?php echo $passerr; ?></span>
				</td>
			</tr><tr>
				<td>Gender</td>
				<td>
				<?php
						if($gender == 'Male'){ ?>
							<input type="radio" name="gender" value="Male" data-error="#radioerr" checked> Male
							<input type="radio" name="gender" value="Female" data-error="#radioerr"> Female
					<?php } else if ($gender == "Female") { ?>
							<input type="radio" id="male" name="gender" value="Male" data-error="#radioerror">Male
							<input type="radio" id="female" name="gender" value="Female" data-error="#radioerror" checked>Female
					<?php } else { ?>
							<input type="radio" id="male" name="gender" value="Male" data-error="#radioerror" >Male
							<input type="radio" id="female" name="gender" value="Female" data-error="#radioerror">Female
							<br><span id="radioerror"> <?php echo $generr; ?></span>
					<?php } ?>	
				</td>
			</tr><tr>
				<td>Address</td>
				<td><textarea name="address" id="address" data-error="#erradd"><?php echo $address; ?></textarea>
					<br><span class="error" id="erradd"><?php echo $adderr; ?></span>
				</td>
			</tr><tr>
				<td>Dob</td>
				<td><select name ='month' data-error="#selecterr" id="date">
						<option value="">Month</option>
					<?php $month = Array ('January','February','March','April','May','June','July','August','September','October','November','December' );
						for ($i=0; $i < 12; $i++) { 
							echo "<option>$month[$i]</option>";
						}
					?>
					</select>
					<select name ='day' data-error="#selecterr">
						<option value="">Day</option>
					<?php 
						for ($i=1 ;$i < 31; $i++) { 
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name ='year' data-error="#selecterr">
						<option value="">Year</option>
					<?php 
						for ($i=1991; $i < 2021; $i++) { 
							echo "<option>$i</option>";
						}
					?>
					</select>
					<br><span class="error" id="selecterr"><?php echo "$montherr $dayerr $yearerr"; ?></span>
				</td>
			</tr><tr>
				<td>Select game:</td>
				<td><input type="checkbox" name="chkarr[]" value="Hocky" data-error="#checkerr"> Hocky
					<input type="checkbox" name="chkarr[]" value="Football" data-error="#checkerr"> Football
					<input type="checkbox" name="chkarr[]" value="Cricket" data-error="#checkerr"> Cricket
					<input type="checkbox" name="chkarr[]" value="Football" data-error="#checkerr"> vollyBall
					<br><span class="error" id="checkerr"><?php echo $gameerr; ?></span>
				</td>
			</tr>
			<tr>
				<td>MARITAL STATUS</td>
				<td>
					<?php if ($status == 'Marrid') { ?> 
						<input type="radio" name="merrage" value="Marrid" data-error="#mrgerr" checked> Marrid
						<input type="radio" name="merrage" value="UnMarrid" data-error="#mrgerr"> Unmarrid
					<?php } else if($status == 'UnMarrid') { ?>
						<input type="radio" name="merrage" value="Marrid" data-error="#mrgerr"> Marrid
						<input type="radio" name="merrage" value="UnMarrid" data-error="#mrgerr" checked> Unmarrid
					<?php } else { ?>
					<input type="radio" name="merrage" value="Marrid" data-error="#mrgerr"> Marrid
					<input type="radio" name="merrage" value="UnMarrid" data-error="#mrgerr"> Unmarrid
					<br><span class="error" id="mrgerr"><?php echo $staterr; ?></span>
				<?php } ?>
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
				<td><input type="checkbox" name="accept" data-error="#acceptchx"><b>I accept all argument</b>
				<br><spam class="error" id="acceptchx"><?php echo $checkerr; ?></spam>
				</td>
			</tr>
		</table>
	</div>
	</form>
	</center>
	<script type="text/javascript" src="form_practice_2.js"></script>
</body>
</html>