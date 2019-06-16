<?php
ini_set('display_errors', '1');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Headers: authorization, content-type');


$db = mysqli_connect('localhost', 'counters', 'counters', 'counters');
mysqli_query($db, 'SET NAMES utf8');

$content = '';

function getRows($result) {
	global $db;
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}