<section class="contact">
    <div class="container-xl py-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <h2>Get in touch</h2>
            </div>
            <div class="col-lg-6">
                <?=do_shortcode('[contact-form-7 id="158"]')?>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script>
    textarea = document.querySelector("#autoresizing");
    textarea.addEventListener('input', autoResize, false);

    function autoResize() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    }
</script>
<?php
});
