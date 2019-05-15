<?php 
include_once 'config.php';

$db = conn();

function getQuestion($db){
    $sql = "SELECT id, quest FROM test";
    $row = $db->query($sql, PDO::FETCH_ASSOC);
    return $row;
}

function getKey($db, $key) {
    $sql = "SELECT id, klch, answer FROM test WHERE klch = '". $key ."'";
    $row = $db->query($sql, PDO::FETCH_ASSOC);
    return $row;
}