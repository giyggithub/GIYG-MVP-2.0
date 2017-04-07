<?php

/*********** Shortcode: Google Map ************************************************************/

$tcvpb_elements['map_tc'] = array(
	'name' => esc_html__('Google Map', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-google-map',
	'category' =>  esc_html__('Content', 'ABdev_revelance'),
	'child' 		=> 'map_marker_tc',
	'child_button' 		=> esc_html__('Add New Marker', 'ABdev_revelance'),
	'child_title' 		=> esc_html__('Marker', 'ABdev_revelance'),
	'attributes' => array(
		'h' => array(
			'default' => '400px',
			'tab' => esc_html__('Customize', 'ABdev_revelance'),
			'description' => esc_html__('Height', 'ABdev_revelance'),
		),
		'map_type' => array(
			'type' => 'select',
			'tab' => esc_html__('Customize', 'ABdev_revelance'),
			'default' => 'ROADMAP',
			'description' => esc_html__('Map Type', 'ABdev_revelance'),
			'values' => array(
				'ROADMAP' => esc_html__('ROADMAP', 'ABdev_revelance'),
				'SATELLITE' => esc_html__('SATELLITE', 'ABdev_revelance'),
				'HYBRID' => esc_html__('HYBRID', 'ABdev_revelance'),
				'TERRAIN' => esc_html__('TERRAIN', 'ABdev_revelance'),
			),
		),
		'lat' => array(
			'default' => '40.7782201',
			'description' => esc_html__('Map Center Latitude', 'ABdev_revelance'),
		),
		'lng' => array(
			'default' => '-73.9733317',
			'description' => esc_html__('Map Center Longitude', 'ABdev_revelance'),
		),
		'auto_center_zoom' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__('Auto Center and Zoom to Show all Markers', 'ABdev_revelance'),
		),
		'zoom' => array(
			'type' => 'select',
			'tab' => esc_html__('Customize', 'ABdev_revelance'),
			'default' => '16',
			'description' => esc_html__('Zoom Level', 'ABdev_revelance'),
			'values' => array(
				'1' => esc_html__('1', 'ABdev_revelance'),
				'2' => esc_html__('2', 'ABdev_revelance'),
				'3' => esc_html__('3', 'ABdev_revelance'),
				'4' => esc_html__('4', 'ABdev_revelance'),
				'5' => esc_html__('5', 'ABdev_revelance'),
				'6' => esc_html__('6', 'ABdev_revelance'),
				'7' => esc_html__('7', 'ABdev_revelance'),
				'8' => esc_html__('8', 'ABdev_revelance'),
				'9' => esc_html__('9', 'ABdev_revelance'),
				'10' => esc_html__('10', 'ABdev_revelance'),
				'11' => esc_html__('11', 'ABdev_revelance'),
				'12' => esc_html__('12', 'ABdev_revelance'),
				'13' => esc_html__('13', 'ABdev_revelance'),
				'14' => esc_html__('14', 'ABdev_revelance'),
				'15' => esc_html__('15', 'ABdev_revelance'),
				'16' => esc_html__('16', 'ABdev_revelance'),
				'17' => esc_html__('17', 'ABdev_revelance'),
				'18' => esc_html__('18', 'ABdev_revelance'),
				'19' => esc_html__('19', 'ABdev_revelance'),
				'20' => esc_html__('20', 'ABdev_revelance'),
				'21' => esc_html__('21', 'ABdev_revelance'),
			),
		),
		'scrollwheel' => array(
			'tab' => esc_html__('Customize', 'ABdev_revelance'),
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__('Enable Scrollweel', 'ABdev_revelance'),
		),
		'maptypecontrol' => array(
			'default' => '1',
			'tab' => esc_html__('Customize', 'ABdev_revelance'),
			'type' => 'checkbox',
			'description' => esc_html__('Show Map Type Controls', 'ABdev_revelance'),
		),
		'pancontrol' => array(
			'default' => '1',
			'tab' => esc_html__('Customize', 'ABdev_revelance'),
			'type' => 'checkbox',
			'description' => esc_html__('Show Pan Controls', 'ABdev_revelance'),
		),
		'zoomcontrol' => array(
			'default' => '1',
			'tab' => esc_html__('Customize', 'ABdev_revelance'),
			'type' => 'checkbox',
			'description' => esc_html__('Show Zoom Controls', 'ABdev_revelance'),
		),
		'scalecontrol' => array(
			'default' => '1',
			'tab' => esc_html__('Customize', 'ABdev_revelance'),
			'type' => 'checkbox',
			'description' => esc_html__('Show Scale Controls', 'ABdev_revelance'),
		),
	),
);

