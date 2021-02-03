<?php
require_once('connector.php');
$name = $lname = $gender = $month = $year = $daye = $country = $email = $phone = $password = $cpassword ='';
$namee = $lnamee = $gendere = $monthe = $yeare = $daye = $countrye = $emaile = $phonee = $passworde = $cpassworde = $agree ='';
if (isset($_POST['submit'])) {
	if (empty($_POST['name'])) {
		$namee = 'This filed is required...';
	} else {
	 $name = test_input($_POST['name']);
	}
	if (empty($_POST['lname'])) {
		$lnamee = 'This filed is required...';
	} else {
	 $lname = test_input($_POST['lname']);
	}
	if (empty($_POST['gender'])) {
		$gendere = 'This filed is required...';
	} else {
	 $gender = test_input($_POST['gender']);
	}
	if (empty($_POST['day'])) {
		$daye = 'Select day';
	} else {
	 $day = test_input($_POST['day']);
	}
	if (empty($_POST['month'])) {
		$monthe = 'Select month';
	} else {
	 $month = test_input($_POST['month']);
	}
	if (empty($_POST['year'])) {
		$yeare = 'select Year';
	} else {
	 $year = test_input($_POST['year']);
	}
	if (empty($_POST['country'])) {
		$countrye = 'This filed is required...';
	} else {
	 $country = test_input($_POST['country']);
	}
	if (empty($_POST['email'])) {
		$emaile = 'This filed is required...';
	} else {
	 	$email = test_input($_POST['email']);
	 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$emaile = "Invalid email format...";
  			$email = '';
		}
	}
	if (empty($_POST['phone'])) {
		$phonee = 'This filed is required...';
	} else {
	 $phone = test_input($_POST['phone']);
	}
	if (empty($_POST['password'])) {
		$passworde = 'This filed is required...';
	} else {
		if ($_POST['password'] == $_POST['cpassword']) {
			$password = test_input($_POST['password']);
		} else {
			$cpassworde = 'Password Doesnot match.';
		}
	 $password = test_input($_POST['password']);
	}
	if (empty($_POST['cpassword'])) {
		$cpassworde = 'This filed is required...';
	} else {
	 $cpassword = test_input($_POST['cpassword']);
	}
	if (empty($_POST['accept'])) {
		$agree = "You must agree terms....";
	}
	if (!empty($name) && !empty($lname) && !empty($gender) && !empty($month) && !empty($year) && !empty($day) && !empty($country) && !empty($email) && !empty($phone) && !empty($password) &&  empty($agree)) {
		$bdate = "$day - $month - $year";
		if ($password == $cpassword) {
			//insert data
			$qry = "insert into form3 values ('','$name','$lname','$bdate','$gender','$email','$phone','$password')";
			mysqli_query($conn,$qry);
			fetch_data('*','form3');
		}	
	}
}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
function fetch_data($column,$table){
	global $conn;
	$qry = "select $column from $table";
	if($result = mysqli_query($conn, $qry)){
		if(mysqli_num_rows($result) > 0){
		    echo "<table>";
	        echo "<tr>";
	            echo "<th>id</th>";
	            echo "<th>First</th>";
	            echo "<th>lastname</th>";
	            echo "<th>Date Of Birth</th>";
	            echo "<th>gender</th>";
	            echo "<th>Email</th>";
	            echo "<th>Phone</th>";
	            echo "<th>Password</th>";
	        echo "</tr>";
			while($data = mysqli_fetch_array($result)){
				echo "<tr>";
	            	echo "<td>".$data['id']."</td>";
	            	echo "<td>".$data['name']."</td>";
	            	echo "<td>".$data['lname']."</td>";
	           		echo "<td>".$data['dob']."</td>";
	           		echo "<td>".$data['gender']."</td>";
	           		echo "<td>".$data['email']."</td>";
	           		echo "<td>".$data['phone']."</td>";
	           		echo "<td>".$data['pass']."</td>";
	           	echo "</tr>";
			}            	
	    	echo "</table>";	
		} else{
		    echo "No data found";
		}
	} else {
		echo "Error:";
	} 
}
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
					<td><input type="text" name="name" placeholder="Enter First Name" id="name" data-error="#nameerr"> 
					<br><span id="nameerr"><?php  echo $namee; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Last name:</td>
					<td><input type="text" name="lname" placeholder="Enter Last Name" id="lastname" data-error="#lnameerr">
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
					<td><input type="radio" name="gender" value="Male" data-error="#gerror"> Male
					<input type="radio" name="gender" value="Female" data-error="#gerror"> Female
					<br><span id="gerror"><?php  echo $gendere; ?></span>
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
					<td><input type="text" name="email" placeholder="Enter Email" id="email" data-error="#emailerr">
					<br><span id="emailerr"><?php  echo $emaile; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Phone</td>
					<td><input type="text" name="phone" placeholder="Enter Phone" id="phone" data-error="#phoneerr">
					<br><span id="phoneerr"><?php  echo $phonee; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td><input type="Password" name="password" placeholder="Enter Password" id="password" data-error="#passerr">
						<br><span id="passerr"><?php  echo $passworde; ?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Confirm passeord</td>
					<td><input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" data-error="#rpasserr">
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