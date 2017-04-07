<?php

/*********** Shortcode: Content Section ************************************************************/

$tcvpb_elements['section_tc'] = array(
	'name' => __('Section', 'the-creator-vpb'),
	'hide_in_tcvpb' => true,
	'nesting' => '1',
	'type' => 'core',
	'child' => 'column_tc',
	'child_title' => __('Section Column', 'the-creator-vpb'),
	'child_button' => __('Add Column', 'the-creator-vpb'),
	'attributes' => array(
		'section_title' => array(
			'description' => __('Section Title', 'the-creator-vpb'),
		),
		'title_icon' => array(
			'type' => 'icon',
			'description' => __('Title Icon', 'the-creator-vpb'),
		),
		'section_intro' => array(
			'description' => __('Intro Text', 'the-creator-vpb'),
		),
		'section_outro' => array(
			'description' => __('Outro Text', 'the-creator-vpb'),
		),
		'padding' => array(
			'description' => __('Enter values in px', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'padding',
		),
		'border_radius' => array(
			'description' => __('Border Radius', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
		),
		'border_style' => array(
			'description' => __('Border Style', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'select',
			'default' => '',
			'values' => array(
				'' => esc_html__('No Border', 'the-creator-vpb'),
				'solid' => esc_html__('Solid', 'the-creator-vpb'),
				'dotted' => esc_html__('Dotted', 'the-creator-vpb'),
				'dashed' => esc_html__('Dashed', 'the-creator-vpb'),
				'double' => esc_html__('Double', 'the-creator-vpb'),
				'groove' => esc_html__('Groove', 'the-creator-vpb'),
				'ridge' => esc_html__('Ridge', 'the-creator-vpb'),
				'inset' => esc_html__('Inset', 'the-creator-vpb'),
				'outset' => esc_html__('Outset', 'the-creator-vpb'),
			),
		),
		'border_color' => array(
			'description' => __('Border Color', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'color',
		),
		'centered' => array(
			'description' => __('Centered', 'the-creator-vpb'),
			'type' => 'checkbox',
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'default' => '0',
		),
		'right_aligned' => array(
			'description' => __('Right Aligned', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'checkbox',
			'default' => '0',
		),
		'fullwidth' => array(
			'description' => __('Fullwidth Content', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'checkbox',
			'default' => '0',
		),
		'no_column_margin' => array(
			'description' => __('No Margin on Columns', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'checkbox',
			'default' => '0',
		),
		'pattern_overlay' => array(
			'description' => esc_html__('Pattern Overlay', 'the-creator-vpb'),
			'default' => '',
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'select',
			'values' => array(
				'' => esc_html__('None', 'the-creator-vpb'),
				'pattern_overlayed' => esc_html__('Solid', 'the-creator-vpb'),
				'pattern_overlayed_dotted' => esc_html__('Dotted', 'the-creator-vpb'),
				'pattern_overlayed_dotted_2' => esc_html__('Dotted White', 'the-creator-vpb'),
				'pattern_overlayed_lined' => esc_html__('Vertical Lines', 'the-creator-vpb'),
				'pattern_overlayed_lined_h' => esc_html__('Horizontal Lines', 'the-creator-vpb'),
			),
		),
		'equalize_five' => array(
			'description' => __('5 Columns Equalize', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'checkbox',
			'default' => '0',
			'info' => __('Check this if you want 5 columns to be equal width (out of grid, use only 2/12 and 3/12 columns)', 'the-creator-vpb'),
		),
		'bg_color' => array(
			'description' => __('Background Color', 'the-creator-vpb'),
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'type' => 'coloralpha',
		),
		'bg_image' => array(
			'type' => 'image',
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'description' => __('Background Image', 'the-creator-vpb'),
		),
		'bg_image_repeat' => array(
			'type' => 'select',
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'description' => __('Background Image Repeat', 'the-creator-vpb'),
			'default' => '',
			'values' => array(
				'' => esc_html__('Not defined', 'the-creator-vpb'),
		        'no-repeat'  => esc_attr__('No Repeat', 'the-creator-vpb'),
		        'repeat'     => esc_attr__('Tile', 'the-creator-vpb'),
		        'repeat-x'   => esc_attr__('Tile Horizontally', 'the-creator-vpb'),
		        'repeat-y'   => esc_attr__('Tile Vertically', 'the-creator-vpb'),
			),
		),
		'bg_image_size' => array(
			'type' => 'select',
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'description' => __('Background Image Size', 'the-creator-vpb'),
			'default' => '',
			'values' => array(
				'' => esc_html__('Not defined', 'the-creator-vpb'),
		        'cover'  => esc_attr__('Cover', 'the-creator-vpb'),
		        'contain' => esc_attr__('Contain', 'the-creator-vpb'),
			),
		),
		'bg_image_position' => array(
			'type' => 'select',
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'description' => __('Background Image Position', 'the-creator-vpb'),
			'default' => '',
			'values' => array(
				'' => esc_html__('Not defined', 'the-creator-vpb'),
		        'left top'       => esc_attr__( 'Left Top', 'the-creator-vpb' ),
		        'left center'     => esc_attr__( 'Left Center', 'the-creator-vpb' ),
		        'left bottom'      => esc_attr__( 'Left Bottom', 'the-creator-vpb' ),
		        'center top'       => esc_attr__( 'Center Top', 'the-creator-vpb' ),
		        'center center'     => esc_attr__( 'Center Center', 'the-creator-vpb' ),
		        'center bottom'      => esc_attr__( 'Center Bottom', 'the-creator-vpb' ),
		        'right top'       => esc_attr__( 'Right Top', 'the-creator-vpb' ),
		        'right center'     => esc_attr__( 'Right Center', 'the-creator-vpb' ),
		        'right bottom'      => esc_attr__( 'Right Bottom', 'the-creator-vpb' ),
			),
		),
		'parallax' => array(
			'description' => __('Parallax Amount', 'the-creator-vpb'),
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'info' => __('Amout of parallax effect on background image, 0.1 means 10% of scroll amount, 2 means twice of scroll amount, leave blank for no parallax', 'the-creator-vpb'),
		),
		'video_bg' => array(
			'description' => __('Video Background', 'the-creator-vpb'),
			'type' => 'checkbox',
			'default' => '0',
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'info' => __('If checked video background will be enabled. Video files should have same name as Background Image, and same path, only different extensions (mp4,webm,ogv files required). You can use Miro Converter to convert files in required formats.', 'the-creator-vpb'),
		),
		'inversed_text' => array(
			'description' => __('Inverted Text Color', 'the-creator-vpb'),
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'type' => 'checkbox',
			'default' => '0',
		),
		'section_id' => array(
			'description' => __('Section ID', 'the-creator-vpb'),
			'tab' => esc_html__('Advanced', 'the-creator-vpb'),
			'info' => __('ID can be used for menu navigation, e.g. #about-us', 'the-creator-vpb'),
		),
		'class' => array(
			'description' => __('Class', 'the-creator-vpb'),
			'tab' => esc_html__('Advanced', 'the-creator-vpb'),
			'info' => __('Additional custom classes for custom styling', 'the-creator-vpb'),
		),
	),
	'content' => array(
		'default' => 'Columns here',
		'description' => __('Content', 'the-creator-vpb'),
	),
	'description' => __('Section With Columns', 'the-creator-vpb'),
	'info' => __("Sum of all column's span attributes must be 12", 'the-creator-vpb' )
);
function tcvpb_section_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('section_tc'), $attributes));
	
	$additional_classes[] = 'tcvpb_section_tc';
	$additional_classes[] = $class;
	$additional_classes[] = ($centered==1) ? 'tcvpb-centered' : '';
	$additional_classes[] = ($right_aligned==1) ? 'right_aligned' : '';
	$additional_classes[] = ($inversed_text==1) ? 'tcvpb-inversed_text' : '';
	$additional_classes[] = ($parallax!='') ? 'tcvpb-parallax' : '';
	$additional_classes[] = ($video_bg==1) ? 'tcvpb-video-bg' : '';
	$additional_classes[] = ($fullwidth==1) ? 'section_body_fullwidth' : '';
	$additional_classes[] = ($no_column_margin==1) ? 'section_no_column_margin' : '';
	$additional_classes[] = ($equalize_five==1) ? 'section_equalize_5' : '';
	$additional_classes[] = ($section_title!='' || $section_intro!='') ? 'section_with_header' : '';
	$additional_classes[] = $pattern_overlay;
	$additional_classes = array_filter($additional_classes);
	$classes_out = implode(' ', $additional_classes);

	$bg_image_output = ($bg_image!='')?' data-background_image="'.$bg_image.'"' : '';
	$parallax_output = ($parallax!='')?' data-parallax="'.$parallax.'"' : '';

	$style_out = $padding;
	$style_out .= ($bg_color!='') ? 'background-color:'.$bg_color.';' : '';
	$style_out .= ($bg_image!='') ? 'background-image:url('.$bg_image.');' : '';
	$style_out .= ($border_radius!='') ? 'border-radius:'.$border_radius.';' : '';
	$style_out .= ($border_style!='') ? 'border-style:'.$border_style.';' : '';
	$style_out .= ($border_color!='') ? 'border-color:'.$border_color.';' : '';
	$style_out .= ($bg_image_repeat!='') ? 'background-repeat:'.$bg_image_repeat.';' : '';
	$style_out .= ($bg_image_size!='') ? 'background-size:'.$bg_image_size.';' : '';
	$style_out .= ($bg_image_position!='') ? 'background-position:'.$bg_image_position.';' : '';

	$title_icon_out = ($title_icon!='') ? '<div class="tcvpb_section_header_icon"><i class="'.$title_icon.'"></i></div>' : '';
	$section_title = ($section_title!='') ? '<h3>'.$section_title.'</h3>' : '';
	$section_id = ($section_id!='') ? ' id="'.esc_attr($section_id).'"' : '';
	$section_intro = ($section_intro!='') ? '<p>'.$section_intro.'</p>' : '';
	$section_header = ($section_title!='' || $section_intro!='') ? '<header><div class="tcvpb_container">'.$section_title.$title_icon_out.$section_intro.'</div></header>' : '';
	$section_footer = ($section_outro!='') ? '<footer><div class="tcvpb_container">'.$section_outro.'</div></footer>' : '';

	$video_pi = pathinfo($bg_image);
	$video_no_ext_path = dirname($bg_image).'/'.$video_pi['filename'];
	$video_out=($video_bg==1) ? '
		<video style="position:absolute;top:0;left:0;min-height:100%;min-width:100%;z-index:0;" poster="'.$bg_image.'" loop="1" autoplay="1" preload="metadata" controls="controls">
			<source type="video/mp4" src="'.esc_url($video_no_ext_path).'.mp4" />
			<source type="video/webm" src="'.esc_url($video_no_ext_path).'.webm" />
			<source type="video/ogg" src="'.esc_url($video_no_ext_path).'.ogv" />
		</video>
	' : '';


	return '<section'.$section_id.' class="'.$classes_out.'"' . $bg_image_output . $parallax_output . (($style_out!='') ? ' style="'.$style_out.'"' : '') . '>
		'.$section_header.'
		<div class="tcvpb_section_content"><div class="tcvpb_container">'.do_shortcode($content).'</div></div>
		'.$section_footer.'
		'.$video_out.'
	</section>';
}



/*********** Shortcode: Content Column ************************************************************/
$tcvpb_elements['column_tc'] = array(
	'name' => __('Column', 'the-creator-vpb'),
	'nesting' => '1',
	'type' => 'core',
	'hidden' => '1',
	'hide_in_tcvpb' => true,
	'attributes' => array(
		'span' => array(
			'default' => '1',
			'description' => __('Span 1-12 Columns', 'the-creator-vpb'),
		),
		'centered' => array(
			'description' => __('Centered', 'the-creator-vpb'),
			'type' => 'checkbox',
			'default' => '0',
		),
		'right_aligned' => array(
			'description' => __('Right Aligned', 'the-creator-vpb'),
			'type' => 'checkbox',
			'default' => '0',
		),
		'padding' => array(
			'description' => __('Enter values in px', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'padding',
		),
		'border_radius' => array(
			'description' => __('Border Radius', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
		),
		'border_style' => array(
			'description' => __('Border Style', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'select',
			'default' => '',
			'values' => array(
				'' => esc_html__('No Border', 'the-creator-vpb'),
				'solid' => esc_html__('Solid', 'the-creator-vpb'),
				'dotted' => esc_html__('Dotted', 'the-creator-vpb'),
				'dashed' => esc_html__('Dashed', 'the-creator-vpb'),
				'double' => esc_html__('Double', 'the-creator-vpb'),
				'groove' => esc_html__('Groove', 'the-creator-vpb'),
				'ridge' => esc_html__('Ridge', 'the-creator-vpb'),
				'inset' => esc_html__('Inset', 'the-creator-vpb'),
				'outset' => esc_html__('Outset', 'the-creator-vpb'),
			),
		),
		'border_color' => array(
			'description' => __('Border Color', 'the-creator-vpb'),
			'tab' => esc_html__('Customize', 'the-creator-vpb'),
			'type' => 'color',
		),
		'bg_color' => array(
			'description' => __('Background Color', 'the-creator-vpb'),
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'type' => 'coloralpha',
		),
		'bg_image' => array(
			'type' => 'image',
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'description' => __('Background Image', 'the-creator-vpb'),
		),
		'bg_image_repeat' => array(
			'type' => 'select',
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'description' => __('Background Image Repeat', 'the-creator-vpb'),
			'default' => '',
			'values' => array(
				'' => esc_html__('Not defined', 'the-creator-vpb'),
		        'no-repeat'  => esc_attr__('No Repeat', 'the-creator-vpb'),
		        'repeat'     => esc_attr__('Tile', 'the-creator-vpb'),
		        'repeat-x'   => esc_attr__('Tile Horizontally', 'the-creator-vpb'),
		        'repeat-y'   => esc_attr__('Tile Vertically', 'the-creator-vpb'),
			),
		),
		'bg_image_size' => array(
			'type' => 'select',
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'description' => __('Background Image Size', 'the-creator-vpb'),
			'default' => '',
			'values' => array(
				'' => esc_html__('Not defined', 'the-creator-vpb'),
		        'cover'  => esc_attr__('Cover', 'the-creator-vpb'),
		        'contain' => esc_attr__('Contain', 'the-creator-vpb'),
			),
		),
		'bg_image_position' => array(
			'type' => 'select',
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'description' => __('Background Image Position', 'the-creator-vpb'),
			'default' => '',
			'values' => array(
				'' => esc_html__('Not defined', 'the-creator-vpb'),
		        'left top'       => esc_attr__( 'Left Top', 'the-creator-vpb' ),
		        'left center'     => esc_attr__( 'Left Center', 'the-creator-vpb' ),
		        'left bottom'      => esc_attr__( 'Left Bottom', 'the-creator-vpb' ),
		        'center top'       => esc_attr__( 'Center Top', 'the-creator-vpb' ),
		        'center center'     => esc_attr__( 'Center Center', 'the-creator-vpb' ),
		        'center bottom'      => esc_attr__( 'Center Bottom', 'the-creator-vpb' ),
		        'right top'       => esc_attr__( 'Right Top', 'the-creator-vpb' ),
		        'right center'     => esc_attr__( 'Right Center', 'the-creator-vpb' ),
		        'right bottom'      => esc_attr__( 'Right Bottom', 'the-creator-vpb' ),
			),
		),
		'inversed_text' => array(
			'description' => __('Inverted Text Color', 'the-creator-vpb'),
			'tab' => esc_html__('Background', 'the-creator-vpb'),
			'type' => 'checkbox',
			'default' => '0',
		),
		'animation' => array(
			'default' => '',
			'description' => __('Entrance Animation', 'the-creator-vpb'),
			'type' => 'select',
			'tab' => __('Animation', 'the-creator-vpb'),
			'values' => array(
				'' => __('None', 'the-creator-vpb'),
				'flip' => __('Flip', 'the-creator-vpb'),
				'flipInX' => __('Flip In X', 'the-creator-vpb'),
				'flipInY' => __('Flip In Y', 'the-creator-vpb'),
				'fadeIn' => __('Fade In', 'the-creator-vpb'),
				'fadeInUp' => __('Fade In Up', 'the-creator-vpb'),
				'fadeInDown' => __('Fade In Down', 'the-creator-vpb'),
				'fadeInLeft' => __('Fade In Left', 'the-creator-vpb'),
				'fadeInRight' => __('Fade In Right', 'the-creator-vpb'),
				'fadeInUpBig' => __('Fade In Up Big', 'the-creator-vpb'),
				'fadeInDownBig' => __('Fade In Down Big', 'the-creator-vpb'),
				'fadeInLeftBig' => __('Fade In Left Big', 'the-creator-vpb'),
				'fadeInRightBig' => __('Fade In Right Big', 'the-creator-vpb'),
				'slideInLeft' => __('Slide In Left', 'the-creator-vpb'),
				'slideInRight' => __('Slide In Right', 'the-creator-vpb'),
				'bounceIn' => __('Bounce In', 'the-creator-vpb'),
				'bounceInDown' => __('Bounce In Down', 'the-creator-vpb'),
				'bounceInUp' => __('Bounce In Up', 'the-creator-vpb'),
				'bounceInLeft' => __('Bounce In Left', 'the-creator-vpb'),
				'bounceInRight' => __('Bounce In Right', 'the-creator-vpb'),
				'rotateIn' => __('Rotate In', 'the-creator-vpb'),
				'rotateInDownLeft' => __('Rotate In Down Left', 'the-creator-vpb'),
				'rotateInDownRight' => __('Rotate In Down Right', 'the-creator-vpb'),
				'rotateInUpLeft' => __('Rotate In Up Left', 'the-creator-vpb'),
				'rotateInUpRight' => __('Rotate In Up Right', 'the-creator-vpb'),
				'lightSpeedIn' => __('Light Speed In', 'the-creator-vpb'),
				'rollIn' => __('Roll In', 'the-creator-vpb'),
				'flash' => __('Flash', 'the-creator-vpb'),
				'bounce' => __('Bounce', 'the-creator-vpb'),
				'shake' => __('Shake', 'the-creator-vpb'),
				'tada' => __('Tada', 'the-creator-vpb'),
				'swing' => __('Swing', 'the-creator-vpb'),
				'wobble' => __('Wobble', 'the-creator-vpb'),
				'pulse' => __('Pulse', 'the-creator-vpb'),
			),
		),
		'timing' => array(
			'default' => 'linear',
			'description' => esc_html__('Timing Function', 'the-creator-vpb'),
			'type' => 'select',
			'tab' => __('Animation', 'the-creator-vpb'),
			'values' => array(
				'linear' => esc_html__('Linear', 'the-creator-vpb'),
				'ease' => esc_html__('Ease', 'the-creator-vpb'),
				'ease-in' => esc_html__('Ease-in', 'the-creator-vpb'),
				'ease-out' => esc_html__('Ease-out', 'the-creator-vpb'),
				'ease-in-out' => esc_html__('Ease-in-out', 'the-creator-vpb'),
			),
		),
		'trigger_pt' => array(
			'description' => esc_html__('Trigger Point (in px)', 'the-creator-vpb'),
			'info' => esc_html__('Amount of pixels from bottom to start animation', 'the-creator-vpb'),
			'default' => '0',
			'tab' => __('Animation', 'the-creator-vpb'),
		),		
		'duration' => array(
			'description' => esc_html__('Animation Duration (in ms)', 'the-creator-vpb'),
			'default' => '1000',
			'tab' => __('Animation', 'the-creator-vpb'),
		),		
		'delay' => array(
			'description' => esc_html__('Animation Delay (in ms)', 'the-creator-vpb'),
			'default' => '0',
			'tab' => __('Animation', 'the-creator-vpb'),
		),
		'class' => array(
			'tab' => __('Advanced', 'the-creator-vpb'),
			'description' => __('Class', 'the-creator-vpb'),
			'info' => __('Additional custom classes for custom styling', 'the-creator-vpb'),
		),
		'id' => array(
			'tab' => __('Advanced', 'the-creator-vpb'),
			'description' => __('ID', 'the-creator-vpb'),
			'info' => __('Additional custom ID', 'the-creator-vpb'),
		),
	),
	'content' => array(
		'description' => __('Column Content', 'the-creator-vpb'),
	),
	'description' => __('Column', 'the-creator-vpb' )
);
function tcvpb_column_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('column_tc'), $attributes));

	$id_out = ($id!='') ? ' id="'.$id.'"' : '';

	$additional_classes[] = 'tcvpb_column_tc_span'.$span;
	$additional_classes[] = $class;
	$additional_classes[] = ($centered==1) ? 'tcvpb-centered' : '';
	$additional_classes[] = ($right_aligned==1) ? 'right_aligned' : '';
	$additional_classes[] = ($inversed_text==1) ? 'tcvpb-inversed_text' : '';
	$parametars_out='';
	if($animation!=''){
		$additional_classes[] = 'tcvpb-animo';
		$parametars_out = ' data-animation="'.esc_attr($animation).'" data-trigger_pt="'.esc_attr($trigger_pt).'" data-duration="'.esc_attr($duration).'" data-delay="'.esc_attr($delay).'"';
	}
	$additional_classes = array_filter($additional_classes);
	$classes_out = implode(' ', $additional_classes);

	$style_out = $padding;
	$style_out .= ($bg_color!='') ? 'background-color:'.$bg_color.';' : '';
	$style_out .= ($bg_image!='') ? 'background-image:url('.$bg_image.');' : '';
	$style_out .= ($border_radius!='') ? 'border-radius:'.$border_radius.';' : '';
	$style_out .= ($border_style!='') ? 'border-style:'.$border_style.';' : '';
	$style_out .= ($border_color!='') ? 'border-color:'.$border_color.';' : '';
	$style_out .= ($bg_image_repeat!='') ? 'background-repeat:'.$bg_image_repeat.';' : '';
	$style_out .= ($bg_image_size!='') ? 'background-size:'.$bg_image_size.';' : '';
	$style_out .= ($bg_image_position!='') ? 'background-position:'.$bg_image_position.';' : '';

    return '<div'.$id_out.' class="'.$classes_out.'"'.(($style_out!='') ? ' style="'.$style_out.'"' : '').$parametars_out.'>'.do_shortcode($content).'</div>';
}



/*********** Shortcode: Line break ************************************************************/
$tcvpb_elements['br_tc'] = array(
	'name' => __('BR', 'the-creator-vpb'),
	'type' => 'core',
	'hidden' => '1',
	'hide_in_tcvpb' => true,
	'description' => __('BR', 'the-creator-vpb' )
);
function tcvpb_br_tc_shortcode() {
    return '<br>';
}

/*********** Shortcode: Non braking space ************************************************************/
$tcvpb_elements['nbsp_tc'] = array(
	'name' => __('Non braking space', 'the-creator-vpb'),
	'type' => 'core',
	'hidden' => '1',
	'hide_in_tcvpb' => true,
	'description' => __('Non braking space', 'the-creator-vpb' )
);
function tcvpb_nbsp_tc_shortcode() {
    return '&nbsp;';
}

