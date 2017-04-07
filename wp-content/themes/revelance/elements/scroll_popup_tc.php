<?php

/*********** Shortcode: Scroll Popup ************************************************************/

$tcvpb_elements['scroll_popup_tc'] = array(
	'name' => esc_html__('Scroll Popup', 'ABdev_revelance' ),
	'type' =>  'block',
	'icon' => 'pi-scroll-popup',
	'category' =>  esc_html__('Media', 'ABdev_revelance'),
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
			'description' => esc_html__('Animation Duration (in ms)', 'ABdev_revelance'),
			'default' => '1000',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'delay' => array(
			'description' => esc_html__('Animation Delay (in ms)', 'ABdev_revelance'),
			'default' => '0',
			'tab' => esc_html__('Animation', 'ABdev_revelance'),
		),
		'position' => array(
			'default' => 'top_center',
			'description' => esc_html__('Popup Position', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				'top_center' => esc_html__('Top Center', 'ABdev_revelance'),
				'top_left' => esc_html__('Top Left', 'ABdev_revelance'),
				'top_right' => esc_html__('Top Right', 'ABdev_revelance'),
				'center_center' => esc_html__('Center Center', 'ABdev_revelance'),
				'center_left' => esc_html__('Center Left', 'ABdev_revelance'),
				'center_right' => esc_html__('Center Right', 'ABdev_revelance'),
				'bottom_center' => esc_html__('Bottom Center', 'ABdev_revelance'),
				'bottom_left' => esc_html__('Bottom Left', 'ABdev_revelance'),
				'bottom_right' => esc_html__('Bottom Right', 'ABdev_revelance'),
			),
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'width' => array(
			'description' => esc_html__('Popup Width (% or px)', 'ABdev_revelance'),
			'default' => '30%',
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'height' => array(
			'description' => esc_html__('Popup Height (% or px)', 'ABdev_revelance'),
			'default' => '500px',
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
		),
		'close_icon' => array(
			'description' => esc_html__( 'Close Icon', 'ABdev_revelance' ),
			'info' => esc_html__('Choose Close Icon that will be shown on hover', 'ABdev_revelance'),
			'type' => 'icon',
			'tab' => esc_html__('Custom', 'ABdev_revelance'),
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
	'content' => array(
		'description' => esc_html__('Content', 'ABdev_revelance'),
	),
);
function tcvpb_scroll_popup_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('scroll_popup_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$animation = ($animation!='') ? $animation  : 'fadeIn';
	$duration = ($duration!='') ? $duration : '1000';

	$return = '<div '.esc_attr($id_out).' class="tcvpb-popup-wrapper '.esc_attr($class).'">
					<div class="tcvpb-popup-shadow">
						<div class="tcvpb-popup-content '.esc_attr($class).' '.esc_attr($position).'" style="width:'.$width.';height:'.$height.';" data-animation="'.esc_attr($animation).'" data-duration="'.esc_attr($duration).'" data-delay="'.esc_attr($delay).'">';

	$return .= ($url != '') ?'<img src="'.esc_url($url).'">' : '';
	$return .= ($content != '') ?'<p>'.do_shortcode($content).'</p>' : '';
	$return .= '<i class="'.esc_attr($close_icon).'"></i>';

	$return .= '</div></div></div>';

	return $return;
}
