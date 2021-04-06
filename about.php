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
  	<div class="container mt-5">
	  <fieldset>
	  	<legend>Контактная информация</legend>
	  	<input type="text" name="name" placeholder="Введите имя">
	  	<span style="color: red"><?php print($error_name); ?></span>
	  	<br><br>
	  	<input type="email" name="mail" placeholder="Введите email"><span style="color: red"><?php print($error_email) ?></span>
	  	<br><br>
	  	<textarea name="message" class="form-control" placeholder="Введите ваше сообщение" rows="2%" cols="-4"></textarea><span style="color: red"><?=$error_message?></span>
	  	<br>
	  	<input type="submit" name="send" class="btn btn-success">
	  </fieldset>
	 </div>
	</form>
<?php
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $message=$_POST['message'];
    $err='';
    $subject="=?utf-8?8?".base64_decode("Тестовое сообщение")."?=";
    $headers="From: $mail\r\nReply-to: $mail\r\nContent-type:text/html";
    if (isset($_POST['send'])){
        if(trim($name)==''){
            $err="<br>&nbsp;Enter your name";
        }else if (trim($mail)=='') {
            $err="<br>&nbsp;Enter your email";
        }else if(trim($message)==''){
            $err="&nbsp;Enter your message";
        }else if(strlen($message)<10){
            $err="message less than 10 symbols";
        }
        if($err!=''){
            echo "$err";
            // print("<br>");
            // print('<div class="container">');
            // print('<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">');
//            print('&nbsp; <a href="about.php">назад</a>');
            // print('</div>');
            require ("blocks/footer.php");
            exit;
        }else if(mail('mbakhodurov@gmail.com', $subject, $message,$headers)){
            $name=$_POST['name'];
            $mail=$_POST['mail'];
            $message=$_POST['message'];
//            print "fdsadssd";
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            $conn=new SQLite3('/var/www/aaa.com/1.db');
//            $conn->exec('ALTER TABLE feedback AUTO_INCREMENT = 1');
            if ($conn->exec("INSERT or IGNORE INTO feedback(name,mail,text) VALUES ('$name','$mail', '$message')")
        ){
//                print ("<input t>")
                $conn=new SQLite3('/var/www/aaa.com/1.db');
                $query="select * from feedback";
                $res=$conn->query($query);
//                while($row=$res->fetchArray()){
//                    print ($row['mail'].' ');
//                    print_r($row);
//                }
                $conn->close();
                print "Message sent";
            }
//            $conn->exec("INSERT or IGNORE INTO feedback(name,mail,text) VALUES ('$name','$mail', '$message')");
        }
//        $subject="=?utf-8?8?".base64_decode("Тестовое сообщение")."?=";
//        $headers="From: $email\r\nReply-to: $email\r\nContent-type:text/html";
//        if (mail('mbakhodurov@gmail.com', $subject, $message,$headers)) {
//            print("ok");
//        }else{
//            print("Error email");
//        }
    }

	
	// $subject="=?utf-8?8?".base64_decode("Тестовое сообщение")."?=";
	// $headers="From: $email\r\nReply-to: $email\r\nContent-type:text/html";
	// mail('mbakhodurov@gmail.com', $subject, $message,$headers);
  require ("blocks/footer.php");
?>

</body>
</html>