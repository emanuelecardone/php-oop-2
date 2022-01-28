<?php
    // Classe che conterrà solo la lista oggetti totale
    class ProductsList{
        // Array nella quale pusho i prodotti (va public in quanto non contiene classi figlie)
        public $list = [];

        // Funzione per pushare i prodotti nell'array
        public function fillListUp($product){
            $this->list[] = $product;
        }
    }
?>