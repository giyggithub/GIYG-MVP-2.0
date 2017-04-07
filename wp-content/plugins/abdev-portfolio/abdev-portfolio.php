<?php
/*
Plugin Name: ABdev Portfolio
Plugin URI: http://themeforest.net/user/ab-themes?ref=ab-themes
Description: Portfolio Plugin for Premium Themes
Version: 1.2.3
Author: ab-themes
Author URI: http://themeforest.net/user/ab-themes?ref=ab-themes
License: GPL
*/

include_once 'shortcode.php';


function ABp_add_remove_metaboxes_portfolio() {
	remove_action('edit_form_advanced', array('sidebar_generator', 'edit_form'));
	add_meta_box("portfolio-meta", "Details", "ABp_portfolio_manager_meta_options", "portfolio", "normal", "high"); 
	add_meta_box("portfolio-meta-media", "Featured Media", "ABp_portfolio_meta_media", "portfolio", "side", "low"); 
	add_meta_box("portfolio-meta-media-gallery", "Image Gallery", "ABp_portfolio_meta_gallery_media", "portfolio", "side", "low");
}

function ABp_gallery_metabox_scripts() {
	wp_enqueue_media();
    wp_enqueue_style('ABp_style', plugins_url().'/abdev-portfolio/css/portfolio_shortcode.css', false, '1.0.0');
    wp_enqueue_script( 'ABp_init', plugins_url().'/abdev-portfolio/js/init.js');
}
add_action('admin_enqueue_scripts', 'ABp_gallery_metabox_scripts');
 
function ABp_portfolio_register() {  
	load_plugin_textdomain( 'ABdev-portfolio', false, dirname(plugin_basename(__FILE__)).'/languages/' );
    
    //Arguments to create post type.
    $args = array(  
        'label' => __('Portfolio', 'ABdev-portfolio'),  
        'labels' => array(  
			'add_new_item' => __('New portfolio', 'ABdev-portfolio'),  
			'new_item' => __('New portfolio', 'ABdev-portfolio'),  
			'not_found' => __('No portfolio items', 'ABdev-portfolio'),  
		),  
        'singular_label' => __('Portfolio', 'ABdev-portfolio'),  
        'menu_icon' => 'dashicons-portfolio',
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => true,  
        'has_archive' => false,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'portfolio', 'with_front' => false),
        'register_meta_box_cb' => 'ABp_add_remove_metaboxes_portfolio',
       );  
  
  	//Register type and custom taxonomy for type.
    register_post_type( 'portfolio' , $args );  
    register_taxonomy("portfolio-category", array("portfolio"), array("hierarchical" => true, "label" => "Categories", "singular_label" => "Category", "rewrite" => true, "slug" => 'portfolio-category',"show_in_nav_menus"=>false)); 
} 
add_action('init', 'ABp_portfolio_register');  


function ABp_portfolio_manager_edit_columns($columns){
	$columns = array(
		"cb" => "<input type=\"checkbox\" />",
		"title" => "Name",
		"description" => "Description",
		"cat" => "Category",
		"date" => "Date",
	); 
	return $columns;
} 
add_filter("manage_edit-portfolio_columns", "ABp_portfolio_manager_edit_columns");


function portfolio_manager_custom_columns($column){
	global $post;
	$custom = get_post_custom();
	switch ($column){
		case "description":
			the_excerpt();
		break;
		case "cat":
			echo get_the_term_list($post->ID, 'portfolio-category');
		break;
	}
}
add_action("manage_portfolio_posts_custom_column", "portfolio_manager_custom_columns"); 
 
 
 

