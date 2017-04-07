<?php
define('THEME_NAME', 'Revelance');
define('THEME_VERSION', '2.0.0');
define('TEMPPATH', get_template_directory_uri());
define('IMAGES', TEMPPATH . "/images");


/********* Theme Customizer Options ***********/
require_once 'inc/customizer/customizer.php';


/********* Creator Support ***********/
function tcvpb_support() {
    add_theme_support( 'the-creator-vpb' );
}
add_action( 'after_setup_theme', 'tcvpb_support');

function tcvpb_elements() {
	global $tcvpb_elements;
	$files = scandir(get_stylesheet_directory() . '/elements');

	foreach($files as $file) {
		if(is_file(get_stylesheet_directory() . '/elements/'.$file)){
	  		include_once (get_stylesheet_directory() . '/elements/'.$file);
		}
	}
}

if( in_array('the-creator-vpb/the-creator-vpb.php', get_option('active_plugins')) ){
	add_action( 'init', 'tcvpb_elements');
}


/********* AB Shortcodes Plugin - Additional Shortcodes ***********/
add_action('after_setup_theme', 'ABdev_revelance_theme_setup');

if ( ! function_exists( 'ABdev_revelance_theme_setup' ) ){
	function ABdev_revelance_theme_setup(){


		add_theme_support( 'post-thumbnails' );
		add_theme_support('automatic-feed-links');
		add_theme_support( 'title-tag' );

		require_once 'inc/activate_plugins.php';

		if( !isset($content_width) ){
			$content_width = 1170;
		}

		load_theme_textdomain('ABdev_revelance', get_template_directory() . '/languages');

		/********* Register sidebars ***********/
		require_once 'inc/sidebars.php';

		/*****Widgets!******/
		add_filter('widget_text', 'do_shortcode');
		require_once 'inc/widgets/flickr.php';

		/*****Breadcrumbs!******/
		require_once 'inc/breadcrumbs.php';

		/********* Additional fields in page and post editor ***********/
		require_once 'inc/admin/page_additional_fields.php';
		require_once 'inc/admin/post_additional_fields.php';

		/********* Additional fields in categories ***********/
		require_once 'inc/admin/categories_additional_fields.php';

		add_action( 'wp_enqueue_scripts', 'ABdev_revelance_scripts');
		add_action('init', 'ABdev_revelance_register_my_menus');
		add_filter( 'the_content_more_link', 'ABdev_revelance_remove_more_link_scroll_wrap');


		require_once 'inc/menu_walker.php';
		if ( ! function_exists( 'ABdev_revelance_register_my_menus' ) ){
			function ABdev_revelance_register_my_menus(){
				register_nav_menus(array(
					'header-menu'  => __('Header Menu', 'ABdev_revelance'),
				));
			}
		}
	}
}

/********* Menu  ***********/

