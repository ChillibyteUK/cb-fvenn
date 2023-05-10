<section class="quotes py-4">
    <div class="container-xl">
        <div class="row gy-4 gx-5 justify-content-center">
            <?php
            $t = new WP_Query(array(
                'post_type' => 'testimonials',
                'posts_per_page' => -1
            ));
            $c = 0;
            while ($t->have_posts()) {
                $t->the_post();
                if ($c == 0) {
                    ?>
                <div class="col-12 quote">
                    <div class="quote__body"><?=get_the_content()?></div>
                    <div class="quote__attr"><strong><?=get_the_title()?></strong> - <?=get_field('company_name',get_the_ID())?></div>
                </div>
                    <?php
                    $c++;
                }
                ?>
                <div class="col-md-6 quote">
                    <div class="quote__body"><?=get_the_content()?></div>
                    <div class="quote__attr"><strong><?=get_the_title()?></strong> - <?=get_field('company_name',get_the_ID())?></div>
                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</section>