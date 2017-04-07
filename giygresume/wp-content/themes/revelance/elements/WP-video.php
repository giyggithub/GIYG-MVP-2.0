<?php

/**
	Native WP video shortcode support
**/
$tcvpb_elements['video'] = array(
	'name' => esc_html__('Video - HTML5', 'ABdev_revelance' ),
	'description' => esc_html__('Video - HTML5', 'ABdev_revelance'),
	'type' => 'block',
	'icon' => 'pi-video',
	'category' =>  esc_html__('Media', 'ABdev_revelance'),
	'third_party' => '1',
	'attributes' => array(
		'mp4' => array(
			'description' => esc_html__('MP4 file', 'ABdev_revelance'),
			'type' => 'media',
		),
		'm4v' => array(
			'description' => esc_html__('M4V file', 'ABdev_revelance'),
			'type' => 'media',
		),
		'webm' => array(
			'description' => esc_html__('WEBM file', 'ABdev_revelance'),
			'type' => 'media',
		),
		'ogv' => array(
			'description' => esc_html__('OGV file', 'ABdev_revelance'),
			'type' => 'media',
		),
		'wmv' => array(
			'description' => esc_html__('WMV file', 'ABdev_revelance'),
			'type' => 'media',
		),
		'flv' => array(
			'description' => esc_html__('FLV file', 'ABdev_revelance'),
			'type' => 'media',
		),
		'poster' => array(
			'description' => esc_html__('Poster image', 'ABdev_revelance'),
			'type' => 'image',
			'info' => esc_html__('Defines image to show as placeholder before the media plays', 'ABdev_revelance'),
			'divider' => 'true',
		),
		'loop' => array(
			'description' => esc_html__('Loop', 'ABdev_revelance'),
			'default' => 'off',
			'type' => 'select',
			'values' => array(
				'0' => 'Off',
				'1' => 'On',
			),
			'info' => esc_html__('Allows for the looping of media', 'ABdev_revelance'),
		),
		'autoplay' => array(
			'description' => esc_html__('Autoplay', 'ABdev_revelance'),
			'default' => 'off',
			'type' => 'select',
			'values' => array(
				'0' => 'Off',
				'1' => 'On',
			),
			'info' => esc_html__('Causes the media to automatically play as soon as the media file is ready', 'ABdev_revelance'),
		),
		'preload' => array(
			'description' => esc_html__('Preload', 'ABdev_revelance'),
			'default' => 'metadata',
			'type' => 'select',
			'values' => array(
				'metadata' => 'Metadata only',
				'none' => 'None',
				'auto' => 'Load video entirely',
			),
			'info' => esc_html__('Specifies if and how the video should be loaded when the page loads', 'ABdev_revelance'),
		),
	),
);

