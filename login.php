<?php

/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 17.04.2019
 * Time: 10:13
 */
session_start();
include_once "config.php";

class login
{
       public function getUser() {
        $db = conn();
        echo $_POST['lgn'];
        echo $_POST['grp'];

        $sql = "SELECT login, pass, root, id FROM users where login  = '". $_POST['lgn'] ."' and pass = '". $_POST['grp'] ."' ";
        $row = $db->query($sql);
        return $row;
        //print_r ($row);
    }

    function getArr() {
        $db = conn();
        $this -> getUser($db);
        print_r($this);
        if (!$this) {
            echo "0";
            header("location:badlogin.php");
        }

        $data = array();

        foreach ($this as $data){

        }

        print_r ($data);

        if ($data == null) {
            echo "00";
            #header("location:badlogin.php");
        }
    }

    function checkUser($data) {
        if ($_POST['lgn'] == $data['login'] && $_POST['grp'] == $data['pass']) {
            $_SESSION['login'] = $data['login'];
            $_SESSION['group'] = $data['pass'];
            $_SESSION['id'] = $data['id'];
            echo "1";
            #header("location: starttest.php");
        } else {
            echo "000";
            #header("location: badlogin.php");
        };
    }
}

$db = conn();
$lgn = new login();
$lgn -> getArr();
print_r($lgn);
//$lgn -> checkUser($this);
//print_r($lgn);