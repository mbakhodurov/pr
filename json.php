<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="shortcut icon" href="/img/1.jpg" type="image/x-icon">
</head>
<body>
<form accept="" method="POST" enctype="multipart/form-data">
	<fieldset>
		<br>&emsp;&emsp;
		<input type="file" name="file" accept=".json" class="btn btn-primary btn-sm name="submit">
		<button type="submit" name="submit">Select</button>
		<br>
		&emsp;&emsp;<a href='csv&json&xml.php'>Назад</a>
	</fieldset>
</form>
</body>
<?php
	
	if (isset($_POST['submit'])) {
		$file=$_FILES['file'];
		// print_r($file);
		$filename=$_FILES['file']['tmp_name'];
		$fileTmpName=$_FILES['file']['name'];
		$fileSize=$_FILES['file']['size'];
		$fileError=$_FILES['file']['error'];
		$fileType=$_FILES['file']['type'];

		print("<pre>");
		$res=file_get_contents("/home/mbakhodurov/$fileTmpName");
		print_r($res);
		// $data=json_decode($res);
		$data=json_decode($res,true);
		for ($i=0; $i < 4; $i++) { 
			print("<br>");
		}
		print_r($data);
		// var_dump($data);

		// print("<br><br>");
		$jsonData=json_encode($data);
		// print_r($jsonData);
		// $file = fopen('s2.json','w+');
		file_put_contents('/home/mbakhodurov/s2.json', $jsonData);
	}
?>
</html>