<?php

/*********** Shortcode: Blockquote ************************************************************/

$tcvpb_elements['blockquote_tc'] = array(
	'name' => esc_html__('Blockquote Block', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-blockquote',
	'category' => esc_html__('Content', 'ABdev_revelance' ),
	'attributes' => array(
		'author' => array(
			'description' => esc_html__('Author', 'ABdev_revelance'),
		),
		'url_author' => array(
			'description' => esc_html__('Author URL', 'ABdev_revelance'),
		),
		'source' => array(
			'description' => esc_html__('Source', 'ABdev_revelance'),
		),
		'url_source' => array(
			'description' => esc_html__('Source URL', 'ABdev_revelance'),
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
		'description' => esc_html__('Blockquote', 'ABdev_revelance'),
	),
);
function tcvpb_blockquote_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('blockquote_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$quote ='';
	if($source!='' && $url_source!='')
		$source='<cite title="'.esc_attr($source).'"><a href="'.esc_url($url_source).'">'.$source.'</a></cite>';
	if($source!='' && $url_source=='')
		$source='<cite title="'.esc_attr($source).'">'.$source.'</cite>';
	if($author!='' && $url_author!='')
		$content.='<small><a href="'.esc_url($url_author).'">'.$author.'</a> '.$source.'</small>';
	if($author!='' && $url_author=='')
		$content.='<small>'.$author.' '.$source.'</small>';
	return '<blockquote '.esc_attr($id_out).' class="tcvpb_blockquote '.esc_attr($class).'">
		'.$quote.'
		<p>'.do_shortcode($content).'</p>
	</blockquote>';
}