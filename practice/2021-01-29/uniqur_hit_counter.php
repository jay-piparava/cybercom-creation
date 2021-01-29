<?php

function hit_counter(){
	$current = 0;
	$found = '';
	$current_ip = $_SERVER['REMOTE_ADDR'];
	//$current_ip = '100.100.100.100';
	$data = file("ip.txt");
	foreach ($data as $data1) {
		$ip_single = trim($data1);
		if ($ip_single == $current_ip) {
			$found = true;
		} else {
			$found = false;
		}
	}
	if ($found == false) {
		$handler = fopen('ip.txt', 'a');
		fwrite($handler, "$current_ip\n");
		fclose($handler);

		$handler = fopen('uniqur_hit_counter.txt', 'r');
		$count = fread($handler, filesize('uniqur_hit_counter.txt')+1);
		fclose($handler);

		@$tot_user = $count + 1;
		$handler = fopen('uniqur_hit_counter.txt', 'w');
		fwrite($handler, $tot_user);
		fclose($handler);
	} 
	$handler = fopen('uniqur_hit_counter.txt', 'r');
	$data = fread($handler, filesize('uniqur_hit_counter.txt'));
	fclose($handler);
	echo "<h1>Total unique user visited this page $data times</h1>";
}
hit_counter();
?>