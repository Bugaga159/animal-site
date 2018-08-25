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

echo '
                <section class="main__image">
                	<div class="image__user">
						<div class="hovergallery">
						
							<img src="img/about-1.jpg" />
						
							<img src="img/about-2.jpg" />
						
							<img src="img/pets_avatar/1.jpg" />
						
							<img src="img/pets_avatar/2.jpg" />
						
							<img src="img/pets_avatar/3.jpg" />
						
							<img src="img/about-1.jpg" />
						
							<img src="img/about-2.jpg" />
						
							<img src="img/pets_avatar/1.jpg" />
						
							<img src="img/pets_avatar/2.jpg" />
						
							<img src="img/pets_avatar/3.jpg" />
							
							<img src="img/about-1.jpg" />
						
							<img src="img/about-2.jpg" />
						
							<img src="img/pets_avatar/1.jpg" />
						
							<img src="img/pets_avatar/2.jpg" />
						
							<img src="img/pets_avatar/3.jpg" />
						
						</div>
						
	                	
					</div>
                </section>
            </div>
        </div> 
    </main>
     ';

    require_once 'templates/footer.php'; // подключение footer