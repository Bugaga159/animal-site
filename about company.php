<?php
session_start();
$btn = ['index','Выход']; // Для кнопки в header

require_once 'templates/header.php';
echo '



    <section class="about__company">
        <div class="container">
            <div class="row">
                    <div class="about__list">
                            <div class="about__company__wrapper">
                                    <h1>Находите друзей по интересам!</h1>
                                    <p>Адрей и Маша на сайте с июля 2018 года. 
                                    Теперь у них 101 новых друзей, они приняли 
                                    участие более чем в 25 совместных прогулках.</p>   
                                       
                                </div>
                                <img src="img/about-1.jpg" alt="about">
                    </div>
                    <div class="about__list">
                            <div class="about__company__wrapper">
                                    <h1>Flaffyland помогает находить любящие семьи!</h1>
                                    <p>Бездомная кошка Маши обрела счастье в новом доме благодаря группе помощи бездомным животным.</p>                                       
                                </div>
                                <img src="img/about-2.jpg" alt="about">
                    </div>
            </div>
        </div>
    </section>
';
require_once 'templates/footer.php';
    