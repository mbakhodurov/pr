<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$name=$_POST['name'];
$mail=$_POST['mail'];
$message=$_POST['message'];
echo '$name';
// $sql = "SELECT * FROM users";
// $db = new SQLite3('/var/www/aaa.com/1.db');
// $result = $db->query($sql);
// $data = $result->fetchArray(SQLITE3_ASSOC);
// print_r($data);