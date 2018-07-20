<?php

require_once 'sett_conn.php'; // подкл скрип с данными БД

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));



