<?php

/*********** Shortcode: QR Code ************************************************************/

$tcvpb_elements['qrcode_tc'] = array(
	'name' => esc_html__('QR Code', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-qrcode',
	'category' =>  esc_html__('E-Commerce', 'ABdev_revelance'),
	'attributes' => array(
		'alt' => array(
			'description' => esc_html__('Alt Text', 'ABdev_revelance'),
		),
		'size' => array(
			'default' => '150',
			'description' => esc_html__('Size (px)', 'ABdev_revelance'),
		),
		'align' => array(
			'default' => '',
			'description' => esc_html__('Align', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				'' => esc_html__('None', 'ABdev_revelance'),
				'left' => esc_html__('Left', 'ABdev_revelance'),
				'right' => esc_html__('Right', 'ABdev_revelance'),
			),
			'divider' => 'true',
		),
		'mecard_name' => array(
			'description' => esc_html__('MeCard Name', 'ABdev_revelance'),
		),
		'mecard_address' => array(
			'description' => esc_html__('MeCard Address', 'ABdev_revelance'),
		),
		'mecard_tel' => array(
			'description' => esc_html__('MeCard Telephone', 'ABdev_revelance'),
		),
		'mecard_email' => array(
			'description' => esc_html__('MeCard Email', 'ABdev_revelance'),
		),
		'mecard_url' => array(
			'description' => esc_html__('MeCard URL', 'ABdev_revelance'),
			'divider' => 'true',
		),
		'quality' => array(
			'default' => 'H',
			'description' => esc_html__('Quality', 'ABdev_revelance'),
			'type' => 'select',
			'values' => array(
				'H' => esc_html__('H', 'ABdev_revelance'),
				'L' => esc_html__('L', 'ABdev_revelance'),
				'M' => esc_html__('M', 'ABdev_revelance'),
				'Q' => esc_html__('Q', 'ABdev_revelance'),
			),
		),
		'border' => array(
			'default' => '1',
			'type' => 'checkbox',
			'description' => esc_html__('Border', 'ABdev_revelance'),
		),
		'content' => array(
			'default' => 'http://'.$_SERVER['HTTP_HOST'],
			'description' => esc_html__('Content', 'ABdev_revelance'),
		),
		'current_url' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__('Use current page/post URL', 'ABdev_revelance'),
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
	)
);
function tcvpb_qrcode_tc_shortcode($attributes, $content = null) {
	extract(shortcode_atts(tcvpb_extract_attributes('qrcode_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';
	$class_out = ($class!='') ? 'class='.$class.'' : '';

	if($current_url=='1')
		$content = tcvpb_current_page_url();

	if($mecard_name!='' || $mecard_address!='' || $mecard_tel!='' || $mecard_email!='' || $mecard_url!=''){
		$mecard="MECARD:";
		if($mecard_name!='')
			$mecard.="N:$mecard_name;";
		if($mecard_address!='')
			$mecard.="ADR:$mecard_address;";
		if($mecard_tel!='')
			$mecard.="TEL:$mecard_tel;";
		if($mecard_email!='')
			$mecard.="EMAIL:$mecard_email;";
		if($mecard_url!='')
			$mecard.="URL:$mecard_url;";
		if($content!='')
			$mecard.="NOTE:$content;";
		$content=$mecard;
	}

	$content = urlencode($content);

	if (empty($align) && $align !==0)
		$align = "";
	else
		$align = strip_tags(trim($align));

	$image = 'http://chart.apis.google.com/chart?cht=qr&amp;chld='.$quality.'|'.$border.'&amp;chs=' . $size . 'x' . $size . '&amp;chl=' . $content;

	if ($align == "right")
		$align = ' align="right"';
	if ($align == "left")
		$align = ' align="left"';

	return '<img '.esc_attr($id_out).' '.esc_attr($class_out).' src="' . esc_url($image) . '" alt="' . esc_attr($alt) . '" title="' . esc_attr($alt) . '" width="' . esc_attr($size) . '" height="' . esc_attr($size) . '"' . $align .' />';
}

