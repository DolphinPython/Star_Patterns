<?php

$b = 7;
bpattern($b);

function bpattern($b){
    for ($i=1; $i <= $b ; $i++) { 
        for ($j=1; $j <= $b ; $j++) { 
            if($i==1 || $i==$b || $i==ceil($b/2) || $j==1 || $j==$b){
                if($i==1 && $j==$b){
                    echo "&ensp;";
                }elseif($i==$b && $j==$b){
                    echo "&ensp;";
                }else{
                    echo "*";
                }
            }else{
                echo "&ensp;";
            }
        }
        echo "<br>";
    }
}

?>