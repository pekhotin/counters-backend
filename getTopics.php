<?php

	require_once ('data/mysqli.php');
	
	switch ($_GET['type']) {
		case 'flat': $type = 'Квартира'; break;
		case 'entrance': $type = 'Подъезд'; break;
		case 'yard': $type = 'Двор'; break;
		case 'house': $type = 'Дом'; break;
	}
	
	$sql = 'SELECT * FROM topic_types WHERE category = \''.$type.'\'';
	
	$query = mysqli_query($db, $sql);
	
	echo json_encode(getRows($query), JSON_UNESCAPED_UNICODE);