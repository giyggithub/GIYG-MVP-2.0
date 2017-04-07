<?php
/**
 * Template Name: Full width
 */

get_header();

if ( ! is_page( 'share-infographic' ) ) {
	get_template_part( 'partials/header_menu' );
}
?>
	<section class="page_main_section">
		<div class="container content_fullwidth">

			<?php
			if ( is_page( 'My Account' ) ) {
				$http_referer = wp_get_referer();
				$http_referer_values = explode( '/', $http_referer );
				if ( in_array( 'survey-pages', $http_referer_values ) ) {
					$_SESSION['back_url'] = $http_referer;
				} else {
					$redirect_to = '';
					if ( ! in_array( 'my-account', $http_referer_values ) ) {
						unset( $_SESSION['back_url'] );
					}

					if ( empty( $_SESSION['back_url'] ) ) {
						$last_post_id = '';
						$args = array(
							'author' => get_current_user_id(),
							'orderby' => 'post_date',
							'order' => 'DESC',
							'post_type' => 'resume',
							'posts_per_page' => -1, // no limit.
						);
						$current_user_posts = get_posts( $args );

						foreach ( $current_user_posts as $key => $value ) {
							$last_post_id = $value->ID;
							$pometa = get_post_meta( $last_post_id );
							if ( array_key_exists( 'giyg_wr_impact_statement', $pometa ) ) {
								$redirect_to = get_site_url() . '/preview-page/?wr-resume-id=' . $last_post_id;
								break;
							}
						}
					}
				}
				if ( ! empty( $http_referer ) && ( in_array( 'survey-pages', $http_referer_values ) || ! empty( $_SESSION['back_url'] ) ) ) {
			?>
				<div class="close-wrap"><a href="<?php echo $_SESSION['back_url'];?>" class="close-page" title="Close"></a></div>
		   	<?php
				}
				if ( ! empty( $redirect_to ) ) {
			?>
				<div class="close-wrap"><a href="<?php echo $redirect_to;?>" class="close-page" title="Close"></a></div>   
			<?php
				}
			} else {
				unset( $_SESSION['back_url'] );
			} // End if().
			?>
	   
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
				<?php the_content();?>
			<?php endwhile; endif;?>

		</div>
	</section>	

<?php get_footer();
