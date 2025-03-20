<?php

$d = 5;
dpattern($d);

function dpattern($d){

    for ($i=1; $i <= $d; $i++) { 
        for ($j=1; $j <= $d; $j++) { 
            
            if($i==1 || $j==1 || $i==$d || $j==$d){
                if($i==1 && $j==$d){
                    echo "&ensp;";
                }elseif($i==$d && $j==$d){
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