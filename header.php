<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-hydronix
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/work-sans-v18-latin-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/work-sans-v18-latin-700.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/work-sans-v18-latin-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<?php
if (get_field('ga_property', 'options')) { 
    ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property','options')?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?=get_field('ga_property','options')?>');
</script>
    <?php
}
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?=get_field('gtm_property','options')?>');</script>
<!-- End Google Tag Manager -->
    <?php
}
if (get_field('google_site_verification','options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification','options') . '" />';
}
if (get_field('bing_site_verification','options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification','options') . '" />';
}

wp_head();
if (is_front_page()) {
    ?>
	
	<script type="application/ld+json">
    {
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "name" : "fVenn",
	  "url": "https://www.fvenn.com/",
	  "logo": "https://www.fvenn.com/wp-content/theme/cb-fvenn/img/fvenn-logo.jpg",
	  "description": "",
	  "address": {
		"@type": "PostalAddress",
        "streetAddress": "",
		"addressLocality": "",
		"addressRegion": "",
		"postalCode": "",
		"addressCountry": "UK"
	  },
	  "telephone": "+44 (0)345 241 2885",
      "email": "info@fvenn.com",
	  "sameAs" : [
		"https://twitter.com/",
		"https://www.linkedin.com/company/",
	  ]
	}
}
</script>
	<?php
}
?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php
do_action('wp_body_open'); 
?>
<style>

</style>
<div class="site" id="page">
	<div id="wrapper-navbar" class="fixed-top">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg--light">
            <div class="container-xl d-flex align-items-end">
                <div class=""><a href="/" aria-title="Home"><img class="logo" src="<?=get_stylesheet_directory_uri()?>/img/fvenn-logo.svg"></a></div>
                <div class="collapse navbar-collapse flex-column align-items-end ml-lg-2 ml-0" id="navbarCollapse">
                    <?php
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'primary_nav',
                                    'container_class' => 'w-100',
                                    // 'container_id'    => 'primaryNav',
                                    'menu_class'      => 'navbar-nav justify-content-around align-items-lg-center',
                                    'fallback_cb'     => '',
                                    'menu_id'         => 'main-menu',
                                    'depth'           => 3,
                                    'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                                )
                            );
                    ?>
                </div>
                <button class="navbar-toggler mt-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Navigation">
                    <i class="fa fa-navicon" aria-hidden="true"></i>
                </button>
            </div>
        </nav>
    </div>
</div>