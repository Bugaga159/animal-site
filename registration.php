<?php

$btn = ['index','Выход']; // Для кнопки в header

// подключение header
require_once 'templates/header.php';

echo '
    <section class="registration__form">
        <div class="container">
            <div class="registration__form__wrapper">
                <form action="" method="POST">
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
    ';

    require_once 'templates/footer.php'; // подключение footer