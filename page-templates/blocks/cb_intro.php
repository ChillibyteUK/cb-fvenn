<section class="intro py-5">
    <div class="container-xl pb-5">
        <div class="row g-4">
            <div class="col-lg-6 d-flex flex-column intro__left">
                <div class="mb-4">
                    <h2><?=get_field('title')?></h2>
                    <a href="/contact-us/" class="btn btn-primary">Get in touch</a>
                </div>
                <img src="<?=get_stylesheet_directory_uri()?>/img/fvenn-icon--labelled.svg" alt="" width="320" height="303" class="d-flex mx-auto">
            </div>
            <div class="col-lg-6 d-flex justify-content-between flex-column">
                <?php
                $c = count(get_field('items'));
                // echo $c;
                $x = 1;
                $class = '';
                while(have_rows('items')) {
                    the_row();
                    if ($x >= $c) {
                        $class = '';
                        ?>
                <div class="intro__container fs-5">
                    <div class="intro__content intro__item"><?=get_sub_field('content')?></div>
                    <div class="callout__after">
                        <span class="h3">We ...</span><br>aim to be your long-term, trusted partner.
                    </div>
                </div>
                        <?php
                    }
                    else {
                        ?>
                <div class="intro__container">
                    <div class="intro__item">
                        <h3>We ...</h3>
                        <div class="intro__content"><?=get_sub_field('content')?></div>
                    </div>
                </div>
                        <?php
                    }
                    $x++;
                }
                ?>
            </div>
        </div>
    </div>
</section>