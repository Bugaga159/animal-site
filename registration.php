<?php
session_start();
include_once "config/connect.php";


if(isset($_POST['do_signup'])){

    // Проверка на ошибки в регистрации
    $errors = [];
    if (trim($_POST['login']) == '') {
        $errors[] = 'Введите Логин!';
    }
    if (trim($_POST['first_name']) == '') {
        $errors[] = 'Введите Имя!';
    }
    if (trim($_POST['last_name']) == '') {
        $errors[] = 'Введите Фамилию!';
    }
    if (trim($_POST['email']) == '') {
        $errors[] = 'Введите Email!';
    }
    if ($_POST['password'] == '') {
        $errors[] = 'Введите Пароль!';
    }
    if ($_POST['password_2'] != $_POST['password'] ) {
        $errors[] = 'Повторно введенный пароль не верно!';
    }
    
    

    // Получение данных
    
        $login = htmlentities(mysqli_real_escape_string($link, $_POST['login']));
        $first_name = htmlentities(mysqli_real_escape_string( $link, $_POST['first_name']));
        $last_name = htmlentities(mysqli_real_escape_string($link, $_POST['last_name']));
        $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
        $pass = password_hash( htmlentities(mysqli_real_escape_string($link, $_POST['password'])), PASSWORD_DEFAULT);

    //Проверка Логин на писутствие в БД
        $log_conrt = "SELECT id FROM `users` WHERE login LIKE '{$login}'";

        $res_contr = mysqli_query($link,$log_conrt );
        foreach($res_contr as $res){
            if($res > 0){
                $errors[] = "Логин уже занят!";
            }
        }
            
            
        

    // Проверка на отсутствие ошибок
        if (empty($errors)) {

    //Регистрация данных в БД
        $insert_sql = "INSERT INTO users VALUES ( NULL, '{$login}', '{$first_name}', '{$last_name}', '{$email}', '{$pass}',NULL , NULL)";
        $result = mysqli_query($link, $insert_sql ) or die(mysqli_errno());

        header('Location: profile.php?id=' . mysqli_insert_id($link));

        exit();
        

    }else{

        $errors_all = '<div style ="color: red; text-align: center;">' . array_shift($errors).'</div><hr>';

    }
 }


$btn = ['index','Выход']; // Для кнопки в header

// подключение header
require_once 'templates/header.php';

?>
    <section class="registration__form">
        <div class="container">
            <div class="registration__form__wrapper">

                <form  method="POST">


                <?php // Вывод в случае ошибки
                    echo $errors_all;
                
		        ?>
                    <div class="form-group first_name">
                        <p><label for="login">Логин:</label></p>
                        <input type="text" name = "login" class="form-control login" placeholder="Введите Логин" >                         
                    </div>
                    <div class="form-group first_name">
                        <p><label for="first_name">Имя:</label></p>
                        <input type="text" name = "first_name" class="form-control first_name" placeholder="Введите Имя">                            
                    </div>
                    <div class="form-group last_name">
                        <p><label for="last_name">Фамилия:</label></p>
                        <input type="text" name="last_name" class="form-control last_name" placeholder="Введите Фамилию">
                    </div>
                    <div class="form-group email">
                        <p><label for="exampleInputEmail1 email">Email</label></p>
                        <input type="email" name ="email" class="form-control email" placeholder="Введите email">	
                    </div>
                    <div class="form-group password">
                        <p><label for="exampleInputPassword1 password">Пароль</label></p>
                        <input type="password" name="password" class="form-control password" placeholder="Введите Пароль" >
                    </div>
                    <div class="form-group password">
                        <p><label for="exampleInputPassword1 password">Повторите пароль</label></p>
                        <input type="password" name="password_2" class="form-control password" placeholder="Повторите пароль" >
                    </div>
                    <button type="submit" class="btn btn-success" name="do_signup">Зарегистрироваться</button>
                    <button type="reset" class="btn btn-default"  name="do_resert">Сброс</button>
                </form>
            </div>
        </div>
    </section>
   
<?php
    require_once 'templates/footer.php'; // подключение footer

    ?>