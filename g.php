<?php

$g = 5;
gpattern($g);

function gpattern($g){

    for ($i=1; $i <= $g; $i++) { 
        for ($j=1; $j <= $g; $j++) { 
            
            if($i==1 || $i==$g || $j==1){
                
                if($i==1 && $j==1){
                    echo "&ensp;";
                }elseif($i==$g && $j==1){
                    echo "&ensp;";
                }else{
                    echo "*";
                }
            }elseif($i==ceil($g/2)){
                if($j>ceil($g/2)){
                    echo "*";
                }else{
                    echo "&ensp;";
                }
            }elseif($i>ceil($g/2)){
                if($j==$g){
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