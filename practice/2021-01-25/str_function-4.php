<?php
	
//addslashes(string) - used for add a slashes....
$text = 'this is a image <img src = "jay.jpg">';
$str = htmlentities(addslashes($text));
echo $str;

//stripslashes(str) - remove slashes from string.
echo "<br>".stripslashes($str);

?>