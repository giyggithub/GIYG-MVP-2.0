<?php

/**
	ab-testimonials plugin support
**/
if( in_array('ab-testimonials/ab-testimonials.php', get_option('active_plugins')) ){ //first check if plugin is installed
	$tcvpb_elements['AB_testimonials'] = array(
		'name' => esc_html__('Testimonials Slider', 'ABdev_revelance' ),
		'description' => esc_html__('Testimonials Slider', 'ABdev_revelance'),
		'type' => 'block',
		'icon' => 'pi-testimonials',
		'category' =>  esc_html__('Social', 'ABdev_revelance'),
		'third_party' => '1',
		'attributes' => array(
			'category' => array(
				'description' => esc_html__('Testimonial Category', 'ABdev_revelance'),
				'info' => esc_html__('Show only testimonials from specific category, displays all categories if not specified (category slug string)', 'ABdev_revelance'),
			),
			'count' => array(
				'description' => esc_html__('Count', 'ABdev_revelance'),
				'info' => esc_html__('Number of testimonials to show', 'ABdev_revelance'),
				'default' => '8',
			),
			'style' => array(
				'default' => '1',
				'type' => 'select',
				'values' => array(
					'1' => 'Testimonial Big',
					'2' => 'Testimonial Small with Image',
				),
				'description' => esc_html__('Style', 'ABdev_revelance'),
				'divider' => 'true',
			),
			'show_arrows' => array(
				'description' => esc_html__('Show Arrows', 'ABdev_revelance'),
				'type' => 'checkbox',
				'default' => '0',
			),
			'show_pagination' => array(
				'description' => esc_html__('Show Pagination', 'ABdev_revelance'),
				'type' => 'checkbox',
				'default' => '0',
				'divider' => 'true',
			),
			'delimiter' => array(
				'description' => esc_html__('Delimiter', 'ABdev_revelance'),
				'info' => esc_html__('Delimiter between author and company', 'ABdev_revelance'),
				'default' => '',
			),
			'fx' => array(
				'default' => 'crossfade',
				'type' => 'select',
				'values' => array(
					'crossfade' => 'Crossfade',
					'cover-fade' => 'Cover-Fade',
					'fade' => 'Fade',
					'none' => 'None',
				),
				'description' => esc_html__('Slide Effect Name', 'ABdev_revelance'),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'easing' => array(
				'default' => 'quadratic',
				'type' => 'select',
				'values' => array(
					'linear' => 'linear',
					'swing' => 'swing',
					'quadratic' => 'quadratic',
					'cubic' => 'cubic',
					'elastic' => 'elastic',
				),
				'description' => esc_html__('Slide Effect Easing', 'ABdev_revelance'),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'duration' => array(
				'description' => esc_html__('Duration', 'ABdev_revelance'),
				'default' => '1000',
				'info' => esc_html__('Duration of slide effect in milliseconds', 'ABdev_revelance'),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'pauseOnHover' => array(
				'default' => 'immediate',
				'type' => 'select',
				'values' => array(
					'false' => 'false',
					'resume' => 'resume',
					'immediate' => 'immediate',
				),
				'description' => esc_html__('Pause on Hover', 'ABdev_revelance'),
				'info' => esc_html__('Determines whether the timeout between transitions should be paused onMouseOver (only applies when play=true)', 'ABdev_revelance'),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'timeoutduration' => array(
				'description' => esc_html__('Slide Duration', 'ABdev_revelance'),
				'default' => '5000',
				'info' => esc_html__('Pause between two slide animations in milliseconds', 'ABdev_revelance'),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'direction' => array(
				'default' => 'left',
				'type' => 'select',
				'values' => array(
					'left' => 'left',
					'right' => 'right',
				),
				'description' => esc_html__('Slide Direction', 'ABdev_revelance'),
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'play' => array(
				'description' => esc_html__('Autoplay Slider', 'ABdev_revelance'),
				'type' => 'checkbox',
				'default' => '1',
				'tab' => esc_html__('Animation', 'ABdev_revelance'),
			),
			'class' => array(
				'description' => esc_html__('Class', 'ABdev_revelance'),
				'info' => esc_html__('Additional custom classes for custom styling', 'ABdev_revelance'),
				'tab' => esc_html__('Advanced', 'ABdev_revelance'),
			),

		),
	);

	$tcvpb_elements['AB_testimonials_submit_form'] = array(
		'name' => esc_html__('Testimonials Submit Form', 'ABdev_revelance' ),
		'description' => esc_html__('Testimonials Submit Form', 'ABdev_revelance'),
		'type' => 'block',
		'icon' => 'pi-testimonials',
		'category' =>  esc_html__('Social', 'ABdev_revelance'),
		'third_party' => 1,
		'attributes' => array(
			'client_placeholder' => array(
				'description' => esc_html__('Name field placeholder', 'ABdev_revelance'),
				'default' => esc_html__('Your Name', 'ABdev_revelance'),
			),
			'client_url_placeholder' => array(
				'description' => esc_html__('Profile field placeholder', 'ABdev_revelance'),
				'default' => esc_html__('Your Profile Link', 'ABdev_revelance'),
			),
			'client_image_placeholder' => array(
				'description' => esc_html__('Image upload field label', 'ABdev_revelance'),
				'default' => esc_html__('Your Image', 'ABdev_revelance'),
			),
			'company_placeholder' => array(
				'description' => esc_html__('Company name field placeholder', 'ABdev_revelance'),
				'default' => esc_html__('Your Company', 'ABdev_revelance'),
			),
			'company_url_placeholder' => array(
				'description' => esc_html__('Company link field placeholder', 'ABdev_revelance'),
				'default' => esc_html__('Your Company Link', 'ABdev_revelance'),
			),
			'text_placeholder' => array(
				'description' => esc_html__('Testimonial textarea placeholder', 'ABdev_revelance'),
				'default' => esc_html__('Your Testimonial', 'ABdev_revelance'),
			),
			'button_text_placeholder' => array(
				'description' => esc_html__('Submit button text', 'ABdev_revelance'),
				'default' => esc_html__('Submit Testimonial', 'ABdev_revelance'),
			),
			'class' => array(
				'description' => esc_html__('Class', 'ABdev_revelance'),
				'info' => esc_html__('Additional custom classes for custom styling', 'ABdev_revelance'),
				'tab' => esc_html__('Advanced', 'ABdev_revelance'),
			),
		),
	);
}
