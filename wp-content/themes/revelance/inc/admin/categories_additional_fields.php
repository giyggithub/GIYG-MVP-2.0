<?php

add_action ( 'edit_category_form_fields', 'ABdev_revelance_extra_category_fields');
add_action ( 'category_add_form_fields', 'ABdev_revelance_extra_add_category_fields');

if ( ! function_exists( 'ABdev_revelance_extra_category_fields' ) ){
	function ABdev_revelance_extra_category_fields( $tag ) {
		$t_id = $tag->term_id;
		$cat_meta = get_option( "category_$t_id");
		?>
		<tr class="form-field">
			<th scope="row" valign="top"><label for="extra1"><?php _e('Blog Layout', 'ABdev_revelance'); ?></label></th>
			<td>
				<select name="Cat_meta[sidebar_position]">
					<?php
					echo '<option value="right" '.selected( $cat_meta['sidebar_position'], 'right', false).'>'.esc_attr__('Right Sidebar', 'ABdev_revelance').'</option> ';
					echo '<option value="left" '.selected( $cat_meta['sidebar_position'], 'left', false).'>'.esc_attr__('Left Sidebar', 'ABdev_revelance').'</option> ';
					echo '<option value="none" '.selected( $cat_meta['sidebar_position'], 'none', false).'>'.esc_attr__('No Sidebar', 'ABdev_revelance').'</option> ';
					echo '<option value="masonry3" '.selected( $cat_meta['sidebar_position'], 'masonry3', false).'>'.esc_attr__('Masonry 3 Columns', 'ABdev_revelance').'</option> ';
					echo '<option value="masonry" '.selected( $cat_meta['sidebar_position'], 'masonry', false).'>'.esc_attr__('Masonry 4 columns', 'ABdev_revelance').'</option> ';
					?>
				</select>
			</td>
		</tr>

		<tr class="form-field">
			<th scope="row" valign="top"><label for="cat_Image_url"><?php _e('Sidebar', 'ABdev_revelance'); ?></label></th>
			<td>
				<select name="Cat_meta[sidebar]">
				<?php
				global $wp_registered_sidebars;
				$sidebar_replacements = $wp_registered_sidebars;
				if(is_array($sidebar_replacements) && !empty($sidebar_replacements)){
					foreach($sidebar_replacements as $sidebar){
						echo "<option value='{$sidebar['name']}'".selected($sidebar['name'], $cat_meta['sidebar']).">{$sidebar['name']}</option>";
					}
				}
				?>
				</select>
				<br>
				<span class="description"><?php _e('Please select the sidebar you would like to display on this category. Note: If you like to use custom sidebar you must first create it under Revelance > Sidebars.', 'ABdev_revelance'); ?></span>
			</td>
		</tr>

	<?php
	}
}

if ( ! function_exists( 'ABdev_revelance_extra_add_category_fields' ) ){
	function ABdev_revelance_extra_add_category_fields( $tag ) {
		$t_id = (is_object($tag))?$tag->term_id:'';
		$cat_meta = get_option( "category_$t_id");
		?>

		<div class="form-field">
			<label for="extra1"><?php _e('Blog Layout', 'ABdev_revelance'); ?></label></th>
			<select name="Cat_meta[sidebar_position]">
				<?php
				echo '<option value="right" '.selected( $cat_meta['sidebar_position'], 'right', false).'>'.esc_attr__('Right Sidebar', 'ABdev_revelance').'</option> ';
				echo '<option value="left" '.selected( $cat_meta['sidebar_position'], 'left', false).'>'.esc_attr__('Left Sidebar', 'ABdev_revelance').'</option> ';
				echo '<option value="none" '.selected( $cat_meta['sidebar_position'], 'none', false).'>'.esc_attr__('No Sidebar', 'ABdev_revelance').'</option> ';
				echo '<option value="masonry3" '.selected( $cat_meta['sidebar_position'], 'masonry3', false).'>'.esc_attr__('Masonry 3 Columns', 'ABdev_revelance').'</option> ';
				echo '<option value="masonry" '.selected( $cat_meta['sidebar_position'], 'masonry', false).'>'.esc_attr__('Masonry 4 columns', 'ABdev_revelance').'</option> ';
				?>
			</select>
		</div>

		<div class="form-field">
			<label for="cat_Image_url"><?php _e('Sidebar', 'ABdev_revelance'); ?></label>
				<select name="Cat_meta[sidebar]">
					<?php
					global $wp_registered_sidebars;
					$sidebar_replacements = $wp_registered_sidebars;
					if(is_array($sidebar_replacements) && !empty($sidebar_replacements)){
						foreach($sidebar_replacements as $sidebar){
							echo "<option value='{$sidebar['name']}'".selected($sidebar['name'], $cat_meta['sidebar'], false).">{$sidebar['name']}</option>";
						}
					}
					?>
				</select> <br>

			<p><?php _e('Please select the sidebar you would like to display on this category. Note: If you like to use custom sidebar you must first create it under Revelance > Sidebars.', 'ABdev_revelance'); ?></p>
		</div>
		<?php
	}
}
add_action ( 'edited_category', 'ABdev_revelance_save_extra_category_fileds');
add_action ( 'created_category', 'ABdev_revelance_save_extra_category_fileds');

if ( ! function_exists( 'ABdev_revelance_save_extra_category_fileds' ) ){
	function ABdev_revelance_save_extra_category_fileds( $term_id ) {
		if ( isset( $_POST['Cat_meta'] ) ) {
			$t_id = $term_id;
			$cat_meta = get_option( "category_$t_id");
			$cat_keys = array_keys($_POST['Cat_meta']);
			foreach ($cat_keys as $key){
				if(isset($_POST['Cat_meta'][$key])){
					$cat_meta[$key] = $_POST['Cat_meta'][$key];
				}
			}
			update_option( "category_$t_id", $cat_meta );
		}
	}
}