<?php
    $temp = random_int(-200,200);
    echo $temp;
    echo "<br>";
    if($temp > 0 && $temp < 100){
        echo "0^100";
    }
    elseif ($temp >= 100) {
        echo "100>";
    }
    else{
        echo "0<";
    }

?>