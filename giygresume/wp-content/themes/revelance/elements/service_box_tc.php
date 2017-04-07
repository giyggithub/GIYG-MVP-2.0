<?php

/*********** Shortcode: Service box ************************************************************/

$tcvpb_elements['service_box_tc'] = array(
	'name' => esc_html__('Service box', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-service-box',
	'category' =>  esc_html__('Content', 'ABdev_revelance'),
	'attributes' => array(
		'title' => array(
			'description' => esc_html__('Title', 'ABdev_revelance'),
		),
		'type' => array(
			'description' => esc_html__('Type', 'ABdev_revelance'),
			'default' => 'round',
			'type' => 'select',
			'values' => array(
				'round' => __('Round', 'ABdev_revelance'),
				'square' =>  __('Square', 'ABdev_revelance'),
				'round_stroke' => __('Round Stroke', 'ABdev_revelance'),
				'round_aside' => __('Round Aside', 'ABdev_revelance'),
				'aside_small' => __('Aside Small', 'ABdev_revelance'),
			),
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
		'icon' => array(
			'description' => esc_html__('Icon', 'ABdev_revelance'),
			'type' => 'icon',
			'tab' => esc_html__('Icon', 'ABdev_revelance'),
		),
		'icon_color' => array(
			'description' => esc_html__('Icon Color', 'ABdev_revelance'),
			'type' => 'color',
			'tab' => esc_html__('Icon', 'ABdev_revelance'),
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
function tcvpb_service_box_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('service_box_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$class = ' tcvpb_service_box_'.$type . ' ' . $class;

	$icon_color = ($icon_color!='') ? 'style=color:'.$icon_color.';' : '';

	$return = '
		<div '.esc_attr($id_out).' class="tcvpb_service_box'.esc_attr($class).'">
			<div class="tcvpb_service_box_header">';

			$return .= ($link!='') ? '<a href="'.esc_url($link).'" target="'.esc_attr($target).'" class="tcvpb_icon_boxed"><i class="'.esc_attr($icon).'" '.esc_attr($icon_color).'></i></a>' : '<div class="tcvpb_icon_boxed"><i class="'.esc_attr($icon).'" '.esc_attr($icon_color).'></i></div>';
			$return .= ($link!='') ? '<a href="'.esc_url($link).'" target="'.esc_attr($target).'"><h3>'.$title.'</h3></a>' : '<h3>'.$title.'</h3>';

			$return .= '</div>
			<p>'.do_shortcode($content).'</p>
		</div>';

	return $return;
}

