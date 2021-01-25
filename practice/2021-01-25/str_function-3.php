<?php

//similar_text(arg1,arg2,arg3) - it will return a % of simmilarity between 2 strings...
//it contain 3 args. 1)str1 2)str2 3)var in which you want to store a percentage.
$str1 = "hello i am jay i am a student";
$str2 = "HELLO I AM JAY I AM A STUDENT";
similar_text($str1,$str2,$res);
echo $res;

//strlen() used for count a length of a string.
$text = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
echo "<br>".strlen($text);

?>