<?php

/*********** Shortcode: Image Hotspots ************************************************************/

$tcvpb_elements['image_hotspots_tc'] = array(
	'name' => esc_html__('Image Hotspots', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-image-hotspots',
	'category' => esc_html__('Media', 'ABdev_revelance' ),
	'child' => 'image_hotspot_tc',
	'child_button' => esc_html__('New Hotspot', 'ABdev_revelance'),
	'child_title' => esc_html__('Hotspot', 'ABdev_revelance'),
	'attributes' => array(
		'url' => array(
			'type' => 'image',
			'description' => esc_html__('Select Image', 'ABdev_revelance'),
		),
		'animation' => array(
			'default' => 'none',
			'description' => esc_html__('Entrance Animation', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				'' => esc_html__('None', 'ABdev_revelance'),
				'flip' => esc_html__('Flip', 'ABdev_revelance'),
				'flipInX' => esc_html__('Flip In X', 'ABdev_revelance'),
				'flipInY' => esc_html__('Flip In Y', 'ABdev_revelance'),
				'fadeIn' => esc_html__('Fade In', 'ABdev_revelance'),
				'fadeInUp' => esc_html__('Fade In Up', 'ABdev_revelance'),
				'fadeInDown' => esc_html__('Fade In Down', 'ABdev_revelance'),
				'fadeInLeft' => esc_html__('Fade In Left', 'ABdev_revelance'),
				'fadeInRight' => esc_html__('Fade In Right', 'ABdev_revelance'),
				'fadeInUpBig' => esc_html__('Fade In Up Big', 'ABdev_revelance'),
				'fadeInDownBig' => esc_html__('Fade In Down Big', 'ABdev_revelance'),
				'fadeInLeftBig' => esc_html__('Fade In Left Big', 'ABdev_revelance'),
				'fadeInRightBig' => esc_html__('Fade In Right Big', 'ABdev_revelance'),
				'slideInLeft' => esc_html__('Slide In Left', 'ABdev_revelance'),
				'slideInRight' => esc_html__('Slide In Right', 'ABdev_revelance'),
				'bounceIn' => esc_html__('Bounce In', 'ABdev_revelance'),
				'bounceInDown' => esc_html__('Bounce In Down', 'ABdev_revelance'),
				'bounceInUp' => esc_html__('Bounce In Up', 'ABdev_revelance'),
				'bounceInLeft' => esc_html__('Bounce In Left', 'ABdev_revelance'),
				'bounceInRight' => esc_html__('Bounce In Right', 'ABdev_revelance'),
				'rotateIn' => esc_html__('Rotate In', 'ABdev_revelance'),
				'rotateInDownLeft' => esc_html__('Rotate In Down Left', 'ABdev_revelance'),
				'rotateInDownRight' => esc_html__('Rotate In Down Right', 'ABdev_revelance'),
				'rotateInUpLeft' => esc_html__('Rotate In Up Left', 'ABdev_revelance'),
				'rotateInUpRight' => esc_html__('Rotate In Up Right', 'ABdev_revelance'),
				'lightSpeedIn' => esc_html__('Light Speed In', 'ABdev_revelance'),
				'rollIn' => esc_html__('Roll In', 'ABdev_revelance'),
				'flash' => esc_html__('Flash', 'ABdev_revelance'),
				'bounce' => esc_html__('Bounce', 'ABdev_revelance'),
				'shake' => esc_html__('Shake', 'ABdev_revelance'),
				'tada' => esc_html__('Tada', 'ABdev_revelance'),
				'swing' => esc_html__('Swing', 'ABdev_revelance'),
				'wobble' => esc_html__('Wobble', 'ABdev_revelance'),
				'pulse' => esc_html__('Pulse', 'ABdev_revelance'),
			),
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'timing' => array(
			'default' => 'linear',
			'description' => esc_html__('Timing Function', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				'linear' => esc_html__('Linear', 'ABdev_revelance'),
				'ease' => esc_html__('Ease', 'ABdev_revelance'),
				'ease-in' => esc_html__('Ease-in', 'ABdev_revelance'),
				'ease-out' => esc_html__('Ease-out', 'ABdev_revelance'),
				'ease-in-out' => esc_html__('Ease-in-out', 'ABdev_revelance'),
			),
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'trigger_pt' => array(
			'description' => esc_html__('Trigger Point (in px)', 'ABdev_revelance'),
			'info' => esc_html__('Amount of pixels from bottom to start animation', 'ABdev_revelance'),
			'default' => '0',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'duration' => array(
			'description' => esc_html__('Animation Duration (in ms)', 'ABdev_revelance'),
			'default' => '1000',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'delay' => array(
			'description' => esc_html__('Animation Delay (in ms)', 'ABdev_revelance'),
			'default' => '0',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'id' => array(
			'description' => esc_html__('ID', 'ABdev_revelance'),
			'info' => esc_html__('Additional custom ID', 'ABdev_revelance'),
			'tab' => esc_html__('Advanced', 'ABdev_revelance'),
		),
		'class' => array(
			'description' => esc_html__('Class', 'ABdev_revelance'),
			'info' => esc_html__('Additional custom classes for custom styling', 'ABdev_revelance'),
			'tab' => esc_html__('Advanced', 'ABdev_revelance'),
		),
	),
);
function tcvpb_image_hotspots_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('image_hotspots_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$classes=array();
	$animation_out='';

	if($animation!=''){
		$classes[] = 'tcvpb-animo';
		$duration = ($duration!='') ? $duration : '1000';
		$animation_out = 'data-animation="'.esc_attr($animation).'" data-trigger_pt="'.esc_attr($trigger_pt).'" data-duration="'.esc_attr($duration).'" data-delay="'.esc_attr($delay).'"';
	}

	if($class!=''){
		$classes[] = $class;
	}

	$classes = implode(' ', $classes);

	return '<div '.esc_attr($id_out).' class="'.esc_attr($classes).'" '.$animation_out.' style="position:relative;"><img src="'.esc_url($url).'">'.  do_shortcode($content)  . '</div>';
}

$tcvpb_elements['image_hotspot_tc'] = array(
	'name' => esc_html__('Single hotspot section', 'ABdev_revelance' ),
	'type' => 'child',
	'attributes' => array(
		'top' => array(
			'description' => esc_html__('Vertical Position (%)', 'ABdev_revelance'),
		),
		'left' => array(
			'description' => esc_html__('Horizontal Position (%)', 'ABdev_revelance'),
		),
		'number' => array(
			'description' => esc_html__('Number in Hotspot', 'ABdev_revelance'),
		),
		'icon' => array(
			'description' => esc_html__('Icon in Hotspot', 'ABdev_revelance'),
			'type' => 'icon',
		),
		'color' => array(
			'description' => esc_html__('Icon or Text Color', 'ABdev_revelance'),
			'type' => 'color',
		),
		'effect' => array(
			'default' => '',
			'description' => esc_html__('Select Hotspot Effect', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				'' => esc_html__('None', 'ABdev_revelance'),
				'pulse' => esc_html__('Pulse', 'ABdev_revelance'),
				'grow' => esc_html__('Grow', 'ABdev_revelance'),
			),
		),
		'hotspot_background' => array(
			'description' => esc_html__('Hotspot Background', 'ABdev_revelance'),
			'type' => 'coloralpha',
		),
		'pulse_background' => array(
			'description' => esc_html__('Effect Background', 'ABdev_revelance'),
			'type' => 'coloralpha',
		),
		'gravity' => array(
			'default' => 's',
			'description' => esc_html__('Tooltip Position', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				'n' => esc_html__('Top', 'ABdev_revelance'),
				's' => esc_html__('Bottom', 'ABdev_revelance'),
				'e' => esc_html__('Left', 'ABdev_revelance'),
				'w' => esc_html__('Right', 'ABdev_revelance'),
			),
		),
		'tooltip_content' => array(
			'description' => esc_html__('Tooltip Content', 'ABdev_revelance'),
		),
	),
);
function tcvpb_image_hotspot_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('image_hotspot_tc'), $attributes));

	$icon_out = ($icon !='') ? '<i class="'.esc_attr($icon).'"></i>' : '';
	$number_out = ($number !='') ? '<span>'.esc_attr($number).'</span>' :'';
	$color = ($color!='') ? 'color: '.esc_attr($color).';' : '';
	$hotspot_background = ($hotspot_background!='') ? 'background:'.esc_attr($hotspot_background).';' : '';
	$pulse_background = ($pulse_background!='') ? 'background:'.esc_attr($pulse_background).';' : '';

	$return = '
		<div class="tcvpb-hotspot-body" style="position:absolute; top:'.esc_attr($top).'%; left:'.esc_attr($left).'%;">
			<a class="tcvpb-hotspot-tooltip" style="'.esc_attr($hotspot_background.$color).'" title="'.esc_attr($tooltip_content).'" data-gravity="'.esc_attr($gravity).'">
				'.$icon_out.'
				'.$number_out.'
			</a>
			<div class="tcvpb-hotspot-'.esc_attr($effect).'" style="'.esc_attr($pulse_background).'"></div>
		</div>';

	return $return;
}