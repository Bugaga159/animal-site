<?php

$btn = ['index','Выход']; // Для кнопки в header
    include_once "config/connect.php";//Подключение к БД
    $user_id = $_REQUEST['id'];
    $select_query = "SELECT * FROM `users` WHERE  id = '{$user_id}'";
    $result = mysqli_query($link, $select_query);
    if(!$result){
       
        $user_error_message = "возникла проблема, связанная с подключением " .
            "к базе данных, содержащей нужную информацию.";
        $system_error_message = mysqli_error($link);
        header("Location: profile_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
    exit();
    } else{
        
        $row =mysqli_fetch_array($result);
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
    }
// подключение header
require_once 'templates/header.php';
echo '
    <main class="main__profile">
        <div class="container">
            <div class="main__profile__wrapper">';
            
require_once 'templates/nav.php'; // подключение nav
?>              
                <section class="profile__settings">
                    <div class="setting__wrapper">
                        <a href="">
                            <img src="img/avatars/no_avatar.gif" alt="avatar" >
                        </a>
                        <div>
                            <a class="changes_profil" href="changes_profile.html">Редактировать</a>
                        </div>
                    </div>
                    <div class="profile__friends">
                        <p>Друзья <?php echo $last_name . " " . $first_name?>:</p>
                        <ul>
                            <li>
                                <a href="#"><img src="img/avatars/ava-i.jpg" alt="">
                                <p>Панин Андрей</p></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/avatars/masha.jpg" alt="">
                                <p>Панина Мария</p></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/avatars/roma.jpg" alt="">
                                <p>Денискин Роман</p></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/avatars/ava-i.jpg" alt="">
                                <p>Панин Андрей</p></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/avatars/masha.jpg" alt="">
                                <p>Панина Мария</p></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/avatars/roma.jpg" alt="">
                                <p>Денискин Роман</p></a>
                            </li>
                        </ul> 
                    </div>                 
                </section>
                <section class="profile__wall">
                    <section class="wall__setting">
                        <ul>
                            <li><?php echo $first_name . " " . $last_name ?></li>
                            <li>Online</li>
                        </ul>
                        <hr>
                        <p>Город: Серпухов</p>
                        <p>Количество питомцев: <a href="#">2</a></p>
                        <p><a href="#">Друзья</a></p>
                        
                    </section>
                    <section class="wall__foto">
                        <p>Фото домашних животных:</p>
                        <div class="foto__profile">
                            <ul>
                                <li>
                                    <a href=""><img src="img/pets_avatar/1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href=""><img src="img/pets_avatar/2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href=""><img src="img/pets_avatar/3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href=""><img src="img/pets_avatar/1.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    
                    </section>
                    <section class="wall__news">
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
                    </section>
                </section>
            </div>
        </div> 
    </main>



    <?php
    require_once 'templates/footer.php'; // подключение footer