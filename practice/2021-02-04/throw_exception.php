<?php

function divide($num1,$num2){
	if ($num2 == 0) {
		throw new Exception("Cant divide by zero..");
		
	} else {
		return $num1 / $num2 ;
	}
}
divide(5,0);
?>