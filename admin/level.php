<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 07.06.16
 * Time: 9:14
 */

class Level{

    function getAutoLevel($rez){
        $avto = array(
            1 => 3,
            2 => 7,
            3 => 13,
            4 => 17,
            5 =>20
        );
        $i = 1;
        for ($i; $i <6; $i++){
            if ($rez <= $avto[$i]){
                echo "$i";
                break;
            }
        }
    }

    function getInfoLevel($rez){
        $info = array(
            1 => 2,
            2 => 5,
            3 => 10,
            4 => 14,
            5 =>17
        );
        $i = 1;
        for ($i; $i <6; $i++){
            if ($rez <= $info[$i]){
                echo "$i";
                break;
            }
        }
    }
    
    function getReshLevel($rez){
        $resh = array(
            1 => 3,
            2 => 7,
            3 => 13,
            4 => 17,
            5 =>20
        );
        $i = 1;
        for ($i; $i <6; $i++){
            if ($rez <= $resh[$i]){
                echo "$i";
                break;
            }
        }
    }
    
    function getPlanLevel($rez) {
        $plan = array(
            1 => 3,
            2 => 7,
            3 => 13,
            4 => 17,
            5 =>20
        );
        $i = 1;
        for ($i; $i <6; $i++){
            if ($rez <= $plan[$i]){
                echo "$i";
                break;
            }
        }
    }
    
    function getEmoLevel($rez){
        $emo = array(
            1 => 4,
            2 => 10,
            3 => 15,
            4 => 19,
            5 =>22
        );
        $i = 1;
        for ($i; $i <6; $i++){
            if ($rez <= $emo[$i]){
                echo "$i";
                break;
            }
        }
    }
    
    function getKomLevel ($rez){
        $kom = array(
            1 => 0.45,
            2 => 0.55,
            3 => 0.65,
            4 => 0.75,
            5 => 1
        );
        $i = 1;
        for ($i; $i < 6; $i++){
            if ((float)$rez <= $kom[$i]){
                echo $i;
                break;
            }
        }
    }
    
    function getOrgLevel($rez) {
        $org = array(
            1 => 0.55,
            2 => 0.65,
            3 => 0.7,
            4 => 0.8,
            5 => 1
        );
        $i = 1;
        for ($i = 1; $i <6; $i++){
            if ($rez <= $org[$i]){
                echo "$i";
                break;
            }
        }
    }

}