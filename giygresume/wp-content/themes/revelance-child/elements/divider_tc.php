<?php

/*********** Shortcode: Content Divider ************************************************************/

$tcvpb_elements['divider_tc'] = array(
	'name' => esc_html__('Content Divider', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-divider',
	'category' =>  esc_html__('Content', 'ABdev_revelance'),
	'attributes' => array(
		'style' => array(
			'default' => 'style1',
			'description' => esc_html__('Divider Style', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				'solid' => 'Solid Line',
				'dashed' => 'Dashed Line',
				'dotted' => 'Dotted Line',
			),
		),
		'text' => array(
			'description' => esc_html__('Text', 'ABdev_revelance'),
			'info' => esc_html__('e.g. Go to top', 'ABdev_revelance'),
		),
		'icon' => array(
			'description' => esc_html__('Icon', 'ABdev_revelance'),
			'type' => 'icon',
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
		'duration' => array(
			'description' => esc_html__('Animation Duration (ms)', 'ABdev_revelance'),
			'default' => '1100',
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
function tcvpb_divider_tc_shortcode( $attributes ) {
    extract(shortcode_atts(tcvpb_extract_attributes('divider_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$icon_output = ($icon != '')?' <i class="'.$icon.'"></i>':'';
	$divider_style = ($style != '') ? 'tcvpb_divider_'.$style.'' : '';

	$animation_class = $animation_animation = $animation_duration = '';
	if (!empty($animation) && $animation!='none'){
		$animation_class = ' tcvpb-animo';
		$animation_animation = ' data-animation="'.esc_attr($animation).'"';
		$animation_duration = ($duration!='') ? ' data-duration="'.esc_attr($duration).'"' : ' data-duration="1"';
	}

	return '<div '.esc_attr($id_out).' class="tcvpb_divider '.esc_attr($divider_style).' '.esc_attr($class).'"><a href="#" class="backtotop'.esc_attr($animation_class).'"'.$animation_animation.$animation_duration.'>'.$text.$icon_output.'</a></div>';
}
