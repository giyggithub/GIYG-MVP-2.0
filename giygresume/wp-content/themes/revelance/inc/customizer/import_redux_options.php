<?php 

// redux framework legacy - import options in theme customizer
$revelance_options = get_option('revelance_options');
if(is_array($revelance_options)){
	$options_direct = array('disable_responsiveness','hide_comments','enable_preloader','custom_css','analytics_code','facebook','twitter','googleplus','linkedin','pinterest','github','feed','behance','dribbble','dropbox','mail','flickr','instagram','lastfm','picasa','skype','stumbleupon','vimeo','youtube','disable_icon_font','main_color','dark_scheme','content_after_category','content_after_single_post','hide_back_to_top','punchline','copyright','presets');
	foreach ($options_direct as $option_direct) {
		set_theme_mod( $option_direct, $revelance_options[$option_direct] );
	}
	$options_url = array('favicon','header_logo','inversed_header_logo');
	foreach ($options_url as $option_url) {
		set_theme_mod( $option_url, $revelance_options[$option_url]['url'] );
	}
	delete_option( 'revelance_options' );
}