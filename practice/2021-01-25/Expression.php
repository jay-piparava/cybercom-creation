<?php

	//Expressions are used to find a perticular peace of string from a whole string;
	//we use a function preg_match for match a string.it returns true if match otherwise false.
	$data = 'hello My name if jay. my email address is jay@gmail.com';
	$email = preg_match('/@/', $data);
	if ($email) {
		echo "Email found.....";
	}else{
		echo "Email not found.....";
	}
	//another perfect way to find a email is valid or not
	$eaddress = 'Jaygmail.com';
	$email1 = preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $eaddress);
	if ($email1) {
		echo "<br>$eaddress is a valid...";
	} else {
		echo "<br>$eaddress is not a valid...";
	}
	//Example of a preg_replace()
	$string = "hello i am jay i am intern in a cybercom creation my email address id a jay.piparava@marwadi.com";
	echo "<br>old string is....:$string";
	$string = preg_replace("/[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}/", "jay@cybercom.com", $string); 
	echo "<br>New String is.....:$string";
	
?>