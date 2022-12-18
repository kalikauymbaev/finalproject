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
	<section class="bread">
		<div class="container">
			<div class="bread">
				<a href="courses.php">Главная страница</a>
				<i class="fas fa-angle-right"></i>
				<a href="webcourses.php">Web Разработка</a>
			</div>
		</div>
	</section>
	<section class="courses__web">
		<div class="container">
			<div class="courses__popular">
				<div class="courses__popular_title">
					<h3>Web разработка</h3>
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
									<a href="insidecourses.php">Посмотреть</a>
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
									<a href="insidecourses.php">Посмотреть</a>
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
									<a href="insidecourses.php">Посмотреть</a>
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