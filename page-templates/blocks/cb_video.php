<?php
$bg = get_vimeo_data_from_id(get_field('video_id'), 'thumbnail_url');
?>
<section class="video py-4">
    <div class="container-xl">
        <lite-vimeo videoid="<?=get_field('video_id')?>" style="background-image:url('<?=$bg?>');"></lite-vimeo> 
    </div>
</section>
<script type=module src="https://cdn.jsdelivr.net/npm/@slightlyoff/lite-vimeo@0.1.1/lite-vimeo.js"></script>