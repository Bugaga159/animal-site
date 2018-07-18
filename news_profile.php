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
                
                <section class="wall__news news__profile">
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
                            <img src="img/pets_avatar/1.jpg" alt="">
                            <p>                                
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
                            <img src="img/pets_avatar/1.jpg" alt="">
                            <p>                                
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
                </section>
            </div>
        </div>
    </main>

    ';

    require_once 'templates/footer.php'; // подключение footer