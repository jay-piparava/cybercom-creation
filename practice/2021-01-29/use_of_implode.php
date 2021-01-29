<?php

$data = array('jay', 'hemal' ,'mahir');
$str = implode(',', $data);
$file = fopen('implode.txt', 'w');
fwrite($file, $str);
fclose($file);

?>