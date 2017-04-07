<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
if ( is_singular() ) {
	wp_enqueue_script( 'comment-reply' );
}
wp_head();
?>

</head>

<body <?php body_class(); ?>>

<?php
	echo ( get_theme_mod( 'boxed_body', false ) ) ? '<div class="boxed_body_wrapper">' : '';
