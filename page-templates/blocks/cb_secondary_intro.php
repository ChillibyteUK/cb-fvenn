<?php
$border = get_field('border')[0] ?? null ? 'has-border' : '';
?>
<section class="secondary_intro">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6">
                <div
                    class="fs-large secondary_intro__content <?=$border?>">
                    <?=get_field('content')?>
                </div>
            </div>
        </div>
    </div>
</section>