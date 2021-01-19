<?php
$fname = $_GET['fnm'];
$lname = $_GET['lnm'];
$dm = $_GET['month'];
$dd = $_GET['day'];
$dy = $_GET['year'];
$gen = $_GET['gender'];
$email = $_GET['email'];
$password = $_GET['password'];
$sque = $_GET['que'];
$sans =$_GET['sans'];
$add = $_GET['add'];
$stat = $_GET['state'];
$zip = $_GET['zip'];
$phone = $_GET['number'];


//creating a table

echo "	<center>
		<table border = '3'>
			<tr>
				<td>First name</td><td>$fname</td>
			</tr>
			<tr>
				<td>Last name</td><td>$lname</td>
			</tr>
			<tr>
				<td>Birthdate</td><td>$dm - $dd - $dy</td>
			</tr>
			<tr>
				<td>Gender</td><td>$gen</td>
			</tr>
			<tr>
				<td>Email</td><td>$email</td>
			</tr>
			<tr>
				<td>Password</td><td>$password</td>
			</tr>
			<tr>
				<td>Security Question</td><td>$sque</td>
			</tr>
			<tr>
				<td>Answer </td><td>$sans</td>
			</tr>
			<tr>
				<td>Address </td><td>$add</td>
			</tr>
			<tr>
				<td>State</td><td>$stat</td>
			</tr>
			<tr>
				<td>Zip</td><td>$zip</td>
			</tr>
			<tr>
				<td>Phone</td><td>$phone</td>
			</tr>
		</table>
		</center>
	";
?>