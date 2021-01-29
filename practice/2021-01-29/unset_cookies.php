<?php

//set cookie name favcolor
setcookie('color','yellow',time() + 86400);//for a 1 day

//print cookie..
echo "<br>";
print_r($_COOKIE);

//now we delete a cookie
setcookie('color','yellow',time() - 86400);

//print cookie
echo "<br>";
print_r($_COOKIE);

?>