<?php

$f = 7;
fpattern($f);

function fpattern($f){

    for ($i=1; $i <= $f; $i++) { 
        for ($j=1; $j <= $f; $j++) { 
            
            if($i==1 || $j==1){
                echo "*";
            }elseif($i==ceil($f/2)){
                if($j<=ceil($f/2)){
                    echo "*";
                }else{
                    echo "&ensp;";
                }
            }else{
                echo "&ensp;";
            }
        }
        echo "<br>";
    }

}

?>