function tcvpb_map_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('map_tc'), $attributes));
	static $i = 0;
	$i++;

	$map_data = ' '
		.'data-map_type="'.$map_type.'" '
		.'data-auto_center_zoom="'.esc_attr($auto_center_zoom).'" '
		.'data-lat="'.esc_attr($lat).'" '
		.'data-lng="'.esc_attr($lng).'" '
		.'data-zoom="'.$zoom.'" '
		.'data-scrollwheel="'.$scrollwheel.'" '
		.'data-maptypecontrol="'.$maptypecontrol.'" '
		.'data-pancontrol="'.$pancontrol.'" '
		.'data-zoomcontrol="'.$zoomcontrol.'" '
		.'data-scalecontrol="'.$scalecontrol.'" ';

	return '
			<div class="tcvpb_google_map_wrapper">
				<div id="tcvpb_google_map_'.$i.'" '.$map_data.' class="tcvpb_google_map" style="height:'.esc_attr($h).';width:100%;"></div>
				'.do_shortcode($content).'
			</div>';

}

$tcvpb_elements['map_marker_tc'] = array(
	'name' => esc_html__('Single marker section', 'ABdev_revelance' ),
	'type' => 'child',
	'attributes' => array(
		'add_markertitle' => array(
			'default' => 'Our Company',
			'description' => esc_html__('Marker Title', 'ABdev_revelance'),
		),
		'add_marker_subtitle' => array(
			'description' => esc_html__('Marker Subtitle', 'ABdev_revelance'),
		),
		'add_markericon' => array(
			'type' => 'image',
			'description' => esc_html__('Custom Marker Image', 'ABdev_revelance'),
		),
		'add_markerlat' => array(
			'description' => esc_html__('Marker Latitude', 'ABdev_revelance'),
		),
		'add_markerlng' => array(
			'description' => esc_html__('Marker Longitude', 'ABdev_revelance'),
		),
		'add_adress' => array(
			'description' => esc_html__('Marker Adress', 'ABdev_revelance'),
		),
		'add_telephone1' => array(
			'description' => esc_html__('Marker Telephone 1', 'ABdev_revelance'),
		),
		'add_telephone2' => array(
			'description' => esc_html__('Marker Telephone 2', 'ABdev_revelance'),
		),
		'add_faxnumber' => array(
			'description' => esc_html__('Marker Fax', 'ABdev_revelance'),
		),
		'add_email' => array(
			'description' => esc_html__('Marker E-mail', 'ABdev_revelance'),
		),
	),
);

function tcvpb_map_marker_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('map_marker_tc'), $attributes));
	$marker_attr = 'data-title="'.esc_attr($add_markertitle).'" data-icon="'.esc_attr($add_markericon).'" data-lat="'.esc_attr($add_markerlat).'" data-lng="'.esc_attr($add_markerlng).'"';
	$return = '<div class="tcvpb_google_map_marker" '.$marker_attr.'>';
	$return .= ($add_marker_subtitle!='') ? '<h5>'.esc_html($add_marker_subtitle).'</h5>' : '';
	$return .= ($add_adress!='') ? '<p class="no_margin_bottom">'.esc_html($add_adress).'</p>' : '';
	$return .= ($add_telephone1!='') ? '<p class="no_margin_bottom">Tel: '.esc_html($add_telephone1).'</p>' : '';
	$return .= ($add_telephone2!='') ? '<p class="no_margin_bottom">Tel(2): '.esc_html($add_telephone2).'</p>' : '';
	$return .= ($add_faxnumber!='') ? '<p class="no_margin_bottom">Fax: '.esc_html($add_faxnumber).'</p>' : '';
	$return .= ($add_email!='') ? '<p class="no_margin_bottom">E-mail: <a href="mailto:'.esc_url($add_email).'">'.esc_html($add_email).'</a></p>' : '';
	$return .= '</div>';

	return $return;

}