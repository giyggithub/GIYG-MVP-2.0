<?php
/**
 * This is the fourth form template file.
 *
 * @package WooCommerce Resumes.
 */

$form_values = giyg_wr_check_session_and_get_form_values();
?>
<div class="giyg-survey-form container">
	<div class="row">
		<ul id="progressbar">
	        <li class="active first tick"><span>Contact Info</span></li>
			<li class="active bar tick"><span>Dream Job</span></li>
			<li class="active bar tick"><span>Ideal Company</span></li>
			<li class="active bar"><span  class="active">Accomplishments</span></li>
			<li class="bar"><span>Skills</span></li>
			<li class="bar"><span>Activities</span></li>
			<li class="bar"><span>Personality</span></li>
			<li class="bar"><span>Values</span></li>
			<li class="bar"><span>Culture</span></li>
			<li class="bar"><span>Team</span></li>
			<li class="bar"><span>Impact Statement</span></li>
			<li class="bar"><span>Social Handles</span></li>
	    </ul>
	    <div class="survey-form-header">
		    <div class="media">
			  <div class="media-left">
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/accomplishment.svg" alt="Step">
			  </div>
			<div class="media-body">
			    <div class="mobile-progress">
					<p>4 of 12</p>
				</div>
			    <h1 class="media-heading">Accomplishments</h1>
                <p>Great! Now it’s time to brag a bit! Describe three outstanding accomplishments or personal victories that any prospective employer would love to know about you.&nbsp;&nbsp;Dig deep.&nbsp;&nbsp;Outstanding accomplishments in prior roles, in your personal life or in your community that help show the “real you.”&nbsp;&nbsp;(GIYG Tip: Employers love results.&nbsp;&nbsp;Share ways that you’ve made an impact.)&nbsp;&nbsp;(Limited to 140 characters)</p>
			</div>
			</div>
		</div>
	</div>
	<article class="survey-form-wrap">
		<div class="row">
			<form method="POST" class="form_validate" id="form-4">
				<?php for ( $i = 0; $i < 3; $i++ ) { ?>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<input class="form-control input-md giyg_wr_company_name" type="text" placeholder="Accomplishment #<?php echo esc_attr( $i + 1 ); ?>" name="giyg_wr_company_name_<?php echo esc_attr( $i ); ?>" id="giyg_wr_company_name_<?php echo esc_attr( $i ); ?>" value="<?php echo $form_values[ 'giyg_wr_company_name_'.$i ]; ?>" maxlength="140" autocomplete="off" <?php if ( 0 === $i ) {  echo esc_attr( 'autofocus' ); } ?> required />
						<?php if ( isset( $errors[ 'giyg_wr_company_name_'.$i ] ) ) { echo '<label id="giyg_wr_company_name_'.$i.'-error" class="error" for="giyg_wr_company_name_'.$i.'">'.$errors[ 'giyg_wr_company_name_'.$i ].'</label>'; }?>
						<input class="form-control input-md giyg_wr_location" type="text" placeholder="Location" name="giyg_wr_location_<?php echo esc_attr( $i ); ?>" id="giyg_wr_location_<?php echo esc_attr( $i ); ?>" value="<?php echo $form_values[ 'giyg_wr_location_'.$i ]; ?>" maxlength="25" autocomplete="off" required />
						<?php if ( isset( $errors[ 'giyg_wr_location_'.$i ] ) ) { echo '<label id="giyg_wr_location_'.$i.'-error" class="error" for="giyg_wr_location_'.$i.'">'.$errors[ 'giyg_wr_location_'.$i ].'</label>'; }?>
					</div>
					<?php /*
					<div class="col-md-2 col-sm-3">
						<input class="form-control input-md giyg_wr_from_date" type="text" placeholder="From" name="giyg_wr_from_date_<?php echo esc_attr( $i ); ?>" id="giyg_wr_from_date_<?php echo esc_attr( $i ); ?>" value="<?php echo $form_values[ 'giyg_wr_from_date_'.$i ]; ?>" autocomplete="off" maxlength="4" required />
						<?php if ( isset( $errors[ 'giyg_wr_from_date_'.$i ] ) ) { echo '<label id="giyg_wr_from_date_'.$i.'-error" class="error" for="giyg_wr_from_date_'.$i.'">'.$errors[ 'giyg_wr_from_date_'.$i ].'</label>'; }?>
						<input class="form-control input-md giyg_wr_to_date" type="text" placeholder="To" name="giyg_wr_to_date_<?php echo esc_attr( $i ); ?>" id="giyg_wr_to_date_<?php echo esc_attr( $i ); ?>" value="<?php echo $form_values[ 'giyg_wr_to_date_'.$i ]; ?>" autocomplete="off" maxlength="4" required />
						<?php if ( isset( $errors[ 'giyg_wr_to_date_'.$i ] ) ) { echo '<label id="giyg_wr_to_date_'.$i.'-error" class="error" for="giyg_wr_to_date_'.$i.'">'.$errors[ 'giyg_wr_to_date_'.$i ].'</label>'; }?>
					</div>
					<div class="col-md-3 col-sm-4">
						<textarea class="form-control giyg_wr_job_description" name="giyg_wr_job_description_<?php echo esc_attr( $i ); ?>" placeholder="Job Description" id="giyg_wr_job_description_<?php echo esc_attr( $i ); ?>" rows="3" maxlength="250" required ><?php echo $form_values[ 'giyg_wr_job_description_'.$i ]; ?></textarea>
						<?php if ( isset( $errors[ 'giyg_wr_job_description_'.$i ] ) ) { echo '<label id="giyg_wr_job_description_'.$i.'-error" class="error" for="giyg_wr_job_description_'.$i.'">'.$errors[ 'giyg_wr_job_description_'.$i ].'</label>'; }?>
					</div>
					*/ ?>
				</div>
				<?php } ?>
					<?php giyg_wr_navigation_button(); ?>
			</form>
		</div>
	</article>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#form-4').on('submit', function(event){
		jQuery('input.giyg_wr_company_name').each(function() {
            jQuery(this).rules("add", 
            {
                required: true,
                maxlength: 140,
            });
        });
		jQuery('input.giyg_wr_location').each(function() {
            jQuery(this).rules("add", 
            {
                required: true,
                maxlength: 25,
            });
        });
		/*jQuery('input.giyg_wr_from_date').each(function(i) {
            jQuery(this).rules("add", 
            {
                required: true,
                min: 1960,
                max: <?php echo date( 'Y' ); ?>,
                number: true,
                maxlength: 4,
            });
        });
		jQuery('input.giyg_wr_to_date').each(function(i) {
            jQuery(this).rules("add", 
            {
                required: true,
                min: function() { return jQuery('#giyg_wr_from_date_'+i).val(); },
                max: <?php echo date( 'Y' ); ?>,
                number: true,
                maxlength: 4,
            });
        });
		jQuery('input.giyg_wr_job_description').each(function() {
            jQuery(this).rules("add", 
            {
                required: true,
                maxlength: 250,
            });
        });*/
	});
	jQuery('#form-4').validate();
})
</script>
