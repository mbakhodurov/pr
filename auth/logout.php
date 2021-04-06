<?php
session_start();
unset($_SESSION['user']);
header('LOCATION:index1.php');
