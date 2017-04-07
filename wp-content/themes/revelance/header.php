<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php
	if ( ! function_exists( '_wp_render_title_tag' ) ) :
	    function theme_slug_render_title() {
			?>
			<title><?php wp_title( ' ', true, 'right' ); ?></title>
			<?php
		}
		add_action( 'wp_head', 'theme_slug_render_title' );
	endif;
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_theme_mod_not_empty('favicon', TEMPPATH.'/images/favicon.png');?>" />

<!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php
$classes='';

if(get_theme_mod('enable_preloader', false)){
	$classes = 'preloader';
}

if ( is_singular() ){
	wp_enqueue_script( "comment-reply" );
}
wp_head();
?>

</head>

<body <?php body_class($classes); ?>>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K6JT76" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K6JT76');</script>
<!-- End Google Tag Manager -->
<?php
	echo (get_theme_mod('boxed_body', false)) ? '<div class="boxed_body_wrapper">' : '';
