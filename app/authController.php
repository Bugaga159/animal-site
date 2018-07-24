<?php


include_once "../config/connect.php";
	
if(isset($_POST['login']) && isset($_POST['password'])){

	$login= htmlentities(mysqli_real_escape_string($link, $_POST['login']));
	$pass = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
}
//Проверка Логин на писутствие в БД
$log_conrt = "SELECT id , password FROM `users` WHERE login LIKE '{$login}'";
$res_contr = mysqli_query($link,$log_conrt ) or errorHelperRedirect("возникла проблема, связанная с подключением к базе данных, содержащей нужную информацию."," не найден пользователь!"); 
$data = mysqli_fetch_assoc($res_contr);
	if($data['id'] == 0){
		$errors = "Логин не существует !";
		echo $errors;
	}

if (password_verify($pass, $data['password'])) {

	session_start();
	//Если все хорошо, идем дальше
		
	header("Location: ../profile.php?id=" . $data['id']);
	exit();
}
else {

	header("Location: ../profile_error.php");
}
	?>