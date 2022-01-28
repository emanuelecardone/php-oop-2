<?php
    // Sezione generica in cui si richiamano le classi e vengono assegnati i singoli valori agli oggetti
    require_once __DIR__ . '/Samsung.php';

    // Creazione oggetti
    $samsung_s20 = new Samsung('Samsung', 800, 'S-20');

    // Attribuzione valori
    $samsung_s20->color = 'Black';
    $samsung_s20->type = 'Phone';
    $samsung_s20->left = 20;
?>