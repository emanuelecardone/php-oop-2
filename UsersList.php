<?php
    // Classe che conterrà solo la lista utenti totale
    class UsersList{
        // Array nella quale pusho gli utenti (va public in quanto non contiene classi figlie)
        public $people_list = [];

        // Funzione per pushare gli utenti nell'array
        public function fillUsersListUp($user){
            $this->people_list[] = $user;
        }
    }
?>