<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 07.11.2016
 * Time: 9:06
 */

function getKomLevel ($rez){
    $kom = array(
        1 => 0.45,
        2 => 0.55,
        3 => 0.65,
        4 => 0.75,
        5 =>1
    );
    $i = 1;
    for ($i; $i <6; $i++){
        if ($rez <= $kom[$i]){
            echo $i;
            break;
        }

    }
}

$a = 1;

$level = getKomLevel($a);

echo $level;