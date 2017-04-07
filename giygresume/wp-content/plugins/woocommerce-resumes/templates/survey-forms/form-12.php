<?php
/**
 * This is the nineth form template file.
 *
 * @package WooCommerce Resumes.
 */
 
$form_values = giyg_wr_check_session_and_get_form_values();
?>
<div class="giyg-survey-form container step12">
	<div class="row">
		<ul id="progressbar">
	        <li class="active first tick"><span>Contact Info</span></li>
			<li class="active tick"><span>Dream Job</span></li>
			<li class="active tick"><span>Ideal Company</span></li>
			<li class="active tick"><span>Accomplishments</span></li>
			<li class="active tick"><span>Skills</span></li>
			<li class="active tick"><span>Activities</span></li>
			<li class="active tick"><span>Personality</span></li>
			<li class="active tick"><span>Values</span></li>
			<li class="active tick"><span>Culture</span></li>
			<li class="active tick"><span>Team</span></li>
			<li class="active tick"><span>Impact Statement</span></li>
			<li class="bar active"><span class="active">Social Handles</span></li>
	    </ul>
	    <div class="survey-form-header survey-form-header-unique">
		    <div class="media">
			  <div class="media-left">
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/socialHandies.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  <div class="mobile-progress">
					<p>12 of 12</p>
				</div>
			    <h1 class="media-heading">Social Handles</h1>
			    <p>Tell prospective employers where they can find you online (Optional):</p>
			  </div>
			</div>
		</div>
	</div>
	<article class="survey-form-wrap">
		<!-- <div class="row">
			<h2>Tell prospective employers where they can find you online (Optional):</h2>
		</div> -->
		<div class="row">
			<form method="POST" class="form_validate" id="form-12" >
				<div class="row">
					<div class="col-sm-7 col-sm-offset-2 col-md-6 col-md-offset-1 col-xs-12">
						<input class="form-control input-md <?php if ( isset( $errors['giyg_wr_linkedin_url'] ) ) { echo esc_attr( 'error' ); }?>" type="text" placeholder="LinkedIn URL" name="giyg_wr_linkedin_url" id="giyg_wr_linkedin_url" value="<?php if ( array_key_exists( 'giyg_wr_linkedin_url', $form_values ) ) { echo esc_attr( $form_values['giyg_wr_linkedin_url'] ); } ?>" maxlength="50" autocomplete="off" autofocus /><?php if ( isset( $errors['giyg_wr_linkedin_url'] ) ) { echo '<label id="giyg_wr_linkedin_url-error" class="error" for="giyg_wr_linkedin_url">'.$errors['giyg_wr_linkedin_url'].'</label>'; }?>
						<input class="form-control input-md <?php if ( isset( $errors['giyg_wr_twitter_url'] ) ) { echo esc_attr( 'error' ); }?>" type="text" placeholder="Twitter URL" name="giyg_wr_twitter_url" id="giyg_wr_twitter_url" value="<?php if ( array_key_exists( 'giyg_wr_twitter_url', $form_values ) ) { echo esc_attr( $form_values['giyg_wr_twitter_url'] ); } ?>" maxlength="50" autocomplete="off" /><?php if ( isset( $errors['giyg_wr_twitter_url'] ) ) { echo '<label id="giyg_wr_twitter_url-error" class="error" for="giyg_wr_twitter_url">'.$errors['giyg_wr_twitter_url'].'</label>'; }?>
						<input class="form-control input-md <?php if ( isset( $errors['giyg_wr_facebook_url'] ) ) { echo esc_attr( 'error' ); }?>" type="text" placeholder="Facebook URL" name="giyg_wr_facebook_url" id="giyg_wr_facebook_url" value="<?php if ( array_key_exists( 'giyg_wr_facebook_url', $form_values ) ) { echo esc_attr( $form_values['giyg_wr_facebook_url'] ); } ?>" maxlength="50" autocomplete="off" /><?php if ( isset( $errors['giyg_wr_facebook_url'] ) ) { echo '<label id="giyg_wr_facebook_url-error" class="error" for="giyg_wr_facebook_url">'.$errors['giyg_wr_facebook_url'].'</label>'; }?>
						<input class="form-control input-md <?php if ( isset( $errors['giyg_wr_other_url'] ) ) { echo esc_attr( 'error' ); }?>" type="text" placeholder="Other URL(Github, Blog, Personal Website)" name="giyg_wr_other_url" id="giyg_wr_other_url" value="<?php if ( array_key_exists( 'giyg_wr_other_url', $form_values ) ) { echo esc_attr( $form_values['giyg_wr_other_url'] ); } ?>" maxlength="50" autocomplete="off" /><?php if ( isset( $errors['giyg_wr_other_url'] ) ) { echo '<label id="giyg_wr_other_url-error" class="error" for="giyg_wr_other_url">'.$errors['giyg_wr_other_url'].'</label>'; }?>
					</div>
				</div>
				<div class="nav-btn-wrap">
					<div class="row">
						<a href="<?php echo esc_url( add_query_arg( 'survey-form', ( giyg_wr_get( 'survey-form' ) - 1 ) ) ); ?>" class="btn btn-md btn-default" role="button" title="BACK">BACK</a>
						<?php wp_nonce_field( 'giyg_wr_nonce_action', 'giyg_wr_nonce_field' ); ?>
						<input type="hidden" value="12" name="giyg_wr_form">
						<button type="submit" class="btn btn-md btn-success" title="SAVE & PREVIEW">SAVE & PREVIEW</button>
					</div>
				</div>
			</form>
		</div>
	</article>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#form-12').validate({
		rules: {
			giyg_wr_facebook_url: {
				//required: true,
				maxlength: 50,
				//url: true,
			},
			giyg_wr_twitter_url: {
				//required: true,
				maxlength: 50,
				//url: true,
			},
			giyg_wr_other_url: {
				//required: true,
				maxlength: 50,
				//url: true,
			},
			giyg_wr_linkedin_url: {
				//required: true,
				maxlength: 50,
				//url: true,
			},
		}
	})
});
</script>
