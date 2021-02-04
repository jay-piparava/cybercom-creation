<?php

/**
 * class for practice a constant variable
 */
class Circle
{
	const pi = 3.14;
	function area($radious){
		return self::pi * ($radious * $radious);
	}
}
$areas = new Circle();
echo $areas->area(10);

//for access constant outside class
echo $areas::pi;
echo Circle::pi;
?>