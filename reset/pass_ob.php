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
                <label for="" class="col-sm-2 col-form-label">Почта</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Введите свою почту">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Код</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="code" placeholder="Введите код который был выслан вам на почту">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Введите новый пароль">
                </div>
            </div>
            <br>
            <input type="submit" name="send" class="btn btn-success btn-sm">

<!--<form action="" method="POST">-->
<!--    <div class="container mt-5">-->
<!--        <fieldset class="border p-3">-->
<!--            <legend class="w-auto">Сброс пароля</legend>-->
<!--            <label>Почта</label><br>-->
<!--            <input type="email" name="email" placeholder="Введите свою почту">-->
<!--            <br>-->
<!--            <label>Код</label><br>-->
<!--            <input type="text" name="code" placeholder="Введите код который был выслан вам на почту">-->
<!--            <br>-->
<!--            <label>Пароль</label><br>-->
<!--            <input type="password" name="password" placeholder="Введите новый пароль">-->
<!--            <br>-->
<!--            <input type="submit" name="send" class="btn btn-success btn-sm">-->
            <p>
                У вас нет аккаунта? - <a href="../auth/register.php">Зарегистрируйтесь</a><br>
            </p>
            <?php



            if(isset($_POST['send'])) {
                $email=$_POST['email'];
                $code=$_POST['code'];
                $new_password=$_POST['password'];
                $new_password1=($new_password);
                $conn = new SQLite3('../1.db');
//                $query = "SELECT id from users WHERE email='$email' AND code='$code'";
//                $res = $conn->query($query);
//                $kol = 0;
//                while ($row = $res->fetchArray()) {
                    $query = "UPDATE users SET password='$new_password1' where email='$email'";
                    $res = $conn->query($query);
                    echo "Пароль успешно сброшен <a href='../auth/index1.php'> Войти на сайт</a>";

//                }
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
