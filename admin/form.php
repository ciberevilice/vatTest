<?php
session_start();
require_once 'config.php';
require_once 'level.php';

$db = conn();

function getFirstVariableSpo($db) {
    $sql = "SELECT * FROM rez WHERE N = '". $_POST['name']."' and G = '". $_POST['grps'] ."' ";
    $row = $db -> query($sql);
    if (!$row) {
        header ("location:admin");
    }
    echo ' <table class = "table_form">';
    echo ' <tr class="tr_form">';
    echo ' <th rowspan="3" class="th_form"><p align="center">ФИО</p></th>';
    echo ' <th colspan="18" class="th_form"></th>';
    echo ' <th rowspan="3" class="th_form"><p align="center"> Дата <br> исследования</p></th>';
    echo ' </tr>';
    echo ' <tr class="tr_form">';
    echo ' <td colspan="2" class="td_form_header"> OK1 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK2 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK3 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK4 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK5 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK6 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK7 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK8 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK9 </td>';
    echo ' </tr>';
    echo ' <tr class="tr_form">';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' </tr>';
    foreach ($row as $data) {
        echo ' <tr class="tr_form">';
        echo ' <td class="td_form"><p style="color: #039;">';
        echo $data['N'];
        echo ' </p></td>';
        echo ' <td class="td_form">';
        echo $data['E'];
        echo ' </td>';
        echo ' <td class="td_form"> ';
        $leve = new Level();
        $leve = $leve -> getEmoLevel($data['E']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['P'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levp = new Level();
        $levp = $levp -> getPlanLevel($data['P']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['R'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levr = new Level();
        $levr = $levr ->getReshLevel($data['R']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['I'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levi = new Level();
        $levi = $levi ->getInfoLevel($data['I']);
        echo ' </td>';
        echo ' <td class="td_form">';

        echo ' </td>';
        echo ' <td class="td_form">';

        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['K'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levk = new Level();
        $levk = $levk -> getKomLevel((float)$data['K']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['O'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levo = new Level();
        $levo = $levo -> getOrgLevel($data['O']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['A'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $leva = new Level();
        $leva = $leva -> getAutoLevel($data['A']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['I'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levi = new Level();
        $levi = $levi -> getInfoLevel($data['I']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['D'];
        echo ' </td>';
        echo ' </tr>';
    }
    echo ' </table>';

    return $row;
}

function getFirstVariableNpo($db)
{
    $sql = "SELECT * FROM rez WHERE N = '" . $_POST['name'] . "' and G = '" . $_POST['grps'] . "' ";
    $row = $db->query($sql);
    if (!$row) {
        header("location:admin");
    }
    echo ' <table class = "table_form">';
    echo ' <tr class="tr_form">';
    echo ' <th rowspan="3" class="th_form"><p align="center">ФИО</p></th>';
    echo ' <th colspan="18" class="th_form"></th>';
    echo ' <th rowspan="3" class="th_form"><p align="center"> Дата <br> исследования</p></th>';
    echo ' </tr>';
    echo ' <tr class="tr_form">';
    echo ' <td colspan="2" class="td_form_header"> OK1 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK2 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK3 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK4 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK5 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK6 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK7 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK8 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK9 </td>';
    echo ' </tr>';
    echo ' <tr class="tr_form">';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' </tr>';
    foreach ($row as $data) {
        echo ' <tr class="tr_form">';
        echo ' <td class="td_form"><p style="color: #039;">';
        echo $data['N'];
        echo ' </p></td>';
        echo ' <td class="td_form">';
        echo $data['E'];
        echo ' </td>';
        echo ' <td class="td_form"> ';
        $leve = new Level();
        $leve = $leve->getEmoLevel($data['E']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['P'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levp = new Level();
        $levp = $levp->getPlanLevel($data['P']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['R'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levr = new Level();
        $levr = $levr->getReshLevel($data['R']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['I'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levi = new Level();
        $levi = $levi->getInfoLevel($data['I']);
        echo ' </td>';
        echo ' <td class="td_form">';

        echo ' </td>';
        echo ' <td class="td_form">';

        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['K'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levk = new Level();
        $levk = $levk->getKomLevel((float)$data['K']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['O'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levo = new Level();
        $levo = $levo->getOrgLevel($data['O']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['A'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $leva = new Level();
        $leva = $leva->getAutoLevel($data['A']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['I'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levi = new Level();
        $levi = $levi->getInfoLevel($data['I']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['D'];
        echo ' </td>';
        echo ' </tr>';
    }
    echo ' </table>';

    return $row;
}

function getSecondVariableSpo($db) {
    $sql = "SELECT * FROM rez WHERE G = '". $_POST['group'] ."'";
    $row = $db -> query($sql);
    if (!$row) {
        header ("location:admin");
    }
    echo ' <table class = "table_form">';
    echo ' <tr class="tr_form">';
    echo ' <th rowspan="3" class="th_form"><p align="center">ФИО</p></th>';
    echo ' <th colspan="18" class="th_form"></th>';
    echo ' <th rowspan="3" class="th_form"><p align="center"> Дата <br> исследования</p></th>';
    echo ' </tr>';
    echo ' <tr class="tr_form">';
    echo ' <td colspan="2" class="td_form_header"> OK1 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK2 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK3 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK4 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK5 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK6 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK7 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK8 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK9 </td>';
    echo ' </tr>';
    echo ' <tr class="tr_form">';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' </tr>';
    foreach ($row as $data) {
        echo ' <tr class="tr_form">';
        echo ' <td class="td_form"><p style="color: #039;">';
        echo $data['N'];
        echo ' </p></td>';
        echo ' <td class="td_form">';
        echo $data['E'];
        echo ' </td>';
        echo ' <td class="td_form"> ';
        $leve = new Level();
        $leve = $leve ->getEmoLevel($data['E']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['P'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levp = new Level();
        $levp = $levp ->getPlanLevel($data['P']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['R'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levr = new Level();
        $levr = $levr ->getReshLevel($data['R']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['I'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levi = new Level();
        $levi = $levi ->getInfoLevel($data['I']);
        echo ' </td>';
        echo ' <td class="td_form">';

        echo ' </td>';
        echo ' <td class="td_form">';

        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['K'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levk = new Level();
        $levk = $levk ->getKomLevel((float)$data['K']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['O'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levo = new Level();
        $levo = $levo ->getOrgLevel($data['O']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['A'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $leva = new Level();
        $leva = $leva ->getAutoLevel($data['A']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['I'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levi = new Level();
        $levi = $levi ->getInfoLevel($data['I']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['D'];
        echo ' </td>';
        echo ' </tr>';
    }
    echo ' </table>';

    return $row;
}

function getSecondVariableNpo($db)
{
    $sql = "SELECT * FROM rez WHERE G = '" . $_POST['group'] . "' ";
    $row = $db->query($sql);
    if (!$row) {
        header("location:admin");
    }
    echo ' <table class = "table_form">';
    echo ' <tr class="tr_form">';
    echo ' <th rowspan="3" class="th_form"><p align="center">ФИО</p></th>';
    echo ' <th colspan="18" class="th_form"></th>';
    echo ' <th rowspan="3" class="th_form"><p align="center"> Дата <br> исследования</p></th>';
    echo ' </tr>';
    echo ' <tr class="tr_form">';
    echo ' <td colspan="2" class="td_form_header"> OK1 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK2 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK3 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK4 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK5 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK6 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK7 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK8 </td>';
    echo ' <td colspan="2" class="td_form_header"> OK9 </td>';
    echo ' </tr>';
    echo ' <tr class="tr_form">';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' <td class="td_form_header"> Рез </td>';
    echo ' <td class="td_form_header"> Ур </td>';
    echo ' </tr>';
    foreach ($row as $data) {
        echo ' <tr class="tr_form">';
        echo ' <td class="td_form"><p style="color: #039;">';
        echo $data['N'];
        echo ' </p></td>';
        echo ' <td class="td_form">';
        echo $data['E'];
        echo ' </td>';
        echo ' <td class="td_form"> ';
        $leve = new Level();
        $leve = $leve->getEmoLevel($data['E']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['P'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levp = new Level();
        $levp = $levp->getPlanLevel($data['P']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['R'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levr = new Level();
        $levr = $levr->getReshLevel($data['R']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['I'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levi = new Level();
        $levi = $levi->getInfoLevel($data['I']);
        echo ' </td>';
        echo ' <td class="td_form">';

        echo ' </td>';
        echo ' <td class="td_form">';

        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['K'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levk = new Level();
        $levk = $levk->getKomLevel((float)$data['K']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['O'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levo = new Level();
        $levo = $levo->getOrgLevel($data['O']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['A'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $leva = new Level();
        $leva = $leva->getAutoLevel($data['A']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['I'];
        echo ' </td>';
        echo ' <td class="td_form">';
        $levi = new Level();
        $levi = $levi->getInfoLevel($data['I']);
        echo ' </td>';
        echo ' <td class="td_form">';
        echo $data['D'];
        echo ' </td>';
        echo ' </tr>';
    }
    echo ' </table>';

    return $row;
}

if (isset($_POST['getdata1'])) {
    if ($_POST['spo_npo_st'] == 1) {
        $first = getFirstVariableSpo($db);
    } else {
        if($_POST['spo_npo_st'] == 2);
            $first = getFirstVariableNpo($db);
        }
}

elseif (isset($_POST['getdata2'])){
    if ($_POST['spo_npo_grp'] == 3) {
        $second = getSecondVariableSpo($db);
    } else {
        if ($_POST['spo_npo_grp'] == 4){
            $second = getSecondVariableNpo($db);
        }
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Результаты Диагностического исследования по уровню сформированности общих компетенций</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="shortcut icon" href="../img/icon.1078218340.png" type="image/x-icon">

    <style media='print' type='text/css'>
        #navbar-iframe {display: none; height: 0px; visibility: hidden;}
        .noprint {display: none;}
    </style>

</head>
<body>
<p class="text_podp_form">Подпись:_____________________</p>
<span class="noprint"><br><br><br<br><br>
<!--	Кнопки-->
<input type="button" class="Abutton2" value="Печать" name="print" onclick="print()"/>
</span>
</body>
</html>