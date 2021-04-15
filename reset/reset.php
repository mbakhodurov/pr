<?php
session_start();
if ($_SESSION['user']){
    header('LOCATION:profile.php');
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
        </div>

        <form action="" method="POST">
            <div class="container mt-5">
                <fieldset class="border p-3">
                    <legend class="w-auto">Сброс пароля</legend>
                    <label>Почта</label><br>
                    <input type="email" name="email" placeholder="Введите свою почту">
                    <br>
                    <input type="submit" name="send" class="btn btn-success btn-sm">
                    <p>
                        У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a><br>
                    </p>
                    <?php
                    if(isset($_POST['send'])) {
                        $email = $_POST['email'];
                        $conn = new SQLite3('../1.db');
                        $query = "SELECT email, password from users WHERE email='$email'";
                        $res = $conn->query($query);
                        $kol = 0;
                        while ($row = $res->fetchArray()) {
                            $kol++;
                        }
                        if ($kol>0){
                            print "Вам на почту был выслан код. Проверьте почту и перейдите по <a href='pass_ob.php'> ссылке </a> для  сбрса пароля";
                            $code=mt_rand(10000,99999);
                            $subject=("Тестовое сообщение");
                            $headers="From: $email\r\nReply-to: $email\r\nContent-type:text/html";
                            mail('mbakhodurov@gmail.com', $subject, $code, $headers);
                            $query = "UPDATE users SET code='$code' WHERE email='$email'";
                            $res = $conn->query($query);
                        }else{
                            echo "Такой почты нету";
                        }
                    }
                    ?>
                </fieldset>
            </div>
        </form>
    </div>
    </body>
    </html>
