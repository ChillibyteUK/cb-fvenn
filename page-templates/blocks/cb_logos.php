<section class="logos my-5">
    <div class="container-xl">
        <div class="row g-4">
            <?php
            while (have_rows('logos')) {
                the_row();
                ?>
            <div class="col-sm-6 col-md-3 mx-auto text-center">
                <img src="<?=get_sub_field('logo')?>" class="logos__logo" alt="">
            </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>