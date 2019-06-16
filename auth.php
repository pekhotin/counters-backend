<?php

require_once('data/mysqli.php');

if (!empty($_POST)) {

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $sql = 'SELECT pass_hash FROM t_users WHERE login = \''.$login.'\'';
    $query = mysqli_query($db, $sql);

    if (mysqli_num_rows($query) > 0) {

        $hash = mysqli_fetch_array($query)['pass_hash'];
        if (password_verify($pass, $hash)) {

            $sql = 'SELECT id, login, firstname FROM t_users WHERE login = \''.$login.'\'';
            $query2 = mysqli_query($db, $sql);
            $row = mysqli_fetch_assoc($query2);
			
			echo json_encode ($row);
            
			
        }
    }
}