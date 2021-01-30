<html>
	<head>
		<style type="text/css">
			.error {color:#FF0000};
		</style>
	</head>
	<body>
		<?php

		$nameerr = $emailerr = $gendererr = $subjecterr = '';
		$name = $email = $gender = $class = $subject = '';
	
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if (empty($_POST['name'])) {
				$nameerr = "Name is Required...";
			} else {
				$name = test_input($_POST['name']);
			}
			if (empty($_POST['email'])) {
				$emailerr = "email is Required...";
			} else {
				$email = test_input($_POST['email']);

				//check email
				 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
			}
			if (empty($_POST['class'])) {
				$class = "Name is Required...";
			} else {
				$class = test_input($_POST['class']);
			}
			if (empty($_POST['gender'])) {
				$gendererr = "gender is Required...";
			} else {
				$gender = test_input($_POST['gender']);
			}
			if (empty($_POST['subject'])) {
				$subjecterr = "You must select one or more...";
			} else {
				$subject = $_POST['subject'];
			}
		}
		function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		?>
		<center>
			<h1>Registration form</h1>
			<span class="error">* required fileds</span>
			<form method="POST" action="#">
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name">
							<Span class="error">*<?php echo $nameerr; ?></Span>
						</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email">
							<Span class="error">*<?php echo $emailerr; ?></Span>
						</td>
					</tr>
					<tr>
						<td>Classes:</td>
						<td><textarea name="class" rows="5" cols="40"></textarea>
						</td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="male">Male
							<Span class="error">*<?php echo $gendererr; ?></Span>
						</td>
					</tr>
					<tr>
						<td>Select:</td>
						<td>
							<select name="subject[]" size="4" multiple>
								<option value="Android">Android</option>
								<option value="Java">Java</option>
								<option value="c#">c#</option>
								<option value="Data Base">Data Base</option>
								<option value="Hadoop">Hadoop</option>
								<option value="VB Script">VB Script</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Agree</td>
						<td><input type="checkbox" name="checked" value="1"></td>
						<?php if(!isset($_POST['checked'])) { ?>
							<span class="error">* <?php echo "You must agree the term..."; ?></span>
						<?php	} ?>
					</tr>
					<tr>
						<td>
								<input type="submit" name="submit" value="Submit">
						</td>
					</tr>
				</table>		
			</form>
			<?php

				echo "<b>Your Data.......</b>";
				echo "<br>Name : $name";
				echo "<br>Email : $email";
				echo "<br>Classes: $class";
				echo "<br>Gender: $gender";
				if (!empty($subject)) {
					echo "<br>Your Subject.....<br>";
					for ($i=0; $i < count($subject) ; $i++) { 
						echo "<br>$subject[$i]";
					}
				} else {
					echo "<br>Subject:<span class='error'>$subjecterr</span>"; 
				}

			?>
		</center>
	</body>
</html>
