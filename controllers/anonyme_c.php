<?php

session_start();

$_SESSION['anonymous'] = $_POST['anonymous'];



header('Location: http://192.168.33.18/info.php');