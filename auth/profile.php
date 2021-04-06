<?php
session_start();
if (!$_SESSION['user']){
    header('LOCATION: index1.php ');
}
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="shortcut icon" href="/img/1.jpg" type="image/x-icon">
        <title>Document</title>
    </head>
    <body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">Обратная связь, json, parsing

            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="../index.php" class="nav-link px-2 link-secondary">Главная</a></li>
                <li><a href="../about.php" class="nav-link px-2 link-dark">Обратная связь</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Api</a></li>
                <li><a href="../csv&json&xml.php" class="nav-link px-2 link-dark">Json&XML&CSV</a></li>
                <li><a href="../parser.php" class="nav-link px-2 link-dark">Парсинг</a></li>
            </ul>
        </header>
        <!--</div>-->

        <form>
            <h2><?= $_SESSION['user']['name'] ?></h2>
            <a href="#"> <?= $_SESSION['user']['email']?> </a><br>
            <a href='logout.php'>Выход</a>
        </form>
    </div>
    </body>
    </html>

<?php
//    require ("../blocks/header.php");
?>