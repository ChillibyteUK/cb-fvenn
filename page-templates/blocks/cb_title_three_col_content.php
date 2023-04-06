<section class="title_three_col_content">
    <div class="container-xl py-5">
        <hr>
        <h2 class="mb-4"><?=get_field('title')?>
        </h2>
        <div class="title_three_col_content__content">
            <?=get_field('content')?>
        </div>
        <?php
        if (get_field('after')) {
            echo '<div class="title_three_col_content__after">';
            if (get_field('link')) {
                echo '<a href="' . get_field('link') . '" target="_blank">';
            }
            ?>
            <img src="<?=wp_get_attachment_image_url(get_field('after'),'large')?>">
            <?php
            if (get_field('link')) {
                echo '</a>';
            }
            echo '</div>';
        }
        ?>
    </div>
</section>