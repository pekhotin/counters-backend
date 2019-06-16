<?php
	require_once ('data/mysqli.php');
	
	$sql = 'SELECT * FROM orders WHERE id = ' . $_GET['id'];
	$query = mysqli_query($db, $sql);
	
	echo json_encode(getRows($query), JSON_UNESCAPED_UNICODE);