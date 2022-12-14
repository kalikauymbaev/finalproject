<?php

include 'logic.php';

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body class="bod">
    <nav class="nav">
        <div class="container">

            <div class="navbar">
                <div class="header__burger burger">
                    <span class="burger__line burger__line_first"></span>
                    <span class="burger__line burger__line_third"></span>
                </div>
                <div class="navbar_content">
                    <div class="header__nav-close">
                        <span class="header__nav-close-line"></span>
                        <span class="header__nav-close-line"></span>
                    </div>
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
                        <div class="nabvar_user-name"><img src="./img/username.png" alt="username">
                            <p><?php echo $_COOKIE['email']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="profile">
        <div class="container">
            <div class="profile_header">
                <div class="profile_img">
                    <img src="./img/Ellipse 2.png" alt="">
                    <h1><?php echo $_COOKIE['email']; ?></h1>
                </div>
                <div class="profile_btn">

                    <button id="myBtn">Редактировать <br> профиль</button>

                    <div id="myModal" class="modal">

                        <div class="modal-content">
                            <a class="close">&times;</a>
                            <h1>Редактировать</h1>
                            <div class="passwoords">
                                <textarea class="input_write" placeholder="Add a bio" name="" id="" cols="9" rows="8"></textarea>
                                <input id="username" class="searchTerm2" type="textarea" placeholder="Username ">
                                <input id="locat" class="searchTerm2" type="textarea" placeholder="Location ">
                                <input id="company" class="searchTerm2" type="textarea" placeholder="Company ">
                            </div>
                            <div class="save_btn">
                                <a class="input_btn" href="#!">Сохранить</a>
                                <a class="input_btn" href="#!">Отмена</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="course">
        <div class="container">
            <div class="tabs">
                <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
                <label class="firs" for="tab-btn-1"><img class="active" style="padding: 0px 10px;" src="./img/book.svg" alt=""> Обзор </label>
                <input type="radio" name="tab-btn" id="tab-btn-2" value="">
                <label class="sec" for="tab-btn-2"><img style="padding: 0px 10px;" src="./img/copybook.svg" alt=""> Мои курсы</label>
                <input type="radio" name="tab-btn" id="tab-btn-3" value="">
                <label class="thir" for="tab-btn-3"><img style="padding: 0px 10px;" src="./img/cloud.svg" alt=""> Загрузки</label>
                <input type="radio" name="tab-btn" id="tab-btn-4" value="">
                <label class="four" for="tab-btn-4"><img style="padding: 0px 10px;" src="./img/meadl.svg" alt=""> Мои достижения</label>
                <div class="content_1" id="content-1">
                    <h1>Недавние курсы</h1>
                    <div class="content_1_box">
                        <div class="box">
                            <div style="margin-top: 25px;" class="box_item_1">
                                <div class="box_container">
                                    <h2>Front-End Web разработка</h2>
                                    <div class="course_name">
                                        <div class="circle"></div>
                                        <p>WEB</p>
                                    </div>
                                </div>

                            </div>
                            <div style="margin-top: 25px;" class="box_item_1">
                                <div class="box_container">
                                    <h2>Back-End Web разработчик</h2>
                                    <div class="course_name">
                                        <div class="circle"></div>
                                        <p>WEB</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="box">
                            <div class="box_item_2">
                                <div class="box_container">
                                    <h2>Color Theory</h2>
                                    <div class="course_name">
                                        <div style="background: #EA4335;" class="circle"></div>
                                        <p>Design</p>
                                    </div>
                                </div>

                            </div>
                            <div class="box_item_2">
                                <div class="box_container">
                                    <h2>UI Дизайн с Figma</h2>
                                    <div class="course_name">
                                        <div style="background: #FF4EA3;" class="circle"></div>
                                        <p>UI/UX</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-2">
                    <div class="content2_search">
                        <input type="text" class="content2_searchTerm" placeholder="Искать среди моих курсов..." />

                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn">Тип: <span>Все</span>  <i class="fa fa-caret-down"></i></button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>
                        <div class="dropdown2">
                            <button onclick="myFunction2()" class="dropbtn2">Направление: <span>Все</span>  <i class="fa fa-caret-down"></i></button>
                            <div id="myDropdown2" class="dropdown-content2">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="content2_box">
                        <div class="content2_item">
                            <div class="box_container">
                                <h2>Front-End Web разработка</h2>
                                <div class="course_name">
                                    <div class="circle"></div>
                                    <p>WEB</p>
                                    <p style="margin-left: 52px;">Пройдено: 57%</p>
                                </div>
                                <img style="margin-top: -247px;
                                float: right;" src="./img/Rectangle 61.png" alt="">
                            </div>
                        </div>
                        <div class="content2_item">
                            <div class="box_container">
                                <h2>Back-End Web разработка</h2>
                                <div class="course_name">
                                    <div class="circle"></div>
                                    <p>WEB</p>
                                    <p style="margin-left: 52px;">Пройдено: 90%</p>
                                </div>
                                <img style="margin-top: -247px;
                                float: right;" src="./img/Rectangle 62.png" alt="">
                            </div>
                        </div>
                        <div class="content2_item">
                            <div class="box_container">
                                <h2>UI дизайн с Figma</h2>
                                <div class="course_name">
                                    <div style="background: #FF4EA3;
                                    " class="circle"></div>
                                    <p>WEB</p>
                                    <p style="margin-left: 52px;">Пройдено: 100%</p>
                                </div>
                                <img style="margin-top: -247px;
                                float: right;" src="./img/Rectangle 63.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-3">
                    <div class="content3_box">
                        <div class="content3_nav"></div>
                        <div class="tabs_2">
                            <input style="display: none;" type="radio" name="tab_2-btn" id="tab_2-btn-1" value="" checked>
                            <label class="inp_in" style="    cursor: pointer; z-index: 0;  display: inline-flex; background-color: #56FDC3; border-radius: 23px; padding: 8px 5px;color: #264653; "><img style="
                                padding: 0px 5px;
                            "  src="./img/Group.svg">Загружено</label>
                            <input style="display: none;" type="radio" name="tab_2-btn" id="tab_2-btn-2" value="">
                            <label class="inp_out" style=" cursor: pointer; z-index: 0; display: inline-flex;color: #264653;" for="tab_2-btn-2"><img src="./img/mdi_download.svg" alt=""> Скачивается</label>


                            <div id="content2-1" class="content2_1">
                                <div class="content2_2_center">
                                    <h1>Вы еще ничего не скачивали</h1>
                                    <input onClick='location.href="#"' class="center_value" type="submit" value="К Курсам" placeholder="К Курсам">
                                </div>

                            </div>
                            <div style="margin-top: 101px;" id="content2-2">
                                <div class="content2_3_center">
                                    <h1>Вы еще ничего не скачивали</h1>
                                    <input onClick='location.href="#"' class="center_value" type="submit" value="К Курсам" placeholder="К Курсам">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div id="content-4">
                    <div class="content4_box">
                        <div class="content2_2_center">
                            <h1>Вы еще ничего не скачивали</h1>
                            <input style="cursor: pointer;" class="center_value2" type="submit" value="К Курсам" placeholder="К Курсам">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer ">
            <div class="container ">
                <div class="footer_content ">
                    <p class="footer_year ">Kaskelen 2022</p>
                    <a class="footer_logo " href="main.php"><span>i</span>Courses</a>
                </div>
            </div>
        </footer>
    </section>
    <script src="js/profile.js"></script>
</body>
</html>