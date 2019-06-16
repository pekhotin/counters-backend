<?php
	require_once ('data/mysqli.php');
	
	
	
	$sql = "INSERT INTO orders (user_id, topic, message, file, executor, status, datetime_create) VALUES (".$_POST['user_id'].", '".$_POST['topic']."', '".$_POST['message']."', 'file', 0, 'Зарегистрировано', '".date('Y-m-d H:i:s')."')";
	
	echo $sql;
	
	echo mysqli_query($db, $sql);