<?php

for ($x = 0;$x <= 100;$x++){
    if ($x % 3 == 0 and $x % 5 == 0){
        echo $x. 'FIZZBUZZ'. '<br>';
    }elseif ($x % 3 == 0){
        echo $x. 'FIZZ'. '<br>';
    }elseif ($x % 5 == 0){
        echo $x . 'BUZZ' . '<br>';
    }else {
        echo $x. '<br>';
    }
    }





?>
