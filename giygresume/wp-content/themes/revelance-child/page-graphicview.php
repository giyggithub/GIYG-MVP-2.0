<?php
/**
 * Template Name: Graphic View
 */

get_header();

get_template_part( 'partials/header_menu' );
$pp_page = get_page_by_title( 'Privacy Policy' );
$tos_page = get_page_by_title( 'Terms of Service' );
?>
	<script>
	/*To initialize facebook in a popup*/
	window.fbAsyncInit = function() {

		FB.init({
			appId      : "<?php echo userpro_get_option( 'facebook_app_id' ); ?>", // Set YOUR APP ID
			status     : true, // check login status
			cookie     : true, // enable cookies to allow the server to access the session
			xfbml      : true,  // parse XFBML
			version    : 'v2.6'
		});

		FB.Event.subscribe('auth.authResponseChange', function(response) {
			if (response.status === 'connected') {
				//SUCCESS
			} else if (response.status === 'not_authorized') {
				//FAILED
			} else {
				//UNKNOWN ERROR
			}
		});

	};
	/*To initialize facebook in a popup*/
	</script>
	<section class="page_main_section">
		<div class="container content_fullwidth">
			<div class="giyg-wr build_landing">
				<section class="build-infra">
					<div class="container">
					    	<div class="row">
							<h1>Get Your GIYGgraph<sup>SM</sup> Infographic</h1>
							<?php if ( is_user_logged_in() ) { ?>
								<h5></h5>
							<?php } else { ?>
								<h5>Sign Up and Create one for FREE</h5>
							<?php } ?>
							<?php if ( have_posts() ) :
								while ( have_posts() ) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile;
								endif; ?>
					    	</div>
					</div>
			 	</section>
			 	<section class="text-center signup-section">
				<div class="container">
					<div class="row">
					   	<?php if ( is_user_logged_in() ) { ?>
							<a href="<?php echo get_site_url();?>/build-your-infographic/survey-pages/" class="btn btn-lg btn-green">Let's Get Started</a>
					   	<?php } else { ?>
							<button class="popup-register btn btn-lg btn-green">Sign up Now</button>
							<p class="signup-info">By signing up, you agree to GIYG&#39 s <a href="javascript:;" data-toggle="modal" data-target="#terms_of_service_popup"> Terms and Conditions</a> and <a href="javascript:;" data-toggle="modal" data-target="#privacy_policy_popup"> Privacy Policy</a></p>

							<div id="privacy_policy_popup" class="modal fade" role="dialog">
								<div class="modal-dialog">
								    <div class="modal-content">
										<div class="modal-header">                                        
											<button type="button" class="close" data-dismiss="modal">&times;</button>
									   	</div>
									   	<div class="modal-body">
											<?php echo $pp_page->post_content; ?>
									   	</div>
								    	</div>
								</div>
							</div>

							<div id="terms_of_service_popup" class="modal fade" role="dialog">
								<div class="modal-dialog">
								    <div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
									   	</div>
									   	<div class="modal-body">
											<?php echo $tos_page->post_content; ?>
									   	</div>
								    	</div>
								</div>
							</div>
					   	<?php } ?>
					<?php echo do_shortcode( '[userpro]' ); ?>
				    	</div>
				</div>
				</section>
			</div>
		</div>
	</section>   

<?php get_footer();
