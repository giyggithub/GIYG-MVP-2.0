<?php

/*********** Shortcode: Callout box ************************************************************/

$tcvpb_elements['callout_box_tc'] = array(
	'name' => esc_html__('Callout Box', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-callout-box',
	'category' => esc_html__('Content', 'ABdev_revelance' ),
	'attributes' => array(
		'background_color' => array(
			'description' => esc_html__( 'Background Color', 'ABdev_revelance' ),
			'type' => 'coloralpha',
			'default' => '',
		),
		'title' => array(
			'description' => esc_html__( 'Title', 'ABdev_revelance' ),
		),
		'inverted' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__( 'Inverted (White) Text', 'ABdev_revelance' ),
			'divider' => 'true',
		),
		'no_button' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => __( 'No Button', 'ABdev_revelance' ),
		),
		'button_text' => array(
			'description' => __( 'Button Text', 'ABdev_revelance' ),
			'default' => __( 'Click Here', 'ABdev_revelance' ),
		),
		'button_size' => array(
			'description' => __( 'Button Size', 'ABdev_revelance' ),
			'default' => 'medium',
			'type' => 'select',
			'values' => array(
				'small' =>  __( 'Small', 'ABdev_revelance' ),
				'medium' => __( 'Medium', 'ABdev_revelance' ),
				'large' => __( 'Large', 'ABdev_revelance' ),
				'xlarge' => __( 'Extra Large', 'ABdev_revelance' ),
			),
		),
		'button_color' => array(
			'description' => __( 'Button Color', 'ABdev_revelance' ),
			'default' => 'light',
			'type' => 'select',
			'values' => array(
				'light' =>  __( 'Light', 'ABdev_revelance' ),
				'dark' =>  __( 'Dark', 'ABdev_revelance' ),
				'yellow' =>  __( 'Yellow', 'ABdev_revelance' ),
				'green' =>  __( 'Green', 'ABdev_revelance' ),
				'red' =>  __( 'Red', 'ABdev_revelance' ),
				'blue' =>  __( 'Blue', 'ABdev_revelance' ),
				'gray' =>  __( 'Gray', 'ABdev_revelance' ),
				'cyan' =>  __( 'Cyan', 'ABdev_revelance' ),
				'aquamarine' =>  __( 'Aquamarine', 'ABdev_revelance' ),
			),
		),
		'button_style' => array(
			'description' => __( 'Button Style', 'ABdev_revelance' ),
			'default' => 'normal',
			'type' => 'select',
			'values' => array(
				'normal' =>  __( 'Normal', 'ABdev_revelance' ),
				'rounded' =>  __( 'Rounded', 'ABdev_revelance' ),
			),
		),
		'button_url' => array(
			'description' => __( 'Button URL', 'ABdev_revelance' ),
			'type' => 'url',
		),
		'button_target' => array(
			'default' => '_self',
			'type' => 'select',
			'description' => __( 'Button Target', 'ABdev_revelance' ),
			'values' => array(
				'_self' =>  __( 'Self', 'ABdev_revelance' ),
				'_blank' => __( 'Blank', 'ABdev_revelance' ),
			),
		),
		'button_icon' => array(
			'description' => __('Button Icon', 'ABdev_revelance'),
			'info' => __('Optional icon after button text', 'ABdev_revelance'),
			'type' => 'icon',
		),
		'only_icon' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__( 'Only Icon Button', 'ABdev_revelance' ),
			'info' => esc_html__('Hides button text and shows only icon. Works only with one button', 'ABdev_revelance'),
			'divider' => 'true',
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
		'description' => esc_html__( 'Content', 'ABdev_revelance' ),
	),

);

function tcvpb_callout_box_tc_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( tcvpb_extract_attributes('callout_box_tc'), $atts ) );
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$class = ($no_button == '1') ? 'tcvpb-callout_box_no_button '.$class : $class;

	$button_class_out = 'tcvpb-button';
	$button_class_out .= ' tcvpb-button_'.$button_color;
	$button_class_out .= ' tcvpb-button_'.$button_style;
	$button_class_out .= ' tcvpb-button_'.$button_size;
	$button_icon_out = ($button_icon!='') ? '<i class="'.$button_icon.'"></i>' : '';

	$background_color = ($background_color!='') ? 'background:'.$background_color.';' : '';


	$inverted = ($inverted=='1') ? 'color_white' : '';

	$return = '<div '.esc_attr($id_out).' class="tcvpb-callout_box '.esc_attr($inverted).' '.$class.'" style="'.esc_attr($background_color).'">';

	if ( $no_button != '1' ){
		$return .= '<div class="tcvpb_container"><div class="tcvpb_column_tc_span9">';
	}

	$return .= '<span class="tcvpb-callout_box_title">'.$title.'</span>
		<p>'.do_shortcode($content).'</p>';

	if ( $no_button != '1' ){
		$return .= '</div>
				<div class="tcvpb_column_tc_span3">
					<a href="'. $button_url .'" target="' . $button_target . '" class="'.$button_class_out.'">'.$button_text.$button_icon_out.'</a>
				</div>
			</div>';
	}

	$return .= '</div>';

	return $return;
}



