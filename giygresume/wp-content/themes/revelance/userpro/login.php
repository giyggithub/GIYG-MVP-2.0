<div class="userpro-custom-wrap">
<?php 
if(isset($args['i'])){
	$i = $args['i'];
}
$layout = $args['layout'];
?>
<?php  $_SESSION['form_role']=''; 
$pid = get_the_ID();
$current_page_uri = get_permalink($pid);
$_SESSION['current_page_uri']= $current_page_uri;
?>
<a href="#" class="userpro-close-popup"><?php _e('','userpro'); ?></a>	
<div class="userpro userpro-<?php echo $i; ?> userpro-<?php echo $layout; ?>" <?php userpro_args_to_data( $args ); ?>>


	<div class="signin-wrap">
		<div class="userpro-head">
			<div>	
				<h2>Sign in</h2>
			</div>
			<div class="userpro-clear"></div>
		</div>
		
		<div class="userpro-body">
		
			<?php do_action('userpro_pre_form_message'); ?>
			
			<form action="" method="post" data-action="<?php echo $template; ?>">
			
				<?php //do_action('userpro_super_get_redirect', $i); ?>
				
				<input type="hidden" name="force_redirect_uri-<?php echo $i; ?>" id="force_redirect_uri-<?php echo $i; ?>" value="<?php if (isset( $args["force_redirect_uri"] ) ) echo $args["force_redirect_uri"]; ?>" />
				<input type="hidden" name="redirect_uri-<?php echo $i; ?>" id="redirect_uri-<?php echo $i; ?>" value="<?php if (isset( $args["{$template}_redirect"] ) ) echo $args["{$template}_redirect"]; ?>" />
				
				<?php // Hook into fields $args, $user_id
				if (!isset($user_id)) $user_id = 0;
				$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
				do_action('userpro_before_fields', $hook_args);
				?>
			
				<?php foreach( userpro_fields_group_by_template( $template, $args["{$template}_group"] ) as $key => $array ) { ?>
					
					<?php  if ($array) echo userpro_edit_field( $key, $array, $i, $args ) ?>
					
				<?php } ?>
				
				<?php // Hook into fields $args, $user_id
				if (!isset($user_id)) $user_id = 0;
				$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
				do_action('userpro_after_fields', $hook_args);
				?>
							
				<?php // Hook into fields $args, $user_id
				if (!isset($user_id)) $user_id = 0;
				$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
				//do_action('userpro_before_form_submit', $hook_args);
				?>
				
				<?php if ($args["{$template}_button_primary"] ||  $args["{$template}_button_secondary"] ) { ?>
				<div class="userpro-field userpro-submit userpro-column">
					
					<?php // Hook into fields $args, $user_id
					if (!isset($user_id)) $user_id = 0;
					$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
					if(userpro_get_option('sociallogin')=='1')				
					do_action('userpro_inside_form_submit', $hook_args);
					?>
						
						<div class="userpro-field half-wrap">
							<?php if ($args["{$template}_button_primary"]) { ?>
								<input type="submit" value="<?php echo $args["{$template}_button_primary"]; ?>" class="userpro-button" />
							<?php } ?>
						</div>
						<div class="forgot-link userpro-field half-wrap">
							<a href="#" data-template="<?php echo $args["{$template}_side_action"]; ?>" title="Forgot Password?">Forgot Password?</a>
						</div>
						

					<img src="<?php echo $userpro->skin_url(); ?>loading.gif" alt="" class="userpro-loading" />
					<div class="userpro-clear"></div>
					
				</div>
				<?php } ?>
			
			</form>	
		</div>

		<div class="userpro-footer">
			<p>Don't have an Account? <a href="#" data-template="<?php echo $args["{$template}_button_action"]; ?>" title="Sign Up For Free">Sign Up For Free</a></p>
		</div>
	</div>

</div>
</div>