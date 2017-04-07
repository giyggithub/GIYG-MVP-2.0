<?php

/*********** Shortcode: Search ************************************************************/

$tcvpb_elements['search_tc'] = array(
	'name' => esc_html__('Search Field', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-search',
	'category' => esc_html__('Content', 'ABdev_revelance' ),
	'attributes' => array(
		'placeholder' => array(
			'description' => esc_html__('Placeholder', 'ABdev_revelance'),
			'default' => esc_html__('Search', 'ABdev_revelance'),
		),
		'input_background' => array(
			'description' => esc_html__('Background Color on input', 'ABdev_revelance'),
			'type' => 'coloralpha',
			'info' => esc_html__('Pick a color for input background.', 'ABdev_revelance'),
			'divider' => 'true',
		),
		'border_color' => array(
			'description' => esc_html__('Border Color', 'ABdev_revelance'),
			'type' => 'coloralpha',
			'info' => esc_html__('Pick a color for input border.', 'ABdev_revelance'),
		),
		'border_radius' => array(
			'description' => esc_html__('Border Radius (px)', 'ABdev_revelance'),
			'type' => 'string',
			'default' => '0',
			'info' => esc_html__('Set a number for border radius on input.', 'ABdev_revelance'),
			'divider' => 'true',
		),
		'icon' => array(
			'description' => esc_html__('Icon', 'ABdev_revelance'),
			'type' => 'icon',
		),
		'icon_color' => array(
			'description' => esc_html__('Icon Color', 'ABdev_revelance'),
			'type' => 'color',
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
function tcvpb_search_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('search_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$border_color_output = ($border_color!='') ? 'border-color:' .$border_color.'; ' : '';
	$border_radius_output = ($border_radius!='') ? 'border-radius:' .$border_radius.'px; ' : '';
	$input_background_output = ($input_background!='') ? 'background:' .$input_background.'; ' : '';
	$input_background_output = ($input_background!='') ? 'background:' .$input_background.'; ' : '';
	$icon_color = ($icon_color!='') ? 'color: '.$icon_color.';' : '';

	$return = '
		<div '.esc_attr($id_out).' class="tcvpb_search '.esc_attr($class).'">
			<form name="search" id="search" method="get" action="'.esc_url(home_url()).'">
				<input name="s" type="text" placeholder="'.esc_attr($placeholder).'" value="'.esc_attr(get_search_query()).'" style="'.esc_attr($border_color_output).' '.esc_attr($border_radius_output).' '.esc_attr($input_background_output).'">
				<a class="submit" style="'.esc_attr($icon_color).'"><i class="'.esc_attr($icon).'"></i></a>
			</form>
		</div>';

	return $return;
}

