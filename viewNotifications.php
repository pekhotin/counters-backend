<?php
	require_once ('data/mysqli.php');
	
	$sql = 'UPDATE orders SET notification_user = 0 WHERE user_id = ' . $_GET['user_id'];
	mysqli_query($db, $sql);