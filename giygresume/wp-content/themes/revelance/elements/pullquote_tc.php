<?php

/*********** Shortcode: Pullquote ************************************************************/

$tcvpb_elements['pullquote_tc'] = array(
	'name' => esc_html__('Pullquote', 'ABdev_revelance' ),
	'type' => 'inline',
	'attributes' => array(
		'span' => array(
			'default' => '3',
			'description' => esc_html__('Span 1-11', 'ABdev_revelance'),
		),
		'align' => array(
			'default' => 'left',
			'description' => esc_html__('Align', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				'left' => esc_html__('Left', 'ABdev_revelance'),
				'right' => esc_html__('Right', 'ABdev_revelance'),
			),
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
function tcvpb_pullquote_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('pullquote_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	return '<span '.esc_attr($id_out).' class="tcvpb_pullquote tcvpb_pullquote_'.esc_attr($align).' tcvpb_column_tc_span'.esc_attr($span).'">
		'.$content.'
	</span>';
}
