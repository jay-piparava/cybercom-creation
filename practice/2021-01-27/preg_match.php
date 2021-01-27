<?php

//function which return true if string match else false.
function iscontain($string){
	if(preg_match('/@/', $string)){
		return true;
	} else {
		return false;
	}
}

$str = "This is @ jay";
if (iscontain($str)) {
	echo "$str contain @ sign...";
} else {
	echo "$str doesnot contain @ sign...";
}


?>