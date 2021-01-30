<?php

$xml = simplexml_load_file("example_xml.xml");
// echo "<pre>";
// print_r($xml)
foreach ($xml as $data) {
	echo "<br>$data->name is $data->age years old <br>";
	foreach ($data->show as $show) {
	 	echo "&nbsp;&nbsp;&nbsp;&nbsp;he perform a $show->showname on a $show->showdate.<br>";
	 } 
}

?>