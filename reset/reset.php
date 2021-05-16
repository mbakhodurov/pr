<?php
session_start();
if ($_SESSION['user']){
    header('LOCATION:profile.php');
}

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

?>
<?php
include_once "../blocks/header.php";
?>

<div class="container mt-4 ">
    <form action="" method="POST">
        <fieldset class="border p-3">
            <legend>Сброс пароля</legend>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">e-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Введите свою почту">
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" name="send" class="btn btn-success btn-sm">
                    </div>
                </div>
                <br><br>
                <p>
                    У вас нет аккаунта? - <a href="/auth/register.php">Зарегистрируйтесь</a>
                </p>
                <form action="" method="POST">
<!--            <div class="container mt-5">-->
<!--                <fieldset class="border p-3">-->
<!--                    <legend class="w-auto">Сброс пароля</legend>-->
<!--                    <label>Почта</label><br>-->
<!--                    <input type="email" name="email" placeholder="Введите свою почту">-->
<!--                    <br>-->
<!--                    <input type="submit" name="send" class="btn btn-success btn-sm">-->
<!--                    <p>-->
<!--                        У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a><br>-->
<!--                    </p>-->
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
                            echo "<font color='red'> Такой почты нету </font>";
                        }
                    }
                    ?>
                </fieldset>
            </div>
        </form>

    </div>
<br>
<?php
include_once "../blocks/footer.php";
?>
</body>
</html>
