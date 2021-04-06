<?php
    session_start();

    include_once 'connect.php';
    $fio=$_POST['fio'];
    $login=$_POST['login'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conpassword=$_POST['password_confirm'];

    if ($password!='' && ($password===$conpassword)){
        $conn=new SQLite3('/var/www/aaa.com/1.db');
        $password=md5($password);
        if ($conn->exec("INSERT or IGNORE INTO users('name','login','email','password') VALUES ('$fio','$login','$email', '$password')")
        ){
            $conn->close();
            $_SESSION['message']='Регистрация прошла успешно!';
            header('LOCATION:index1.php');
        }
    }else{
        $_SESSION['message']='Пароли не совпадают';
        header('Location:register.php');
    }

?>
