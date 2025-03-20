<?php

$e = 5;
epattern($e);

function epattern($e){

    for ($i=1; $i <= $e; $i++) { 
        for ($j=1; $j <= $e; $j++) { 
            
            if($i==1 || $j==1 || $i==$e || $i==ceil($e/2)){
                echo "*";
            }else{
                echo "&ensp;";
            }

        }
        echo "<br>";
    }

}

?>