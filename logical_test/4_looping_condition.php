<?php
    $i = 1;
    while ($i <= 50) {
        if($i % 3 == 0 && $i % 5 == 0){
            echo "FooBar" . "<br>";
        }else if($i % 3 == 0){
            echo "Foo" . "<br>";
        }else if($i % 5 == 0){
            echo "Bar" . "<br>";
        }
        $i++;
    }
?>