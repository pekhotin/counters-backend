<?php
	require_once('data/mysqli.php');
	
	$sql = 'SELECT * FROM (SELECT * FROM lora_water_counters ORDER BY datetime DESC LIMIT 10) t ORDER BY datetime ASC';
	
	$query = mysqli_query($db, $sql);
	
	echo json_encode(getRows($query),JSON_UNESCAPED_UNICODE); 