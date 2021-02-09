<?php
use App\DataSource;
require 'lib\DataSource.php';

$name = $pass = $gender = $address = $day = $month = $year = $game = $status = $check = '';
$nameerr = $passerr = $generr = $adderr = $dayerr = $montherr = $yearerr = $gameerr = $staterr = $checkerr = '';
if (isset($_POST['submit'])) {
	if (empty( $_POST['name'])) {
		$nameerr = $nameerrs;
	} else {
		$name = test_input($_POST['name']);
	}
	if (empty( $_POST['password'])) {
		$passerr = $passerrs;
	} else {
		 $pass = test_input($_POST['password']);
	}
	if(empty( $_POST['gender'])) {
		$generr = $generrs;
	} else {
		 $gender = test_input($_POST['gender']);
	}
	if (empty( $_POST['address'])) {
		$adderr = $adderrs;
	} else {
		 $address = test_input($_POST['address']);
	}
	if (empty( $_POST['day'])) {
		$dayerr = $dayerrs;
	} else {
		 $day = test_input($_POST['day']);
	}
	if (empty( $_POST['month'])) {
		$montherr = $montherrs;
	} else {
		 $month = test_input($_POST['month']);
	}
	if (empty( $_POST['year'])) {
		$yearerr = $yearerrs;
	} else {
		 $year = test_input($_POST['year']);
	}
	if (empty( $_POST['merrage'])) {
		$staterr = $staterrs;
	} else {
		 $status = test_input($_POST['merrage']);
	}
	if(!empty($_POST['chkarr'])){
      
        $game = $_POST['chkarr'];
         $game = implode(",", $game);
    } else {
    	$gameerr = $gameerrs;
    }
    if (empty( $_POST['accept'])) {
		$checkerr = $checkerrs;
	}
	 $bdate = "$year-$month-$day";
	if(!empty($name) && !empty($pass) && !empty($gender) && !empty($address) && !empty($day) && !empty($month) && !empty($year) && !empty($game) && !empty($status) && empty($check)){
		
		$fileds = array('name','password','gender','address','dob','game','mstatus');
		$values = array($name,$pass,$gender,$address,$bdate,$game,$status);

		$data = new DataSource();
		if($result = $data->insert($fileds,$values,'form2')){
			header('location:index.php');		
		} else {
			echo "<script>alert('Error In Insert Record...');</script>";
		}
	}
}
//calling data display function
fetch_data('*','form2');
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
//get data function
function fetch_data($column,$table){
	$data = new DataSource();
	$fileds = array('id','name','password','gender','address','dob','game','mstatus');
	$result = $data->getData($fileds,'form2');
	
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
	            echo "<th colspan = '2'>Action</th>";
	        echo "</tr>";
			foreach ($result as $data){
				echo "<tr class='del".$data['id']."'>";
	            	echo "<td>".$data['id']."</td>";
	            	echo "<td>".$data['name']."</td>";
	            	echo "<td>".$data['password']."</td>";
	           		echo "<td>".$data['gender']."</td>";
	           		echo "<td>".$data['address']."</td>";
	           		echo "<td>".$data['dob']."</td>";
	           		echo "<td>".$data['game']."</td>";
	           		echo "<td>".$data['mstatus']."</td>"; ?>
	           		<td><a href = 'edit.php?id=<?php echo $data['id'];  ?>'>Edit</a></td>
	        <?php    echo "<td><a href='#' class='delete' data-id='".$data['id']."'>Delete</a>";
	           	echo "</tr>";
			}            	
	    	echo "</table>";
}

?>