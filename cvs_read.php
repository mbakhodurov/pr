<form accept="" method="POST" enctype="multipart/form-data">
	<fieldset>
		<br>&emsp;&emsp;
		<input type="file" name="file" accept=".csv" class="btn btn-primary btn-sm name="submit">
		<button type="submit" name="submit">Select</button>
		<br>
		&emsp;&emsp;<a href='csv&json&xml.php'>Назад</a>
	</fieldset>
</form>

<?php
if (isset($_POST['submit'])) {
	$file=$_FILES['file'];
	// print_r($file);
	$filename=$_FILES['file']['tmp_name'];
	$fileTmpName=$_FILES['file']['name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];

	$fp=fopen("/home/mbakhodurov/$fileTmpName", "r");
	// print_r($fp);
	// print("<br>");
	$res=array();
	echo "&emsp; Full spisok";
	$kol=0;

	// reading from file csv
	if($fp){
		print(""."<table border='1'>");
		
		while (($data=fgetcsv($fp,1000,";"))!==false) {
			$out='';
			print("<tr>");
			for ($i=0; $i < count($data); $i++) {
				$out.=$data[$i]." ";
			}
			print("<td>".$kol.") ".$out."</td>");
			$kol++;
			print("</tr>");
		}
		fclose($fp);
		print("</table>");
	}
	echo "<br>";
	
	//сохранение из файла в массив
	$res=array();
	$fp=fopen("/home/mbakhodurov/$fileTmpName", "r");
	$res=array();
	if($fp){
		while (($data=fgetcsv($fp,1000,";"))!==false) {
			$res[] = $data;
		}
		fclose($fp);
	}

	$flag=0;
	$res1=array();
	//удаление из списка неактивных улиц
	$kol=0;
	for ($i=0; $i < count($res) ; $i++) {
		$flag=0;
		for ($j=0; $j < 5; $j++) {
			if ($res[$i][$j]=="da") {
				$flag=1;
			 	// print($res[$i][$j]." ");
			}
		}
		if($flag==1){
			
			for ($j=0; $j < 5; $j++){
				// print($res[$i][$j]." ");
				$res1[$kol]=$res[$i];
			}
			$kol++;
		}
		// print("<br>");
	}

	//измененный список
	$kol1=1;
	echo "&emsp; Changed spisok";
	print("<br>");
	for ($i=0; $i < $kol ; $i++) {
		print($kol1.") ");
		for ($j=0; $j < 5; $j++) {
			print($res1[$i][$j]." ");

		}
		$kol1++;
		print("<br>");
	}
	$file=fopen("output.csv", "w");
	//Сортировка
	sort($res1);
	//пересохранение полученные адреса в output.csv.
	foreach ($res1 as $key) {
		fputcsv($file, $key, ";");
	}
}
print("<br>");
?>
<!-- </html> -->