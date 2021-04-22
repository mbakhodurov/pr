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
  <form action="csv&json&xml.php" method="POST">
	<div class="container mt-2">
	      <div class="d-flex flex-wrap">
	      	<div class="col col-lg-3">
	        <div class="card mb-4 rounded-3 shadow-sm">
	          <div class="card-header py-3">
	            <h4 class="my-0 fw-normal">Select option</h4>
	          </div>
	          <div class="card-body">
	            <button type="submit" class="w-100 btn btn-lg btn-outline-primary" name="CSV">CSV</button>
	            <br>
	            <button type="submit" class="w-100 btn btn-lg btn-outline-primary" name="JSON">JSON</button>
	            <br>
	            <button type="submit" class="w-100 btn btn-lg btn-outline-primary" name="XML">XML</button>
	          </div>
	        </div>
	      </div>
	      </div>
	</div>
	</form>

<form action="csv&json&xml.php" method="POST">
	<?php
		$flag=0;
		$CSV=$_POST['CSV'];
		if (isset($CSV)) {
			for ($i=0; $i < 12; $i++) { 
				print('&emsp;');
			}
			print('<button type="submit" value="1" class="btn btn-secondary btn-sm" name="CSV1_1">Загрузите файл(CSV)</button>');

			// $csv1=$_POST['CSV1_1'];

			// setcookie("TestCookie", 1, time()+3600);

		}
		if ($_POST["CSV1_1"]=='1') {
				// echo "d";
				// die();
				print('<button type="submit" value="1" class="btn btn-secondary btn-sm name="CSV1_1">Загрузите файл(CSV)</button>');
				include 'cvs_read.php';

		}
print("</form>");
print('<form action="json.php" method="POST">');
		$JSON=$_POST['JSON'];
		if(isset($JSON)) {
			for ($i=0; $i < 12; $i++) { 
				print('&emsp;');
			}
			print('<button type="submit" class="btn btn-secondary btn-sm name="CSV1_1">Загрузите файл(JSON)</button>');
		}
		print("</form>");


print('<form action="xml.php" method="POST">');
		$XML=$_POST['XML'];
		if(isset($XML)) {
			for ($i=0; $i < 12; $i++) { 
				print('&emsp;');
			}
			print('<button type="submit" class="btn btn-secondary btn-sm name="CSV1_1">Загрузите файл(XML)</button>');
		}
		print("</form>");

		// if ($fl) {
			# code...
		// }
		require ("blocks/footer.php"); 
	?>

</body>
</html>