<?php
    // Classe padre di tutti gli user
    class User {

        public $user_name;
        public $user_lastname;
        public $user_age;
        public $user_email;
        public $user_status;
        public $user_country;

        protected $user_discount;

        // Campi obbligatori
        public function __construct($_user_name, $_user_lastname, $_user_email){
            $this->user_name = $_user_name;
            $this->user_lastname = $_user_lastname;
            $this->user_email = $_user_email;
        }

        // Funzione per settare lo sconto se lo status è premium
        public function setDiscount(){
            $this->user_discount = $this->user_status === 'Premium' ? 25 : 0;
        }

        // Funzione per ritornare le informazioni come array
        public function showAllUser(){
            $info_array = [
                'name' => $this->user_name,
                'lastname' => $this->user_lastname,
                'age' => $this->user_age,
                'email' => $this->user_email,
                'status' => $this->user_status,
                'country' => $this->user_country,
                'discount' => $this->user_discount
            ];

            return $info_array;
        }
    }
?>