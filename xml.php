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
</form>
</body>

<?php
include 'xml/s.xml';

$movies = new SimpleXMLElement($xmlstr);
// Получение части документа <plot>
echo $movies->movie->plot;
print("<br>");
// Получение строки <line>
// echo $movies->movie->{'great-lines'}->line;

// Доступ к неуникальным элементам в SimpleXML

// В том случае, если существует несколько экземпляров дочерних элементов в одном родительском элементе, то нужно применять стандартные методы итерации.
// foreach ($movies->movie->characters->character as $character) {
//    echo $character->name, ' играет ', $character->actor;
// }

// Использование атрибутов

// До сих пор мы только получали названия и значения элементов. SimpleXML может также получать доступ к атрибутам элемента. Получить доступ к атрибуту элемента можно так же, как к элементам массива (array).
// foreach ($movies->movie->rating as $rating) {
//     switch((string) $rating['type']) { // Получение атрибутов элемента по индексу
//     case 'thumbs':
//         echo $rating, ' thumbs up ';

//         break;
//     case 'stars':
//         echo $rating, ' stars';
//         break;
//     }
// }

// Сравнение элементов и атрибутов с текстом
// if ((string) $movies->movie->title == 'PHP: Появление Парсера') {
//     print 'Мой любимый фильм.';
// }
// print("<br>");
// echo htmlentities((string) $movies->movie->title);

//Установка значений
$movies->movie->characters->character[0]->name = 'Miss Coder';
print("<br>");
echo $movies->asXML();
print("<br>");
print("&emsp;&emsp;<a href='csv&json&xml.php'>Назад</a>")
?>
</html>