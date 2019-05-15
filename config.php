<?php

function conn()
{
    $dsn = "mysql:host=localhost;dbname=test";
    $user = "root";
    $pass = "Qwerty123";
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

    try {
        $db = new PDO($dsn, $user, $pass, $options);
    } catch (PDOExeption $e) {
        echo "Подключение не удалось: " . $e->getMessage();
    }
    return $db;
}






//print_r(PDO::getAvailableDrivers());

/*$dsn = "mysql:host=localhost;dbname=test";
$user = "root";
$pass = "root";
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try {
    $db = new PDO($dsn, $user, $pass, $options);
} catch (PDOExeption $e){
    echo "Подключение не удалось: " . $e->getMessage();
}*/

/*$user = 'root';
$password = 'root';
$db = 'test';
$host = '127.0.0.1';
$port = 8889;
$socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port,
    $socket
);*/