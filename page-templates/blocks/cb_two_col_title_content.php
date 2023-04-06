<section class="two_col_title_content">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="two_col_title_content__title">
                    <?php
                if (get_field('icon')) {
                    ?>
                    <img class="two_col_title_content__icon"
                        src="<?=get_field('icon')?>">
                    <?php
                }
                    ?>
                    <h2><?=get_field('title')?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 two_col_title_content__content">
                <?=get_field('content')?>
            </div>
        </div>
    </div>
</section>