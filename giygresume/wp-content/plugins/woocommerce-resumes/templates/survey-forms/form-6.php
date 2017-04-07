<?php
/**
 * This is the sixth form template file.
 *
 * @package WooCommerce Resumes.
 */
 
$form_values = giyg_wr_check_session_and_get_form_values();
?>
<div class="giyg-survey-form container">
	<div class="row">
		<ul id="progressbar">
	        <li class="active first tick"><span>Contact Info</span></li>
			<li class="active tick"><span>Dream Job</span></li>
			<li class="active tick"><span>Ideal Company</span></li>
			<li class="active tick"><span>Accomplishments</span></li>
			<li class="active tick"><span>Skills</span></li>
			<li class="bar active"><span class="active">Activities</span></li>
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
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/activity.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  	<div class="mobile-progress">
					<p>6 of 12</p>
				</div>
			    <h1 class="media-heading">Activities</h1>
			    <p>Please describe 3 professional activities that energize you enough to “jump out of bed in the morning!”  This one is important so please be descriptive.&nbsp;&nbsp;Employers want to see what motivates you.
			GIYG Hint: Passions, social causes, challenging projects, helping people, mentoring, programming, motivating, technology, collaborating with teams, analyzing, etc.&nbsp;&nbsp;(Limited to 48 characters)</p>
			  </div>
			</div>
		</div>
	</div> 
	<article class="survey-form-wrap">
		<!-- <div class="row">
			<h2>Please describe 3 professional activities that energize you enough to “jump out of bed in the morning!”  This one is important so please be descriptive.&nbsp;&nbsp;Employers want to see what motivates you.
			GIYG Hint: Passions, social causes, challenging projects, helping people, mentoring, programming, motivating, technology, collaborating with teams, analyzing, etc.&nbsp;&nbsp;(Limited to 48 characters)</h2>
		</div> -->
		<div class="row">
			<form method="POST" class="form_validate" id="form-6">
				<?php for ( $i = 0; $i < 3; $i++ ) { ?>
				<div class="row">
					<div class="col-lg-6 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-12">
						<input class="form-control input-md giyg_wr_activity_name" type="text" placeholder="Activity <?php echo esc_attr( $i + 1 ); ?>" name="giyg_wr_activity_name_<?php echo esc_attr( $i ); ?>" id="giyg_wr_activity_name_<?php echo esc_attr( $i ); ?>" value="<?php echo $form_values[ 'giyg_wr_activity_name_'.$i ]; ?>" maxlength="48" autocomplete="off" <?php if ( 0 === $i ) {  echo esc_attr( 'autofocus' ); } ?> required />
						<?php if ( isset( $errors[ 'giyg_wr_activity_name_'.$i ] ) ) { echo '<label id="giyg_wr_activity_name_'.$i.'-error" class="error" for="giyg_wr_activity_name_'.$i.'">'.$errors[ 'giyg_wr_activity_name_'.$i ].'</label>'; }?>
					</div>
				</div>
				<?php } ?>
					<?php giyg_wr_navigation_button(); ?>
			</form>
		</div>
	</article>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('#form-6').on('submit', function(event){
		jQuery('input.giyg_wr_activity_name').each(function() {
            jQuery(this).rules("add", 
            {
                required: true,
                maxlength: 48,
            });
        });
    });
	/*jQuery('input.giyg_wr_activity_name').keyup(function() {
		jQuery(this).rules("add", 
		{
			required: true,
        	maxlength: 48,
			messages: {
        		maxlength: jQuery.validator.format("Limited to 48 characters")
			}
		});
		
	});*/
	
	jQuery('#form-6').validate();
})
</script>
