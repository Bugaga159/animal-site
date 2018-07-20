<?php

	include_once "../config/connect.php";
	
	if(isset($_POST['login']) && isset($_POST['password'])){
 
		$login= htmlentities(mysqli_real_escape_string($link, $_POST['login']));
		$pass = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
	}

	//Проверка Логин на писутствие в БД
	$log_conrt = "SELECT id FROM `users` WHERE login LIKE '{$login}'";

	$res_contr = mysqli_query($link,$log_conrt );
	foreach($res_contr as $res){
		if($res == 0){
			$errors[] = "Логин не существует !";
		}
	}

	$log = "SELECT * FROM `users` WHERE login LIKE '{$login}'"; 
	
	$query_user = mysqli_query($link, $log) or errorHelperRedirect("возникла проблема, связанная с подключением к базе данных, содержащей нужную информацию."," не найден пользователь!");

	$data = mysqli_fetch_assoc($query_user);
 
	if (password_verify($pass, $data['password'])) {


		//Если все хорошо, идем дальше
	    	
	    header("Location: ../profile.php?id=" . $data['id']);
		exit();
	}
	// else {
	
	// 	header("Location: ../profile_error.php");
	// }
	?>