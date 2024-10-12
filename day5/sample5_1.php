<?php

    function avg($a,$b){
        return  ($a + $b) / 2;
    }

    echo avg(5,3);
    
    function atai($params){
        $params = "颯一朗";
    }

    function sansyo(&$params){
        $params = "美奈恵";
    }

    $manabe = "真鍋";
    $taniguti = "谷口";

    atai($manabe);
    sansyo($taniguti);

    echo "\$manabeは{$manabe}<br>";
    echo "\$tanigutiは{$taniguti}<br>";


?>