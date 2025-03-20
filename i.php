<?php

$ii = 5;
ipattern($ii);

function ipattern($ii){
    for ($i=1; $i <= $ii; $i++) { 
        for ($j=1; $j <= $ii; $j++) { 
            if($i==1 || $i==$ii || $j==ceil($ii/2)){
                echo "*";
           }else{
                echo "&ensp;";
            }
        }
        echo "<br>";
    }
}

?>