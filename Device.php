<?php
    // Classe padre di tutti i dispositivi elettronici dello shop
    class Device {

        public $name;
        public $model;
        public $color;
        public $type;
        public $price;
        public $left;

        // Campi obbligatori
        public function __construct($_name, $_price){
            $this->name = $_name;
            $this->price = $_price;
        }

        // Funzione per ritornare le informazioni come array
        public function showAllInfo(){
            $info_array = [
                'name' => $this->name,
                'model' => $this->model,
                'color' => $this->color,
                'type' => $this->type,
                'price' => $this->price,
                'left' => $this->left
            ];

            // Push per i prodotti che hanno caratteristiche in più
            if(isset($this->size)){
                $info_array['size'] = $this->size;
            }
            if(isset($this->weight)){
                $info_array['weight'] = $this->weight;
            }
            if(isset($this->ram)){
                $info_array['ram'] = $this->ram;
            }
            if(isset($this->usb)){
                $info_array['usb'] = $this->usb;
            }

            return $info_array;
        }
    }
?>