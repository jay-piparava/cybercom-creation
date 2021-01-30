<?php

$xml = simplexml_load_file('example.xml');
//for 1 value
echo $xml->producer[1]->name;
echo $xml->producer[1]->age;
//for entire file
foreach ($xml as $data) {
	echo "<br>$data->name is $data->age old...";
}


?>