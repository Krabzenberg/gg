<?php
$arr =[2,3,5,67,89,55,4356,23];

function maxNum($arr) {
    $a = 0;
    $count = count($arr);
    for ($i = 0;$i < $count;$i++){
        if ($arr[$i] > $a){
            $a = $arr[$i];
        }
    }
return $a;
}
echo maxNum($arr);