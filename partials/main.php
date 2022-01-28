<main class="w-100 d-flex flex-column justify-content-around align-items-center py-5">

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
    <div class="all_users_wrapper w-100 text-white text-center mt_100">
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
    <div class="shopping_carts_wrapper w-100 text-white text-center mt_100">
        <h2 class="mb-5">All shopping carts</h2>
        <div class="container-fluid">
            <div class="row row-cols-5">
                <?php foreach($users_list->people_list as $single_user){ ?>
                    <div class="col">
                        <div class="single_user_cart w-100 h-100 d-flex flex-column justify-content-around align-items-center border border-2 border-white p-1 rounded">
                            <h3 class="mb-5"><?php echo $single_user->user_name ?> <?php echo $single_user->user_lastname ?>'s cart</h3>
                            <?php foreach($single_user->showShoppingCart() as $product_index => $product_in_cart){ ?>
                                <span class="text-capitalize fs-5"><?php echo $product_index + 1; ?>) <?php echo $product_in_cart; ?></span>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</main>