<?php
$s = 8;
spattern($s);

function spattern($s){

    for($i=1;$i<=$s;$i++){
        for($j=1;$j<=$s;$j++){

            if($i==1 || $i==$s || $i==ceil($s/2)){
                echo "*";
            }elseif($j==1 && $i<ceil($s/2)){
                echo "*";
            }elseif($j==$s && $i>ceil($s/2)){
                echo "*";
            }else{
                echo "&ensp;";
            }
        }
        echo "<br>";
    }

}

?>