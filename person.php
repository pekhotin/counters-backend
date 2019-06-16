<?php
	require_once ('data/mysqli.php');
	
	$sql = 'SELECT id, firstname, secondname, email, phone FROM t_users WHERE id = ' . $_GET['user_id'];
	
	$query = mysqli_query($db, $sql);
	
	echo json_encode(mysqli_fetch_assoc($query), JSON_UNESCAPED_UNICODE);