<?php

    require_once __DIR__ . '/Amounts.php';

    // Classe padre di tutti i dispositivi elettronici dello shop
    class Device {

        use Amounts;

        public $name;
        public $model;
        public $color;
        public $type;
        public $price;

        // Campi obbligatori
        public function __construct($_name, $_price){
            $this->name = $_name;

            // ERRORE / EXCEPTION
            if(is_int($_price)){ 
                $this->price = $_price;
            } else{
                throw new Exception('<span class="text-white fw-bold">Price must be an integer, please try again later</span>');
            }
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