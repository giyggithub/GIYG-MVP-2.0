<?php
/**
 * Template Name: Pricing Full width
 */

get_header();

get_template_part( 'partials/header_menu' );
?>
	<section class="page_main_section">
		<div class="container content_fullwidth">
		   	<?php if ( ! empty( wp_get_referer() ) ) {
				$http_referer = wp_get_referer();
				$http_referer_values = explode( '/', $http_referer );
				if ( in_array( 'preview-page', $http_referer_values ) ) {
					$_SESSION['pre_back_url'] = $http_referer;
				} else {
					if ( ! in_array( 'checkout', $http_referer_values ) ) {
						unset( $_SESSION['pre_back_url'] );
					}
				}
				if ( ! empty( $http_referer ) && ( in_array( 'preview-page', $http_referer_values ) || in_array( 'checkout', $http_referer_values ) ) ) {
		   	?>
				<div class="close-wrap"><a href="<?php echo $_SESSION['pre_back_url']; ?>" class="close-page" title="Close"></a></div>
		   	<?php }
				} else {
					unset( $_SESSION['pre_back_url'] ); 
				}
			?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php // the_content(); ?>
			<?php endwhile; endif;?>

			<section id="pricing-banner" class="tcvpb_section_tc pricing-banner section_with_header">
				<header>
					<div class="tcvpb_container">
						<h3>UNLOCK THE FULL POWER OF GIYG</h3>
					</div>
				</header>
				<div class="tcvpb_section_content">
					<div class="tcvpb_container">
						<div class="tcvpb_column_tc_span12">
							<div class="ABt_testimonials_wrapper_static testimonials-section">					
								<ul class="ABt_testimonials_slide" data-play="1" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">						
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>“GIYGgraphs easily show everything I need to better understand a candidate.  Skills are great, but knowing what really makes them tick and if they'll fit into my culture sets them apart.”</p>
											<div class="textimonial-img-wrap">
												<img width="223" height="223" src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/09/Chuck-Waygood.png" class="attachment-full size-full wp-post-image" alt="" >
											</div>
											<span class="source"><span class="textimonial-desc">Chuck Waygood, Global Director of Talent Acquisition</span>  <span>Hortonworks</span></span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="pricing-container" class="tcvpb_section_tc pricing-container">
				<div class="tcvpb_section_content">
					<div class="tcvpb_container">
						<div class="tcvpb_column_tc_span4">
							<div id="pricing-btn" class="tcvpb_pricing-table-1 ">
								<div class="tcvpb_plan tcvpb_plan1">			
									<div class="tcvpb_pricebox_header">
										<div class="price-area free-price">
											<span class="tcvpb_pricebox_name">GIYG<sup>SM</sup> FREE</span>
											<span class="tcvpb_pricebox_currency">$</span>
											<span class="tcvpb_pricebox_price">0</span>
											<span class="tcvpb_pricebox_monthly">MONTH</span>
										</div>
										<span class="tcvpb_pricebox_decsription">You’re new and want to check GIYG out</span>
									</div>
									<span class="tcvpb_pricebox_feature"><strong></strong> Free features include:</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Free GIYG profile insights</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Free GIYGgraph sample template</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Access your GIYGgraph anywhere</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> GIYG branded GIYGgraph</span>
									<?php
									if ( ! revelance_child_has_woocommerce_subscription( '','','active' ) ) {
								?>
										<div class="tcvpb_pricebox_feature tcvpb_pricebox_feature_button"><a href="<?php echo $_SESSION['pre_back_url'];?>" target="_self" class="tcvpb-button tcvpb-button_#ffffff tcvpb-button_rounded tcvpb-button_medium">HAVE FUN!</a></div>
								<?php
									} else {
								?>
										<div class="tcvpb_pricebox_feature tcvpb_pricebox_feature_button"><a href="<?php echo get_site_url(); ?>/checkout/?add-to-cart=1692" target="_self" class="tcvpb-button tcvpb-button_#ffffff tcvpb-button_rounded tcvpb-button_medium">TRY IT FREE!</a></div>
								<?php
									}
								?>
									
								</div>
							</div>
						</div>
						<div class="tcvpb_column_tc_span4">
							<div id="pricing-btn" class="tcvpb_pricing-table-1 ">
								<div class="tcvpb_plan tcvpb_plan2">
									
									<div class="tcvpb_pricebox_header">
										<div class="price-area">
											<span class="tcvpb_pricebox_name">GIYG<sup>SM</sup> PRO</span>
											<span class="tcvpb_pricebox_currency">$</span>
											<span class="tcvpb_pricebox_price">14</span>
											<span class="tcvpb_pricebox_monthly">MONTH</span>
											<div class="cancel-section"><span>Cancel Anytime</span></div>
										</div>
										<span class="tcvpb_pricebox_decsription">You're a pro and know what to do</span>
									</div>
									<span class="tcvpb_pricebox_feature"><strong></strong> All Free features plus:</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Create unlimited GIYGgraphs per industry/job</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Enhanced designs, fonts, colors, and icons</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Export to PDF for easy sharing</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Personalized GIYGgraph website</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Remove GIYG branding</span>
									<?php
										if ( revelance_child_has_woocommerce_subscription( '','1694','active' ) ) {
									?>
											<div class="tcvpb_pricebox_feature tcvpb_pricebox_feature_button"><a href="<?php echo $_SESSION['pre_back_url'];?>" target="_self" class="tcvpb-button tcvpb-button_#ffffff tcvpb-button_rounded tcvpb-button_medium">HAVE FUN!</a></div>
									<?php
										} else {
									?>
											<div class="tcvpb_pricebox_feature tcvpb_pricebox_feature_button"><a href="<?php echo get_site_url(); ?>/checkout/?add-to-cart=1694" target="_self" class="tcvpb-button tcvpb-button_#ffffff tcvpb-button_rounded tcvpb-button_medium">BUY NOW!</a></div>
									<?php
										}
									?>
								</div>
							</div>
						</div>
						<div class="tcvpb_column_tc_span4">
							<div id="pricing-btn" class="tcvpb_pricing-table-1 ">
								<div class="tcvpb_plan tcvpb_plan3">
									
									<div class="tcvpb_pricebox_header">
										<div class="price-area">
											<span class="tcvpb_pricebox_name">GIYG<sup>SM</sup> PREMIUM</span>
											<span class="tcvpb_pricebox_currency">$</span>
											<span class="tcvpb_pricebox_price">24</span>
											<span class="tcvpb_pricebox_monthly">MONTH</span>
											<div class="cancel-section"><span>Cancel Anytime</span></div>
										</div>
										<span class="tcvpb_pricebox_decsription">You’re organized but want a boost</span>
									</div>
									<span class="tcvpb_pricebox_feature"><strong></strong> All Pro features plus:</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> GIYGgraph expert review</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Grammar check (Ready in 24hrs)</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Unlimited feedback chat with resume experts</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> All GIYGgraphs saved even if you stop paying</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Priority connection to career coaches</span>
									<span class="tcvpb_pricebox_feature"><i class="typicons-tick"></i><strong></strong> Early access to all new features</span>
									<?php
										if ( revelance_child_has_woocommerce_subscription( '','1695','active' ) ) {
									?>
											<div class="tcvpb_pricebox_feature tcvpb_pricebox_feature_button"><a href="<?php echo $_SESSION['pre_back_url'];?>" target="_self" class="tcvpb-button tcvpb-button_#ffffff tcvpb-button_rounded tcvpb-button_medium">HAVE FUN!</a></div>
									<?php
										} else {
									?>
											<div class="tcvpb_pricebox_feature tcvpb_pricebox_feature_button"><a href="<?php echo get_site_url(); ?>/checkout/?add-to-cart=1695" target="_self" class="tcvpb-button tcvpb-button_#ffffff tcvpb-button_rounded tcvpb-button_medium">BUY NOW!</a></div>
									<?php
										}
									?>									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="pricing-bottom" class="tcvpb_section_tc pricing-bottom">
				<div class="tcvpb_section_content">
					<div class="tcvpb_container">
						<div class="tcvpb_column_tc_span3">
							<div id="grads-text" class="grads-text">
								<p class="p_tc">GIYG<sup>SM</sup> GRADS</p>
								<p class="p_tc"><br>*Verified School Email Required</p>
							</div>
						</div>
						<div class="tcvpb_column_tc_span3">
							<div id="pro-text" class="pro-text">
								<p class="p_tc"><span style="font-size: 12pt;">GIYG℠ Pro at a special price just for you.</span></p>
							</div>
						</div>
						<div class="tcvpb_column_tc_span3">
							<div id="dollar-text" class="dollar-text">
								<p class="p_tc"><sup>$</sup> 9 <sub>MONTH*</sub></p>
								<div class="cancel-section custom-col"><span>Cancel Anytime</span></div>
							</div>
						</div>
						<?php
							if ( revelance_child_has_woocommerce_subscription( '','2042','active' ) ) {
						?>
								<div class="tcvpb_column_tc_span3"><a id="final-btn" href="<?php echo $_SESSION['pre_back_url'];?>" target="_self" class="tcvpb-button tcvpb-button_green tcvpb-button_rounded tcvpb-button_medium final-btn">HAVE FUN!</a></div>
						<?php
							} else {
						?>
								<div class="tcvpb_column_tc_span3"><a id="final-btn" href="<?php echo get_site_url(); ?>/checkout/?add-to-cart=2042" target="_self" class="tcvpb-button tcvpb-button_green tcvpb-button_rounded tcvpb-button_medium final-btn">Buy Now!</a></div>
						<?php
							}
						?>						
					</div>
				</div>
			</section>

			<section id="power-banner" class="tcvpb_section_tc power-banner section_with_header" style="background-color:rgb(12, 130, 220);">
				<header>
					<div class="tcvpb_container">
						<h3>THOSE WHO UNLOCKED THE FULL POWER OF GIYG</h3>
					</div>
				</header>
				<div class="tcvpb_section_content">
					<div class="tcvpb_container">
						<div class="tcvpb_column_tc_span6">
							<div class="ABt_testimonials_wrapper_static ">
								
								<ul class="ABt_testimonials_slide" data-play="true" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
									
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>I highly recommend Giyg.me if you’re looking for a supplement to add to your career resume that’ll help you stand out from the crowd and be different. Show off the WHOLE YOU and not just your work experience.</p>
											<div class="thumbnail-user-profile">
												<div class="textimonial-img-wrap">
													<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/01/ladytwo.jpg" class="attachment-full size-full wp-post-image" alt="" >
												</div>	
												<span class="source"><span class="ABt_author">Queen Joseph</span>  <span class="ABt_company">University of Tampa</span></span>
											
											</div>
										</div>
									</li>
								</ul>
								
							</div>
							<div class="ABt_testimonials_wrapper_static ">
								
								<ul class="ABt_testimonials_slide" data-play="true" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
									
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>Any edge you can have in the job market is worthwhile. Working with GIYG was easy and fun. I am very satisfied with the quality and service I received.</p>
											<div class="thumbnail-user-profile">
												<div class="textimonial-img-wrap">
												<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/01/David-Haskell.png" class="attachment-full size-full wp-post-image" alt="" >
											</div>
											<span class="source"><span class="ABt_author">David Haskell</span>  <span class="ABt_company">University of Tampa</span></span>
											</div>
										</div>
									</li>
								</ul>
								
							</div>
							<div class="ABt_testimonials_wrapper_static ">
								
								<ul class="ABt_testimonials_slide" data-play="true" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
									
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>Their simple interface and interview style will produce a great product of who you are in a unique way that is uncommon and sure to get you noticed.</p>
											<div class="thumbnail-user-profile">
											<div class="textimonial-img-wrap">
												<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/01/Bill-Haffner.jpg" class="attachment-full size-full wp-post-image" alt="" >
											</div>
											<span class="source"><span class="ABt_author">Bill Haeffner</span>  <span class="ABt_company">University of Tampa</span></span>
											</div>
										</div>
									</li>
								</ul>
								
							</div>
							<div class="ABt_testimonials_wrapper_static ">
								
								<ul class="ABt_testimonials_slide" data-play="true" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
									
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>Today’s job market is different. Your new employer wants to know ‘your’ personal brand; what uniqueness and skill set can you offer that aligns with their culture. Giyg is ‘spot on’ with offering a creative tool to do just this. I love my infographic. Thanks Giyg</p>
											<div class="thumbnail-user-profile">
											<div class="textimonial-img-wrap">
												<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/01/Yvonne.jpg" class="attachment-full size-full wp-post-image" alt="" >
											</div>
											<span class="source"><span class="ABt_author">Yvonne Riner</span>  <span class="ABt_company">University of Tampa</a></span>
											</div>
										</div>
									</li>
								</ul>
								
							</div>
						</div>
						<div class="tcvpb_column_tc_span6">
							<div class="ABt_testimonials_wrapper_static ">
								
								<ul class="ABt_testimonials_slide" data-play="true" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
									
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>GIYG excels at taking your information and turning it into easy to understand, interesting and eye catching categories that help potential employers recognize you and your experience quickly and efficiently.</p>
											<div class="thumbnail-user-profile">
											<div class="textimonial-img-wrap">
												<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/01/menone.jpg" class="attachment-full size-full wp-post-image" alt="" >
											</div>
											<span class="source"><span class="ABt_author">Patrick Coyne</span>  <span class="ABt_company">University of Tampa</span></span>
											</div>
										</div>
									</li>
								</ul>
								
							</div>
							<div class="ABt_testimonials_wrapper_static ">
								
								<ul class="ABt_testimonials_slide" data-play="true" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
									
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>GIYG definitely focuses on what people’s true passions are what environment they thrive in. Their message and logic needs to be spread!</p>
											<div class="thumbnail-user-profile">
												<div class="textimonial-img-wrap">
													<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/01/Christina.jpg" class="attachment-full size-full wp-post-image" alt="" >
												</div>
												<span class="source"><span class="ABt_author">Christina Maksoud</span>  <span class="ABt_company">University of Tampa</span></span>
											</div>
										</div>
									</li>
								</ul>
								
							</div>
							<div class="ABt_testimonials_wrapper_static ">
								
								<ul class="ABt_testimonials_slide" data-play="true" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
									
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>My GIYGMap is a unique supplement to my resume that I’ve been able to use with recruiters and interviewers to help communicate what I’m looking for in a career.</p>
											<div class="thumbnail-user-profile">
											<div class="textimonial-img-wrap">
												<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/01/Monica.png" class="attachment-full size-full wp-post-image" alt="">
											</div>
											<span class="source"><span class="ABt_author">Monica Lopez</span>  <span class="ABt_company">University of Tampa</span></span>
											</div>
										</div>
									</li>
								</ul>
								
							</div>
							<div class="ABt_testimonials_wrapper_static ">
								
								<ul class="ABt_testimonials_slide" data-play="true" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
									
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>“Brilliant idea! I have an unusual work history, and GIYG is a clever and powerful way for me to tell my story to potential employers. The team has been super helpful and responsive, and I really hope this catches on and becomes a ‘thing.’</p>
											<div class="thumbnail-user-profile">
												<div class="textimonial-img-wrap">
													<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/01/Ernest.jpg" class="attachment-full size-full wp-post-image" alt="" >
												</div>
												<span class="source"><span class="ABt_author">Ernest Prabhakar</span>  <span class="ABt_company">University of Tampa</span></span>
											</div>
										</div>
									</li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="testimonials-banner" class="tcvpb_section_tc testimonials-banner">
				<div class="tcvpb_section_content">
					<div class="tcvpb_container">
						<div class="tcvpb_column_tc_span12">
							<div class="ABt_testimonials_wrapper_static ">
								
								<ul class="ABt_testimonials_slide" data-play="1" data-fx="crossfade" data-easing="quadratic" data-direction="left" data-duration="1000" data-pauseonhover="immediate" data-timeoutduration="5000">
									
									<li class="testimonials_item">
										<div class="testimonial_small">
											<p>As a recent graduate in a very competitive job market, I need every advantage I can to stand out from the crowd. My GIYGgraph shows my passions and purpose so I find the best company fit.</p>
											<div class="thumbnail-user-profile">
											<div class="textimonial-img-wrap">
												<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/01/Dante-Jean-Felix.png" class="attachment-full size-full wp-post-image" alt="" >
											</div>
											<span class="source"><span class="ABt_author">Dante Jean-Felix</span>  <span class="ABt_company">University of Tampa</span></span>
											</div>
										</div>
									</li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</section>

		</div>
	</section>

<?php get_footer();
