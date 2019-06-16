<?php
	require_once('data/mysqli.php');
	
	// $my_file = 'file.txt';
	// $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);

	
	if (empty($_POST['data']))
		exit();
	
	$data = explode(',', $_POST['data']);
	
	$sql = "INSERT INTO lora_water_counters (datetime, counter_id, data_cold, data_hot, temperature, rssi) VALUES (".time().", '".$data[0]."', ".$data[1].", ".$data[2].", ".$data[3].", ".$data[4].")";


	// fwrite($handle, $sql . '\n');
	// fclose($handle);
	
	mysqli_query($db, $sql);
	