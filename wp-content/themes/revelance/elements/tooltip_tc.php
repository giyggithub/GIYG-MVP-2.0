<?php

/*********** Shortcode: Tooltip ************************************************************/

$tcvpb_elements['tooltip_tc'] = array(
	'name' => esc_html__('Tooltip', 'ABdev_revelance' ),
	'type' => 'inline',
	'attributes' => array(
		'text' => array(
			'description' => esc_html__('Text', 'ABdev_revelance'),
		),
		'link' => array(
			'description' => esc_html__('Link', 'ABdev_revelance'),
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
			'description' => esc_html__('Tooltip Gravity', 'ABdev_revelance'),
			'default' => 's',
			'type' => 'select',
			'values' => array(
				's' =>  esc_html__('South', 'ABdev_revelance'),
				'n' => esc_html__('North', 'ABdev_revelance'),
				'e' => esc_html__('East', 'ABdev_revelance'),
				'w' => esc_html__('West', 'ABdev_revelance'),
				'nw' =>  esc_html__('Northwest', 'ABdev_revelance'),
				'ne' => esc_html__('Northeast', 'ABdev_revelance'),
				'sw' => esc_html__('Southwest', 'ABdev_revelance'),
				'se' => esc_html__('Southeast', 'ABdev_revelance'),
			),
		),
		'class' => array(
			'description' => esc_html__('Class', 'ABdev_revelance'),
			'info' => esc_html__('Additional custom classes for custom styling', 'ABdev_revelance'),
			'tab' => esc_html__('Advanced', 'ABdev_revelance'),
		),
	),
	'content' => array(
		'description' => esc_html__('Tooltip Content', 'ABdev_revelance'),
	)
);
function tcvpb_tooltip_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('tooltip_tc'), $attributes));

	$link_output=($link!='')?' href="'.esc_url($link).'"':'';
	$target_output=($target!='')?' target="'.esc_attr($target).'"':'';

	return '<a'.$link_output.' class="tcvpb_tooltip '.esc_attr($class).'" data-gravity="'.esc_attr($gravity).'" title="'.esc_attr($text).'"'.$target_output.'><p>'.do_shortcode($content).'</p></a>';
}
