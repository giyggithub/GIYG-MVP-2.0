<?php

/*********** Shortcode: Dropcap Letter ************************************************************/

$tcvpb_elements['dropcap_tc'] = array(
	'name' => esc_html__('Dropcap Letter', 'ABdev_revelance' ),
	'type' => 'inline',
	'attributes' => array(
		'letter' => array(
			'description' => esc_html__('Dropcap letter', 'ABdev_revelance'),
		),
		'color' => array(
			'description' => esc_html__('Letter Color', 'ABdev_revelance'),
			'type' => 'color',
		),
		'background' => array(
			'description' => esc_html__('Background Color', 'ABdev_revelance'),
			'type' => 'coloralpha',
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
function tcvpb_dropcap_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('dropcap_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$color = ($color!='') ? 'color: '.$color.';' : '';
	$background = ($background!='') ? 'background:'.$background.';' : '';

	return '<span '.esc_attr($id_out).' class="tcvpb_dropcap '.esc_attr($class).'" style="'.esc_attr($color.$background).'">'.esc_attr($letter).'</span>';
}
