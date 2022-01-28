<?php
    // Classe padre di tutti i dispositivi elettronici dello shop
    class Device {

        public $name;
        public $model;
        public $color;
        public $type;
        public $price;
        public $left_amount;

        // Campi obbligatori
        public function __construct($_name, $_price){
            $this->name = $_name;
            $this->price = $_price;
        }
    }
?>