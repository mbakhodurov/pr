<?php
    session_start();
    if ($_SESSION['user']){
        header('LOCATION:profile.php');
    }
    $_SESSION['$a'] = mt_rand(1, 9);
    $_SESSION['$b'] = mt_rand(1, 9);

?>
<?php
include_once "../blocks/header.php";
?>

<div class="container mt-4 ">
<form action="signing.php" method="POST">
    <fieldset class="border p-3">
        <legend>Авторизация</legend>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Логин</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="login" placeholder="Введите свой логин">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Введите пароль">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Капча <font color="red"> (<?php echo ($_SESSION['$a'].'+'.$_SESSION['$b'])?>)</label></font>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="captcha" placeholder="Введите ответ">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-success" name="send" value="Войти"></input>
                </div>
            </div>
        <br>
        <p><small>
            У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a><br>
            Забыли пароль? - <a href="../reset/reset.php">Восстановление пароля</a>
            </small> </p>
        <?php
        if ($_SESSION['message']){
            echo $_SESSION['message'];
            echo $_SESSION['capcha'];
        }
        unset($_SESSION['message']);
        unset($_SESSION['capcha']);
        ?>
    </fieldset>
</form>
</div>
<br>
<?php
    require_once ("../blocks/footer.php");
?>

</body>
</html>