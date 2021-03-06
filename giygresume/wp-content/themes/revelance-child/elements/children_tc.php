<?php

/*********** Shortcode: Children of page ************************************************************/

$tcvpb_elements['children_tc'] = array(
	'name' => esc_html__('Children of Page', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-children-of-page',
	'category' => esc_html__('Navigation', 'ABdev_revelance' ),
	'attributes' => array(
		'id' => array(
			'description' => esc_html__('Parent Page ID', 'ABdev_revelance'),
		),
		'depth' => array(
			'default' => '9',
			'description' => esc_html__('Depth', 'ABdev_revelance'),
		),
		'id_out' => array(
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
function tcvpb_children_tc_shortcode($attributes) {
	extract(shortcode_atts(tcvpb_extract_attributes('children_tc'), $attributes));
	$id = ($id == '')? get_the_ID() : $id;
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$children = wp_list_pages('title_li=&child_of='.esc_attr($id).'&echo=0&depth='.esc_attr($depth));
	if ($children)
		return '<ul '.esc_attr($id_out).' class="tcvpb_children '.esc_attr($class).'">'.$children.'</ul>';
	else
		return '';
}

