<header id="abdev_main_header" class="clearfix">
	<div class="container">
		<div id="logo">
			<a href="https://giyg.me">
				<?php
				$header_logo = get_theme_mod( 'header_logo', '' );
				$header_retina_logo = get_theme_mod( 'header_retina_logo', '' );
				$header_retina_logo_width = get_theme_mod( 'header_retina_logo_width', '' );
				$header_retina_logo_height = get_theme_mod( 'header_retina_logo_height', '' );
				$sticky_header_retina_logo = get_theme_mod( 'sticky_header_retina_logo', '' );
				$sticky_header_retina_logo_width = get_theme_mod( 'sticky_header_retina_logo_width', '' );
				$sticky_header_retina_logo_height = get_theme_mod( 'sticky_header_retina_logo_height', '' );
				if ( $header_logo != '' ) : ?>
					<img id="main_logo" style="display:none;" src="<?php echo get_theme_mod( 'header_logo', '' );?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php $sticky_header_logo = get_theme_mod( 'sticky_header_logo', '' );
					if ( $sticky_header_logo != '' ) : ?>
						<img id="sticky_logo" style="display:none;" src="<?php echo get_theme_mod( 'sticky_header_logo', '' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php endif; ?>
					<?php if ( $header_retina_logo != '' &&  $header_retina_logo_width != '' && $header_retina_logo_height != '' ) : ?>
						<?php $pixels = '';
						if ( is_numeric( $header_retina_logo_width ) && is_numeric( $header_retina_logo_height ) ) :
							$pixels = 'px';
						endif; ?>
						<img id="retina_logo" src="<?php echo $header_retina_logo; ?>" alt="<?php bloginfo( 'name' ); ?>" style="display:none; width:<?php echo $header_retina_logo_width . $pixels; ?>;max-height:<?php echo $header_retina_logo_height . $pixels; ?>; height: auto !important;">
					<?php endif; ?>
					<?php if ( $sticky_header_retina_logo != '' &&  $sticky_header_retina_logo_width != '' && $sticky_header_retina_logo_height != '' ) : ?>
						<?php $pixels = '';
						if ( is_numeric( $sticky_header_retina_logo_width ) && is_numeric( $sticky_header_retina_logo_height ) ) :
							$pixels = 'px';
						endif; ?>
						<img id="sticky_retina_logo" src="<?php echo $sticky_header_retina_logo; ?>" alt="<?php bloginfo( 'name' );?>" style="display:none; width:<?php echo $sticky_header_retina_logo_width . $pixels; ?>;max-height :<?php echo $sticky_header_retina_logo_height . $pixels; ?>; height: auto !important;">
					<?php endif; ?>
				<?php else : ?>
					<h1 id="main_logo_textual"><?php bloginfo( 'name' ); ?></h1>
					<?php if ( get_bloginfo( 'description' ) != '' ) : ?>
						<h2 id="main_logo_tagline"><?php bloginfo( 'description' ); ?></h2>
					<?php endif; ?>
				<?php endif; ?>
			</a>
		</div>
		<nav>
		<?php
			echo ( get_theme_mod( 'facebook', '' ) != '' ) ? '<a class="menu_social menu_social_facebook" href="' . get_theme_mod( 'facebook','' ) . '" target="_blank" title="' . __( 'Follow us on Facebook', 'the-creator-vpb' ) . '"><i class="ci_icon-facebook"></i></a>' : '';
			echo ( get_theme_mod( 'twitter', '' ) != '' ) ? '<a class="menu_social menu_social_twitter" href="' . get_theme_mod( 'twitter', '' ) . '" target="_blank" title="' . __( 'Follow us on Twitter', 'the-creator-vpb' ) . '"><i class="ci_icon-twitter"></i></a>' : '';
			echo ( get_theme_mod( 'googleplus', '' ) != '' ) ? '<a class="menu_social menu_social_googleplus" href="' . get_theme_mod( 'googleplus', '' ) . '" target="_blank" title="' . __( 'Follow us on Google+', 'the-creator-vpb' ) . '"><i class="ci_icon-googleplus"></i></a>' : '';
			echo ( get_theme_mod( 'linkedin', '' ) != '' ) ? '<a class="menu_social menu_social_linkedin" href="' . get_theme_mod( 'linkedin', '' ) . '" target="_blank" title="' . __( 'Follow us on Linkedin', 'the-creator-vpb' ) . '"><i class="ci_icon-linkedin"></i></a>' : '';
			echo ( get_theme_mod( 'pinterest', '' ) != '' ) ? '<a class="menu_social menu_social_pinterest" href="' . get_theme_mod( 'pinterest', '' ) . '" target="_blank" title="' .__( 'Follow us on Pinterest', 'the-creator-vpb' ) . '"><i class="ci_icon-pinterest"></i></a>' : '';
			echo ( get_theme_mod( 'github', '' ) != '' ) ? '<a class="menu_social menu_social_github" href="' . get_theme_mod( 'github','' ) . '" target="_blank" title="' . __( 'Follow us on Github', 'the-creator-vpb' ) . '"><i class="ci_icon-github"></i></a>' : '';
			echo ( get_theme_mod( 'feed', '' ) != '' ) ? '<a class="menu_social menu_social_feed" href="' . get_theme_mod( 'feed', '' ) . '" target="_blank" title="' . __( 'Our RSS feed', 'the-creator-vpb' ) . '"><i class="ci_icon-rss"></i></a>' : '';
			echo ( get_theme_mod( 'behance', '' ) != '' ) ? '<a class="menu_social menu_social_behance" href="' . get_theme_mod( 'behance', '' ) . '" target="_blank" title="' . __( 'Our Behance Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-behance"></i></a>' : '';
			echo ( get_theme_mod( 'dribbble', '' ) != '' ) ? '<a class="menu_social menu_social_dribbble" href="' . get_theme_mod( 'dribbble', '' ) . '" target="_blank" title="' . __( 'Our Dribbble Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-dribbble"></i></a>' : '';
			echo ( get_theme_mod( 'dropbox', '' ) != '' ) ? '<a class="menu_social menu_social_dropbox" href="' . get_theme_mod( 'dropbox', '' ) . '" target="_blank" title="' . __( 'Our Dropbox Files', 'the-creator-vpb' ) . '"><i class="ci_icon-dropbox"></i></a>' : '';
			echo ( get_theme_mod( 'mail', '' ) != '' ) ? '<a class="menu_social menu_social_emailalt" href="mailto:' . get_theme_mod( 'mail', '' ) . '" target="_blank" title="' . __( 'Send Us Email', 'the-creator-vpb' ) . '"><i class="ci_icon-mail"></i></a>' : '';
			echo ( get_theme_mod( 'flickr', '' ) != '' ) ? '<a class="menu_social menu_social_flickr" href="' . get_theme_mod( 'flickr', '' ) . '" target="_blank" title="' . __( 'Our Flickr Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-flickr"></i></a>' : '';
			echo ( get_theme_mod( 'instagram', '' ) != '' ) ? '<a class="menu_social menu_social_instagram" href="' . get_theme_mod( 'instagram', '' ) . '" target="_blank" title="' . __( 'Our Instagram Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-instagram"></i></a>' : '';
			echo ( get_theme_mod( 'lastfm', '' ) != '') ? '<a class="menu_social menu_social_lastfm" href="' . get_theme_mod( 'lastfm', '' ) . '" target="_blank" title="' . __( 'Our last.fm Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-lastfm"></i></a>' : '';
			echo ( get_theme_mod( 'picasa', '' ) != '' ) ? '<a class="menu_social menu_social_picasa" href="' . get_theme_mod( 'picasa', '' ) . '" target="_blank" title="' . __( 'Our Picasa Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-picasa"></i></a>' : '';
			echo ( get_theme_mod( 'skype', '' ) != '' ) ? '<a class="menu_social menu_social_skype" href="' . get_theme_mod( 'skype', '' ) . '" target="_blank" title="' .__( 'Our Skype Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-skype"></i></a>' : '';
			echo ( get_theme_mod( 'stumbleupon', '' ) != '' ) ? '<a class="menu_social menu_social_stumbleupon" href="' . get_theme_mod( 'stumbleupon', '' ) . '" target="_blank" title="' . __( 'Our StumbleUpon Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-stumbleupon"></i></a>' : '';
			echo ( get_theme_mod( 'vimeo', '' ) != '') ? '<a class="menu_social menu_social_vimeo" href="' . get_theme_mod( 'vimeo', '' ) . '" target="_blank" title="' . __( 'Our Vimeo Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-vimeo"></i></a>' : '';
			echo ( get_theme_mod( 'youtube', '' ) != '' ) ? '<a class="menu_social menu_social_youtube" href="' . get_theme_mod( 'youtube', '' ) . '" target="_blank" title="' . __( 'Our YouTube Profile', 'the-creator-vpb' ) . '"><i class="ci_icon-video"></i></a>' : '';
			
			if ( is_user_logged_in() ) {

				$current_userid = get_current_user_id();
				$all_meta_for_user = get_user_meta( $current_userid );
				$user_post_count = revelance_child_theme_user_post_count();
				$cuser_name = ucfirst( $all_meta_for_user['first_name'][0] ) .' '. ucfirst( $all_meta_for_user['last_name'][0] );
		?>
			 
			<div class="after-login">
				<div class="dropdown login-dropdown">
					<div class="prof_image">
					    <?php echo get_avatar( $current_userid, 10 ); ?>
					</div>
					<button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<?php echo $cuser_name;?>
					    <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="<?php echo get_site_url(); ?>/my-account">My Account</a></li>
					    <li class="logout-link"><a href="<?php echo get_site_url(); ?>/logout">Logout</a></li>
					</ul>
				</div>
				<?php if ( is_page( 'Preview Page' ) ) { ?>
				<a href="<?php echo get_site_url(); ?>/my-account/my-giyg/" class="btn btn-sm btn-green pull-right preview_mygiyg" title="My Giyg">My GIYGgraphs</a>

				<a href="<?php echo get_site_url(); ?>/pricing" class="btn btn-sm btn-green pull-right upgrade " title="Upgrade">Upgrade</a>
				<?php } ?>
			</div>
			<?php
			} else {
				wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_id' => 'main_menu', 'menu_class' => '', 'walker'=> new revelance_walker_nav_menu, 'fallback_cb' => false ) );
			}
			?>
		</nav>
		<div id="ABdev_menu_toggle"><i class="ci_icon-list"></i></div>
	</div>
</header>
