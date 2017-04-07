<?php

/*********** Shortcode: Stats Excerpt ************************************************************/

$tcvpb_elements['stats_excerpt_tc'] = array(
	'name' => esc_html__('Stats Excerpt', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-stats',
	'category' =>  esc_html__('Content', 'ABdev_revelance'),
	'attributes' => array(
		'background_color' => array(
			'description' => esc_html__('Background Color', 'ABdev_revelance'),
			'type' => 'coloralpha',
			'divider' => 'true',
		),
		'icon' => array(
			'description' => esc_html__('Icon', 'ABdev_revelance'),
			'type' => 'icon',
		),
		'icon_color' => array(
			'description' => esc_html__('Icon Color', 'ABdev_revelance'),
			'type' => 'color',
			'divider' => 'true',
		),
		'number' => array(
			'description' => esc_html__('Stats Number', 'ABdev_revelance'),
		),
		'number_color' => array(
			'description' => esc_html__('Stats Number Color', 'ABdev_revelance'),
			'type' => 'color',
		),
		'number_sign' => array(
			'description' => esc_html__('Stats Number Sign', 'ABdev_revelance'),
		),
		'number_sign_color' => array(
			'description' => esc_html__('Stats Number Sign Color', 'ABdev_revelance'),
			'type' => 'color',
			'divider' => 'true',
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
		'delay' => array(
			'description' => esc_html__('Delay (ms)', 'ABdev_revelance'),
			'default' => '0',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'trigger_pt' => array(
			'description' => esc_html__('Trigger Point', 'ABdev_revelance'),
			'info' => esc_html__('Amount of pixels from bottom to start animation. If you use pixels, enter the number, if you use percentage enter the number with % sign.', 'ABdev_revelance'),
			'default' => '0',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'description' => array(
			'description' => esc_html__('Description', 'ABdev_revelance'),
		),
		'description_color' => array(
			'description' => esc_html__('Description Color', 'ABdev_revelance'),
			'type' => 'color',
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
function tcvpb_stats_excerpt_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('stats_excerpt_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$icon_out = ($icon!='') ? '<i class="'.esc_attr($icon).'" style="color:'.esc_attr($icon_color).';"></i>' : '';
	$number_sign_out = ($number_sign!='') ? '<span class="tcvpb_stats_number_sign" style="color:'.esc_attr($number_sign_color).';">'.esc_html($number_sign).'</span>' : '';

	$background_color = ($background_color!='') ? 'background:'.$background_color.';' : '';
	

	return '
		<div '.esc_attr($id_out).' class="tcvpb_stats_excerpt '.esc_attr($class).'" style="'.esc_attr($background_color).'">
			'.$icon_out.'
			<span class="tcvpb_stats_number" data-number="'.esc_attr($number).'" data-animation="'.esc_attr($animation).'" data-duration="'.esc_attr($duration).'" data-delay="'.esc_attr($delay).'" data-trigger_pt="'.esc_attr($trigger_pt).'" style="color:'.esc_attr($number_color).';"></span>
			'.$number_sign_out.'
			<p style="color:'.esc_attr($description_color).';">'.do_shortcode($description).'</p>
		</div>';
}