//Create area for extra fields
function ABp_portfolio_manager_meta_options(){  
	global $post;  
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;
	$custom = get_post_custom($post->ID);
	$ABp_portfolio_client = (isset($custom["ABp_portfolio_client"][0])) ? $custom["ABp_portfolio_client"][0] : ''; 
	$ABp_portfolio_skills = (isset($custom["ABp_portfolio_skills"][0])) ? $custom["ABp_portfolio_skills"][0] : ''; 
	$ABp_portfolio_link = (isset($custom["ABp_portfolio_link"][0])) ? $custom["ABp_portfolio_link"][0] : ''; 
	$ABp_portfolio_link_target = (isset($custom["ABp_portfolio_link_target"][0])) ? $custom["ABp_portfolio_link_target"][0] : '_blank'; 
	$ABp_portfolio_effect = (isset($custom["ABp_portfolio_effect"][0])) ? $custom["ABp_portfolio_effect"][0] : 'sadie'; 
	$ABp_portfolio_show_related = (isset($custom["ABp_portfolio_show_related"][0]) && $custom["ABp_portfolio_show_related"][0]==1) ? 1 : 0; 
	?>  
	<style type="text/css">
		.portfolio_manager_extras{margin-right: 10px;}
		.portfolio_manager_extras label{display: block;}
		.portfolio_manager_extras input{width: 50%;border: 1px solid #ddd;}
		.portfolio_manager_extras input[type="checkbox"]{width: auto;}
		.portfolio_manager_extras textarea{width: 100%;height: 300px;border: 1px solid #ddd;}
		.portfolio_manager_extras .separator{padding-top: 20px;margin-top: 20px;border-top: 1px solid #ddd;}
	</style>

	<div class="portfolio_manager_extras">
		<p>
			<label>Client Name:</label>
			<input name="ABp_portfolio_client" value="<?php echo $ABp_portfolio_client; ?>" />
		</p>
		<p>
			<label>Used Skills (comma separated):</label>
			<input name="ABp_portfolio_skills" value="<?php echo $ABp_portfolio_skills; ?>" />
		</p>
		<p>
			<label>Link:</label>
			<input name="ABp_portfolio_link" value="<?php echo $ABp_portfolio_link; ?>" />
			<select name="ABp_portfolio_link_target" id="ABp_portfolio_link_target">
				<option value="_blank" <?php selected( $ABp_portfolio_link_target, '_blank' ); ?>>_blank</option>
				<option value="_self" <?php selected( $ABp_portfolio_link_target, '_self' ); ?>>_self</option>
			</select>
		</p>
		<p class="separator">
			<label><input type="checkbox" name="ABp_portfolio_show_related" value="1" <?php checked( $ABp_portfolio_show_related, 1); ?>/> Show Related Items</label>
		</p>
		<p class="separator">
			<label>Shortcode Display Effect:</label>
			<select name="ABp_portfolio_effect" id="ABp_portfolio_effect">
				<option value="bubba" <?php selected( $ABp_portfolio_effect, 'bubba' ); ?>>Bubba</option>
				<option value="chico" <?php selected( $ABp_portfolio_effect, 'chico' ); ?>>Chico</option>
				<option value="dexter" <?php selected( $ABp_portfolio_effect, 'dexter' ); ?>>Dexter</option>
				<option value="marley" <?php selected( $ABp_portfolio_effect, 'marley' ); ?>>Marley</option>
				<option value="milo" <?php selected( $ABp_portfolio_effect, 'milo' ); ?>>Milo</option>
				<option value="oscar" <?php selected( $ABp_portfolio_effect, 'oscar' ); ?>>Oscar</option>
				<option value="romeo" <?php selected( $ABp_portfolio_effect, 'romeo' ); ?>>Romeo</option>
				<option value="roxy" <?php selected( $ABp_portfolio_effect, 'roxy' ); ?>>Roxy</option>
				<option value="ruby" <?php selected( $ABp_portfolio_effect, 'ruby' ); ?>>Ruby</option>
				<option value="sadie" <?php selected( $ABp_portfolio_effect, 'sadie' ); ?>>Sadie</option>
				<option value="sarah" <?php selected( $ABp_portfolio_effect, 'sarah' ); ?>>Sarah</option>
				<option value="zoe" <?php selected( $ABp_portfolio_effect, 'zoe' ); ?>>Zoe</option>
				<option value="none" <?php selected( $ABp_portfolio_effect, 'none' ); ?>>None</option>
			</select>
		</p>
	</div>   
	<?php  
}

//Create area for extra fields

function ABp_portfolio_meta_media(){
	global $post;
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		return $post_id;
	$custom = get_post_custom();
	$ABp_portfolio_youtube_id = isset( $custom["ABp_portfolio_youtube_id"][0] ) ? $custom["ABp_portfolio_youtube_id"][0] : ''; 
	$ABp_portfolio_vimeo_id = isset( $custom["ABp_portfolio_vimeo_id"][0] ) ? $custom["ABp_portfolio_vimeo_id"][0] : ''; 
	$ABp_portfolio_soundcloud = isset( $custom["ABp_portfolio_soundcloud"][0] ) ? $custom["ABp_portfolio_soundcloud"][0] : ''; 
	$ABp_portfolio_selected_media = isset( $custom["ABp_portfolio_selected_media"][0] ) ? $custom["ABp_portfolio_selected_media"][0] : ''; 
	$ABp_portfolio_show_gallery = isset($custom["ABp_portfolio_show_gallery"][0]) ? $custom["ABp_portfolio_show_gallery"][0] : '';
	?>  
	<style type="text/css">
		.post_meta_extras div{margin: 10px;}
		.post_meta_extras .input-field{width: 100%;}
		.post_meta_extras div label{display:block;}	
	</style>
	<div class="post_meta_extras">
		<div>
			<small><?php _e('Here you can set other media to be shown instead of featured image.', 'ABdev-portfolio' ); ?></small>
		</div>
		<div>
			<label>
				<input type="radio" name="ABp_portfolio_selected_media" value="youtube" <?php checked($ABp_portfolio_selected_media, 'youtube') ?>> 
				<?php _e('Youtube Video ID:', 'ABdev-portfolio' ); ?>
				<input class="input-field" name="ABp_portfolio_youtube_id" value="<?php echo $ABp_portfolio_youtube_id; ?>" />
			</label>
		</div>
		<div>
			<label>
				<input type="radio" name="ABp_portfolio_selected_media" value="vimeo" <?php checked($ABp_portfolio_selected_media, 'vimeo') ?>> 
				<?php _e('Vimeo Video ID:', 'ABdev-portfolio' ); ?>
				<input class="input-field" name="ABp_portfolio_vimeo_id" value="<?php echo $ABp_portfolio_vimeo_id; ?>" />
			</label>
		</div>
		<div>
			<label>
				<input type="radio" name="ABp_portfolio_selected_media" value="soundcloud" <?php checked($ABp_portfolio_selected_media, 'soundcloud') ?>> 
				<?php _e('SoundCloud ID:', 'ABdev-portfolio' ); ?>
				<input class="input-field" name="ABp_portfolio_soundcloud" value="<?php echo $ABp_portfolio_soundcloud; ?>" />
			</label>
		</div>
		<div>
			<label>
				<input type="radio" name="ABp_portfolio_selected_media" value="" <?php checked($ABp_portfolio_selected_media, '') ?>> 
				<?php _e('None - Use Featured Image', 'ABdev-portfolio' ); ?>
			</label>
		</div>
		<div>
			<label>
				<input type="radio" name="ABp_portfolio_selected_media" value="gallery" <?php checked($ABp_portfolio_selected_media, 'gallery') ?>> 
				<?php _e('Use Gallery', 'ABdev-portfolio' ); ?>
			</label>
		</div>
	</div>   
	<?php  
}

function ABp_portfolio_meta_gallery_media() {
    global $post;
    // Here we get the current images ids of the gallery
    $custom = get_post_custom($post->ID);
	$portfolio_gallery = (isset($custom["portfolio_gallery"][0])) ? $custom["portfolio_gallery"][0] : '';

    // We display the gallery
    ?>

    <div class="gallery_images">
    	<?php
    	$img_array = (isset($portfolio_gallery) && $portfolio_gallery != '') ? explode(',', $portfolio_gallery) : '';
    	if ($img_array != '') {
	    	foreach ($img_array as $img) {
	    		echo '<div class="gallery-item">'.wp_get_attachment_image($img).'</div>';
	    	}
    	}
    	?>
    </div>
	<p class="separator">
    	<input id="portfolio_gallery_input" type="hidden" name="portfolio_gallery" value="<?php echo $portfolio_gallery; ?>" data-urls=""/>
    	<input id="manage_gallery" title="Manage gallery" type="button" value="Manage gallery" />
    	<input id="empty_gallery" title="Empty gallery" type="button" value="Empty gallery" />
    </p>
    <?php
}    
  
function ABp_portfolio_manager_save_extras(){  
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ 
		return;
	}elseif(is_object($post)){
    	$ABp_portfolio_client = (isset($_POST["ABp_portfolio_client"])) ? $_POST["ABp_portfolio_client"] : '';
		update_post_meta($post->ID, "ABp_portfolio_client", $ABp_portfolio_client); 

    	$ABp_portfolio_skills = (isset($_POST["ABp_portfolio_skills"])) ? $_POST["ABp_portfolio_skills"] : '';
		update_post_meta($post->ID, "ABp_portfolio_skills", $ABp_portfolio_skills); 

    	$ABp_portfolio_link = (isset($_POST["ABp_portfolio_link"])) ? $_POST["ABp_portfolio_link"] : '';
		update_post_meta($post->ID, "ABp_portfolio_link", $ABp_portfolio_link); 

    	$ABp_portfolio_link_target = (isset($_POST["ABp_portfolio_link_target"])) ? $_POST["ABp_portfolio_link_target"] : '';
		update_post_meta($post->ID, "ABp_portfolio_link_target", $ABp_portfolio_link_target); 

    	$ABp_portfolio_effect = (isset($_POST["ABp_portfolio_effect"])) ? $_POST["ABp_portfolio_effect"] : '';
		update_post_meta($post->ID, "ABp_portfolio_effect", $ABp_portfolio_effect); 

    	$ABp_portfolio_show_related = (isset($_POST["ABp_portfolio_show_related"]) && $_POST["ABp_portfolio_show_related"]==1) ? 1 : 0;
		update_post_meta($post->ID, "ABp_portfolio_show_related", $ABp_portfolio_show_related); 

		$ABp_portfolio_youtube_id = (isset($_POST["ABp_portfolio_youtube_id"])) ? $_POST["ABp_portfolio_youtube_id"] : '';
		update_post_meta($post->ID, "ABp_portfolio_youtube_id", $ABp_portfolio_youtube_id); 

		$ABp_portfolio_vimeo_id = (isset($_POST["ABp_portfolio_vimeo_id"])) ? $_POST["ABp_portfolio_vimeo_id"] : '';
		update_post_meta($post->ID, "ABp_portfolio_vimeo_id", $ABp_portfolio_vimeo_id); 

		$ABp_portfolio_soundcloud = (isset($_POST["ABp_portfolio_soundcloud"])) ? $_POST["ABp_portfolio_soundcloud"] : '';
		update_post_meta($post->ID, "ABp_portfolio_soundcloud", $ABp_portfolio_soundcloud); 

		$ABp_portfolio_selected_media = (isset($_POST["ABp_portfolio_selected_media"])) ? $_POST["ABp_portfolio_selected_media"] : '';
		update_post_meta($post->ID, "ABp_portfolio_selected_media", $ABp_portfolio_selected_media); 

		$portfolio_gallery = (isset($_POST["portfolio_gallery"])) ? $_POST["portfolio_gallery"] : '';
		update_post_meta($post->ID, "portfolio_gallery", $portfolio_gallery);
    } 
}  
add_action('save_post', 'ABp_portfolio_manager_save_extras'); 

