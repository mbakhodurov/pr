<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
<!--    <link rel="shortcut icon" href="/img/1.jpg" type="image/x-icon">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<?php
//require ("blocks/header.php");
if (isset($_POST['send'])) {
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $message=$_POST['message'];
    $error_name="";
    $error_email="";
    $error_message="";
    $error=false;
    if($name==""){
        $error_name=" Введите имя";
        $error=true;
    }
    if($mail=="" || !preg_match("/@/", $mail)){
        $error_email=" Введите почту";
        $error=true;
    }
    if (strlen($message)<10){
        $error_message="Текст должен содержать больше 10 символов";
        $error=true;
    }

}
?>

<form action="" method="post">
    <div class="form-group">
        <label for="name">Ваше имя:</label>
        <input type="name" name="name" class="form-control" id="name" placeholder="Name">
        <span style="color: red"><?php print($error_name); ?></span>
    </div>
    <br>
    <div class="form-group">
        <label for="email1">E-mail:</label>
        <input type="email" name="mail" class="form-control" id="email1" placeholder="Email"><span style="color: red"><?php print($error_email) ?></span>
    </div>
    <br>
    <div class="form-group">
        <label for="message">Сообщение:</label>
        <textarea class="form-control" name="message" rows="3"></textarea><span style="color: red"><?=$error_message?></span>
    </div>
    <br>
    <button type="submit" class="btn btn-info" name="send">Отправить сообщение</button>
</form>

<!--<form action="" method="post">-->
<!--    <div class="container mt-5">-->
<!--        <fieldset>-->
<!--            <legend>Контактная информация</legend>-->
<!--            <input type="text" name="name" placeholder="Введите имя">-->
<!--            <span style="color: red">--><?php //print($error_name); ?><!--</span>-->
<!--            <br><br>-->
<!--            <input type="email" name="mail" placeholder="Введите email"><span style="color: red">--><?php //print($error_email) ?><!--</span>-->
<!--            <br><br>-->
<!--            <textarea name="message" class="form-control" placeholder="Введите ваше сообщение" rows="2%" cols="-4"></textarea><span style="color: red">--><?//=$error_message?><!--</span>-->
<!--            <br>-->
<!--            <input type="submit" name="send" class="btn btn-success">-->
<!--        </fieldset>-->
<!--    </div>-->
<!--</form>-->
<?php
$name=$_POST['name'];
$mail=$_POST['mail'];
$message=$_POST['message'];
$err='';
$subject=("Тестовое сообщение");
$headers="From: $mail\r\nReply-to: $mail\r\nContent-type:text/html";
if (isset($_POST['send'])) {
    if (!$error) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        mail('mbakhodurov@gmail.com', $subject, $message, $headers);
        echo "Message sent";
    }else{
        echo "222";
    }
}

?>