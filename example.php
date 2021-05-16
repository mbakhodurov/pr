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
    <!---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <title>Hello, world!</title>
</head>
<body>

<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/1.png" height="50" width="50" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about_us">Текстовые форматы</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="#about_us">Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php" aria-currnent="page">Обратная свзязь</a>
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


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" pb-3>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" height="20%" width="100%" >
                <source src="img/Laptop.mp4" class="d-block w-100" alt="..." type="video/mp4" >
            </video>
            <!--            <img src="img/3.jpg" class="d-block w-100" alt="...">-->
            <div class="carousel-caption d-block">
                <h5>50 967 961</h5>
                <p>резюме</p>
            </div>
        </div>
        <div class="carousel-item">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" height="20%" width="100%" >
                <source src="img/plexus.mp4" class="d-block w-100" alt="..." type="video/mp4" >
            </video>
            <div class="carousel-caption d-block">
                <h5>Работа найдется для каждого</h5>
                <p>Создавайте резюме</p>
            </div>
        </div>
        <div class="carousel-item">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" height="20%" width="100%" >
                <source src="img/Architect1.mp4" class="d-block w-100" alt="..." type="video/mp4" >
            </video>

            <div class="carousel-caption d-md-block">

                <div class="container-fluid mt-3">
                    <div class="container p-5">
                        <div class="row ">
                            <div class="col">
                                <div class="card" style="width: 11rem;">
                                    <div class="card" style="background-color: darkgray">
                                        <div class="card-body" style="color: red">
                                            <h5 class="card-title" align="center">50 967 961</h5>
                                            <p class="card-text" align="center">резюме</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 11rem;">
                                    <div class="card" style="background-color: darkgray">
                                        <div class="card-body" style="color: red">
                                            <h5 class="card-title" align="center">931 907</h5>
                                            <p class="card-text" align="center">вакансий</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 11rem;">
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
</div>

<div class="container">
    <div class="content" id="about_us">
        <center><i><h1 class="m-3">Текстовые форматы</p></h1></i></center>
        <div class="container-fluid">
            <center><hr size="7" class="col-2" style="color:brown;"></center>
        </div>
    </div>
</div>

<div class="container" >
    <div class="row text-center">
        <div class="col-xs-12 col-sm-6 col-lg-3"><img src="img/6.jpeg" alt="" class="w-100">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3"><img src="img/7.jpg" alt="" class="w-100">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </p>

        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3"><img src="img/8.png" alt="" class="w-100">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </p>

        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3"><img src="img/9.jpg" alt="" class="w-100">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </p>

        </div>
    </div>
</div>

<!--<div class="container-fluid mt-3" style="background-color: #eee">-->
<div class="container p-4">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 20rem; background-color: cornsilk" >
                <img src="img/csv.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" align="center">CSV</h5>
                    <p class="card-text" align="center">CSV — текстовый формат, предназначенный для представления табличных данных. Строка таблицы соответствует строке текста, которая содержит одно или несколько полей, разделенных запятыми. Формат CSV стандартизирован не полностью.</p>
                    <div class="text-center">
                        <a href="csv&json&xml.php" class="btn btn-primary" name="CSV">Загрузите документ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 20rem; background-color: cornsilk" >
                <img src="img/xml.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" align="center">XML</h5>
                    <p class="card-text" align="center">XML расшифровывается как eXtensible Markup Language — «расширяемый язык разметки».
                        Один из языков разметки тебе, возможно, уже знаком: ты слышал об HTML, с помощью которого создаются веб-страницы :)
                        HTML и XML похожи даже внешне:</p>
                    <div class="text-center">
                        <a href="csv&json&xml.php" class="btn btn-primary" name="CSV">Загрузите документ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 20rem; background-color: cornsilk" >
                <img src="img/json.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" align="center">JSON</h5>
                    <p class="card-text" align="center">JSON — текстовый формат обмена данными, основанный на JavaScript. Как и многие другие текстовые форматы, JSON легко читается людьми. Формат JSON был разработан Дугласом Крокфордом. JSON — формат, который используется для передачи данных между сервером и клиентом.</p>
                    <div class="text-center">
                        <a href="csv&json&xml.php" class="btn btn-primary" name="CSV">Загрузите документ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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