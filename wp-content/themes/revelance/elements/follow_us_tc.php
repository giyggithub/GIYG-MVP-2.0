<?php

/*********** Shortcode: Follow us links ************************************************************/

$tcvpb_elements['follow_us_tc'] = array(
	'name' => esc_html__('Follow us Profile Links', 'ABdev_revelance'),
	'type' =>  'block',
	'icon' => 'pi-social-links',
	'category' =>  esc_html__('Social', 'ABdev_revelance'),
	'child' => 'follows_us_tc',
	'child_button' => esc_html__('New Profile Link', 'ABdev_revelance'),
	'child_title' => esc_html__('Follow us Link', 'ABdev_revelance'),
	'attributes' => array(
		'dummy' => array(
			'type' => 'hidden'
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
function tcvpb_follow_us_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('follow_us_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	return '<div '.esc_attr($id_out).' class="tcvpb_follow_us '.$class.'">'.do_shortcode($content).'</div>';
}

$tcvpb_elements['follows_us_tc'] = array(
	'name' => esc_html__('Single Follow us Link', 'ABdev_revelance' ),
	'type' => 'child',
	'attributes' => array(
		'title' => array(
			'description' => esc_html__('Tooltip Title', 'ABdev_revelance'),
			'info' => esc_html__('Name of the social network (e.g. Follow us on Facebook,Follow us on Twitter,Follow us on Google+), this will be shown as tooltip', 'ABdev_revelance'),
		),
		'icon' => array(
			'description' => esc_html__('Icon', 'ABdev_revelance'),
			'type' => 'icon',
		),
		'url' => array(
			'description' => esc_html__('Profile URL', 'ABdev_revelance'),
			'type' => 'url',
		),
		'target' => array(
			'description' => esc_html__('Target', 'ABdev_revelance'),
			'default' => '_self',
			'type' => 'select',
			'values' => array(
				'_self' =>  esc_html__('Self', 'ABdev_revelance'),
				'_blank' => esc_html__('Blank', 'ABdev_revelance'),
			),
		),
		'gravity' => array(
			'default' => 's',
			'description' => esc_html__('Tooltip Gravity Position', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				's' => esc_html__('South', 'ABdev_revelance'),
				'n' => esc_html__('North', 'ABdev_revelance'),
				'e' => esc_html__('East', 'ABdev_revelance'),
				'w' => esc_html__('West', 'ABdev_revelance'),
			),
		),
	),
);
function tcvpb_follows_us_tc_shortcode( $attributes, $content = null  ) {
	extract(shortcode_atts(tcvpb_extract_attributes('follows_us_tc'), $attributes));

	$return = '<a class="tcvpb_socialicon tcvpb_tooltip" data-gravity="'.esc_attr($gravity).'" href="'.esc_url($url).'" target="'.esc_attr($target).'" title="'.esc_attr($title).'"><i class="'.esc_attr($icon).'"></i></a>';

    return $return;
}
