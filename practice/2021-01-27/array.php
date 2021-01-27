<?php

//here we create a array of food
$food = array('Samosa','Kachori','pizza');

//for accessing a perticular element from array..
echo "<br>$food[0]";
echo "<br>$food[2]<br>";

//for add a element in a array.
$food[count($food)] = "Dhosha";

//for see a whole array with key and value..
print_r($food);

?>