<?php
	//logical operator
	$no1 = 5;
	$no2 = 5;
	$no3 = 5;
	if($no1 > $no2 && $no1 > $no3){
		echo "$no1 is grater";
	}elseif ($no2 > $no1 && $no2 > $no3) {
		echo "$no2 is grater";
	}elseif ($no3 > $no1 && $no3 > $no2) {
		echo "$no3 is grater";
	}else
		echo "all are equal";
?>