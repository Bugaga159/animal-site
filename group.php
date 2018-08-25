<?php
session_start();
$btn = ['index','Выход']; // Для кнопки в header

// подключение header
require_once 'templates/header.php';

echo '

    <main class="main__profile">
        <div class="container">
            <div class="main__profile__wrapper">';

require_once 'templates/nav.php'; // подключение nav

?>
                
                <section class="group">
                    <div class="group__main">
                        <div class="screen__group">
                            <p class="crop"><a href=""><img src="img/screen_group.jpg" alt=""></a></p>
                        </div>    
                        <div class="group__nav">
                            <nav>
                                <ul>
                                    <li><p class="group__name">Все про собак</p></li>
                                    <li><a href=""><img src="img/pets_avatar/3.jpg" alt=""></a></li>
                                    <li class="group__mess"><a  href="">Вступить в группу</a></li>
                                    <li class="group__mess"><a href="">Сообщение</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="group__item">
                            <ul>
                                <li><a href="">Подписанные</a></li>
                                <li><a href="mess_send.php">Обсуждение</a></li>
                                <li><a href="image_user.php">Фото</a></li>
                                <li><a href="">Товары</a></li>
                            </ul>
                        </div>
                        <div class="group__mess">
                            <div class="news">                            
                                <h1>Новость о котят</h1>                         
                                <hr>
                                <p>Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Voluptatum error temporibus
                                    impedit officiis vero beatae dolores veniam 
                                    quas nesciunt architecto distinctio eveniet 
                                    exercitationem, ab quae rerum earum officia 
                                    ea. Modi!Dolore perspiciatis dicta consectetur 
                                    temporibus, assumenda nihil doloremque, quisquam 
                                    molestiae consequuntur culpa alias minus! Itaque 
                                    quod quos, minus aspernatur, omnis labore, reprehenderit 
                                    dignissimos inventore quam veniam sapiente possimus 
                                    voluptate quidem?</p>
                                <p><button>Понравилось</button><a href="#">Комментарии</a></p>
                                <p class="news__date">Дата публикации: 27/06/18г.</p>
                            </div>
                            <div class="news">
                                <h1>Преданные животные</h1>
                                <hr>
                                <p><img src="img/pets_avatar/1.jpg" alt="">                                
                                    Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Voluptatum error temporibus
                                    impedit officiis vero beatae dolores veniam 
                                    quas nesciunt architecto distinctio eveniet 
                                    exercitationem, ab quae rerum earum officia 
                                    ea. Modi!Dolore perspiciatis dicta consectetur 
                                    temporibus, assumenda nihil doloremque, quisquam 
                                    molestiae consequuntur culpa alias minus! Itaque 
                                    quod quos, minus aspernatur, omnis labore, reprehenderit 
                                    dignissimos inventore quam veniam sapiente possimus 
                                    voluptate quidem?</p>
                                <p><button>Понравилось</button><a href="#">Комментарии</a></p>
                                <p class="news__date">Дата публикации: 27/06/18г.</p>
                            </div>
                            <div class="news">                            
                                <h1>Новость о котят</h1>                         
                                <hr>
                                <p>Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Voluptatum error temporibus
                                        impedit officiis vero beatae dolores veniam 
                                        quas nesciunt architecto distinctio eveniet 
                                        exercitationem, ab quae rerum earum officia 
                                        ea. Modi!Dolore perspiciatis dicta consectetur 
                                        temporibus, assumenda nihil doloremque, quisquam 
                                        molestiae consequuntur culpa alias minus! Itaque 
                                        quod quos, minus aspernatur, omnis labore, reprehenderit 
                                        dignissimos inventore quam veniam sapiente possimus 
                                        voluptate quidem?</p>
                                <p><button>Понравилось</button><a href="#">Комментарии</a></p>
                                <p class="news__date">Дата публикации: 27/06/18г.</p>
                            </div>
                            <div class="news">
                                <h1>Преданные животные</h1>
                                <hr>
                                
                                <p><img src="img/pets_avatar/1.jpg" alt="">                                
                                    Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Voluptatum error temporibus
                                    impedit officiis vero beatae dolores veniam 
                                    quas nesciunt architecto distinctio eveniet 
                                    exercitationem, ab quae rerum earum officia 
                                    ea. Modi!Dolore perspiciatis dicta consectetur 
                                    temporibus, assumenda nihil doloremque, quisquam 
                                    molestiae consequuntur culpa alias minus! Itaque 
                                    quod quos, minus aspernatur, omnis labore, reprehenderit 
                                    dignissimos inventore quam veniam sapiente possimus 
                                    voluptate quidem?</p>
                                <p><button>Понравилось</button><a href="#">Комментарии</a></p>
                                <p class="news__date">Дата публикации: 27/06/18г.</p>
                            </div>
                        </div>
                    </div>
                    
                </section>
            </div>
        </div>
    </main>


    <?php

    require_once 'templates/footer.php'; // подключение footer