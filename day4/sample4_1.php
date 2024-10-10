<?php
    #配列の確認
    $array_bikaku = ["hilli","corona","wandae"];
    print_r($array_bikaku);
    echo "<br>";
    #前から削除
    array_shift($array_bikaku);
    print_r($array_bikaku);
    echo "<br>";
    #前に挿入
    array_unshift($array_bikaku,"biful");
    print_r($array_bikaku);
    echo "<br>";
    #指定インデックスを削除
    unset($array_bikaku[2]);
    print_r($array_bikaku);
    echo "<br>";
    #配列をマージ
    $array_bikaku2 = ["grande","mada","ridly"];
    $array_bikaku = array_merge($array_bikaku,$array_bikaku2);
    print_r($array_bikaku);
    #配列を切り取り
    $array_bikaku = array_slice($array_bikaku,3,4);
    echo "<br>";
    print_r($array_bikaku);
?>