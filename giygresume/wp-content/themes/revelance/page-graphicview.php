<?php
/*
Template Name: Graphic View
*/

get_header();

get_template_part('partials/header_menu'); 

?>
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
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                                <?php the_content();?>
                            <?php endwhile; endif;?>
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
                                    <p class="signup-info">By signing up, you agree to GIYG&#39 s <a href="javascript:;" title="Terms and Conditions"> Terms and Conditions</a> and <a href="javascript:;" title="Privacy Policy"> Privacy Policy</a></p>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            </div>
		</div>
	</section>

<?php get_footer();