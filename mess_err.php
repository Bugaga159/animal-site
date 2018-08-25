<?php
session_start();
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

               <div class="error__mess">
                   <div class="error__ansver">
                        <h1>Обратная связь:</h1>
                        <form class ="err_form" action="">
                            <label for="mess">Ваше сообщение:</label>
                            <textarea name="mess" id="mess" cols="30" rows="10"></textarea>
                            <label for="email">Почта для связи:</label>
                            <input  type="email">
                            <button type="submit">Отправить</button>
                        </form>
                   </div>      
                    
                    
                </div>
            </div>
        </div>
    </section>
   
<?php
    require_once 'templates/footer.php'; // подключение footer

    ?>