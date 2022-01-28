<main class="w-100 d-flex flex-column justify-content-around align-items-center">

    <div class="all_devices_wrapper w-100 text-white text-center">
        <h2 class="mb-5">All devices</h2>
        <div class="container-fluid">
            <div class="row row-cols-5">
                <div class="col">
                    <div class="single_device w-100 h-100 d-flex flex-column justify-content-center align-items-center border border-2 border-white p-5 rounded">
                        <?php foreach($samsung_s20->showAllInfo() as $key => $value){ ?>
                            <span class="text-capitalize fs-5"><?php echo $key;?>: <?php echo $value; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="all_users_wrapper text-white text-center">
        <h2 class="mb-5">All users</h2>
    </div>

</main>