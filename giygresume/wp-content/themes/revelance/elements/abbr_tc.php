<?php

/********** Shortcode: Abbreviation *************************************************************/

$tcvpb_elements['abbr_dd'] = array(
	'name' => esc_html__('Abbreviation', 'ABdev_revelance' ),
	'type' => 'inline',
	'attributes' => array(
		'fullword' => array(
			'info' => esc_html__('e.g. Abbreviation', 'ABdev_revelance'),
			'description' => esc_html__('Full Word', 'ABdev_revelance'),
		),
		'abbr' => array(
			'info' => esc_html__('e.g. abbr', 'ABdev_revelance'),
			'description' => esc_html__('Abbreviation', 'ABdev_revelance'),
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
function tcvpb_abbr_tc_shortcode ( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('abbr_dd'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	return '<abbr '.esc_attr($id_out).' class="tcvpb-abbr tcvpb_tooltip '.esc_attr($class).'" data-gravity="s" title="' . esc_attr( $fullword ) . '">' . $abbr . '</abbr>';
}

