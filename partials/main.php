<main class="w-100 d-flex flex-column justify-content-center align-items-center">

    <!-- TEST -->
    <?php foreach($samsung_s20->showAllInfo() as $key => $value){ ?>
        <span class="text-white text-capitalize"><?php echo $key;?>: <?php echo $value; ?></span>
    <?php } ?>

</main>