<?php

$btn = ['index','Выход']; // Для кнопки в header



 if(isset($_REQUEST['error_message'])){
    $error_message = $_REQUEST['error_message'];
}else{
    $error_message = 'вы здесь оказались из-за сбоя в работе программы.';
}

if(isset($_REQUEST['system_error_message'])){
    $system_error_message = preg_replace ("/\\\\/", '', $_REQUEST['system_error_message']);
}else{
    $system_error_message = "Сообщения о системных ошибках отсутствуют.";
}


require_once 'templates/header.php';

?>
    <section class="registration__form">
        <div class="container">
            <div class="registration__form__wrapper">

               <div class="error">
                    <h1>Нам очень жаль...</h1>
                    <img src="img/error.png" class="error" alt="">
                    <p>  ... но произошел небольшой сбой. Вероятно, <span class="error_message"><?php echo $error_message; ?></span></p>
                    <p>
                    Не волнуйтесь, мы в курсе происходящего и предпримем все необходимые меры.
                        Если же вы хотите связаться с нами и узнать подробности произошедшего или
                        вас что-нибудь беспокоит в сложившейся ситуации, пришлите нам <a href="#">сообщение</a>
                        , и мы неприменно откликнемся.
                    </p>
                    <?php
                    echo "<p>Было получено следующее сообщение об ошибке системного уровня: <b>{$system_error_message}</b></p>";
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
   
<?php
    require_once 'templates/footer.php'; // подключение footer

    ?>