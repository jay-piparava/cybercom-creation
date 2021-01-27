<?php

//associative array contain a key and value pair.
//creating a array with personal info.
$personal_info = array('name' => 'jay' ,'education' => 'MCA' , 'age' => 21);

//for accessing a value.
echo $personal_info['name'];
echo "<br>".$personal_info['age']."<br>";

//now we add a new element in a personal_info
$personal_info['job'] = 'developer';

//for print whole array
print_r($personal_info);

?>