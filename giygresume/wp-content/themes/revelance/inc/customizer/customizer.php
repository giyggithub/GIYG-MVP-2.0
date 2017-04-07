<?php

require_once( get_template_directory(). '/inc/customizer/custom_controls.php' );
require_once( get_template_directory(). '/inc/customizer/import_redux_options.php' );

function revelance_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	/**
	------------------------------------------------------------
	SECTION: General
	------------------------------------------------------------
	**/
	$wp_customize->add_section('section_general', array(
		'title'		=> __('General', 'ABdev_revelance'),
		'priority'	=> 0,
	));

		/**
		Disable Responsiveness
		**/
		$wp_customize->add_setting('disable_responsiveness', array(
			'default'     => '',
		));
		$wp_customize->add_control(new Revelance_Toggle_Checkbox_Custom_control($wp_customize, 'disable_responsiveness', array(
			'label'    => __('Disable Responsiveness', 'ABdev_revelance'),
			'type'     => 'checkbox',
			'section'  => 'section_general',
		)));

		/**
		Google Map API Key
		**/
		$wp_customize->add_setting('google_maps_api_key', array(
			'default'     => '',
		));
		$wp_customize->add_control('google_maps_api_key', array(
			'label'    => esc_html__('Google Map API Key', 'ABdev_revelance'),
			'description'    => esc_html__('For more details please check ', 'ABdev_revelance'). '<a href="'.esc_url('https://developers.google.com/maps/documentation/javascript/get-api-key').'" target="_blank">'.esc_html__( 'Google Maps API v3', 'ABdev_revelance' ).'</a>' . esc_html__(' documentation.', 'ABdev_revelance'),
			'type'     => 'text',
			'section'  => 'section_general',
		));

		/**
		Hide Comments
		**/
		$wp_customize->add_setting('hide_comments', array(
			'default'     => '',
		));
		$wp_customize->add_control(new Revelance_Toggle_Checkbox_Custom_control($wp_customize, 'hide_comments', array(
			'label'    		=> __('Hide Comments', 'ABdev_revelance'),
			'description'   => __('Check this to hide WordPress comments', 'ABdev_revelance'),
			'type'     		=> 'checkbox',
			'section'  		=> 'section_general',
		)));

		/**
		Use Preloader
		**/
		$wp_customize->add_setting('enable_preloader', array(
			'default'     => '',
		));
		$wp_customize->add_control(new Revelance_Toggle_Checkbox_Custom_control($wp_customize, 'enable_preloader', array(
			'label'    => __('Use Preloader', 'ABdev_revelance'),
			'type'     => 'checkbox',
			'section'  => 'section_general',
		)));

		/**
		Boxed Body
		**/
		$wp_customize->add_setting('boxed_body', array(
			'default'     => '',
		));
		$wp_customize->add_control(new Revelance_Toggle_Checkbox_Custom_control($wp_customize, 'boxed_body', array(
			'label'    		=> __('Boxed Body', 'ABdev_revelance'),
			'description'   => esc_attr__('Check this to enable boxed body layout', 'ABdev_revelance'),
			'type'     => 'checkbox',
			'section'  		=> 'section_general',
		)));

		/**
		Body Background
		**/
		$wp_customize->add_setting('bg_color', array(
			'default'     => '#000000',
			'transport'	  => 'postMessage',
		));
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bg_color', array(
			'label'      => esc_attr__('Background Color', 'ABdev_revelance'),
			'settings'   => 'bg_color',
			'section'    => 'section_general',
		)));


        $wp_customize->add_setting( 'custom_bg_image', array(
            'default'        => '',
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_bg_image' , array(
			'label'      => esc_attr__('Background Image', 'ABdev_revelance'),
			'settings'   => 'custom_bg_image',
			'section'    => 'section_general',
        )));


        $wp_customize->add_setting( 'revelance_background_repeat', array(
            'default'        => 'no-repeat',
        ) );

        $wp_customize->add_control( 'revelance_background_repeat', array(
            'label'      => esc_attr__( 'Background Repeat', 'ABdev_revelance' ),
            'section'    => 'section_general',
            'type'       => 'select',
            'choices'    => array(
                'no-repeat'  => esc_attr__('No Repeat', 'ABdev_revelance'),
                'repeat'     => esc_attr__('Tile', 'ABdev_revelance'),
                'repeat-x'   => esc_attr__('Tile Horizontally', 'ABdev_revelance'),
                'repeat-y'   => esc_attr__('Tile Vertically', 'ABdev_revelance'),
            ),
        ) );


        $wp_customize->add_setting( 'revelance_background_size', array(
            'default'        => 'cover',
        ) );

        $wp_customize->add_control( 'revelance_background_size', array(
            'label'      => esc_attr__( 'Background Size', 'ABdev_revelance' ),
            'section'    => 'section_general',
            'type'       => 'select',
            'choices'    => array(
                'cover'  => esc_attr__('Cover', 'ABdev_revelance'),
                'contain' => esc_attr__('Contain', 'ABdev_revelance'),
            ),
        ) );

        $wp_customize->add_setting( 'revelance_background_position', array(
            'default'  => 'center center',
        ) );

        $wp_customize->add_control( 'revelance_background_position', array(
            'label'      => esc_attr__( 'Background Position', 'ABdev_revelance' ),
            'section'    => 'section_general',
            'type'       => 'select',
            'choices'    => array(
                'left top'       => esc_attr__( 'Left Top', 'ABdev_revelance' ),
                'left center'     => esc_attr__( 'Left Center', 'ABdev_revelance' ),
                'left bottom'      => esc_attr__( 'Left Bottom', 'ABdev_revelance' ),
                'center top'       => esc_attr__( 'Center Top', 'ABdev_revelance' ),
                'center center'     => esc_attr__( 'Center Center', 'ABdev_revelance' ),
                'center bottom'      => esc_attr__( 'Center Bottom', 'ABdev_revelance' ),
                'right top'       => esc_attr__( 'Right Top', 'ABdev_revelance' ),
                'right center'     => esc_attr__( 'Right Center', 'ABdev_revelance' ),
                'right bottom'      => esc_attr__( 'Right Bottom', 'ABdev_revelance' ),
            ),
        ) );

        $wp_customize->add_setting( 'revelance_background_attachment', array(
            'default'        => 'fixed',
        ) );

        $wp_customize->add_control( 'revelance_background_attachment', array(
            'label'      => esc_attr__( 'Background Attachment', 'ABdev_revelance' ),
            'section'    => 'section_general',
            'type'       => 'select',
            'choices'    => array(
                'fixed'      => esc_attr__('Fixed', 'ABdev_revelance'),
                'scroll'     => esc_attr__('Scroll', 'ABdev_revelance'),
            ),
        ) );



	/**
	------------------------------------------------------------
	SECTION: Header
	------------------------------------------------------------
	**/
	$wp_customize->add_section('section_header', array(
		'title'		=> __('Header', 'ABdev_revelance'),
		'priority'	=> 0,
	));

		/**
		Header Logo
		**/
		$wp_customize->add_setting('header_logo', array(
			'default'     => '',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
			'label'     	=> __( 'Header Logo', 'ABdev_revelance' ),
			'settings'  	=> 'header_logo',
			'section'   	=> 'section_header',
		)));

		/**
		Sticky Header Logo
		**/
		$wp_customize->add_setting('sticky_header_logo', array(
			'default'     => '',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sticky_header_logo', array(
			'label'     	=> __( 'Sticky Header Logo', 'ABdev_revelance' ),
			'settings'  	=> 'sticky_header_logo',
			'section'   	=> 'section_header',
		)));

		/**
		Header Retina Logo
		**/
		$wp_customize->add_setting('header_retina_logo', array(
			'default'     => '',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_retina_logo', array(
			'label'     	=> esc_html__( 'Header Logo (Retina Version @2x)', 'ABdev_revelance' ),
			'description'    => esc_html__('Select an image file for the retina version of the logo. It should be exactly 2x the size of main logo.', 'ABdev_revelance'),
			'settings'  	=> 'header_retina_logo',
			'section'   	=> 'section_header',
		)));

		/**
		Header Retina Logo Width
		**/
		$wp_customize->add_setting('header_retina_logo_width', array(
			'default'     => '',
		));
		$wp_customize->add_control('header_retina_logo_width', array(
			'label'    => esc_html__('Retina Logo Width', 'ABdev_revelance'),
			'description'    => esc_html__('If retina logo is uploaded, enter the standard logo (1x) version width, do not enter the retina logo width.', 'ABdev_revelance'),
			'type'     => 'text',
			'section'  => 'section_header',
		));

		/**
		Header Retina Logo Height
		**/
		$wp_customize->add_setting('header_retina_logo_height', array(
			'default'     => '',
		));
		$wp_customize->add_control('header_retina_logo_height', array(
			'label'    => esc_html__('Retina Logo Height', 'ABdev_revelance'),
			'description'    => esc_html__('If retina logo is uploaded, enter the standard logo (1x) version height, do not enter the retina logo height.', 'ABdev_revelance'),
			'type'     => 'text',
			'section'  => 'section_header',
		));

		/**
		Sticky Header Retina Logo
		**/
		$wp_customize->add_setting('sticky_header_retina_logo', array(
			'default'     => '',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sticky_header_retina_logo', array(
			'label'     	=> esc_html__( 'Sticky Header Logo (Retina Version @2x)', 'ABdev_revelance' ),
			'description'    => esc_html__('Select an image file for the retina version of the logo. It should be exactly 2x the size of main logo.', 'ABdev_revelance'),
			'settings'  	=> 'sticky_header_retina_logo',
			'section'   	=> 'section_header',
		)));

		/**
		Sticky Header Retina Logo Width
		**/
		$wp_customize->add_setting('sticky_header_retina_logo_width', array(
			'default'     => '',
		));
		$wp_customize->add_control('sticky_header_retina_logo_width', array(
			'label'    => esc_html__('Sticky Header Retina Logo Width', 'ABdev_revelance'),
			'description'    => esc_html__('If retina logo is uploaded, enter the standard logo (1x) version width, do not enter the retina logo width.', 'ABdev_revelance'),
			'type'     => 'text',
			'section'  => 'section_header',
		));

		/**
		Sticky Header Retina Logo Height
		**/
		$wp_customize->add_setting('sticky_header_retina_logo_height', array(
			'default'     => '',
		));
		$wp_customize->add_control('sticky_header_retina_logo_height', array(
			'label'    => esc_html__('Sticky Header Retina Logo Height', 'ABdev_revelance'),
			'description'    => esc_html__('If retina logo is uploaded, enter the standard logo (1x) version height, do not enter the retina logo height.', 'ABdev_revelance'),
			'type'     => 'text',
			'section'  => 'section_header',
		));


	/**
	------------------------------------------------------------
	SECTION: Header Social Icons
	------------------------------------------------------------
	**/
	$wp_customize->add_section('section_header_social_icons', array(
		'title'		=> __('Header Social Icons', 'ABdev_revelance'),
		'priority'	=> 0,
	));

		/**
		Facebook URL
		**/
		$wp_customize->add_setting('facebook', array(
			'default'     => '',
		));
		$wp_customize->add_control('facebook', array(
			'label'    		=> __('Facebook URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Twitter URL
		**/
		$wp_customize->add_setting('twitter', array(
			'default'     => '',
		));
		$wp_customize->add_control('twitter', array(
			'label'    		=> __('Twitter URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Googleplus URL
		**/
		$wp_customize->add_setting('googleplus', array(
			'default'     => '',
		));
		$wp_customize->add_control('googleplus', array(
			'label'    		=> __('Googleplus URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Linkedin URL
		**/
		$wp_customize->add_setting('linkedin', array(
			'default'     => '',
		));
		$wp_customize->add_control('linkedin', array(
			'label'    		=> __('Linkedin URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Pinterest URL
		**/
		$wp_customize->add_setting('pinterest', array(
			'default'     => '',
		));
		$wp_customize->add_control('pinterest', array(
			'label'    		=> __('Pinterest URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Github URL
		**/
		$wp_customize->add_setting('github', array(
			'default'     => '',
		));
		$wp_customize->add_control('github', array(
			'label'    		=> __('Github URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Feed URL
		**/
		$wp_customize->add_setting('feed', array(
			'default'     => '',
		));
		$wp_customize->add_control('feed', array(
			'label'    		=> __('Feed URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Behance URL
		**/
		$wp_customize->add_setting('behance', array(
			'default'     => '',
		));
		$wp_customize->add_control('behance', array(
			'label'    		=> __('Behance URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Dribbble URL
		**/
		$wp_customize->add_setting('dribbble', array(
			'default'     => '',
		));
		$wp_customize->add_control('dribbble', array(
			'label'    		=> __('Dribbble URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Dropbox URL
		**/
		$wp_customize->add_setting('dropbox', array(
			'default'     => '',
		));
		$wp_customize->add_control('dropbox', array(
			'label'    		=> __('Dropbox URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Mail URL
		**/
		$wp_customize->add_setting('mail', array(
			'default'     => '',
		));
		$wp_customize->add_control('mail', array(
			'label'    		=> __('Mail URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Flickr URL
		**/
		$wp_customize->add_setting('flickr', array(
			'default'     => '',
		));
		$wp_customize->add_control('flickr', array(
			'label'    		=> __('Flickr URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Instagram URL
		**/
		$wp_customize->add_setting('instagram', array(
			'default'     => '',
		));
		$wp_customize->add_control('instagram', array(
			'label'    		=> __('Instagram URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Lastfm URL
		**/
		$wp_customize->add_setting('lastfm', array(
			'default'     => '',
		));
		$wp_customize->add_control('lastfm', array(
			'label'    		=> __('Lastfm URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Picasa URL
		**/
		$wp_customize->add_setting('picasa', array(
			'default'     => '',
		));
		$wp_customize->add_control('picasa', array(
			'label'    		=> __('Picasa URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Skype URL
		**/
		$wp_customize->add_setting('skype', array(
			'default'     => '',
		));
		$wp_customize->add_control('skype', array(
			'label'    		=> __('Skype URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Stumbleupon URL
		**/
		$wp_customize->add_setting('stumbleupon', array(
			'default'     => '',
		));
		$wp_customize->add_control('stumbleupon', array(
			'label'    		=> __('Stumbleupon URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		Vimeo URL
		**/
		$wp_customize->add_setting('vimeo', array(
			'default'     => '',
		));
		$wp_customize->add_control('vimeo', array(
			'label'    		=> __('Vimeo URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));

		/**
		YouTube URL
		**/
		$wp_customize->add_setting('youtube', array(
			'default'     => '',
		));
		$wp_customize->add_control('youtube', array(
			'label'    		=> __('YouTube URL', 'ABdev_revelance'),
			'type'     		=> 'url',
			'section'  		=> 'section_header_social_icons',
		));


if( in_array('dnd-shortcodes/dnd-shortcodes.php', get_option('active_plugins')) ){
	/**
	------------------------------------------------------------
	SECTION: Icons
	------------------------------------------------------------
	**/
	$wp_customize->add_section('section_icons', array(
		'title'		=> __('Icons', 'ABdev_revelance'),
		'priority'	=> 0,
	));

		/**
		Info
		**/
		$wp_customize->add_setting('icons_info_1', array(
			'default'     => '',
		));
		$wp_customize->add_control(new Info_Custom_control($wp_customize, 'icons_info_1', array(
			'label'     	=> __( "Complete theme's icons names list", 'ABdev_revelance' ),
			'description'   => __( 'Icon list with all icons and their names can be found <a href="'.esc_url(get_template_directory_uri()).'/css/core_icons/demo.html" target="_blank">here</a>.', 'ABdev_revelance' ),
			'settings'  	=> 'icons_info_1',
			'section'   	=> 'section_icons',
		)));


		/**
		Disable Theme Icon Font
		**/
		$wp_customize->add_setting('disable_icon_font', array(
			'default'     => '',
		));
		$wp_customize->add_control(new Revelance_Toggle_Checkbox_Custom_control($wp_customize, 'disable_icon_font', array(
			'label'    => __('Disable Theme Icon Font', 'ABdev_revelance'),
			'description'    => __("If you don't use theme's icons (e.g. you have Font Awesome or WHHG enabled in Drag and Drop settings) you can disable theme's icon set.", 'ABdev_revelance'),
			'type'     => 'checkbox',
			'section'  => 'section_icons',
		)));

		/**
		Info
		**/
		$wp_customize->add_setting('icons_info_2', array(
			'default'     => '',
		));
		$wp_customize->add_control(new Info_Custom_control($wp_customize, 'icons_info_2', array(
			'label'     	=> __( "Additional theme's icons names list", 'ABdev_revelance' ),
			'description'   => __( 'Icon list with all icons and their names can be found <a href="'.esc_url(get_template_directory_uri()).'/css/icons/demo.html" target="_blank">here</a>.', 'ABdev_revelance' ),
			'settings'  	=> 'icons_info_2',
			'section'   	=> 'section_icons',
		)));
}


	/**
	------------------------------------------------------------
	SECTION: Sidebars
	------------------------------------------------------------
	**/
	$wp_customize->add_section('section_sidebars', array(
		'title'		=> __('Sidebars', 'ABdev_revelance'),
		'priority'	=> 0,
	));

		/**
		Sidebars
		**/
		$wp_customize->add_setting('sidebars', array(
			'default'     => '',
			'transport'   => 'postMessage',
		));
		$wp_customize->add_control(new Multi_Input_Custom_control($wp_customize, 'sidebars', array(
			'label'     	=> __( 'Sidebars', 'ABdev_revelance' ),
			'description'   => __( 'Add as many custom sidebars as you need', 'ABdev_revelance' ),
			'settings'  	=> 'sidebars',
			'section'   	=> 'section_sidebars',
		)));


	/**
	------------------------------------------------------------
	SECTION: Colors
	------------------------------------------------------------
	**/

		/**
		Main Color
		**/
		$wp_customize->add_setting('main_color', array(
			'default'     => '#e42382',
			'transport'   => 'postMessage',
		));
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_color', array(
			'label'      => __('Main Color', 'ABdev_revelance'),
			'settings'   => 'main_color',
			'section'    => 'colors',
		)));

		/**
		Dark Scheme
		**/
		$wp_customize->add_setting('dark_scheme', array(
			'default'     => '',
			'transport'   => 'postMessage',
		));
		$wp_customize->add_control(new Revelance_Toggle_Checkbox_Custom_control($wp_customize, 'dark_scheme', array(
			'label'    => __('Dark Scheme', 'ABdev_revelance'),
			'type'     => 'checkbox',
			'section'  => 'colors',
		)));


	/**
	------------------------------------------------------------
	SECTION: Blog
	------------------------------------------------------------
	**/
	$wp_customize->add_section('section_blog', array(
		'title'		=> __('Blog', 'ABdev_revelance'),
		'priority'	=> 0,
	));

		/**
		Additional Content After Category
		**/
		$wp_customize->add_setting('content_after_category', array(
			'default'     => '',
		));
		$wp_customize->add_control('content_after_category', array(
			'label'    => __('Additional Content After Category', 'ABdev_revelance'),
			'description'   => __('Enter HTML content to be shown at the bottom of blog category page, before footer.', 'ABdev_revelance'),
			'type'     => 'textarea',
			'section'  => 'section_blog',
		));

		/**
		Additional Content After Single Post
		**/
		$wp_customize->add_setting('content_after_single_post', array(
			'default'     => '',
		));
		$wp_customize->add_control('content_after_single_post', array(
			'label'    => __('Additional Content After Single Post', 'ABdev_revelance'),
			'description'   => __('Enter HTML content to be shown at the bottom of single post page, before footer.', 'ABdev_revelance'),
			'type'     => 'textarea',
			'section'  => 'section_blog',
		));


	/**
	------------------------------------------------------------
	SECTION: Footer
	------------------------------------------------------------
	**/
	$wp_customize->add_section('section_footer', array(
		'title'		=> __('Footer', 'ABdev_revelance'),
		'priority'	=> 0,
	));

		/**
		Hide Back to Top
		**/
		$wp_customize->add_setting('hide_back_to_top', array(
			'default'     => '',
		));
		$wp_customize->add_control(new Revelance_Toggle_Checkbox_Custom_control($wp_customize, 'hide_back_to_top', array(
			'label'    => __('Hide Back to Top', 'ABdev_revelance'),
			'type'     => 'checkbox',
			'section'  => 'section_footer',
		)));

		/**
		Footer Punchline
		**/
		$wp_customize->add_setting('punchline', array(
			'default'     => '',
		));
		$wp_customize->add_control('punchline', array(
			'label'    => __('Footer Punchline', 'ABdev_revelance'),
			'type'     => 'text',
			'section'  => 'section_footer',
		));


		/**
		Copyright Notice
		**/
		$wp_customize->add_setting('copyright', array(
			'default'     => '',
		));
		$wp_customize->add_control('copyright', array(
			'label'    => __('Copyright Notice', 'ABdev_revelance'),
			'description'    => __('Enter copyright notice to be shown in footer', 'ABdev_revelance'),
			'type'     => 'text',
			'section'  => 'section_footer',
		));



}
add_action('customize_register', 'revelance_customize_register');

function revelance_customizer_live_preview(){
	wp_enqueue_script('revelance-themecustomizer', get_template_directory_uri().'/inc/customizer/js/customizer.js', array('jquery', 'customize-preview'), '', true);
}
add_action( 'customize_preview_init', 'revelance_customizer_live_preview' );