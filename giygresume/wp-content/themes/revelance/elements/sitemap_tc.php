<?php

/*********** Shortcode: Sitemap ************************************************************/

$tcvpb_elements['sitemap_tc'] = array(
	'name' => esc_html__('Sitemap', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-sitemap',
	'category' =>  esc_html__('Navigation', 'ABdev_revelance'),
	'attributes' => array(
		'hide_pages' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__('Hide Pages', 'ABdev_revelance'),
		),
		'hide_categories' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__('Hide Categories', 'ABdev_revelance'),
		),
		'hide_authors' => array(
			'default' => '0',
			'type' => 'checkbox',
			'description' => esc_html__('Hide Authors', 'ABdev_revelance'),
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
function tcvpb_sitemap_tc_shortcode($attributes){
	extract(shortcode_atts(tcvpb_extract_attributes('sitemap_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$return = '';
	$return .= ($hide_pages != 1) ? '<h4>'.esc_html__('Pages', 'ABdev_revelance').'</h4><ul '.esc_attr($id_out).' class="tcvpb_sitemap '.esc_attr($class).'">'.wp_list_pages('title_li=&echo=0').'</ul>' : '';
	$return .= ($hide_categories != 1) ? '<h4>'.esc_html__('Categories', 'ABdev_revelance').'</h4><ul '.esc_attr($id_out).' class="tcvpb_sitemap '.esc_attr($class).'">'.wp_list_categories('title_li=&echo=0').'</ul>' : '';
	$return .= ($hide_authors != 1) ? '<h4>'.esc_html__('Authors', 'ABdev_revelance').'</h4><ul '.esc_attr($id_out).' class="tcvpb_sitemap '.esc_attr($class).'">'.wp_list_authors('echo=0&hide_empty=0').'</ul>' : '';
	return $return;
}

