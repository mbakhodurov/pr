<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
	// print_r($_POST);
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$message=$_POST['message'];
	// print("$name $mail $message");
	$err='';
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
		print('&nbsp; <a href="about.php">назад</a>');
		// print('</div>');
		exit;
	}
	$subject="=?utf-8?8?".base64_decode("Тестовое сообщение")."?=";
	$headers="From: $email\r\nReply-to: $email\r\nContent-type:text/html";
	mail('mbakhodurov@gmail.com', $subject, $message,$headers);
	// header('Location:')
	
?>

</body>
</html>
