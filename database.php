<?php
    // Sezione generica in cui si richiamano le classi e vengono assegnati i singoli valori agli oggetti
    require_once __DIR__ . '/ProductsList.php';
    require_once __DIR__ . '/UsersList.php';
    require_once __DIR__ . '/Samsung.php';
    require_once __DIR__ . '/Sony.php';
    require_once __DIR__ . '/Marshall.php';
    require_once __DIR__ . '/Sharp.php';
    require_once __DIR__ . '/MSI.php';
    require_once __DIR__ . '/User.php';

    // Creazione oggetti
    $products_list = new ProductsList();
    $users_list = new UsersList();
    $samsung_s20 = new Samsung('Samsung', 800, 'S-20');
    $sony_a80j = new Sony('Sony', 1500, 'A80J');
    $marshall_stanmore = new Marshall('Marshall', 250);
    $sharp_calculator = new Sharp('Sharp', 25);

    // Errore per msi (da cambiare il 1700 con una stringa per test)
    try{
        $msi_desktop = new MSI('MSI', 1700);
    } catch(Exception $e){
        error_log($e);
        echo $e->getMessage();
        die();
    }

    $marco = new User('Marco', 'Meroli', 'marcomeroli@gmail.com');
    $mary = new User('Mary', 'Shaon', 'maryshaon@gmail.com');

    // Attribuzione valori prodotti
    // Samsung
    $samsung_s20->color = 'Black';
    $samsung_s20->type = 'Phone';
    $samsung_s20->left = 20;

    // Sony
    $sony_a80j->color = 'White';
    $sony_a80j->type = 'Television';
    $sony_a80j->left = 78;
    $sony_a80j->size = 55;

    // Marshall
    $marshall_stanmore->model = 'Stanmore II';
    $marshall_stanmore->color = 'Grey';
    $marshall_stanmore->type = 'Speaker';
    $marshall_stanmore->left = 205;
    $marshall_stanmore->size = 35;
    $marshall_stanmore->weight = 4.35;

    // Sharp
    $sharp_calculator->model = 'EL-334WB 12 Digit';
    $sharp_calculator->color = 'Green';
    $sharp_calculator->type = 'Calculator';
    $sharp_calculator->left = 'Sold out';

    // MSI
    $msi_desktop->model = 'MAG Infinite S3 11th';
    $msi_desktop->color = 'Red';
    $msi_desktop->type = 'Desktop';
    $msi_desktop->left = 11;
    $msi_desktop->ram = 16;
    $msi_desktop->usb = 'C';


    // Attribuzione valori utenti
    // Marco
    $marco->user_age = 25;
    $marco->user_status = 'Premium';
    $marco->user_country = 'Italy';
    $marco->setDiscount();
    $marco->fillShoppingCartUp($samsung_s20->name, $samsung_s20->model, $samsung_s20->price);
    $marco->fillShoppingCartUp($msi_desktop->name, $msi_desktop->model, $msi_desktop->price);

    // Mary
    $mary->user_age = 37;
    $mary->user_status = 'Normal';
    $mary->user_country = 'USA';
    $mary->setDiscount();
    $mary->fillShoppingCartUp($sony_a80j->name, $sony_a80j->model, $sony_a80j->price);
    $mary->fillShoppingCartUp($marshall_stanmore->name, $marshall_stanmore->model, $marshall_stanmore->price);
    $mary->fillShoppingCartUp($msi_desktop->name, $msi_desktop->model, $msi_desktop->price);


    // Push nella lista prodotti
    $products_list->list[] = $samsung_s20;
    $products_list->list[] = $sony_a80j;
    $products_list->list[] = $marshall_stanmore;
    $products_list->list[] = $sharp_calculator;
    $products_list->list[] = $msi_desktop;

    // Push nella lista utenti
    $users_list->people_list[] = $marco;
    $users_list->people_list[] = $mary;
?>