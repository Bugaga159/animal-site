<?php

$btn = ['index','Выход']; // Для кнопки в header

// подключение header
require_once 'templates/header.php';

echo '

    <main class="main__profile">
        <div class="container">
            <div class="main__profile__wrapper">';

require_once 'templates/nav.php'; // подключение nav

echo '
                <section class="main__changes">
	                    <div class="change__list">
	                    	<form action="">
	                    		<h1>Изменить учетные данные:</h1>
			                    <div class="form-group first_name">
			                        <p><label for="first_name">Имя:</label></p>
			                        <input type="text" name = "first_name" class="form-control first_name" placeholder="Введите Имя">                            
			                    </div>
			                    <div class="form-group last_name">
			                        <p><label for="last_name">Фамилия:</label></p>
			                        <input type="text" name="last_name" class="form-control last_name" placeholder="Введите Фамилию">
			                    </div>
			                    <div class="form-group last_name">
			                        <p><label for="tel">Телефон:</label></p>
			                        <input type="text" name="tel" class="form-control last_name" placeholder="Введите номер телефона">
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
			                    <button type="submit" class="btn btn-success" name="do_signup">Сохранить/Изменить</button>
			                    <button type="reset" class="btn btn-default"  name="do_resert">Сброс</button>
	                    	</form>
	                    </div>
                </section>
            </div>
        </div>
    </main>


    ';

    require_once 'templates/footer.php'; // подключение footer