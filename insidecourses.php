<?php 

include 'logic.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<title>iCourses</title>
</head>
<body>
        <nav class="nav">
            <div class="container">
              <div class="navbar">
                <div class="navbar_content">
                  <div class="select-box">
                    <div class="options-container">
                      <div class="option">
                        <a href="uxcourses.php">UI/UX Дизайн</a>
                      </div>
                      <div class="option">
                        <a href="webcourses.php">Web Разработка</a>
                      </div>
                      <div class="option">
                        <a href="mobilecourses.php">Мобильная Разработка</a>
                      </div>
                      <div class="option">
                        <a href="smmcourses.php">SMM</a>
                      </div>
                      <div class="option">
                        <a href="designcourses.php">Дизайн</a>
                      </div>
                    </div>
                    <div class="selected">Курсы</div>
                  </div>
                  <div class="navbar_content-search">
                    <div class="navbar_content-search-wrap">
                      <div class="search">
                        <input type="text" class="searchTerm" placeholder="Поиск" />
                        <button type="submit" class="searchButton">
                          <img src="./img/search.svg" alt="search" />
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="navbar_title">
                  <a class="navbar_title-link" href="main.php"><span class="navbar_span-title">i</span>Courses</a>
                </div>
                <div class="navbar_register">
                  <div class="navbar_user">
                    <div class="navbar_user-container">
                            <div class="user_option">
                                <a href="user.php"> <img src="./img/userprofileicon.svg" alt="profile"> Профиль</a>
                            </div>
                            <div class="user_option">
                                <a href="courses.php"> <img src="./img/usercoursicon.svg" alt="course" style="margin-right: 15px;"> Мои курсы</a>
                            </div>
                            <div class="user_option">
                                <a href="user.php"> <img src="./img/userdiplomicon.svg" alt="diplom"> Достижения</a>
                            </div>
                            <div class="user_option">
                                <a href="user.php"> <img src="./img/usercloudicon.svg" alt="cloud"> Загрузки</a>
                            </div>
                            <div class="user_option">
                                <a href="logout.php"> <img src="./img/userexiticon.svg" alt="exit"> Выйти</a>
                            </div>
                        </div>
                    <div class="nabvar_user-name"><img src="./img/username.png" alt="username"><p><?php echo $_COOKIE['email']; ?></p></div>
                  </div>
                </div>
              </div>
            </div>
        </nav>
			<header class="inside__header">
				<div class="container">
				<section class="bread">
					<div class="bread">
						<a href="courses.php">Главная страница</a>
						<i class="fas fa-angle-right"></i>
						<a href="courses.php">Все Курсы</a>
						<i class="fas fa-angle-right"></i>
						<a href="webcourses.php">Web Разработка</a>
						<i class="fas fa-angle-right"></i>
						<a href="#">Front-End Web Разработка</a>
					</div>
				</section>
				<h2 class="inside__course-name">Front-End Web Разработка</h2>
				<p class="inside__course-subtitile">Front-End Web Development</p>
				</div>
			</header>
			<div class="inside__info">
				<div class="container__2">
					<div class="inside__info_main">
						<div class="course__contain">
							<div class="course__contain-text">
								<p><i class="far fa-clock"></i> 21:07:03</p>
								<p><i class="far fa-play-circle"></i> 16 Уроков</p>
								<p><i class="fas fa-globe"></i> English</p>
								<p><i class="far fa-calendar-alt"></i> 01.02.2020</p>
								<p><i class="far fa-user"></i> Elton Jones</p>
							</div>
							<div class="course__contain-rating">
								<img src="img/rating.png" alt="">
							</div>
						</div>
						<p class="contain__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus pellentesque porttitor turpis viverra a orci. Faucibus in <br>egestas consectetur imperdiet. Hac volutpat non eu molestie elit pulvinar. Semper hac aliquam pulvinar sodales.</p>
						<p class="contain__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus pellentesque porttitor turpis viverra a orci. Faucibus in <br>egestas consectetur imperdiet. Hac volutpat non eu molestie elit pulvinar. Semper hac aliquam pulvinar sodales.</p>
						<ul class="inside__info-about">
							<li>Lorem ipsum dolor  adipiscing elit.</li>
							<li>Tempus pellentesque porttitor turpis </li>
							<li>Viverra a orci vicente del bosque.</li>
						</ul>
					</div>
				</div>
			</div>
			<section class="video__player">
				<div class="container">
					<div class="video__player__main">
						<iframe width="760" height="515" src="https://www.youtube.com/embed/5YDVJaItmaY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</section>
			<section class="comments">
				<div class="container">
					<div class="comments__title">
						<h2>Комментарии</h2>
					</div>
					<div class="comments__send">
						<div class="comments__image">
							<img src="img/username.png" alt="">
						</div>
						<div class="comments__send-text">
							<form method="post" action="#" class="comment__form">
								<textarea placeholder="Ваш комментарий"></textarea>
								<button>Добавить</button>
							</form>
						</div>
					</div>
					<div class="comments__sended">
						<div class="comments__image">
							<img src="img/commentator2.png" alt="">
						</div>
						<div class="comments__text">
							<p class="sender__name">
								Elvis Presley
							</p>
							<p class="sender__text">One of the best coures I’ve ever learnt</p>
						</div>
					</div>
				</div>
			</section>
			<section class="courses__similar">
				<div class="container">
					<div class="courses__popular">
						<div class="courses__popular_title">
							<h2>Похожие курсы</h2>
						</div>
						<div class="courses__popular__items">
							<div class="course__item">
								<div class="course__image">
									<img src="img/WEB/Img of a course.png" alt="">
								</div>
								<div class="course__info">
									<div class="course__text">
										<div class="course__name">
											<h2>FRONTEND ВЕБ-РАЗРАБОТКА</h2>
											<h4>FrontEnd Web Development</h4>
											<p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
										</div>
										<div class="course__rating">
											<img src="img/rating.png" alt="">
										</div>
									</div>
									<div class="course__about">
										<div class="course__contain">
											<p><i class="far fa-clock"></i> 21:07:03</p>
											<p><i class="far fa-play-circle"></i> 16 Уроков</p>
											<p><i class="fas fa-globe"></i> English</p>
											<p><i class="far fa-user"></i> Elton Jones</p>
										</div>
										<div class="course__btn">
											<a href="#">Посмотреть</a>
										</div>
									</div>
								</div>
							</div>
							<div class="course__item">
								<div class="course__image">
									<img src="img/WEB/Img of a course-1.png" alt="">
								</div>
								<div class="course__info">
									<div class="course__text">
										<div class="course__name">
											<h2>BACKEND ВЕБ-РАЗРАБОТКА</h2>
											<h4>BackEnd Web Development</h4>
											<p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
										</div>
										<div class="course__rating">
											<img src="img/rating.png" alt="">
										</div>
									</div>
									<div class="course__about">
										<div class="course__contain">
											<p><i class="far fa-clock"></i> 21:07:03</p>
											<p><i class="far fa-play-circle"></i> 16 Уроков</p>
											<p><i class="fas fa-globe"></i> English</p>
											<p><i class="far fa-user"></i> Elton Jones</p>
										</div>
										<div class="course__btn">
											<a href="#">Посмотреть</a>
										</div>
									</div>
								</div>
							</div>
							<div class="course__item">
								<div class="course__image">
									<img src="img/WEB/Img of a course-2.png" alt="">
								</div>
								<div class="course__info">
									<div class="course__text">
										<div class="course__name">
											<h2>DJANGO ВЕБ-РАЗРАБОТКА</h2>
											<h4>Django Web Development  </h4>
											<p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
										</div>
										<div class="course__rating">
											<img src="img/rating4_5.png" alt="">
										</div>
									</div>
									<div class="course__about">
										<div class="course__contain">
											<p><i class="far fa-clock"></i> 21:07:03</p>
											<p><i class="far fa-play-circle"></i> 16 Уроков</p>
											<p><i class="fas fa-globe"></i> English</p>
											<p><i class="far fa-user"></i> Elton Jones</p>
										</div>
										<div class="course__btn">
											<a href="#">Посмотреть</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<footer class="footer">
			<div class="container">
			  <div class="footer_content">
			    <p class="footer_year">Kaskelen 2022</p>
			    <a class="footer_logo" href="main.php"><span>i</span>Courses</a>
			  </div>
			</div>
			</footer>
	<script src="js/profile.js"></script>
</body>
</html>