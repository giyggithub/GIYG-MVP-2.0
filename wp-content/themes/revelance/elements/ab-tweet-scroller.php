<?php


/**
	ab-tweet-scroller plugin support
**/
if( in_array('ab-tweet-scroller/ab-tweet-scroller.php', get_option('active_plugins')) ){ //first check if plugin is installed
	$tcvpb_elements['ab_tweet_scroller'] = array(
		'name' => esc_html__('AB Tweet Scroller', 'ABdev_revelance' ),
		'description' => esc_html__('AB Tweet Scroller', 'ABdev_revelance'),
		'type' => 'block',
		'icon' => 'pi-tweet',
		'category' =>  esc_html__('Social', 'ABdev_revelance'),
		'third_party' => 1,
		'attributes' => array(
			'user' => array(
				'description' => esc_html__('User', 'ABdev_revelance'),
				'info' => esc_html__('Displays different user than the one specified in API settings', 'ABdev_revelance'),
			),
			'limit' => array(
				'description' => esc_html__('Limit', 'ABdev_revelance'),
				'info' => esc_html__('Number of tweets to show', 'ABdev_revelance'),
				'default' => 5,
			),
			'link_target' => array(
				'description' => esc_html__('External Link Target', 'ABdev_revelance'),
				'default' => '_blank',
				'type' => 'select',
				'values' => array(
					'_blank' => esc_html__('Blank', 'ABdev_revelance'),
					'_self' =>  esc_html__('Self', 'ABdev_revelance'),
				),
				'divider' => 'true',
			),
			'hide_image' => array(
				'default' => '0',
				'type' => 'checkbox',
				'description' => esc_html__('Hide Image', 'ABdev_revelance'),
			),
			'hide_reply' => array(
				'default' => '0',
				'type' => 'checkbox',
				'description' => esc_html__('Hide Reply Link', 'ABdev_revelance'),
			),
			'hide_retweet' => array(
				'default' => '0',
				'type' => 'checkbox',
				'description' => esc_html__('Hide Retweet Link', 'ABdev_revelance'),
			),
			'hide_favorite' => array(
				'default' => '0',
				'type' => 'checkbox',
				'description' => esc_html__('Hide Favorite Link', 'ABdev_revelance'),
				'divider' => 'true',
			),
			'date_format' => array(
				'description' => esc_html__('Date Format', 'ABdev_revelance'),
				'info' => esc_html__('Specifies date format to be used, or to hide the date. Possible values are human, hide or PHP date format string', 'ABdev_revelance'),
				'default' => 'human',
			),
			'show_arrows' => array(
				'default' => '1',
				'type' => 'checkbox',
				'description' => esc_html__('Show Arrows', 'ABdev_revelance'),
			),
			'fx' => array(
				'description' => esc_html__('Effect', 'ABdev_revelance'),
				'default' => 'fade',
				'type' => 'select',
				'values' => array(
					'none' => esc_html__('none', 'ABdev_revelance'),
					'scroll' =>  esc_html__('scroll', 'ABdev_revelance'),
					'fade' =>  esc_html__('fade', 'ABdev_revelance'),
					'crossfade' =>  esc_html__('crossfade', 'ABdev_revelance'),
					'cover-fade' =>  esc_html__('cover-fade', 'ABdev_revelance'),
					'uncover-fade' =>  esc_html__('uncover-fade', 'ABdev_revelance'),
				),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'easing' => array(
				'description' => esc_html__('Easing', 'ABdev_revelance'),
				'default' => 'swing',
				'type' => 'select',
				'values' => array(
					'linear' => esc_html__('linear', 'ABdev_revelance'),
					'swing' =>  esc_html__('swing', 'ABdev_revelance'),
					'cubic' =>  esc_html__('cubic', 'ABdev_revelance'),
					'elastic' =>  esc_html__('elastic', 'ABdev_revelance'),
				),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'duration' => array(
				'description' => esc_html__('Transition Duration', 'ABdev_revelance'),
				'info' => esc_html__('Duration of transition in seconds', 'ABdev_revelance'),
				'default' => '1000',
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'pauseonhover' => array(
				'description' => esc_html__('Pause on Hover', 'ABdev_revelance'),
				'default' => 'immediate',
				'type' => 'select',
				'values' => array(
					'false' => esc_html__('false', 'ABdev_revelance'),
					'resume' =>  esc_html__('resume', 'ABdev_revelance'),
					'immediate' =>  esc_html__('immediate', 'ABdev_revelance'),
				),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'timeoutduration' => array(
				'description' => esc_html__('Transition Duration', 'ABdev_revelance'),
				'info' => esc_html__('How long is each slide displayed, in seconds', 'ABdev_revelance'),
				'default' => '5000',
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'play' => array(
				'default' => '1',
				'type' => 'checkbox',
				'description' => esc_html__('Autoplay', 'ABdev_revelance'),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'class' => array(
				'description' => esc_html__('Class', 'ABdev_revelance'),
				'info' => esc_html__('Additional custom classes for custom styling', 'ABdev_revelance'),
				'tab' => esc_html__('Advanced', 'ABdev_revelance'),
			),
		),
	);
}