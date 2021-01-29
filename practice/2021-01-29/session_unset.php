<?php

session_start();
//here we create a 2 session uname and age
$_SESSION['uname'] = 'jay';
$_SESSION['age'] = '21';

//lets print a session
echo $_SESSION['uname']."<br>";
echo $_SESSION['age'];

//for remove a session name uname
unset($_SESSION['uname']);

//lets print a session
echo "<br>";
print_r($_SESSION);
// //for unset all session
session_unset();

//echo "<br>".$_SESSION['age'];
print_r($_SESSION);
?>