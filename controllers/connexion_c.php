<?php


session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

header('Location: http://192.168.33.18/info.php');