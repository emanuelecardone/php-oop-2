<?php
    require_once __DIR__ . '/Device.php';

    class Samsung extends Device{

        // Samsung deve avere come campo obbligatorio anche il modello
        public function __construct($_name, $_price, $_model){
            parent::__construct($_name, $_price);
            $this->model = $_model;
        }
    }
?>