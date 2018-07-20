<?php


$btn = ['registration','Регистрация'];// Для кнопки в header

require_once 'templates/header.php';



echo '
<main class="main">
<div class="container">
    <div class="main__wrapper">
        <section class="main__registration">
            <form action="script/authController.php" method="POST" class="main__form">
                <li>
                    <ul><label for="login">Введите логин или почту</label></ul>
                    <ul><input id="login" name="login" type="text" placeholder="Логин"></ul>
                    <ul><label for="password">Пароль</label></ul>
                    <ul><input id="password" name="password" type="password" placeholder="Пароль"></ul>
                    <ul><button>Войти</button></ul>
                    <ul><a href="registration.php">Регистрация</a></ul>
                    <ul><a href="profile.php">Для проверки</a></ul>
                </li>
            </form>
        </section>
        <section class="main__info">
                <p><img src="img/logo-bg.png" alt=""></p>
                <h1>Добро пожаловать!</h1>
                <p class="main__description">СОЦИАЛЬНАЯ СЕТЬ ДЛЯ ВЛАДЕЛЬЦЕВ ДОМАШНИХ ЖИВОТНЫХ</p>
                
        </section>
    </div>
</div>
</main>
';

require_once 'templates/footer.php';