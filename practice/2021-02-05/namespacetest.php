<?php
require 'car.php';
use class1\test\car as car1;
$name = new car1();
echo $name->name;

/**
 * 
 */
class car 
{
	public $type;
	function __construct()
	{
		$this->type = 'race';
	}
}
$type_of_car = new car();
echo $type_of_car->type;
?>