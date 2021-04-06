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
<?php
require ("blocks/header.php");
?>
<form action="check.php" method="post">
    <div class="container mt-5">
        <fieldset>
            <legend>Контактная информация</legend>
            <input type="email" name="mail" placeholder="Введите email"><span style="color: red"><?php print($error_email) ?></span>
            <br><br>
            <textarea name="message" class="form-control" placeholder="Введите ваше сообщение" rows="2%" cols="-4"></textarea><span style="color: red"><?=$error_message?></span>
            <br>
            <input type="submit" name="send" class="btn btn-success">
        </fieldset>
    </div>
</form>
<?php



// $subject="=?utf-8?8?".base64_decode("Тестовое сообщение")."?=";
// $headers="From: $email\r\nReply-to: $email\r\nContent-type:text/html";
// mail('mbakhodurov@gmail.com', $subject, $message,$headers);
require ("blocks/footer.php");
?>

</body>
</html>