<?php
    session_start();
    if ($_SESSION['user']){
        header('LOCATION:profile.php');
    }
    $_SESSION['$a'] = mt_rand(1, 9);
    $_SESSION['$b'] = mt_rand(1, 9);

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

    <form action="signing.php" method="POST">
        <div class="container mt-5">
            <fieldset class="border p-3">
                <legend class="w-auto">Вход</legend>
                <label>Логин</label><br>
                <input type="text" name="login" placeholder="Введите свой логин">
                <br>
                <label>Пароль</label><br>
                <input type="password" name="password" placeholder="Введите пароль">
                <br>
                <label>Капча <?php echo ($_SESSION['$a'].'+'.$_SESSION['$b'])?></label><br>
                <input type="text" placeholder="Введите ответ" name="captcha">
                <input type="submit" name="send" class="btn btn-success btn-sm">
                <p>
                    У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a><br>
                    Забыли пароль? - <a href="../reset/reset.php">Восстановление пароля</a>
                </p>
                <?php
                if ($_SESSION['message']){
                    echo $_SESSION['message'];
                    echo $_SESSION['capcha'];
                }
                unset($_SESSION['message']);
                unset($_SESSION['capcha']);
                ?>
            </fieldset>
        </div>
    </form>
</div>
</body>
</html>

<?php
//    require ("../blocks/header.php");
?>