<?php
require_once('connector.php');
$name = $pass = $gender = $address = $day = $month = $year = $game = $status = $check = '';
$nameerr = $passerr = $generr = $adderr = $dayerr = $montherr = $yearerr = $gameerr = $staterr = $checkerr = '';
if (isset($_POST['submit'])) {
	if (empty( $_POST['name'])) {
		$nameerr = "Please Enter Name..";
	} else {
		$name = test_input($_POST['name']);
	}
	if (empty( $_POST['password'])) {
		$passerr = "Please Enter Password..";
	} else {
		 $pass = test_input($_POST['password']);
	}
	if(empty( $_POST['gender'])) {
		$generr = "Please select gender..";
	} else {
		 $gender = test_input($_POST['gender']);
	}
	if (empty( $_POST['address'])) {
		$adderr = "Please Enter Address..";
	} else {
		 $address = test_input($_POST['address']);
	}
	if (empty( $_POST['day'])) {
		$dayerr = "Please Select Day..";
	} else {
		 $day = test_input($_POST['day']);
	}
	if (empty( $_POST['month'])) {
		$montherr = "Please Select Month..";
	} else {
		 $month = test_input($_POST['month']);
	}
	if (empty( $_POST['year'])) {
		$yearerr = "Please Select Year..";
	} else {
		 $year = test_input($_POST['year']);
	}
	if (empty( $_POST['merrage'])) {
		$staterr = "Please Select Status...";
	} else {
		 $status = test_input($_POST['merrage']);
	}
	if(!empty($_POST['chkarr'])){
      
        $game = $_POST['chkarr'];
         $game = implode(" ", $game);
    } else {
    	$gameerr = "Select atleast one.....";
    }
    if (empty( $_POST['merrage'])) {
		$checkerr = "You must accept the condition..";
	}
	 $bdate = "$year-$month-$day";
	//for insert a data
	//insert data
	
	$qry = "insert into form2 values ('','$name','$pass','$gender','$address','$bdate','$game','$status')";
	mysqli_query($conn,$qry);
	

	//calling data display function
	fetch_data('*','form2');
	// Close connection
	mysqli_close($conn);
}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
//get data function
function fetch_data($column,$table){
	global $conn;
	$qry = "select $column from $table";
	if($result = mysqli_query($conn, $qry)){
		if(mysqli_num_rows($result) > 0){
		    echo "<table>";
	        echo "<tr>";
	            echo "<th>id</th>";
	            echo "<th>First Name</th>";
	            echo "<th>Password</th>";
	            echo "<th>Gender</th>";
	            echo "<th>Address</th>";
	            echo "<th>Date Of Birth</th>";
	            echo "<th>Game</th>";
	            echo "<th>Merrage Status</th>";
	        echo "</tr>";
			while($data = mysqli_fetch_array($result)){
				echo "<tr>";
	            	echo "<td>".$data['id']."</td>";
	            	echo "<td>".$data['name']."</td>";
	            	echo "<td>".$data['password']."</td>";
	           		echo "<td>".$data['gender']."</td>";
	           		echo "<td>".$data['address']."</td>";
	           		echo "<td>".$data['dob']."</td>";
	           		echo "<td>".$data['game']."</td>";
	           		echo "<td>".$data['mstatus']."</td>";
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
				<td><input type="text" name="name" id="name" data-error="#errname">
					<br><span class="error" id="errname"><?php echo $nameerr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password" data-error="#errpass">
					<br><span class="error" id="errpass"><?php echo $passerr; ?></span>
				</td>
			</tr><tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="Male" data-error="#radioerr"> Male
					<input type="radio" name="gender" value="Female" data-error="#radioerr"> Female
					<br><span class="error" id="radioerr"><?php echo $generr;  ?></span> 
				</td>
			</tr><tr>
				<td>Address</td>
				<td><textarea name="address" id="address" data-error="#erradd"></textarea>
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
					<input type="radio" name="merrage" value="Marrid" data-error="#mrgerr"> Marrid
					<input type="radio" name="merrage" value="UnMarrid" data-error="#mrgerr"> Unmarrid
					<br><span class="error" id="mrgerr"><?php echo $staterr; ?></span>
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