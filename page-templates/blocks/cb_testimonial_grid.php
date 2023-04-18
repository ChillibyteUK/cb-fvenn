<section class="quotes py-4">
    <div class="container-xl">
        <div class="row gy-4 gx-5 justify-content-center">
            <?php
            $t = new WP_Query(array(
                'post_type' => 'testimonials',
                'posts_per_page' => -1
            ));
            while ($t->have_posts()) {
                $t->the_post();
                ?>
                <div class="col-md-6 quote">
                    <div class="quote__body"><?=get_the_content()?></div>
                    <div class="quote__attr"><strong><?=get_the_title()?></strong> - <?=get_field('company_name')?></div>
                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </div>
</section>