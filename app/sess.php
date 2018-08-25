<?php

//Данные сессии


include_once "config/connect.php";//Подключение к БД
    $user_id = $_SESSION['userid'];
    $select_query = "SELECT * FROM users WHERE  id = '{$user_id}'";
    $result = mysqli_query($link, $select_query);
    if(!$result){
       
        $user_error_message = "возникла проблема, связанная с подключением " .
            "к базе данных, содержащей нужную информацию.";
        $system_error_message = mysqli_error($link);
        header("Location: ../profile_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
    exit();
    } else{
        
        $row =mysqli_fetch_array($result);
        $_SESSION['first_name'] =  $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
    }