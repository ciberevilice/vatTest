<?php
session_start();

include_once 'config.php';

$db = conn();

$login = $_POST['lgn'];
$group = $_POST['grp'];

/**
 * Выполение запроса на проверку введенных данных в форме авторизации
 * Выполение самой авторизации
 */
function getUser($db, $login, $group)
{
    $data = array();
    $sql = "SELECT login, pass, root, id FROM users where login  = '". $login ."' and pass = '". $group ."' ";
    $row = $db -> query($sql);
    if (!$row) {
       header ("location: badlogin.php");
    }
    foreach ($row as $data) {
    }
    if ($data == null){
        header("location: badlogin.php");
        exit();
        
    }
    if ($_POST['lgn'] == $data['login'] && $_POST['grp'] == $data['pass']) {
        $_SESSION['login'] = $data['login'];
        $_SESSION['group'] = $data['pass'];
        $_SESSION['id'] = $data['id'];
        header("location: starttest.php");
    } else {
        header("location: badlogin.php");
    };
}


$fact = getUser($db, $login, $group);