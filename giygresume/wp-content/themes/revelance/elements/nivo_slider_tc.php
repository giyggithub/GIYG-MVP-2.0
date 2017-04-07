<?php

/*********** Shortcode: Nivo Slider ************************************************************/

$tcvpb_elements['nivo_tc'] = array(
	'name' => esc_html__('Nivo Slider', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-slider',
	'category' =>  esc_html__('Media', 'ABdev_revelance'),
	'child' => 'nivo_single_tc',
	'child_button' => esc_html__('New Image', 'ABdev_revelance'),
	'child_title' => esc_html__('Image', 'ABdev_revelance'),
	'attributes' => array(
		'dummy' => array(
			'type' => 'hidden',
		),
		'randomstart' => array(
			'description' 	=> esc_html__('Start on a random slide', 'ABdev_revelance'),
			'default' => 'false',
			'type' => 'select',
			'values' => array(
				'true' => esc_html__( 'Yes', 'ABdev_revelance'),
				'false' => esc_html__( 'No', 'ABdev_revelance'),
			),
			'divider' => 'true',
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'manualadvance' => array(
			'description' 	=> esc_html__('Autoplay', 'ABdev_revelance'),
			'info' 			=> esc_html__('Check if you want the carousel to autoplay', 'ABdev_revelance'),
			'default' => 'false',
			'type' => 'select',
			'values' => array(
				'true' => esc_html__( 'No', 'ABdev_revelance'),
				'false' => esc_html__( 'Yes', 'ABdev_revelance'),
			),
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'autoplay_effect' => array(
			'description' 	=> esc_html__('Autoplay Effect', 'ABdev_revelance'),
			'default' => 'fade',
			'type' => 'select',
			'values' => array(
				'sliceDown' => esc_html__( 'Slice Down', 'ABdev_revelance'),
				'sliceDownLeft' => esc_html__( 'Slice Down Left', 'ABdev_revelance'),
				'sliceUp' => esc_html__( 'Slice Up', 'ABdev_revelance'),
				'sliceUpLeft' => esc_html__( 'Slice Up Left', 'ABdev_revelance'),
				'sliceUpDown' => esc_html__( 'Slice Up Down', 'ABdev_revelance'),
				'sliceUpDownLeft' => esc_html__( 'Slice Up Down Left', 'ABdev_revelance'),
				'fold' => esc_html__( 'Fold', 'ABdev_revelance'),
				'fade' => esc_html__( 'Fade', 'ABdev_revelance'),
				'random' => esc_html__( 'Random', 'ABdev_revelance'),
				'slideInRight' => esc_html__( 'Slide in Right', 'ABdev_revelance'),
				'slideInLeft' => esc_html__( 'Slide in Left', 'ABdev_revelance'),
				'boxRandom' => esc_html__( 'Box Random', 'ABdev_revelance'),
				'boxRain' => esc_html__( 'Box Rain', 'ABdev_revelance'),
				'boxRainReverse' => esc_html__( 'Box Rain Reverse', 'ABdev_revelance'),
				'boxRainGrow' => esc_html__( 'Box Rain Grow', 'ABdev_revelance'),
				'boxRainGrowReverse' => esc_html__( 'Box Rain Grow Reverse', 'ABdev_revelance'),
			),
			'divider' => 'true',
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'slices' => array(
			'description'	=> esc_html__('Slices', 'ABdev_revelance'),
			'info' 			=> esc_html__('For slice animations', 'ABdev_revelance'),
			'default' => '15',
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'boxcols' => array(
			'description'	=> esc_html__('Box Cols', 'ABdev_revelance'),
			'info' 			=> esc_html__('For box animations', 'ABdev_revelance'),
			'default' => '8',
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'boxrows' => array(
			'description'	=> esc_html__('Box Rows', 'ABdev_revelance'),
			'info' 			=> esc_html__('For box animations', 'ABdev_revelance'),
			'default' => '4',
			'divider' => 'true',
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'animation' => array(
			'description'	=> esc_html__('Slide transition speed', 'ABdev_revelance'),
			'info' 			=> esc_html__('Duration in ms. Default: 800 ms', 'ABdev_revelance'),
			'default' => '800',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'duration' => array(
			'description'	=> esc_html__('Duration of the slide', 'ABdev_revelance'),
			'info' 			=> esc_html__('Duration in ms. Default: 3000 ms', 'ABdev_revelance'),
			'default' => '3000',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'startslide' => array(
			'description'	=> esc_html__('Set starting Slide (0 is default', 'ABdev_revelance'),
			'default' => '0',
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'directionnav' => array(
			'description' 	=> esc_html__('Next & Prev navigation', 'ABdev_revelance'),
			'default' => 'false',
			'type' => 'select',
			'values' => array(
				'true' => esc_html__( 'Yes', 'ABdev_revelance'),
				'false' => esc_html__( 'No', 'ABdev_revelance'),
			),
			'tab' => esc_html__('Navigation', 'ABdev_revelance'),
		),
		'prevtext' => array(
			'description' 	=> esc_html__('Previous Text', 'ABdev_revelance'),
			'default' => 'Prev',
			'tab' => esc_html__('Navigation', 'ABdev_revelance'),
		),
		'nexttext' => array(
			'description' 	=> esc_html__('Next Text', 'ABdev_revelance'),
			'default' => 'Next',
			'tab' => esc_html__('Navigation', 'ABdev_revelance'),
		),
		'controlnav' => array(
			'description' 	=> esc_html__('1,2,3... navigation', 'ABdev_revelance'),
			'default' => 'false',
			'type' => 'select',
			'values' => array(
				'true' => esc_html__( 'Yes', 'ABdev_revelance'),
				'false' => esc_html__( 'No', 'ABdev_revelance'),
			),
			'tab' => esc_html__('Navigation', 'ABdev_revelance'),
		),
		'controlnavthumbs' => array(
			'description' 	=> esc_html__('Use thumbnails for Control Nav', 'ABdev_revelance'),
			'default' => 'false',
			'type' => 'select',
			'values' => array(
				'true' => esc_html__( 'Yes', 'ABdev_revelance'),
				'false' => esc_html__( 'No', 'ABdev_revelance'),
			),
			'tab' => esc_html__('Navigation', 'ABdev_revelance'),
		),
		'pauseonhover' => array(
			'description' 	=> esc_html__('Stop animation while hovering', 'ABdev_revelance'),
			'default' => 'true',
			'type' => 'select',
			'values' => array(
				'true' => esc_html__( 'Yes', 'ABdev_revelance'),
				'false' => esc_html__( 'No', 'ABdev_revelance'),
			),
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'class' => array(
			'description' => esc_html__('Class', 'ABdev_revelance'),
			'info' => esc_html__('Additional custom classes for custom styling', 'ABdev_revelance'),
			'tab' => esc_html__('Advanced', 'ABdev_revelance'),
		),
	),
);


function tcvpb_nivo_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('nivo_tc'), $attributes));

	$classes[] = 'tcvpb-nivo-slider';
	$classes[] = $class;
	$classes_out = implode(' ', $classes);

	return '<div id="tcvpb-nivo-slider" class="'.$classes_out.'">'.  do_shortcode($content)  . '</div>

	<script>
		jQuery(document).ready (function() {
			jQuery("#tcvpb-nivo-slider").nivoSlider({
		        effect: "'.$autoplay_effect.'",
				slices: '.$slices.',
				boxCols: '.$boxcols.',
				boxRows: '.$boxrows.',
				animSpeed: '.$animation.',
				pauseTime: '.$duration.',
				startSlide: '.$startslide.',
				directionNav: '.$directionnav.',
				controlNav: '.$controlnav.',
				controlNavThumbs: '.$controlnavthumbs.',
				pauseOnHover: '.$pauseonhover.',
				manualAdvance: '.$manualadvance.',
				prevText: "'.$prevtext.'",
    			nextText: "'.$nexttext.'",
				randomStart: '.$randomstart.',
		    });
		});
	</script>
	';

}

$tcvpb_elements['nivo_single_tc'] = array(
	'name' => esc_html__('Nivo Single Slide', 'ABdev_revelance' ),
	'hidden' => true,
	'attributes' => array(
		'url' => array(
			'type' => 'image',
			'description' => esc_html__('Select Image', 'ABdev_revelance'),
		),
		'link' => array(
			'description' => esc_html__('Link', 'ABdev_revelance'),
			'default' => '',
		),
		'alt' => array(
			'description' => esc_html__('Image Alt Text', 'ABdev_revelance'),
		),
		'caption' => array(
			'description' => esc_html__('Image Caption Text', 'ABdev_revelance'),
		),
	),
	'description' => esc_html__('Single image section', 'ABdev_revelance' )
);
function tcvpb_nivo_single_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('nivo_single_tc'), $attributes));
	static $image_no;
	$image_no++;

	$display_image_out = ($image_no != 1) ? 'style="display:none;"' : '';

	$out = ( ($link!='')?'<a href="'.esc_url($link).'">':'').'<img src="'.esc_url($url).'" data-thumb="'.esc_url($url).'" alt="'.esc_attr($alt).'" '.$display_image_out.'>'.(($link!='')?'</a>':'');

	$return = ' '.$out.'';

	return $return;
}