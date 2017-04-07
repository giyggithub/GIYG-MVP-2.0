<?php
/**
 * This is the nineth form template file.
 *
 * @package WooCommerce Resumes.
 */

$form_values = giyg_wr_check_session_and_get_form_values();
?>
<div class="giyg-survey-form container text-area-form">
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
			<li class="bar active"><span  class="active">Impact Statement</span></li>
			<li class="bar"><span>Social Handles</span></li>
	    </ul>
	    <div class="survey-form-header survey-form-header-unique">
		    <div class="media">
			  <div class="media-left">
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/statement.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  <div class="mobile-progress">
					<p>11 of 12</p>
				</div>
			    <h1 class="media-heading">Impact Statement</h1>
			    <p>Is there one more sentence that summarizes your personal value you offer potential employers? (Limited to 200 characters, please)</p>
			  </div>
			</div>
		</div>
	</div>
	<article class="survey-form-wrap">
		<!-- <div class="row">
			<h2>Is there one more sentence that summarizes your personal value you offer potential employers? (Limited to 200 characters, please)</h2>
		</div> -->
		<div class="row">
			<form method="POST" class="form_validate" id="form-11">
				<div class="row">
					<div class="col-sm-11 col-md-8 col-sm-offset-1 col-xs-12">
								<textarea class="form-control <?php if ( isset( $errors['giyg_wr_impact_statement'] ) ) { echo esc_attr( 'error' ); }?>" rows="3" id="giyg_wr_impact_statement" name="giyg_wr_impact_statement" maxlength="200" autofocus required><?php if ( array_key_exists( 'giyg_wr_impact_statement', $form_values ) ) { echo stripslashes( esc_textarea( $form_values['giyg_wr_impact_statement'] ) ); } ?></textarea><?php if ( isset( $errors['giyg_wr_impact_statement'] ) ) { echo '<label id="giyg_wr_impact_statement-error" class="error" for="giyg_wr_impact_statement">'.$errors['giyg_wr_impact_statement'].'</label>'; }?>
					</div>
				</div>
				<?php giyg_wr_navigation_button(); ?>
			</form>
		</div>
	</article>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#form-11').validate({
		rules: {
			giyg_wr_impact_statement: {
				required: true,
				maxlength: 200,
			}
		}
	})
})
</script>
