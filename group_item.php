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
                
                <section class="friends">
                	<div class="friends__list">
                		<ul>
                			<li>
                				<a href="group.php">
                					<img src="img/pets_avatar/1.jpg" alt="avatar">
                				</a>
                			</li>
                			<li>
                				<a class="friend__name" href="group.php">Лечение птиц</a>
                			</li>
                			<li>
                				<a class="friend__message" href="">Вступить в группу</a>
                			</li>
                			
                		</ul>
                	</div>
                	<div class="friends__list">
						<ul>
							<li>
								<a href="group.php">
									<img src="img/pets_avatar/3.jpg" alt="avatar">
								</a>
							</li>
							<li>
								<a class="friend__name" href="group.php">Все про собак</a>
							</li>
							<li>
								<a class="friend__message" href="">Вступить в группу</a>
							</li>
							
						</ul>
					</div>
					<div class="friends__list">
							<ul>
								<li>
									<a href="group.php">
										<img src="img/pets_avatar/2.jpg" alt="avatar">
									</a>
								</li>
								<li>
									<a class="friend__name" href="group.php">Клуб любителей кошек</a>
								</li>
								<li>
									<a class="friend__message" href="">Вступить в группу</a>
								</li>
								
							</ul>
					</div>
					<div class="friends__list">
						<ul>
							<li>
								<a href="group.php">
									<img src="img/avatars/ava-i.jpg" alt="avatar">
								</a>
							</li>
							<li>
								<a class="friend__name" href="group.php">Лечение собак</a>
							</li>
							<li>
								<a class="friend__message" href="">Вступить в группу</a>
							</li>
							
						</ul>
					</div>
					<div class="friends__list">
						<ul>
							<li>
								<a href="group.php">
									<img src="img/about-2.jpg" alt="avatar">
								</a>
							</li>
							<li>
								<a class="friend__name" href="group.php">Встречи милых котят</a>
							</li>
							<li>
								<a class="friend__message" href="">Вступить в группу</a>
							</li>
							
						</ul>
					</div>
					<div class="friends__list">
							<ul>
								<li>
									<a href="group.php">
										<img src="img/about-1.jpg" alt="avatar">
									</a>
								</li>
								<li>
									<a class="friend__name" href="group.php">Одежда для любимых</a>
								</li>
								<li>
									<a class="friend__message" href="">Вступить в группу</a>
								</li>
								
							</ul>
					</div>
                </section>
            </div>
        </div> 
    </main>
    ';

    require_once 'templates/footer.php'; // подключение footer
