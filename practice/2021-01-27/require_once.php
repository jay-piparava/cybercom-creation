<?php

//required_once() doesnot add a filr if file if already added.
require "multiple.php";
//require "multiple.php";
//here if we add again then it add twice so we can use like
require_once("multiple.php");
echo "This is required_once.php";

?>