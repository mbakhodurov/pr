<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="/img/1.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <title>Hello, world!</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<!--<div class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">-->
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/1.png" height="50" width="50" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills me-auto mb-2 mb-lg-0 mr-auto" role="tablist">
                <li class="nav-item">
                    <a class="nav-link links" href="index.php" aria-selected="true"><img src="img/home1.png" width="25"
                                                                                         height="25" alt="Пример">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link links" href="#text_format" aria-selected="false"><img src="img/outline1.png" width="25"
                                                                                          height="25" alt="Пример">Текстовые форматы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link links" aria-current="page" href="#about_us"><img src="img/outline_sticky_note.png" width="25"
                                                                                        height="25" alt="Пример">Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link links" href="#contacts" aria-currnent="page"><img src="img/maps.png" width="25"
                                                                                         height="25" alt="Пример">Обратная связь</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link links" href="#contacts" aria-currnent="page"><img src="img/outline_nature_people_white_24dp.png" width="25"
                                                                                         height="25" alt="Пример">Контакты</a>
                </li>
            </ul>
            <form class="d-flex" action="" name="login" method="POST">
<!--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                <a class="btn btn-primary me-2" href="auth/index1.php" role="button">Вход</a>
                <a class="btn btn-outline-success" href="auth/register.php" role="button">Регистрация</a>

            </form>
        </div>
    </div>

</nav>

<div class="container-fluid a1">
<!--    <div class="row">-->
<!--        <div>-->
<!--            <marquee Direction="down" vspace="10" hspace="10"><p style="font-family: Impact; font-size: 18pt">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!</p></marquee>-->
            <marquee><p>Дом.РАБОТА — один из самых крупных сайтов по поиску работы и сотрудников в мире (по данным рейтинга Similarweb).</p></marquee>
<!--        </div>-->
<!--    </div>-->
</div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" pb-3>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%" >
                    <source src="img/Laptop.mp4" class="d-block w-100" alt="..." type="video/mp4" >
                </video>
<!--            <img src="img/3.jpg" class="d-block w-100" alt="...">-->
            <div class="carousel-caption d-block" style="height: 20%; size: 10px;">
                <h5>50 967 961</h5>
                <p>резюме</p>
            </div>
        </div>
        <div class="carousel-item">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%" >
            <source src="img/plexus.mp4" class="d-block w-100" alt="..." type="video/mp4" >
            </video>
            <div class="a">
            <div class="carousel-caption d-block" style="height: 20%">

                <h5>Работа найдется для каждого</h5>
                <p>Создавайте резюме</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%" >
                <source src="img/Architect1.mp4" class="d-block w-100" alt="..." type="video/mp4" >
            </video>

            <div class="carousel-caption d-md-block">

                <div class="container-fluid mt-3">
                    <div class="container p-5">

                        <div class="row ">
                            <div class="col">
                                <div class="card" style="width: auto;">
                                    <div class="card" style="background-color: darkgray">
                                            <div class="card-body " style="color: red">
                                                <h5 class="card-title" align="center">50 967 961</h5>
                                                <p class="card-text" align="center">резюме</p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: auto;">
                                    <div class="card" style="background-color: darkgray">
                                        <div class="card-body" style="color: red">
                                            <h5 class="card-title" align="center">931 907</h5>
                                            <p class="card-text" align="center">вакансий</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
<!--                                <div class="card" style="width: 11rem;">-->
                                <div class="card" style="width: auto;">
                                    <div class="card" style="background-color: darkgray">
                                        <div class="card-body" style="color: red">
                                            <h5 class="card-title" align="center">1 469 500</h5>
                                            <p class="card-text" align="center">компаний</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
</div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

<!--</div>-->

<div class="container">
    <div class="content" id="text_format">
        <center><i><h1 class="m-3">Текстовые форматы</p></h1></i></center>
        <div class="container-fluid">
            <center><hr size="7" class="col-2" style="color:brown;"></center>
        </div>
    </div>
