<div class="userpro-custom-wrap">
<?php
	if( userpro_get_option( 'enable_reset_by_mail' ) == 'y' && (isset($_GET['a']) && $_GET['a'] == 'reset' ) ){
		$args['template'] = 'change';
	}
?>
<div class="userpro userpro-<?php echo $i; ?> userpro-<?php echo $layout; ?>" <?php userpro_args_to_data( $args ); ?>>

	<a href="#" class="userpro-close-popup"><?php _e('Close','userpro'); ?></a>
	<div class="signin-wrap">
		<div class="userpro-head">
			<div>	
				<h2>Change your Password</h2>
			</div>
			<div class="userpro-clear"></div>
		</div>
		
		<div class="userpro-body">
		
			<?php do_action('userpro_pre_form_message'); ?>

			<form action="" method="post" data-action="<?php echo $template; ?>">
			
				<?php
				// Hook into fields $args, $user_id
				if (!isset($user_id)) $user_id = 0;
				$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
				do_action('userpro_before_fields', $hook_args);
				?>
			
				<!-- fields -->
				<?php if(userpro_get_option( 'enable_reset_by_mail' ) == 'n'){ ?>
				<div class='userpro-field' data-key='secretkey'>
					<div class='userpro-label <?php if ($args['field_icons'] == 1) { echo 'iconed'; } ?>'><label for='secretkey-<?php echo $i; ?>'><?php _e('Your Secret Key','userpro'); ?></label></div>
					<div class='userpro-input'>
						<input type="text" name="secretkey-<?php echo $i; ?>" id="secretkey-<?php echo $i; ?>" data-required="1" data-ajaxcheck="validatesecretkey" placeholder="<?php _e('Your Secret Key','userpro'); ?>" />
						<div class='userpro-clear'></div>
					</div>
				</div><div class='userpro-clear'></div>
				<?php } else{ 
					$texttype = 'hidden';
					$sk = isset($_GET['sk']) ? $_GET['sk']: '';
					$skrequired = 0;
				?>
				
				<input type="<?php echo $texttype ?>" name="secretkey-<?php echo $i; ?>" id="secretkey-<?php echo $i; ?>" data-required="<?php echo $skrequired ?>" data-ajaxcheck="validatesecretkey" value="<?php echo $sk ?>"/>			
				<?php }?>
				<?php foreach( userpro_get_fields( array('user_pass','user_pass_confirm') ) as $key => $array ) { ?>
				
					<?php $array = $userpro->fields[$key];?>
					
					<?php  
						if ($array){
							if( 'user_pass' === $key ){
								$array['placeholder'] = 'Password';
							}
							if( 'user_pass_confirm' === $key ){
								$array['placeholder'] = 'Confirm Password';
							}
							echo userpro_edit_field( $key, $array, $i, $args );
						}
					?>
					
				<?php } ?>
				
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
				?>
				
				<?php if ($args["{$template}_button_primary"] ||  $args["{$template}_button_secondary"] ) { ?>
				<div class="userpro-field userpro-submit userpro-column">
					
					<?php if ($args["{$template}_button_primary"]) { ?>
					<input type="submit" value="<?php echo $args["{$template}_button_primary"]; ?>" class="userpro-button" />
					<?php } ?>
					
					

					<img src="<?php echo $userpro->skin_url(); ?>loading.gif" alt="" class="userpro-loading" />
					<div class="userpro-clear"></div>
					
				</div>
				<?php } ?>
			
			</form>
		
		</div>
		<div class="userpro-footer">
			<p class="secret-link">
				<a href="#" data-template="<?php echo $args["{$template}_button_action"]; ?>" title="Do not have a secret key?">Do not have a secret key?</a>
			</p>
		</div>
	</div>

</div>
</div>