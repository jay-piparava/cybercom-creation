<?php
	/**********************************************************
		basically there are a 4 types of functions:
		1.no argument no return:
		2.no argument with return:
		3:with argument no retuen:
		4:with argument with return:
	*/
	//1.no argument no return
	function pinfo(){
		echo "hello";
	}
	pinfo();
	//2.no argument with return
	function pinfo1(){
		return "hello";
	}
	echo "<br>This is no arg with return : ";
	echo pinfo1();
	//3.with arg. no return
	function pinfo2($name,$age){
		echo "<br>With arg. no return function : My name is $name and my age is $age";
	}
	pinfo2('jay',21);
	//4.with arg. with return
	function pinfo3($name,$age){
		return "<br>With arg. with return function : My name is $name and my age is $age";
	}
	echo pinfo3('jay',22);
?>