<main class="w-100 d-flex flex-column justify-content-around align-items-center">

    <!-- Tutti i dispositivi -->
    <div class="all_devices_wrapper w-100 text-white text-center">
        <h2 class="mb-5">All devices</h2>
        <div class="container-fluid">
            <div class="row row-cols-5">
                <?php foreach($products_list->list as $single_product){ ?>
                    <div class="col">
                        <div class="single_device w-100 h-100 d-flex flex-column justify-content-center align-items-center border border-2 border-white p-5 rounded">
                            <?php foreach($single_product->showAllInfo() as $key => $value){ ?>
                                <span class="text-capitalize fs-5"><strong class="me-2"><?php echo $key;?>:</strong><?php echo $value; ?></span>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    
    <!-- Tutti gli utenti -->
    <div class="all_users_wrapper w-100 text-white text-center">
        <h2 class="mb-5">All users</h2>
        <div class="container-fluid">
            <div class="row row-cols-5">
                <?php foreach($users_list->people_list as $single_user){ ?>
                    <div class="col">
                        <div class="single_user w-100 h-100 d-flex flex-column justify-content-center align-items-center border border-2 border-white p-5 rounded">
                            <?php foreach($single_user->showAllUser() as $key => $value){ ?>
                                <span class="text-capitalize fs-5"><strong class="me-2"><?php echo $key;?>:</strong><?php echo $value; ?></span>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Carrelli per ogni utente -->
    <div class="shopping_carts_wrapper text-white text-center">
        <h2 class="mb-5">All shopping carts</h2>
    </div>

</main>