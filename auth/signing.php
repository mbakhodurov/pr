<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    $login=$_POST['login'];
    $password= md5($_POST['password']);
    $conn=new SQLite3('../1.db');
    $query="select * from users where login='$login' AND password='$password'";
    $res=$conn->query($query);
    $kol=0;
    while($row=$res->fetchArray()){
           $kol++;
    }
    if ($kol>0){
        while($row=$res->fetchArray()){
            $_SESSION['user']=[
                "id"=>$row['id'],
                "name"=>$row['name'],
                "login"=>$row['login'],
                "email"=>$row['email']

            ];
            header('LOCATION:profile.php');
//            print ($row['email'].' ');
        }
            $conn->close();
    }else{
        $_SESSION['message']='Неверный логин или пароль';
        header('Location:index1.php');
    }

//    $conn->close();
?>