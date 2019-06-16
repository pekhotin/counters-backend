<?php
	require_once ('data/mysqli.php');
	
	
	
	$sql = "UPDATE t_users SET firstname = '".$_POST['firstname']."', secondname='".$_POST['secondname']."', email='".$_POST['email']."', phone='".$_POST['phone']."' WHERE id=".$_POST['id'];
	
	echo $sql;
	
	echo mysqli_query($db, $sql);