</div>




    <div class="container setka">
        <div class="row justify-content-center my-flex-card">
            <div class="col-3 py-3 px-lg-3 border bg-dark">
                <div class="card imgs">
                    <img src="img/csv.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center" style="font-family: 'Pacifico', cursive;"><strong>CSV</strong></h5>
                        <center><hr size="7" class="col-2" style="color:black;"></center>
                        <p class="card-text" align="center">CSV — текстовый формат, предназначенный для представления табличных данных. Строка таблицы соответствует строке текста, которая содержит одно или несколько полей, разделенных запятыми. Формат CSV стандартизирован не полностью.</p>
                        <div class="text-center">
                            <a href="csv&json&xml.php" class="btn btn-primary" name="CSV">Загрузите документ</a>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="col-sm-4">-->
            <div class="col-3 py-3 px-lg-3 border bg-dark">
                <div class="card" background-color: cornsilk">
                    <img src="img/xml.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center" style="font-family: 'Pacifico', cursive;"><strong>XML</strong></h5>
                        <center><hr size="7" class="col-2" style="color:black;"></center>
                        <p class="card-text" align="center">XML расшифровывается как eXtensible Markup Language — «расширяемый язык разметки».
                            Один из языков разметки тебе, возможно, уже знаком: ты слышал об HTML, с помощью которого создаются веб-страницы :)
                            HTML и XML похожи даже внешне:</p>
                        <div class="text-center">
                            <a href="csv&json&xml.php" class="btn btn-primary" name="CSV">Загрузите документ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 py-3 px-lg-3 border bg-dark" >
                <div class="card">
                    <img src="img/json.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" align="center" style="font-family: 'Pacifico', cursive;"><strong>JSON</strong></h5>
                        <center><hr size="7" class="col-2" style="color:black;"></center>

                        <p class="card-text" align="center">JSON — текстовый формат обмена данными, основанный на JavaScript. Как и многие другие текстовые форматы, JSON легко читается людьми. Формат JSON был разработан Дугласом Крокфордом. JSON — формат, который используется для передачи данных между сервером и клиентом.</p>
                        <div class="text-center">
                            <a href="csv&json&xml.php" class="btn btn-primary" name="CSV">Загрузите документ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--</div>-->
<br>
<div class="container">
    <div class="content" id="about_us">
        <center><i><h1 class="m-3">Почему кандидаты выбирают Дом.Работа</p></h1></i></center>
        <div class="container-fluid">
            <center><hr size="7" class="col-6" style="color:brown;"></center>
        </div>

    </div>
</div>

<div class="container about">
    <div class="d-flex flex-row p-3 justify-content-between" style="background-color: #eee">
        <div class="m-3">
            <p><h4> Заработок без ограничений</p></h4>
            <p> На большинстве вакансий сможете получить дополнительное вознаграждение: </p>
            <br><font color="#a52a2a" size="4px"> &bull;</font> Заработок без ограничений
            <br><font color="#a52a2a" size="4px"> &bull;</font> Получить комиссию при продаже продуктов
            <!--                <p>Дом.Работа — один из самых крупных сайтов по поиску работы и сотрудников в мире (по данным рейтинга Similarweb). Мы создаем передовые технологии на всех доступных платформах для того, чтобы работодатели могли быстро найти подходящего сотрудника, а соискатели — хорошую работу. Наши мобильные приложения стабильно занимают первые места в категории «Бизнес» на всех платформах. Наш поиск использует искусственный интеллект, а сайт обрабатывает до 3000 запросов в секунду. Каждый месяц на сайте появляется более полумиллиона вакансий, а технологии для работы с персоналом насчитывают более 30 позиций. Ежедневно мы помогаем сотням тысяч человек изменить свою жизнь к лучшему.</p>-->
        </div>
                <div class="m-3">
                    <img src="https://acdn.tinkoff.ru/static/pages/files/3502cea8-927d-4f7b-be2f-43c66b668b73.png" class="card-img-top" alt="...">
                </div>
        </div>

