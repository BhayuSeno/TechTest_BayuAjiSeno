<?php
    function pembagian($a, $b, $c = 0){
        $a -= $b;
        if($a >= 0){
            $c++;
            pembagian($a, $b, $c);
        }else{
            echo $c;
        }
    }
    pembagian(7, 2);
    echo "<br>";
    pembagian(8, 4);
?>