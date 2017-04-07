<div class="userpro-custom-wrap">
<div class="userpro userpro-<?php echo $i; ?> userpro-<?php echo $layout; ?>" <?php userpro_args_to_data( $args ); ?>>

	<a href="#" class="userpro-close-popup"><?php _e('Close','userpro'); ?></a>
	<div class="signin-wrap">
		<div class="userpro-head">
			<div>	
				<h2>Reset Password</h2>
			</div>
			<div class="userpro-clear"></div>
		</div>
		
		<div class="userpro-body">
		
			<?php do_action('userpro_pre_form_message'); ?>

			<form action="" method="post" data-action="<?php echo $template; ?>">
			
				<?php // Hook into fields $args, $user_id
				if (!isset($user_id)) $user_id = 0;
				$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
				do_action('userpro_before_fields', $hook_args);
				?>
			
				<!-- fields -->
				<div class='userpro-field' data-key='username_or_email'>
					<div class='userpro-label <?php if ($args['field_icons'] == 1) { echo 'iconed'; } ?>'><label for='username_or_email-<?php echo $i; ?>'><?php _e('Username or Email','userpro'); ?></label></div>
					<div class='userpro-input'>
						<input type='text' name='username_or_email-<?php echo $i; ?>' id='username_or_email-<?php echo $i; ?>' placeholder="Email Address" />
						<div class='userpro-clear'></div>
					</div>
				</div><div class='userpro-clear'></div>
				
				<?php  $key = 'antispam'; $array = $userpro->fields[$key];
					if (isset($array) && is_array($array)) echo userpro_edit_field( $key, $array, $i, $args ); ?>
				
				<?php // Hook into fields $args, $user_id
				if (!isset($user_id)) $user_id = 0;
				$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
				do_action('userpro_after_fields', $hook_args);
				?>
							
				<?php // Hook into fields $args, $user_id
				if (!isset($user_id)) $user_id = 0;
				$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
				do_action('userpro_before_form_submit', $hook_args);
				if( userpro_get_option('enable_reset_by_mail') == 'y' ){
					$args["{$template}_button_primary"] = 'Request reset link';
				}
				?>
				
				<?php if ($args["{$template}_button_primary"] ||  $args["{$template}_button_secondary"] ) { ?>
				<div class="userpro-field userpro-submit userpro-column">

					<div class="userpro-field half-wrap">					
						<?php if ($args["{$template}_button_primary"]) { ?>
						<input type="submit" value="<?php echo $args["{$template}_button_primary"]; ?>" class="userpro-button" />
						<?php } ?>
					</div>
					<div class="forgot-link userpro-field half-wrap">				
						<a href="#" data-template="<?php echo $args["{$template}_side_action"]; ?>" title="Back to Login">Back to Login</a>
					</div>

					<img src="<?php echo $userpro->skin_url(); ?>loading.gif" alt="" class="userpro-loading" />
					<div class="userpro-clear"></div>
					
				</div>
				<?php } ?>
			
			</form>	
		</div>

		<div class="userpro-footer">
			<p>Already have an secret key? <a href="#" data-template="<?php echo $args["{$template}_button_action"]; ?>" title="Change Password">Change Password</a></p>
		</div>
	</div>

</div>
</div>