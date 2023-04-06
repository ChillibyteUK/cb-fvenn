<section class="testimonial_slider">
    <div class="container-xl py-5">
        <div class="testimonial_container carousel slide w-md-75 mx-auto" data-bs-ride="carousel">
            <div class="carousel-inner">
        <?php
        $t = new WP_Query(array(
            'post_type' => 'testimonials',
            'posts_per_page' => -1
        ));
        $active = 'active';
        while ($t->have_posts()) {
            $t->the_post();
            ?>
<div class="carousel-item <?=$active?>">
    <div class="testimonial__body fs-large"><?=get_the_content()?></div>
    <div class="testimonial__attr"><strong><?=get_the_title()?></strong> - <?=get_field('company_name',get_the_ID())?></div>
</div>
            <?php
            $active = '';
        }
        ?>
        </div>
    </div>
</section>