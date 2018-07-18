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
                <section class="main__image">
                	<div class="image__user">
                		
	                	<div id="collage" class="clear">
						    <img width="300" height="400" src="img/about-1.jpg" alt=""/>
						    <img width="255" height="120" src="img/about-2.jpg" alt=""/>
						    <img width="300" height="300" src="img/pets_avatar/1.jpg" alt=""/>
						    <img width="425" height="222" src="img/pets_avatar/2.jpg" alt=""/>
						    <img width="148" height="254" src="img/pets_avatar/3.jpg" alt=""/>
						    <img width="456" height="321" src="img/pets_avatar/1.jpg" alt=""/>
						    <img width="300" height="400" src="img/about-1.jpg" alt=""/>
						    <img width="255" height="120" src="img/about-2.jpg" alt=""/>
						    <img width="300" height="300" src="img/pets_avatar/1.jpg" alt=""/>
						    <img width="425" height="222" src="img/pets_avatar/2.jpg" alt=""/>
						    <img width="148" height="254" src="img/pets_avatar/3.jpg" alt=""/>
						    <img width="456" height="321" src="img/pets_avatar/1.jpg" alt=""/>
						    <img width="300" height="400" src="img/about-1.jpg" alt=""/>
						    <img width="255" height="120" src="img/about-2.jpg" alt=""/>
						    <img width="300" height="300" src="img/pets_avatar/1.jpg" alt=""/>
						    <img width="425" height="222" src="img/pets_avatar/2.jpg" alt=""/>
						    <img width="148" height="254" src="img/pets_avatar/3.jpg" alt=""/>
						    <img width="456" height="321" src="img/pets_avatar/1.jpg" alt=""/>
						    <img width="300" height="400" src="img/about-1.jpg" alt=""/>
						    <img width="255" height="120" src="img/about-2.jpg" alt=""/>
						    <img width="300" height="300" src="img/pets_avatar/1.jpg" alt=""/>
						    <img width="425" height="222" src="img/pets_avatar/2.jpg" alt=""/>
						    <img width="148" height="254" src="img/pets_avatar/3.jpg" alt=""/>
						    <img width="456" height="321" src="img/pets_avatar/1.jpg" alt=""/>
						    <img width="300" height="400" src="img/about-1.jpg" alt=""/>
						    <img width="255" height="120" src="img/about-2.jpg" alt=""/>
						    <img width="300" height="300" src="img/pets_avatar/1.jpg" alt=""/>
						    <img width="425" height="222" src="img/pets_avatar/2.jpg" alt=""/>
						    <img width="148" height="254" src="img/pets_avatar/3.jpg" alt=""/>
						    <img width="456" height="321" src="img/pets_avatar/1.jpg" alt=""/>
						</div>
					</div>
                </section>
            </div>
        </div> 
    </main>
     ';

    require_once 'templates/footer.php'; // подключение footer