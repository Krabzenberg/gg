<?php
 $a = 40;

 function dd($a){
     for ($i = 1; $i <= 40; $i++) {
         if ($a % $i === 0) {
             echo $i;
         }
     }
 }
 dd($a);