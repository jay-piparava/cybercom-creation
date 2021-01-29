<?php

$file = fopen('file_write_ex.txt', 'w');
$text = "Hello i am jay \n i am a student.";
fwrite($file, $text);
fclose($file);

?>