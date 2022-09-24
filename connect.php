<?php

$host = 'localhost';
$user = 'root';
$password = 'mysql';
$db = 'dbusers';

$connect = mysqli_connect($host, $user, $password, $db);

if (!$connect) {
    die('Error connect to database');
}

