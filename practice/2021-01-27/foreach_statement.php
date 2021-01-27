<?php

//foreach for single array.
$info = array('name' => 'jay','age' => 21,'job' => 'student' );
foreach ($info as $element) {
	echo "$element<br>";
}
echo "<br><br>";

//code of foreach for a multidimensional array
$student = array('hobby'=>
						array('Cricket' ,'Basketball' ,'Running'),
				'result'=>
						array('bca' => 81 , 'mca' => 80)
				);
foreach ($student as $info => $inner_array) {
	echo "<br>$info";
	foreach ($inner_array as $items) {
		echo "<br>$items";
	}
}

?>