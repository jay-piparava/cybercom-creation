<?php

//we can create a n-dimensional array in php.

//create an array for student.
$student = array('name' => 'jay', 'hobby'=>
										array('Cricket' ,'Basketball' ,'Running'),
									'result'=>
										array('bca' => 81 , 'mca' => 80)
				);

//code for access a element from an array
echo "<br>".$student['name'];
echo "<br>".$student['hobby'][0];
echo "<br>".$student['result']['bca'];
echo "<br>".$student['result']['mca'];

//for access whole array
echo "<br>";
print_r($student);
echo "<br>";
print_r($student['hobby']);
echo "<br>";
print_r($student['result']);

?>