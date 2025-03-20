<?php

$a = 5;
apattern($a);

function apattern($a){
    for ($i=1; $i <= $a; $i++) { 
        for ($j=1; $j <= $a; $j++) { 
            if($i==1 || $j==1 || $j==$a || $i==ceil($a/2)){
                echo "*";
            }else{
                echo "&ensp;";
            }
        }
        echo "<br>";
    }
}

?>