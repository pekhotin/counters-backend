<?php
	require_once ('data/mysqli.php');
	
	$sql = 'SELECT COUNT(1) notifications FROM orders WHERE notification_user > 0 AND user_id = ' . $_GET['user_id'];
	
	$query = mysqli_query($db, $sql);
	
	$row = mysqli_fetch_assoc($query);
	
	echo json_encode($row);