<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<form action="" method="POST">
		<input type="file" name="file">
		<button type="submit" name="submit">Upload</button>
	</form>
</body>
</html>

<?php
	
	if (isset($_POST['submit'])) {
		var_dump($_FILES);
		$filesa=$_FILES['file'];
		print_r($filesa);
	}
?>