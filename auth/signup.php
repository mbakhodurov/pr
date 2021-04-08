<?php
    session_start();

    $capcha=$_POST['captcha'];
    $_SESSION['result']=$_SESSION['$a']+$_SESSION['$b'];
    $_SESSION['capcha']=$capcha;

    $fio=$_POST['fio'];
    $login=$_POST['login'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conpassword=$_POST['password_confirm'];

    if ($password!='' && ($password==$conpassword) && ($_SESSION['capcha']==$_SESSION['result'])){
        $conn=new SQLite3('/var/www/aaa.com/1.db');
        $password=md5($password);

        $path='upload/'.time().$_FILES['foto']['name'];
//        copy($_FILES['foto']['tmp_name'],'../'.$path);
        move_uploaded_file($_FILES['foto']['tmp_name'],'../'.$path);


        if ($conn->exec("INSERT or IGNORE INTO users('id','name','login','email','password') VALUES (null,'$fio','$login','$email', '$password')")
        ){
            $conn->close();
            $_SESSION['message']='Регистрация прошла успешно!';
            header('LOCATION:index1.php');
        }
    }else{
        $_SESSION['message']='Пароли не совпадают или неправильно ввели каптчу';
        header('Location:register.php');
    }

?>
