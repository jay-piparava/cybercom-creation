<?php

//this is 8 character password generator code refresh the page and get new..
$password = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
$randompass = str_shuffle($password);
$newpass = substr($randompass, 0,8);
echo $newpass;

//strrev() example.......
$text = "hello i am jay";
$rev = strrev($text);
echo "<br>$rev";
?>