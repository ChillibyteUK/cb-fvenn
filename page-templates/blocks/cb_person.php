<section class="person">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <div class="person__meta">
                    <img class="person__image" src="<?=wp_get_attachment_image_url(get_field('image'),'large')?>" alt="">
                    <h2 class="person__name"><?=get_field('name')?></h2>
                    <div class="person__role"><?=get_field('role')?></div>
                    <div class="person__linkedin"><a href="<?=get_field('linkedin')?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></div>
                </div>
            </div>
            <div class="col-md-6 person__bio">
                <?=get_field('bio')?>
            </div>
        </div>
    </div>
</section>