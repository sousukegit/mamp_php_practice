<?php
    class Car{
        private $number;
        private $speed;

        function  __construct($number) {
            $this->number = $number;
            echo "construct{$number}" . "<br>";
        }

        public function set_speed($speed){
            $this->speed = $speed;
        }

        public function drive(){
            echo "「{$this->number}」が{$this->speed}キロで走行<br>";
            
        }

        public function stop(){
            echo "「{$this->number}」が停車";
        }
    }
?>