</div>
<br>
<div class="container">
    <div class="row justify-content-md-center my-flex-card">
        <div class="col-sm-6">
            <div class="card mt-3">
                <div class="card-body" style="background-color: #eee">
                    <h5 class="card-title">Удобное время работы</h5>
                    <br>
                    <p class="card-text rr">Работай в офисе 5/2, 2/2 или с почасовой оплатой. Если совмещаешь работу с учебой, подберем вакансию с подходящим расписанием.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mt-3 "">
                <div class="card-body" style="background-color: #eee">
                    <h5 class="card-title">Можно без опыта</h5>
                    <br>
                    <p class="card-text rr">Главное — коммуникабель­ность, активность и желание работать. А остальному научим в онлайн-университете Дом.Работа</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mt-3 "">
                <div class="card-body" style="background-color: #eee">
                    <h5 class="card-title">Постоянное развитие</h5>
                    <br>
                    <p class="card-text rr">Бесплатный доступ к базе курсов, чтобы повышать свой уровень и осваивать новые навыки. Карьерный рост для самых амбициозных сотрудников</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mt-3 "">
                <div class="card-body" style="background-color: #eee">
                    <h5 class="card-title">Неформальная обстановка</h5>
                    <br>
                    <p class="card-text rr">У нас общаются на «ты» даже с руководителями, а на работу можно ходить в толстовке и с любым цветом волос</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<!--<footer class="bg-dark text-white pt-3 pb-2">-->
<div class="container ">
    <div class="content" id="about_us">
        <center><i><h1 class="m-3">Как начать работать</p></h1></i></center>
        <div class="container-fluid">
            <center><hr size="7" class="col-6" style="color:brown;"></center>
        </div>
    </div>
</div>

<!--    <div class="container text-md-left">-->
<!--        <div class="row text-md-left">-->
<!--            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">-->
<div class="container rr1">
<!--    <div class="d-md-flex p-1 justify-content-center" style="height: 200px">-->

    <div class="row text-md-center">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3"><img src="img/outline_looks_one_black_24dp.png" alt="..." style="height: 40px; width: 40px"> --------------------- ><br>Зарегистрируйтесь или <br>войдите в личный кабинет</div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3"><img src="img/outline_looks_two_black_24dp.png" alt="..." style="height: 40px; width: 40px"> --------------------- ><br>Выберите подходящую вам<br> вакансию</div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3"><img src="img/outline_looks_3_black_24dp.png" class="card-img-top" alt="..." style="height: 40px; width: 40px"> --------------------- ><br>Пройдите короткое онлайн-<br>обучение и собеседование</div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3"><img src="img/outline_looks_4_black_24dp.png" class="card-img-top" alt="..." style="height: 40px; width: 40px"><br>Пройдите практику <br>и приступайте к работе</div>
    </div>
</div>
<!--</footer>-->

<br><br>
<footer class="bg-dark text-white pt-3 pb-2">

    <div class="container contact">
        <div class="content con" id="contacts">
            <center><i><h1 class="m-3">Контакты</p></h1></i></center>
            <div class="container-fluid">
                <center><hr size="7" class="col-6" style="color:brown;"></center>
            </div>
        </div>
    </div>

    <div class="container text-md-left">
        <div class="row text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning text-sm-center ">Пишите нам</h5>
                <?php
                    require_once ("about.php");
                ?>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning text-sm-center">Карта сайта</h5>
                <p>
                    <a href="index.php" class="text-white" style="text-decoration: none;">Главная</a>
                </p>
                <p>
                    <a href="#text_format" class="text-white" style="text-decoration: none;">Текстовые форматы</a>
                </p>
                <p>
                    <a href="#about_us" class="text-white" style="text-decoration: none;">Про нас</a>
                </p>
                <p>
                    <a href="#contacts" class="text-white" style="text-decoration: none;">Обратная свзяь</a>
                </p>
                <p>
                    <a href="#contacts" class="text-white" style="text-decoration: none;">Контакты</a>
                </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning text-sm-center">Контакты</h5>
                <p>
                    <i class="fas fa-home mr-3"></i>&nbsp;Республика Татарстан, г. Казань, РФ
                </p>
                <p>
                    <i class="fas fa-envelope mr-5"></i>&nbsp;dom.rabota@gmail.com
                </p>
                <p>
                    <i class="fas fa-phone mr-5"></i>&nbsp;+7 999 999 99 99
                </p>
                <p>
                    <i class="fas fa-print mr-3"></i>&nbsp;+7 383 383 83 83
                </p>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row  align-items-center">
            <div class="col-md-7 col-lg-8">
                <p>
                    Copyright @2021 All rights reserved by
                    <a href="https://google.com" style="text-decoration: none">
                        <strong class="text-warning">Google</strong>
                    </a>
                </p>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i> </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i> </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i> </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i> </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i> </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-github"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
    if($_POST['CSV']){
        print "edas";
    }
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>