if ( ! function_exists( 'ABdev_revelance_scripts' ) ){
	function ABdev_revelance_scripts() {

		$icons_deps = '';
		if( in_array('dnd-shortcodes/dnd-shortcodes.php', get_option('active_plugins')) ){
			if(!get_theme_mod('disable_icon_font', false)){
				wp_enqueue_style('entypo_icons', TEMPPATH.'/css/entypo/style.css', $icons_deps, THEME_VERSION);
			}
		}

		wp_enqueue_style('font_css','//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
		wp_enqueue_style('ABdev_core_icons', TEMPPATH.'/css/core-icons/core_style.css', $icons_deps, THEME_VERSION);
		wp_enqueue_style('scripts_css', TEMPPATH.'/css/scripts.css', array(), THEME_VERSION);
		if (is_singular( 'portfolio' )) {
			wp_enqueue_style('nivo', TEMPPATH.'/css/nivo-slider.css', array(), THEME_VERSION);
		}

		/********* The Creator CSS  ***********/
		if( in_array('the-creator-vpb/the-creator-vpb.php', get_option('active_plugins')) ){
			wp_enqueue_style('tcvpb_css', TEMPPATH.'/css/the-creator.css', array('wp-mediaelement'), THEME_VERSION);
		}

		wp_enqueue_style('main_css', get_stylesheet_uri(), array('font_css','ABdev_core_icons','scripts_css'));


		$custom_css = $responsive_custom_css = '';
		include 'inc/dynamic_css.php'; //styles from options - appends styles to $custom_css variable

		if(!get_theme_mod('disable_responsiveness', false)){
			wp_enqueue_style('responsive_css', TEMPPATH.'/css/responsive.css', array('main_css'));
			wp_add_inline_style('responsive_css', $responsive_custom_css);
		}

		$custom_css .= get_theme_mod('custom_css','');
		wp_add_inline_style('main_css', $custom_css);


		/********* The Creator JS  ***********/
		if( in_array('the-creator-vpb/the-creator-vpb.php', get_option('active_plugins')) ){
			wp_enqueue_script( 'tcvpb_charts', TEMPPATH.'/js/chart.js', array( 'jquery' ),'', true );
			wp_enqueue_script( 'tcvpb_init', TEMPPATH.'/js/init.js', array( 'jquery', 'jquery-ui-accordion', 'jquery-effects-slide', 'wp-mediaelement' ),'', true );
			
			$options = get_option( 'tcvpb_settings' );
			$tcvpb_tipsy_opacity = (isset($options['tcvpb_tipsy_opacity'])) ? $options['tcvpb_tipsy_opacity'] : '0.8';
			$tcvpb_custom_map_style = (isset($options['tcvpb_custom_map_style'])) ? $options['tcvpb_custom_map_style'] : '';
			wp_localize_script( 'revelance_custom', 'tcvpb_options', array(
				'tcvpb_tipsy_opacity' => $tcvpb_tipsy_opacity,
				'tcvpb_custom_map_style' => preg_replace('!\s+!', ' ', str_replace(array("\n","\r","\t"), '', $tcvpb_custom_map_style)),
			));
		}

		if (is_singular( 'portfolio' )) {
			wp_enqueue_script( 'nivo_slider', TEMPPATH.'/js/jquery.nivo.slider.js', array( 'jquery' ), THEME_VERSION, true );
			wp_enqueue_script( 'nivo_depend', TEMPPATH.'/js/nivo.dependency.js', array( 'nivo_slider' ), '', true );
		}

		wp_enqueue_script( 'scripts', TEMPPATH.'/js/scripts.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'revelance_custom', TEMPPATH.'/js/custom.js', array( 'scripts', 'wp-mediaelement', 'jquery-ui-accordion' ),'', true );

	}
}

if ( ! function_exists( 'ABdev_revelance_remove_more_link_scroll_wrap' ) ){
	function ABdev_revelance_remove_more_link_scroll_wrap( $link ) {
		$link = preg_replace( '|#more-[0-9]+|', '', $link );
	    return '<div class="post-readmore">'.$link.'</div>';
	}
}

if ( ! function_exists( 'ABdev_revelance_search_content_highlight' ) ){
	function ABdev_revelance_search_content_highlight() {
		$content = ABdev_revelance_search_res_excerpt(strip_tags(do_shortcode(get_the_content())),get_search_query());
		$keys = implode('|', explode(' ', get_search_query()));
		$content = preg_replace('/(' . $keys .')/iu', '<span class="search-highlight">\0</span>', $content);
		echo $content;
	}
}

if ( ! function_exists( 'ABdev_revelance_search_title_highlight' ) ){
	function ABdev_revelance_search_title_highlight() {
		$title = get_the_title();
		$keys = implode('|', explode(' ', get_search_query()));
		$title = preg_replace('/(' . $keys .')/iu', '<span class="search-highlight">\0</span>', $title);
		echo $title;
	}
}

if ( ! function_exists( 'ABdev_revelance_search_res_excerpt' ) ){
	function ABdev_revelance_search_res_excerpt($text, $phrase, $radius = 200, $ending = "...") {
		$phraseLen = strlen($phrase);
		if ($radius < $phraseLen) {
			$radius = $phraseLen;
		 }
		$phrases = explode (' ',$phrase);
		foreach ($phrases as $phrase) {
			$pos = strpos(strtolower($text), strtolower($phrase));
			if ($pos > -1) {
				break;
			}
		}
		$startPos = 0;
		if ($pos > $radius) {
			$startPos = $pos - $radius;
		}
		$textLen = strlen($text);
		$endPos = $pos + $phraseLen + $radius;
		if ($endPos >= $textLen) {
			$endPos = $textLen;
		}
		$excerpt = substr($text, $startPos, $endPos - $startPos);
		if ($startPos != 0) {
			$excerpt = substr_replace($excerpt, $ending, 0, $phraseLen);
		}
		if ($endPos != $textLen) {
			$excerpt = substr_replace($excerpt, $ending, -$phraseLen);
		}
		return $excerpt;
	}
}

if ( ! function_exists( 'ABdev_revelance_name_to_class' ) ){
	function ABdev_revelance_name_to_class($name){
		$class = str_replace(array(' ',',','.','"',"'",'/',"\\",'+','=',')','(','*','&','^','%','$','#','@','!','~','`','<','>','?','[',']','{','}','|',':',),'',$name);
		return $class;
	}
}

if ( ! function_exists( 'get_theme_mod_not_empty' ) ){
	function get_theme_mod_not_empty($option,$default){
		$return = get_theme_mod($option, $default);
		if($return==''){
			$return = $default;
		}
		return $return;
	}
}
