<?php
function acf_blocks() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'				=> 'cb_front_hero',
			'title'				=> __('CB Front Hero'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_front_hero.php',
			'keywords'			=> array( 'front','hero' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_hero',
			'title'				=> __('CB Hero'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_hero.php',
			'keywords'			=> array( 'hero' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_intro',
			'title'				=> __('CB Intro'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_intro.php',
			'keywords'			=> array( 'intro' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_secondary_intro',
			'title'				=> __('CB Secondary Intro'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_secondary_intro.php',
			'keywords'			=> array( 'secondary', 'intro' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_callout',
			'title'				=> __('CB Callout'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_callout.php',
			'keywords'			=> array( 'callout' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_contact',
			'title'				=> __('CB Contact'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_contact.php',
			'keywords'			=> array( 'contact' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_two_col_title_content',
			'title'				=> __('CB Two Col Title Content'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_two_col_title_content.php',
			'keywords'			=> array( 'two','col','title','content' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_title_three_col_content',
			'title'				=> __('CB Title Three Col Content'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_title_three_col_content.php',
			'keywords'			=> array( 'three','col','title','content' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_logos',
			'title'				=> __('CB Logos'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_logos.php',
			'keywords'			=> array( 'logos' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_quotes',
			'title'				=> __('CB Quotes'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_quotes.php',
			'keywords'			=> array( 'quotes' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_person',
			'title'				=> __('CB Person'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_person.php',
			'keywords'			=> array( 'person' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_testimonial_slider',
			'title'				=> __('CB Testimonial Slider'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_testimonial_slider.php',
			'keywords'			=> array( 'testimonial', 'slider' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
		acf_register_block_type(array(
			'name'				=> 'cb_vimeo_video',
			'title'				=> __('CB Vimeo Video'),
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'render_template'	=> 'page-templates/blocks/cb_video.php',
			'keywords'			=> array( 'video' ),
			'mode'	=> 'edit',
            'supports' => array('mode' => false),
		));
    }
}
add_action('acf/init', 'acf_blocks');

// Gutenburg core modifications
add_filter( 'register_block_type_args', 'core_image_block_type_args', 10, 3 );
function core_image_block_type_args( $args, $name ) {
    if ( $name == 'core/paragraph' ) {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ( $name == 'core/list' ) {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ( $name == 'core/columns' ) {
        // $args['render_callback'] = 'modify_core_add_container';
    }
    if ( $name == 'core/heading' ) {
        $args['render_callback'] = 'modify_core_heading';
    }
    if ( $name == 'core/button' ) {
        $args['render_callback'] = 'modify_core_buttons';
    }
    if ( $name == 'core/quote' ) {
        $args['render_callback'] = 'modify_core_quote';
    }

	// echo '<pre>' . $name . '</pre>';

    return $args;
}

function modify_core_add_container($attributes, $content) {
    ob_start();
	// $class = $block['className'];
    ?>
    <div class="container-xl">
		<?=$content?>
    </div>
    <?php
    $content = ob_get_clean();
	return $content;
}

function modify_core_heading($attributes, $content) {
    ob_start();
    $id = strtolower( wp_strip_all_tags( $content ) );
    $id = cbslugify($id);
    ?>
    <div class="container-xl" id="<?=$id?>">
        <?=$content?>
    </div>
    <?php
    $content = ob_get_clean();
	return $content;
}

function modify_core_buttons($attributes, $content) {
	ob_start();

	$btn = $content;

	preg_match('/class="wp-block-button (.*?)"/', $btn, $class);
	
	preg_match('/href="(.*?)"/', $btn, $link);

	preg_match('/target="(.*?)" rel="(.*?)"/', $btn, $target);

	preg_match('/<a.*?>(.*?)<\/a>/', $btn, $label);

	?>
	<!-- core/buttons -->
	<div class="container-xl clearfix mb-4"><a class="btn <?=$class[1]?>" href="<?=$link[1]?>" target="<?=$target[1]?>" rel="<?=$target[2]?>"><?=$label[1]?></a></div>
	<?php
	$content = ob_get_clean();
	return $content;
}

function modify_core_quote($attributes, $content) {
	ob_start();

    ?>
	<!-- wp_quote -->
    <div class="container-xl">
		<div class="wp-block-quote--cb my-4 w-md-75 mx-auto">
			<div class="overlay"></div>
			<?=$content?>
		</div>
    </div>
    <?php

	$content = ob_get_clean();
	return $content;
}