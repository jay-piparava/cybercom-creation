<?php 

if (isset($_POST['submit'])) {
	$fname = $_POST['name'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	echo "<center><b> Your Data :...</b><br>";
	echo "First Name : $fname<br>";
	echo "Last Name : $lname<br>";
	echo "Date Of Birth : $day $month $year<br>";
	echo "Gender : $gender<br>";
	echo "Country : $country<br>";
	echo "Email : $email<br>";
	echo "Phone : $phone<br>";
	echo "Password : $password<br>";
	echo "</center>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Practice 3</title>
	<link rel="stylesheet" type="text/css" href="form_practice_3.css">
</head>
<body>
	<center>
		<form name="form" method="post" action="#">
			<table> 
				<tr>
					<td colspan="2" class="head">Sign Up</td>
				</tr>
				<tr>
					<td align="right">First name:</td>
					<td><input type="text" name="name" placeholder="Enter First Name" id="name" onblur="requiredfiled('nameerr','name')">
					<br><span id="nameerr"></span>
					</td>
				</tr>
				<tr>
					<td align="right">Last name:</td>
					<td><input type="text" name="lname" placeholder="Enter Last Name" id="lastname" onblur="requiredfiled('lnameerr','lastname')">
					<br><span id="lnameerr"></span>
					</td>
				</tr>
				<tr>
					<td align="right">Date Of Birth:</td>
					<td>
						<select name ='month'>
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
				</tr>
				<tr>
					<td align="right">Gender:</td>
					<td><input type="radio" name="gender" value="Male" checked> Male
					<input type="radio" name="gender" value="Female"> Female
					</td>
				</tr>
				<tr>
					<td align="right">Country</td>
					<td>
						<select name="country">
							<option value="india">india</option>
							<option value="Australiya">Australiya</option>
							<option value="England">England</option>
							<option value="Newzeland">Newzeland</option>
							<option value="South Africa">South Africa</option>
							<option value="Dubai">Dubai</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td><input type="text" name="email" placeholder="Enter Email" id="email" onblur="requiredfiled('emailerr','email')">
					<br><span id="emailerr"></span>
					</td>
				</tr>
				<tr>
					<td align="right">Phone</td>
					<td><input type="text" name="phone" placeholder="Enter Phone" id="phone" onblur="requiredfiled('phoneerr','phone')">
					<br><span id="phoneerr"></span>
					</td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td><input type="Password" name="password" placeholder="Enter Password" id="password" onblur="requiredfiled('passerr','password')">
						<br><span id="passerr"></span>
					</td>
				</tr>
				<tr>
					<td align="right">Confirm passeord</td>
					<td><input type="passeord" name="cpassword" placeholder="Confirm Password" id="rpassword" onblur="requiredfiled('rpasserr','rpassword')">
						<br><span id="rpasserr"></span>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="checkbox" name="accept1" id="accept1" onclick="acceptcondition(this)"><b>I agree the terms of use</b>
						<br><span id="agree">You must check condition..</span>
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