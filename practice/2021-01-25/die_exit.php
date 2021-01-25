<?php

//die() and exit() methods are used for a die a page.
//we we cannot connect with database then it run a die() so that the page is die and we see the error message or if it is successfully connected then the remaining code is run.....
@mysqli_connect('localhost','root1','') or die('Cant connect with database.....');

echo "Connected.......";

?>