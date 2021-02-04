<?php

/**
 * class for test a constractor
 */
class test
{
	
	// function __construct()
	// {
	// 	echo "This is without parameter...";
	// }
	function __construct($data)
	{
		echo "This is with parameter... and data is $data";
	}
}

//call automatically when instance is created....
//$test1 = new test();
new test('hello');
?>