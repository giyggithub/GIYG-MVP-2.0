<?php

/*********** Shortcode: Price Box ************************************************************/

$tcvpb_elements['pricing_box_tc'] = array(
	'name' => esc_html__('Pricing box', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-pricing-box',
	'category' =>  esc_html__('Content', 'ABdev_revelance'),
	'child' => 'pricing_feature_tc',
	'child_title' => esc_html__('Pricing Feature', 'ABdev_revelance'),
	'child_button' => esc_html__('Add Pricing Feature', 'ABdev_revelance'),
	'attributes' => array(
		'icon' => array(
			'description' => esc_html__('Icon', 'ABdev_revelance'),
			'type' => 'icon',
		),
		'name' => array(
			'description' => esc_html__('Name', 'ABdev_revelance'),
			'divider' => 'true',
		),
		'price' => array(
			'description' => esc_html__('Price', 'ABdev_revelance'),
		),
		'currency' => array(
			'description' => esc_html__('Currency Sign', 'ABdev_revelance'),
		),
		'monthly' => array(
			'description' => esc_html__('Monthly Text', 'ABdev_revelance'),
			'divider' => 'true',
		),
		'decsription' => array(
			'description' => esc_html__('Decsription', 'ABdev_revelance'),
		),
		'style' => array(
			'default' => '1',
			'type' => 'select',
			'values' => array(
				'1' => esc_html__('Style 1', 'ABdev_revelance'),
				'2' => esc_html__('Style 2', 'ABdev_revelance'),
			),
			'description' => esc_html__('Style', 'ABdev_revelance'),
			'tab' => esc_html__('Style', 'ABdev_revelance'),
		),
		'featured' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__('Is Featured?', 'ABdev_revelance'),
			'tab' => esc_html__('Featured', 'ABdev_revelance'),
		),
		'featured_text' => array(
			'description' => esc_html__('Featured Info', 'ABdev_revelance'),
			'tab' => esc_html__('Featured', 'ABdev_revelance'),
		),
		'button_text' => array(
			'description' => esc_html__( 'Button Text', 'ABdev_revelance' ),
			'tab' => esc_html__('Button', 'ABdev_revelance'),
		),
		'button_size' => array(
			'description' => esc_html__( 'Size', 'ABdev_revelance' ),
			'default' => 'medium',
			'type' => 'select',
			'values' => array(
				'small' =>  esc_html__( 'Small', 'ABdev_revelance' ),
				'medium' => esc_html__( 'Medium', 'ABdev_revelance' ),
				'large' => esc_html__( 'Large', 'ABdev_revelance' ),
				'xlarge' => esc_html__( 'Extra Large', 'ABdev_revelance' ),
			),
			'tab' => esc_html__('Button', 'ABdev_revelance'),
		),
		'button_color' => array(
			'description' => esc_html__( 'Button Text Color', 'ABdev_revelance' ),
			'type' => 'color',
			'tab' => esc_html__('Button', 'ABdev_revelance'),
		),
		'border_color' => array(
			'description' => esc_html__( 'Button Border Color', 'ABdev_revelance' ),
			'type' => 'color',
			'tab' => esc_html__('Button', 'ABdev_revelance'),
		),
		'button_background' => array(
			'description' => esc_html__( 'Button Background Color', 'ABdev_revelance' ),
			'type' => 'coloralpha',
			'tab' => esc_html__('Button', 'ABdev_revelance'),
		),
		'button_hover' => array(
			'description' => esc_html__('Override Button Hover', 'ABdev_revelance'),
			'type' => 'color',
			'divider' => 'true',
			'tab' => esc_html__('Button', 'ABdev_revelance'),
		),
		'button_style' => array(
			'description' => esc_html__( 'Style', 'ABdev_revelance' ),
			'default' => 'normal',
			'type' => 'select',
			'values' => array(
				'normal' =>  esc_html__( 'Normal', 'ABdev_revelance' ),
				'rounded' =>  esc_html__( 'Rounded', 'ABdev_revelance' ),
			),
			'tab' => esc_html__('Button', 'ABdev_revelance'),
		),
		'button_url' => array(
			'description' => esc_html__( 'URL', 'ABdev_revelance' ),
			'tab' => esc_html__('Button', 'ABdev_revelance'),
		),
		'button_target' => array(
			'description' => esc_html__( 'Target', 'ABdev_revelance' ),
			'default' => '_self',
			'type' => 'select',
			'values' => array(
				'_self' =>  esc_html__( 'Self', 'ABdev_revelance' ),
				'_blank' => esc_html__( 'Blank', 'ABdev_revelance' ),
			),
			'tab' => esc_html__('Button', 'ABdev_revelance'),
		),
		'button_icon' => array(
			'description' => esc_html__('Button Icon', 'ABdev_revelance'),
			'info' => esc_html__('Optional icon after button text', 'ABdev_revelance'),
			'type' => 'icon',
			'tab' => esc_html__('Button', 'ABdev_revelance'),
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
function tcvpb_pricing_box_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('pricing_box_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$featured_output=($featured=='1')?' tcvpb_popular-plan':'';
	$decsription_output=($decsription!='')?'<span class="tcvpb_pricebox_decsription">'.$decsription.'</span>':'';
	$featured_text_output=($featured_text!='')?'<div class="tcvpb_pricebox_featured_text">'.$featured_text.'</div>':'';


	$button_color=($button_color!='')?'color:'.$button_color.';':'';

	$button_background=($button_background!='')?'background:'.$button_background.';':'';
	$border_color=($border_color!='')?'border-color:'.$border_color.';':'';

	$button_out='';
	if($button_text != ''){
		$class_out = 'tcvpb-button';
		$class_out .= ' tcvpb-button_'.$button_color;
		$class_out .= ' tcvpb-button_'.$button_style;
		$class_out .= ' tcvpb-button_'.$button_size;
		$icon_out = ($button_icon!='') ? '<i class="'.$button_icon.'"></i>' : '';
		$button_out = '<div class="tcvpb_pricebox_feature tcvpb_pricebox_feature_button"><a href="'. $button_url .'" target="' . $button_target . '" class="'.$class_out.'" style="'.esc_attr($button_color).' '.esc_attr($button_background).' '.esc_attr($border_color).'">' . $button_text . $icon_out . '</a></div>';
	}

	static $i = 0;
    $i++;
	$button_hover = ($button_hover!='') ? '
						<style type="text/css" scoped="scoped">
							.tcvpb_pricing_table_'.$i.' .tcvpb-button:hover{
								background: '.esc_attr($button_hover).'!important;
							}
						</style>' : '';

	static $count_priceboxes;
	$count_priceboxes++;
	return '
	<div '.esc_attr($id_out).' class="tcvpb_pricing-table-'.$style.' tcvpb_pricing_table_'.$i.' '.$featured_output.'">
		'.$button_hover.'
		<div class="tcvpb_plan tcvpb_plan'.$count_priceboxes.'">
			'.$featured_text_output.'
			<div class="tcvpb_pricebox_header">
				<span class="tcvpb_pricebox_name">'.$name.'</span>
				<span class="tcvpb_pricebox_currency">'.$currency.'</span>
				<span class="tcvpb_pricebox_price">'.$price.'</span>
				<span class="tcvpb_pricebox_monthly">'.$monthly.'</span>
				'.$decsription_output.'
			</div>
			'.do_shortcode($content).'
			'.$button_out.'
		</div>
	</div>';
}

$tcvpb_elements['pricing_feature_tc'] = array(
	'name' => esc_html__('Pricing feature', 'ABdev_revelance' ),
	'type' => 'child',
	'attributes' => array(
		'name' => array(
			'description' => esc_html__('Feature Name', 'ABdev_revelance'),
		),
		'value' => array(
			'description' => esc_html__('Value', 'ABdev_revelance'),
		),
		'yes' => array(
			'type' => 'icon',
			'description' => esc_html__('Avaliable Icon', 'ABdev_revelance'),
		),
		'no' => array(
			'type' => 'icon',
			'description' => esc_html__('Not Avaliable Icon', 'ABdev_revelance'),
		),
	),
);
function tcvpb_pricing_feature_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('pricing_feature_tc'), $attributes));
	$yes_output = ($yes!='')?'<i class="'.esc_attr($yes).'"></i>':'';
	$no_output = ($no!='')?'<i class="'.esc_attr($no).'"></i>':'';
	return '<span class="tcvpb_pricebox_feature">'.$yes_output.$no_output.'<strong>'.esc_attr($value).'</strong> '.esc_attr($name).'</span>';
}