<?php

//replace a string with one word.
$string = 'hello ,this is a jay piparava from marwadi university.';
echo str_replace('hello', 'hi', $string);

//but when we want to find a one or more string with more replacement then....
$str1 = 'Hello , i am jay piparava. i am in marwadi university. my job is student.';
$find = array('Hello' ,'marwadi university' ,'student');
$replace = array('Hi', 'Cybercom creation', 'Intern');
echo "<br>".str_replace($find, $replace, $str1);

?>