<?php
    $array_bikaku = ["hilli","corona","wandae"];
    print_r($array_bikaku);
    echo "<br>";
    array_shift($array_bikaku);
    print_r($array_bikaku);
    echo "<br>";
    array_unshift($array_bikaku,"biful");
    print_r($array_bikaku);
    echo "<br>";
    unset($array_bikaku[2]);
    print_r($array_bikaku);
    echo "<br>";
    $array_bikaku2 = ["grande","mada","ridly"];
    $array_bikaku = array_merge($array_bikaku,$array_bikaku2);
    print_r($array_bikaku);
    $array_bikaku = array_slice($array_bikaku,3,4);
    echo "<br>";
    print_r($array_bikaku);
?>