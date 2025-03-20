<?php

$h = 5;
hpattern($h);

function hpattern($h){
    for ($i=1; $i <= $h; $i++) { 
        for ($j=1; $j <= $h; $j++) { 
            if($j==1 || $j==$h || $i==ceil($h/2)){
                echo "*";
            }else{
                echo "&ensp;";
            }
        }
        echo "<br>";
    }
}

?>