<?php
    // Sezione generica in cui si richiamano le classi e vengono assegnati i singoli valori agli oggetti
    require_once __DIR__ . '/ProductsList.php';
    require_once __DIR__ . '/Samsung.php';
    require_once __DIR__ . '/Sony.php';

    // Creazione oggetti
    $products_list = new ProductsList();
    $samsung_s20 = new Samsung('Samsung', 800, 'S-20');
    $sony_a80j = new Sony('Sony', 1500, 'A80J');

    // Attribuzione valori
    // Samsung
    $samsung_s20->color = 'Black';
    $samsung_s20->type = 'Phone';
    $samsung_s20->left = 20;

    // Sony
    $sony_a80j->color = 'White';
    $sony_a80j->type = 'Television';
    $sony_a80j->left = 78;
    $sony_a80j->size = 55;

    // Push nella lista prodotti
    $products_list->list[] = $samsung_s20;
    $products_list->list[] = $sony_a80j;
?>