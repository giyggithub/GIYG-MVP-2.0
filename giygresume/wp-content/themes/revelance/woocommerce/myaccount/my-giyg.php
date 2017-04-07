<?php
/**
 * My Giyg
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<?php 
	global $current_user;
	$args = array(
		'posts_per_page'   => -1,
		'offset'           => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'resume',
		'author'	   	   => $current_user->ID,
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
	$posts_array = get_posts( $args ); 
	
	echo "<ul class='my-giyg'>";?>
    <li><a href="<?php echo get_site_url(); ?>/build-your-infographic/survey-pages/" class="btn btn-sm btn-green pull-right" title="View">Create a new survey</a></li>
    <?php
	foreach ($posts_array as $key => $value) {
	?>
		<li><?php echo $value->post_title; ?><a href="<?php echo get_site_url(); ?>/build-your-infographic/preview-page/?wr-resume-id=<?php echo $value->ID; ?>" class="btn btn-sm btn-green pull-right" title="View">View</a></li>
	<?php	
	}
	echo "</ul>";
?>