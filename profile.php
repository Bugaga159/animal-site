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
                        <p>Друзья Панина Андрея:</p>
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
                            <li>Андрей Панин</li>
                            <li>Online</li>
                        </ul>
                        <hr>
                        <p>Город: Серпухов</p>
                        <p>Количество питомцев: <a href="#">2</a></p>
                        <p><a href="#">Друзья</a></p>
                        
                    </section>
                    <section class="wall__foto">
                        <p>Фото домашних животных:</p>
                        <div id="carousel">
                            <figure id="spinner">
                                <img src="img/pets_avatar/1.jpg" alt>
                                <img src="img/pets_avatar/2.jpg" alt>
                                <img src="img/pets_avatar/3.jpg" alt>
                                <img src="img/pets_avatar/1.jpg" alt>
                                <img src="img/pets_avatar/2.jpg" alt>
                                <img src="img/pets_avatar/3.jpg" alt>
                                <img src="img/pets_avatar/1.jpg" alt>
                                <img src="img/pets_avatar/2.jpg" alt>
                            </figure>
                        </div>
                        <span style="float:left" class="ss-icon" onclick="galleryspin(\'-\')">&lt;</span>
                        <span style="float:right" class="ss-icon" onclick="galleryspin(\'\')">&gt;</span>
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
    </main>';

    require_once 'templates/footer.php'; // подключение footer