<?php

$c = 5;
cpattern($c);

function cpattern($c){

    for ($i=1; $i <= $c; $i++) { 
        for ($j=1; $j <= $c ; $j++) { 
            
            if($j==1 || $i==1 || $i==$c){
                
                if($i==1 && $j==1){
                    echo "&ensp;";;
                }elseif($i==$c && $j==1){
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