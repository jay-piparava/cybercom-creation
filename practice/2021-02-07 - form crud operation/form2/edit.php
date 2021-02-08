<?php

require_once('server/editserver.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form practice 2</title>
	<link rel="stylesheet" type="text/css" href="css/form_practice_2.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js">
	</script>
</head>
<body><center><br><br><br>
		<form action="#" method="post" id="form">
		<div><table class="table">
			<tr>
				<td>First name</td>
				<td><input type="text" name="name" id="name" data-error="#errname" value="<?php echo $result[0]['name']; ?>">
					<br><span class="error" id="errname"><?php echo $nameerr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password" data-error="#errpass" value="<?php echo $result[0]['password']; ?>">
					<br><span class="error" id="errpass"><?php echo $passerr; ?></span>
				</td>
			</tr><tr>
				<td>Gender</td>
				<td>
				<?php
						if($result[0]['gender'] == 'Male'){ ?>
							<input type="radio" name="gender" value="Male" data-error="#radioerr" checked> Male
							<input type="radio" name="gender" value="Female" data-error="#radioerr"> Female
					<?php } else if ($result[0]['gender'] == 'Female') { ?>
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
				<td><textarea name="address" id="address" data-error="#erradd"><?php echo $result[0]['address'] ?></textarea>
					<br><span class="error" id="erradd"><?php echo $adderr; ?></span>
				</td>
			</tr><tr>
				<td>Dob</td>
			
				<td><select name ='month' data-error="#selecterr" id="date">
						<option value="">Month</option>
					<?php $month = Array ('January','February','March','April','May','June','July','August','September','October','November','December' );
						for ($i=0; $i < 12; $i++) { 
							if ($month[$i] == $months) { ?>
							<option value="<?php echo $month[i]; ?>" selected ><?php echo $month[$i];?></option>	
						<?php	}
						else{
								echo "<option>$month[$i]</option>";
							}
							
						}
					?>
					</select>
					<select name ='day' data-error="#selecterr">
						<option value="">Day</option>
					<?php 
						for ($i=1 ;$i < 31; $i++) { 
							if($days == $i){
								echo "<option selected>$i</option>";	
							} else {
							echo "<option>$i</option>";
							}
						}
					?>
					</select>
					<select name ='year' data-error="#selecterr">
						<option value="">Year</option>
					<?php 
						for ($i=1991; $i < 2021; $i++) { 
							if($years == $i){
								echo "<option selected>$i</option>";
							} else {
								echo "<option>$i</option>";	
							}
						}
					?>
					</select>
					<br><span class="error" id="selecterr"><?php echo "$montherr $dayerr $yearerr"; ?></span>
				</td>
			</tr><tr>
				<td>Select game:</td>
				<td><?php 
				if(in_array('Hocky',$games)){
					$check_hockey="checked";
				}
				else{
					$check_hockey="";
				}
				if(in_array('Football',$games)){
					$check_Football="checked";
				}
				else{
					$check_Football="";
				}
				if(in_array('Cricket',$games)){
					$check_Cricket="checked";
				}
				else{
					$check_Cricket="";
				}
				if(in_array('Vollyball',$games)){
					$check_Vollyball="checked";
				}
				else{
					$check_Vollyball="";
				}
				echo "<input type='checkbox' name='chkarr[]'".$check_hockey." value='Hocky' data-error='#checkerr'> Hocky";
				echo '<input type="checkbox" name="chkarr[]" '.$check_Football.' value="Football" data-error="#checkerr"> Football';
				echo '<input type="checkbox" name="chkarr[]" '.$check_Cricket.' value="Cricket" data-error="#checkerr"> Cricket';
				echo '<input type="checkbox" name="chkarr[]" '.$check_Vollyball.' value="Vollyball" data-error="#checkerr"> vollyBall';
					
				?>
					<br><span class="error" id="checkerr"><?php echo $gameerr; ?></span>
				</td>
			</tr>
			<tr>
				<td>MARITAL STATUS</td>
				<td>
					<?php if($result[0]['mstatus'] == 'Marrid') { ?> 
						<input type="radio" name="merrage" value="Marrid" data-error="#mrgerr" checked> Marrid
						<input type="radio" name="merrage" value="UnMarrid" data-error="#mrgerr"> Unmarrid
					<?php }if($result[0]['mstatus'] == 'Unmarrid') { ?>
						<input type="radio" name="merrage" value="Marrid" data-error="#mrgerr"> Marrid
						<input type="radio" name="merrage" value="UnMarrid" data-error="#mrgerr" checked> Unmarrid
					<?php }?>
					<br><span class="error" id="mrgerr"><?php echo $staterr; ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" id="form2">
					<input type="reset" name="reset">
				</td>
			</tr>
		</table>
	</div>
	</form>
	</center>
	<script type="text/javascript" src="js/form_practice_2.js"></script>
</body>
</html>