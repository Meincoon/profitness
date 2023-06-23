<!DOCTYPE html>
<html>
    <head>
        <link type="Image" href="images/main_icon.png" rel="icon">
        <title>PRO FITNESS - Your Ultimate Fitness Destination</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    </head>
    <body>

        <div class="wrapper">
            <header class="header">
                <div class="header-container">
                    <a href="index.html" class="title"><strong>Pro <span class="title color">Fitness</span></strong><p class="content content-logo"><b>фитнес клуб</b></p></a>
                    <nav class="header-nav">
                        <ul class="header-nav-ul">
                            <div class="container-poisk">
                                <div class="poisk">
                                    <form name="search" method="post" action="search.php">
                                    <input type="search" class="input-poisk" name="keyword" placeholder="поиск">
                                    <input type="submit" value="Поиск" class="button-poisk">
                                    </form>
                                </div>
                            </div>
                            <li class="content header-li"><a class="nav color-hover border-color-hover" href="vacancies.php">вакансии</a></li>
                            <li class="content header-li"><a class="nav color-hover border-color-hover" href="club-cards.html">клубные карты</a></li>
                            <li class="content header-li"><a class="nav color-hover border-color-hover" href="stock.html">акции</a></li>
                            <li class="content header-li"><a class="nav color-hover border-color-hover" href="gallery.html">посмотреть клуб</a></li>
                            <li class="content header-li"><a class="nav color-hover border-color-hover" href="schedule.html">расписание</a></li>
                            <li class="content header-li"><a class="nav color-hover border-color-hover" href="services.html">услуги</a></li>
                            <li class="content header-li"><a class="nav color-hover border-color-hover" href="contacts.html">контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="main">
                <div class="color title title_prof_vacancies">Вакансии</div>
                <?php
                $mysqli = new mysqli('localhost', 'root', '', 'profitness');
                $result = $mysqli->query('SELECT * FROM `vacancies`');
                while($row = $result->fetch_assoc()):
                ?>
                    <div class="policy-cotainer vacancies_box">
                        <div class="title prof_vacancies"><?php echo '<p>'.$row['title'].'</p>'; ?></div>
                        <div class="vacancies_left">
                            <strong class="title title_vacancies">Основные требования:</strong>
                            <strong class="content policy-content"><?php echo '<p>'.$row['requirements'].'</p>'; ?></strong>
                        </div>
                        <div class="vacancies_right">
                            <strong class="title title_vacancies">Условия работы:</strong>
                            <strong class="content policy-content"><?php echo '<p>'.$row['conditions'].'</p>'; ?></strong>
                            <br class="br_vacancies" />
                            <strong class="content policy-content">Для отправки резюме: profitness@yandex.ru</strong>
                        </div>
                    </div>
                    <hr class="color background-color box-horizontal-line box-horizontal-line-services hr_vacancies" />
                <?php endwhile; ?>
            </div>
        </div>
        <div class="contacts">
            <div class="contacts-title title">КЛУБ PRO<span class="color">FITNESS</span> в Саратове</div>
            <div class="contacts-left">
                <div class="description content">ул. Астраханская, 77</div>
                <div class="description content">г. Саратов,</br>ул. Астраханская, 77</div>
                <div class="description content">Режим работы: КРУГЛОСУТОЧНО</div>
                <div class="description">
                    <a href="https://vk.com"><img src="images/icons-vk.svg"/></a>
                    <a href="https://telegram.org"><img src="images/icons-telegram.svg"/></a>
                </div>
            </div>
            <div class="contacts-right" id="map"></div>
        </div>
        <footer>
            <div class="container-footer">
                <div class="footer1">
                    <a href="index.html" class="title"><strong>Pro <span class="title color">Fitness</span></strong><p class="content content-logo"><b>фитнес клуб</b></p></a>
                    <div class="footer-icon">
                        <a href="https://vk.com"class="vk"><img src="images/icons-vk.svg"/></a>
                        <a href="https://telegram.org"class="tg"><img src="images/icons-telegram.svg"/></a>
                        <a href="https://whatsapp.com"class="wp"><img src="images/icons-whatsapp.svg"/></a>
                    </div>
                    <a href="Policy.html" class="content Privacy-Policy">Политика конфиденциальности</a>
                    <a href="rules.html" class="content Privacy-Policy">Правила клуба</a>
                    <div class="reserved content">&copy; 2023 ProFitness</div>
                </div>
                <div class="footer-menu">
                    <h2 class="title footer-title footer-menu-title">Меню</h2>
                    <ul>
                        <li><a class="content" href="vacancies.php">вакансии</a></li>
                        <li><a class="content" href="club-cards.html">клубные карты</a></li>
                        <li><a class="content" href="stock.html">акции</a></li>
                        <li><a class="content" href="gallery.html">посмотреть клуб</a></li>
                        <li><a class="content" href="schedule.html">расписание</a></li>
                        <li><a class="content" href="services.html">услуги</a></li>
                        <li><a class="content" href="contacts.html">контакты</a></li>
                    </ul>
                </div>
                <div class="contacts-footer">
                    <h2 class="title footer-title footer-menu-title">контакты</h2>
                    <div class="content footer-menu-title"><b>+7 (999) 999-99-99</b></div>
                    <div class="content">г. Саратов,</br>ул. Астраханская улица, 77</div>
                </div>
                <div class="opening-hours">
                    <h2 class="title footer-title footer-menu-title">часы работы</h2>
                    <div class="content footer-menu-title">Тренажерный зал <b>- КРУГЛОСУТОЧНО</b></div>
                    <hr />
                    <div class="content">Отдел продаж</div>
                    <div class="content">с 09:00 до 22:00</div>
                </div>
            </div>
        </footer>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>
        <script src="js/main.js"></script>
    </body>
</html>