<?php

/*********** Shortcode: UL Wrapper ************************************************************/
$tcvpb_elements['ul_tc'] = array(
	'name' => esc_html__('Unordered List', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-list',
	'category' =>  esc_html__('Content', 'ABdev_revelance'),
	'child' => 'li_tc',
	'child_title' => esc_html__('List Item', 'ABdev_revelance'),
	'child_button' => esc_html__('Add List Item', 'ABdev_revelance'),
	'attributes' => array(
		'dummy' => array(
			'type' => 'hidden',
		),
		'animation' => array(
			'default' => '',
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
		'duration' => array(
			'description' => esc_html__('Animation Duration (ms)', 'ABdev_revelance'),
			'default' => '1100',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'delay' => array(
			'description' => esc_html__('Inner Delay (ms)', 'ABdev_revelance'),
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
	)
);
function tcvpb_ul_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('ul_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$classes=array();
	$animation_out='';

	if($animation!=''){
		$classes[] = 'tcvpb-animo-children';
		$duration = ($duration!='') ? $duration : '1000';
		$animation_out = 'data-animation="'.esc_attr($animation).'" data-trigger_pt="0" data-duration="'.esc_attr($duration).'" data-delay="'.esc_attr($delay).'"';
	}

	if($class!=''){
		$classes[] = $class;
	}

	$classes = implode(' ', $classes);

	return '<ul '.esc_attr($id_out).' class="tcvpb_shortcode_ul '.esc_attr($classes).'" '.$animation_out.'>'.do_shortcode($content).'</ul>';
}


$tcvpb_elements['li_tc'] = array(
	'name' => esc_html__('List Item', 'ABdev_revelance' ),
	'type' => 'child',
	'icon' => 'pi-customize',
	'attributes' => array(
		'icon' => array(
			'description' => esc_html__('Icon', 'ABdev_revelance'),
			'type' => 'icon',
		),
		'icon_color' => array(
			'type' => 'color',
			'description' => esc_html__('Icon Color', 'ABdev_revelance'),
		),
	),
	'content' => array(
		'description' => esc_html__('Item Content', 'ABdev_revelance'),
	)
);
function tcvpb_li_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('li_tc'), $attributes));
	$icon_color_out = ($icon_color!='') ? ' style="color:'.esc_attr($icon_color).';"' : '';
	$icon_out = ($icon!='') ? '<i class="'.esc_attr($icon).'"'.$icon_color_out.'></i> ' : '';
	return '<li><p>'.$icon_out.do_shortcode($content).'</p></li>';
}
