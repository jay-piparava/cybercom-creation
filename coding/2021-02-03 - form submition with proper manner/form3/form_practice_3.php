<?php
require_once('errors.php');
require_once('server.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Practice 3</title>
	<link rel="stylesheet" type="text/css" href="form_practice_3.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js">
	</script>
</head>
<body>
	<center>
		<form name="form"  id="form" method="post" action="#">
			<table class="table"> 
				<tr>
					<td colspan="2" class="head">Sign Up</td>
				</tr>
				<tr>
					<td align="right">First name:</td>
					<td><input type="text" name="name" placeholder="Enter First Name" id="name" data-error="#nameerr" value="<?php echo $name; ?>"> 
					<br><span id="nameerr"><?php  echo $namee; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Last name:</td>
					<td><input type="text" name="lname" placeholder="Enter Last Name" id="lastname" data-error="#lnameerr" value="<?php echo $lname; ?>">
					<br><span id="lnameerr"><?php  echo $namee; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Date Of Birth:</td>
					<td>
						<select name ='month' data-error="#dayerror">
							<option value="">MONTH</option>
						<?php $month = Array ('January','February','March','April','May','June','July','August','September','October','November','December' );
							for ($i=0; $i < 12; $i++) { 
								echo "<option>$month[$i]</option>";
							}
						?>
						</select>
						<select name ='day' data-error="#dayerror">
							<option value="">DAY</option>
						<?php 
							for ($i=1 ;$i < 31; $i++) { 
								echo "<option>$i</option>";
							}
						?>
						</select>
						<select name ='year' data-error="#dayerror">
							<option value="">YEAR</option>
						<?php 
							for ($i=1991; $i < 2021; $i++) { 
								echo "<option>$i</option>";
							}
						?>
						</select>
						<br><span id="dayerror"><?php  echo "$monthe $daye $yeare"; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Gender:</td>
					<td>
						<?php if ($gender == 'Male') { ?>
							<input type="radio" name="gender" value="Male" data-error="#gerror" checked> Male
							<input type="radio" name="gender" value="Female" data-error="#gerror"> Female
					<?php } else if($gender == 'Female') {?>
							<input type="radio" name="gender" value="Male" data-error="#gerror"> Male
							<input type="radio" name="gender" value="Female" data-error="#gerror" checked> Female
					<?php } else { ?>
							<input type="radio" name="gender" value="Male" data-error="#gerror"> Male
							<input type="radio" name="gender" value="Female" data-error="#gerror"> Female
							<br><span id="gerror"><?php  echo $gendere; ?></span>
					<?php } ?>
					</td>
					
				</tr>
				<tr>
					<td align="right">Country</td>
					<td>
						<select name="country" data-error="#selecterr">
							<option value="">--Select Country--</option>
							<option value="india">india</option>
							<option value="Australiya">Australiya</option>
							<option value="England">England</option>
							<option value="Newzeland">Newzeland</option>
							<option value="South Africa">South Africa</option>
							<option value="Dubai">Dubai</option>
						</select><br>
						<span id="selecterr"><?php  echo $countrye; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td><input type="text" name="email" placeholder="Enter Email" id="email" data-error="#emailerr" value="<?php echo $email; ?>">
					<br><span id="emailerr"><?php  echo $emaile; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Phone</td>
					<td><input type="text" name="phone" placeholder="Enter Phone" id="phone" data-error="#phoneerr" value="<?php echo $phone; ?>">
					<br><span id="phoneerr"><?php  echo $phonee; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td><input type="Password" name="password" placeholder="Enter Password" id="password" data-error="#passerr" value="<?php $password ?>">
						<br><span id="passerr"><?php  echo $passworde; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Confirm passeord</td>
					<td><input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" data-error="#rpasserr" value="<?php echo $cpassword; ?>">
						<br><span id="rpasserr"><?php  echo $cpassworde; ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="checkbox" name="accept" id="accept" data-error="#agree"><b>I agree the terms of use</b>
						<br><span id="agree"><?php  echo $agree; ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="footer" align="center"><input type="submit" name="submit" id="form3">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="cancel" value="Cancel"></td>
				</tr>
			</table>
		</form>
	</center>
	<script type="text/javascript" src="form_practice_3.js"></script>
</body>
</html>