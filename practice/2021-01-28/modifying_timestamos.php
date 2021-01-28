<?php

$time = time();
//now we add a 1 day in time
echo date('Y m d',$time);
echo "<br>".date('Y m d',$time +(24*60*60));

//another way to add a day or week or year
echo "<br>add a day<br>";
echo date('Y m d',strtotime("+1 day"));

//add a 1 week 2 hours
echo "<br>actual date and time<br>";
echo date('Y m d h i s',$time);
echo "<br>add a 1 week 2 hours<br>";
echo date('Y m d h i s',strtotime("+1 week 2 hours"));

?>