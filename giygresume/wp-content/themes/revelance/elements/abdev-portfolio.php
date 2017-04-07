<?php


/**
	abdev-portfolio plugin support
**/
if( in_array('abdev-portfolio/abdev-portfolio.php', get_option('active_plugins')) ){ //first check if plugin is installed
	$tcvpb_elements['portfolio'] = array(
		'name' => esc_html__('Portfolio', 'ABdev_revelance' ),
		'description' => esc_html__('Portfolio', 'ABdev_revelance'),
		'type' => 'block',
		'icon' => 'pi-portfolio',
		'category' =>  esc_html__('Media', 'ABdev_revelance'),
		'third_party' => '1',
		'attributes' => array(
			'category' => array(
				'description' => esc_html__('Portfolio Category', 'ABdev_revelance'),
				'info' => esc_html__('Show only items from specific category, displays all categories if not specified (category slug string)', 'ABdev_revelance'),
				'divider' => 'true',
			),
			'count' => array(
				'description' => esc_html__('Count', 'ABdev_revelance'),
				'info' => esc_html__('Number of portfolio items to be shown', 'ABdev_revelance'),
				'default' => '8',
				'divider' => 'true',
			),
			'link_text' => array(
				'description' => esc_html__('More Link Text', 'ABdev_revelance'),
				'info' => esc_html__('Enter text to be displayed below items as a link to complete portfolio', 'ABdev_revelance'),
			),
			'link_url' => array(
				'description' => esc_html__('More Link URL', 'ABdev_revelance'),
				'info' => esc_html__('Enter URL for link to complete portfolio', 'ABdev_revelance'),
				'divider' => 'true',
			),
		),
	);
}
