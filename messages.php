<?php

$btn = ['index','Выход']; // Для кнопки в header

// подключение header
require_once 'templates/header.php';

echo '

    <main class="main__profile">
        <div class="container">
            <div class="main__profile__wrapper">';

require_once 'templates/nav.php'; // подключение nav

?>
                
                <section class="main__messages">
                    <div class="messages__search">
                        <form action="">
                            <input type="text" value="Введите текст поиска">
                            <button class="search__btn">Найти</button>
                        </form>
                    </div>
                    <div class="message">
                        <div class="message__list">
                            <a href="mess_send.php"><img src="img/avatars/roma.jpg" alt="avatars"></a>
                            <p>
                                <a href="mess_send.php">Новых Сообщений - нет</a>
                            </p>
                        </div>
                        <div class="message__list">
                                <a href="mess_send.php"><img src="img/avatars/masha.jpg" alt="avatars"></a>
                                <p>
                                    <a href="mess_send.php">Новое Сообщение - 1 !</a>
                                </p>
                        </div>
                        <div class="message__list">
                                <a href="mess_send.php"><img src="img/avatars/no_avatar.gif" alt="avatars"></a>
                                <p>
                                    <a href="mess_send.php">Новых Сообщений - нет</a>
                                </p>
                        </div><div class="message__list">
                                <a href="mess_send.php"><img src="img/avatars/ava-i.jpg" alt="avatars"></a>
                                <p>
                                    <a href="mess_send.php">Новых Сообщений - нет</a>
                                </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>


  <?php

    require_once 'templates/footer.php'; // подключение footer