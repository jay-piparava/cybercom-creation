<?php

$path = $_SERVER['HTTP_HOST'];
//this retuen a host name or path
//now if we want a path of a perticular image folder them just append it..
$img_path = "$path/images/header.php";
echo "$img_path";

?>