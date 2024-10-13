<?php
    $name = "sousuke";
    echo mb_strlen($name);
    echo "<br>";
    #検索
    $suke = mb_strpos($name,"su");
    echo $suke;
    echo "<br>"; 
    #文字の置き換え
    echo str_replace("sou","dai",$name);

?>