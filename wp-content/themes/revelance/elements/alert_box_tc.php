<?php

/*********** Shortcode: Alert Box ************************************************************/

$tcvpb_elements['alert_box_tc'] = array(
	'name' => esc_html__('Alert Box', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-alert-box',
	'category' => esc_html__('Content', 'ABdev_revelance' ),
	'attributes' => array(
		'style' => array(
			'default' => 'info',
			'type' => 'select',
			'values' => array(
				'info' => 'Info',
				'warning' => 'Warning',
				'error' => 'Error',
				'success' => 'Success',
			),
			'description' => esc_html__('Style', 'ABdev_revelance'),
		),
		'icon_out' => array(
			'description' => esc_html__('Name of the Icon', 'ABdev_revelance'),
			'type' => 'icon',
		),
		'icon_color' => array(
			'description' => esc_html__('Icon Color', 'ABdev_revelance'),
			'type' => 'color',
		),
		'no_close' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__('No Close Button', 'ABdev_revelance'),
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
		'description' => esc_html__('Message', 'ABdev_revelance'),
	),
);
function tcvpb_alert_box_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('alert_box_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$allowed_styles = array('warning','error','info','success');
	$style = (in_array($style, $allowed_styles)) ? $style : 'info';
	$style_out = 'tcvpb_alert_' . $style;

	$icon_out = ($icon_out != '1') ? '<i class="'.esc_attr($icon_out).'" style="color:'.esc_attr($icon_color).';"></i> ' : '';
	$close_button = ( $no_close != 1 ) ? '<a class="tcvpb_alert_box_close" title="' . esc_attr__('Close', 'ABdev_revelance' ) . '">&#10005;</a>' : '';
	return  '<div '.esc_attr($id_out).' class="'.esc_attr($style_out).' '.esc_attr($class).'">
		' . $icon_out . $content . $close_button . '
	</div>';
}