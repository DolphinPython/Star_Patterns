<?php

$r = 7;
rpattern($r);

function rpattern($r){
    for($i=1; $i<=$r; $i++){
        for ($j=1; $j<=$r; $j++) { 
            if($i==1 || $i==ceil($r/2) || $j==1){
                echo "*";
            }elseif($i<=ceil($r/2)){
                if($j==$r){
                    echo "*";
                }else{
                    echo "&ensp;";
                }
            }elseif($i===$j){
                echo "*";
            }else{
                echo "&ensp;";
            }
        }
        echo "<br>";
    }

}

?>