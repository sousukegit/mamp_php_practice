<?php
    require_once("car.php");
    $car = new Car("そ　４３－５２");

    #$car->number = "そ　４３－５２";
    $car->set_speed(40) ;

    $car->drive();
    $car->stop();
?>