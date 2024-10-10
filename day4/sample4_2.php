<?php
    $array_ren = ["biful" => "ビフルカツム","ridley" => "リドレイ","wandae" => "ワンダエ"];
    print_r($array_ren);
    echo "<br>" . $array_ren["biful"];
    #内容変更
    $array_ren["biful"] = "コウモリラン";
    echo "<br>" . $array_ren["biful"];
    #追加
    $array_ren["grande"] = "グランデ";
    echo "<br>";
    print_r($array_ren);
    #削除
    unset($array_ren["ridley"]);
    echo "<br>";
    print_r($array_ren);
    echo "<br>";
    #foreach
    foreach($array_ren as $value){
        echo "<br>" . $value;
    }
    
    echo "<br>";
    foreach($array_ren as $key => $value){
        echo "<br>" . $key . ":" . $value;
    }
?>