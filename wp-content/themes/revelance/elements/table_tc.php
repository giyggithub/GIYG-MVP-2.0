<?php

/*********** Shortcode: Table ************************************************************/

$tcvpb_elements['table_tc'] = array(
	'name' => esc_html__('Table', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-table',
	'category' =>  esc_html__('Content', 'ABdev_revelance'),
	'attributes' => array(
		'dummy' => array(
			'type' => 'hidden',
		),
		'alternative_style' => array(
			'default' => '0',
			'description' => esc_html__('Alternative Styling', 'ABdev_revelance'),
			'type' => 'checkbox',
			'tab' => esc_html__('Style', 'ABdev_revelance'),
		),
		'hover' => array(
			'default' => '0',
			'description' => esc_html__('Rows with Hover', 'ABdev_revelance'),
			'type' => 'checkbox',
			'tab' => esc_html__('Style', 'ABdev_revelance'),
		),
		'striped' => array(
			'default' => '0',
			'description' => esc_html__('Striped Rows', 'ABdev_revelance'),
			'type' => 'checkbox',
			'tab' => esc_html__('Style', 'ABdev_revelance'),
		),
		'condensed' => array(
			'default' => '0',
			'description' => esc_html__('Condensed Table', 'ABdev_revelance'),
			'type' => 'checkbox',
			'tab' => esc_html__('Style', 'ABdev_revelance'),
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
		'default' => 'HTML table source here',
		'description' => esc_html__('Content', 'ABdev_revelance'),
	)
);
function tcvpb_table_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('table_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$classes[] = 'tcvpb-table';

	if($alternative_style==1){
		$classes[] = 'tcvpb-table-alternative';
	}
	if($hover==1){
		$classes[] = 'tcvpb-table-hover';
	}
	if($striped==1){
		$classes[] = 'tcvpb-table-striped';
	}
	if($condensed==1){
		$classes[] = 'tcvpb-table-condensed';
	}
	$classes = implode(' ', $classes).' '.$class;

	return '<div '.esc_attr($id_out).' class="'.esc_attr($classes).'">'.do_shortcode($content).'</div>';
}


