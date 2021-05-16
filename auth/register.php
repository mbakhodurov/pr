<?php
    session_start();
if ($_SESSION['user']){
    header('LOCATION:profile.php');
}

?>

<?php
include_once "../blocks/header.php";
?>
<!--    //capcha-->
    <?php
        $_SESSION['$a']=mt_rand(1,9);
        $_SESSION['$b']=mt_rand(1,9);
    ?>

    <div class="container mt-4 ">
        <form action="signup.php" method="POST">
            <fieldset class="border p-3">
                <legend>Регистрация</legend>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Введите фамилию и имя</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Введите свое полное имя" name="fio">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Логин</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="login" placeholder="Введите свой логин">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Почта</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="Введите свою почту" name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Фотка в вашем профиле</label>
                    <div class="col-sm-10">
                        <input type="file" name="foto">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Введите пароль" name="password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Подтверждение пароля</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Подтверждение пароля" name="password_confirm">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Капча <font color="red"> <?php echo ('('.$_SESSION['$a'].'+'.$_SESSION['$b'].')')?></label></font>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="captcha" placeholder="Введите ответ">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" name="send" class="btn btn-success btn-sm" value="Войти">
                    </div>
                </div>
                <br>
                <p><small>
                        У вас есть аккаунт? - <a href="index1.php"></small>Войдите</a>
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
        </form>
    </div>

    <br>
    <?php
    require_once ("../blocks/footer.php");
    ?>
</body>
</html>

<?php
//    require ("../blocks/header.php");
?>