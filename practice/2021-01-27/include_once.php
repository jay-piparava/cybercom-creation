<?php

//include_once() doesnot add a filr if file if already added.
include "multiple.php";
//include "multiple.php";
//here if we add again then it add twice so we can use like
include_once("multiple.php");
echo "This is include_once.php";

?>