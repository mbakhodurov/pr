<?php
    $mail=$_POST['mail'];
    $message=$_POST['message'];
    $err='';
    if (trim($mail)==''){
        $err='Введите ваш email';
    }else if(trim($message)==''){
        $err='Введите само сообщение';
    }else if(strlen($message)<10){
        $err="Сообщение должно быть более 10 символов";
    }
    if($err!=''){
        echo $err;
        exit;
    }

 $subject="=?utf-8?8?".base64_decode("Тестовое сообщение")."?=";
 $headers="From: $mail\r\nReply-to: $mail\r\nContent-type:text/html";
 mail('mbakhodurov@gmail.com', $subject, $message,$headers);
 header('Location:mailing.php');
?>