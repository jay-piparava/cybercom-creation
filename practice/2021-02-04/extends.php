<?php

/**
 * Class for student general info.
 */
class Student
{
	public $name = '';
	public $age = '';
	public $gender = '';
	public function getInfo($name,$age,$gender){
		echo "Name is : $name.<br>";
		echo "Age is : $age<br>";
		echo "Gender is : $gender<br>";
	}
}
/**
 * class for institute info.
 */
class Institute extends Student
{
	public $class = "";
	public $cgpa = "";
	public function getAllInfo($name,$age,$gender,$class,$cgpa){
		$this->getInfo($name,$age,$gender);
		echo "Class is : $class.<br>";
		echo "CGPA is : $cgpa.";
	}
}
//creating a instance of a institute class because there are no need to create instance of student class becoz it is inherited
$data = new Institute();
$data->getAllInfo('jay','21','male','MCA',8.57);

?>