<?php

$btn = ['index','Выход']; // Для кнопки в header

// подключение header
require_once 'templates/header.php';

?>

    <main class="main__profile">
        <div class="container">
            <div class="main__profile__wrapper">

  
<?php          
require_once 'templates/nav.php'; // подключение nav

?>
                
                <section class="main__messages">
                    <div class="messages__search">
                        <form action="">
                            <input type="text" value="Введите текст поиска">
                            <button class="search__btn">Найти</button>
                            <a href="messages.php" class="btn__back">Назад</a>
                        </form>
                    </div>
                    <div class="message">
                        <div class="message__list">
                            <h3>Андрей Панин</h3>
                            <p>Привет, как дела?</p>
                            <span>24/07/18 в 21:30</span>
                        </div>
                        <div class="message__list">
                            <h3>Мария Панина</h3>
                            <p>Привет, все хорошо))</p>
                            <span>24/07/18 в 21:32</span>
                        </div>
                        <div class="message__list">
                            <h3>Андрей Панин</h3>
                            <p>Пошли гулять</p>
                            <span>24/07/18 в 21:33</span>
                        </div>
                        <div class="message__list">
                            <h3>Мария Панина</h3>
                            <p>ОК, в 22-00 около меня</p>
                            <span>24/07/18 в 21:35</span>
                        </div>
                    </div>
                    <div class="message__ansver">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <button class="btn__back">Отправить</button>
                    </div>
                </section>
            </div>
        </div>
    </main>


   <?php

    require_once 'templates/footer.php'; // подключение footer 
    ?>