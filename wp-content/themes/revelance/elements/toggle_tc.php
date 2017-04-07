<?php

/*********** Shortcode: Toggle ************************************************************/

$tcvpb_elements['toggle_tc'] = array(
	'name' => esc_html__('Toggle', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-toggle',
	'category' =>  esc_html__('Content', 'ABdev_revelance'),
	'attributes' => array(
		'title' => array(
			'description' => esc_html__('Title', 'ABdev_revelance'),
		),
		'expanded' => array(
			'description' => esc_html__('Expanded', 'ABdev_revelance'),
			'default' => '0',
			'type' => 'checkbox',
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
	)
);
function tcvpb_toggle_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('toggle_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$return = '
		<div '.esc_attr($id_out).' class="tcvpb-accordion tcvpb-toggle '.esc_attr($class).'" data-expanded="'.esc_attr($expanded).'">
			<h3>' . esc_html($title) . '</h3>
			<div class="tcvpb-accordion-body">
				<p>' . do_shortcode($content) . '</p>
			</div>
		</div>
		';

	return $return;
}

