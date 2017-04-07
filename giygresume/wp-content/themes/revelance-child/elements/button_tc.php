<?php

/*********** Shortcode: Buttons ************************************************************/

$tcvpb_elements['button_tc'] = array(
	'name' => esc_html__('Button', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-button',
	'category' => esc_html__('Navigation', 'ABdev_revelance' ),
	'attributes' => array(
		'text' => array(
			'description' => __( 'Button Text', 'dthe-creator-vpb' ),
			'default' => __( 'Click Here', 'dthe-creator-vpb' ),
		),
		'size' => array(
			'description' => __( 'Size', 'dthe-creator-vpb' ),
			'default' => 'medium',
			'type' => 'select',
			'values' => array(
				'small' =>  __( 'Small', 'dthe-creator-vpb' ),
				'medium' => __( 'Medium', 'dthe-creator-vpb' ),
				'large' => __( 'Large', 'dthe-creator-vpb' ),
				'xlarge' => __( 'Extra Large', 'dthe-creator-vpb' ),
			),
			'divider' => 'true',
		),
		'color' => array(
			'description' => __( 'Color', 'dthe-creator-vpb' ),
			'default' => 'light',
			'type' => 'select',
			'values' => array(
				'light' =>  __( 'Light', 'dthe-creator-vpb' ),
				'dark' =>  __( 'Dark', 'dthe-creator-vpb' ),
				'yellow' =>  __( 'Yellow', 'dthe-creator-vpb' ),
				'green' =>  __( 'Green', 'dthe-creator-vpb' ),
				'red' =>  __( 'Red', 'dthe-creator-vpb' ),
				'blue' =>  __( 'Blue', 'dthe-creator-vpb' ),
				'gray' =>  __( 'Gray', 'dthe-creator-vpb' ),
				'cyan' =>  __( 'Cyan', 'dthe-creator-vpb' ),
				'aquamarine' =>  __( 'Aquamarine', 'dthe-creator-vpb' ),
			),
		),
		'style' => array(
			'description' => __( 'Style', 'dthe-creator-vpb' ),
			'default' => 'normal',
			'type' => 'select',
			'values' => array(
				'normal' =>  __( 'Normal', 'dthe-creator-vpb' ),
				'rounded' =>  __( 'Rounded', 'dthe-creator-vpb' ),
			),
			'divider' => 'true',
		),
		'url' => array(
			'description' => __( 'URL', 'dthe-creator-vpb' ),
			'type' => 'url',
		),
		'target' => array(
			'description' => __( 'Target', 'dthe-creator-vpb' ),
			'default' => '_self',
			'type' => 'select',
			'values' => array(
				'_self' =>  __( 'Self', 'dthe-creator-vpb' ),
				'_blank' => __( 'Blank', 'dthe-creator-vpb' ),
			),
			'divider' => 'true',
		),
		'icon' => array(
			'description' => __('Icon', 'dthe-creator-vpb'),
			'info' => __('Optional icon after button text', 'dthe-creator-vpb'),
			'type' => 'icon',
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

function tcvpb_button_tc_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( tcvpb_extract_attributes('button_tc'), $atts ) );
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$class_out = 'tcvpb-button';
	$class_out .= ' tcvpb-button_'.$color;
	$class_out .= ' tcvpb-button_'.$style;
	$class_out .= ' tcvpb-button_'.$size;
	$class_out .= ' '.$class;

	$icon_out = ($icon!='') ? '<i class="'.$icon.'"></i>' : '';

	return '<a '.esc_attr($id_out).' href="'. esc_url($url) .'" target="' . esc_attr($target) . '" class="'.esc_attr($class_out).'">' . $text . $icon_out . '</a>';
}
