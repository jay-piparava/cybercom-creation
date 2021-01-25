<?php
function add($no1,$no2){
	return $no1 + $no2;
}
function divide($no1,$no2){
	return $no1 / $no2;
}
$ans = divide(add(10,10),add(5,5));
echo $ans;
?>