<?php
/**
 * This is the fifth form template file.
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
			<li class="active bar tick"><span>Accomplishments</span></li>
			<li class="active bar"><span  class="active">Skills</span></li>
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
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/skills.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  	<div class="mobile-progress">
					<p>5 of 12</p>
				</div>
			    <h1 class="media-heading">Skills</h1>
			    <p>Tell us your top 5 professional skills a company would find valuable (I.e. – Sales, Social Media Marketing, PHP Coding, Managing People, etc) and then rank how awesome you are!
		(Be concise please.&nbsp;&nbsp;Each answer is limited to 40 characters)</p>
			  </div>
			</div>
		</div>
	</div>
	<article class="survey-form-wrap">
	<!-- <div class="row">
		<h2>Tell us your top 5 professional skills a company would find valuable (I.e. – Sales, Social Media Marketing, PHP Coding, Managing People, etc) and then rank how awesome you are!
		(Be concise please.&nbsp;&nbsp;Each answer is limited to 40 characters)</h2>
	</div> -->
	<div class="row">
		<form method="POST" class="form_validate" id="form-5">
			<?php for ( $i = 0; $i < 5; $i++ ) { ?>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<input class="form-control input-md giyg_wr_skill_name" type="text" placeholder="Professional skill <?php echo esc_attr( $i + 1 ); ?>" name="giyg_wr_skill_name_<?php echo esc_attr( $i ); ?>" id="giyg_wr_skill_name_<?php echo esc_attr( $i ); ?>" value="<?php echo $form_values[ 'giyg_wr_skill_name_'.$i ]; ?>" maxlength="40" autocomplete="off" <?php if ( 0 === $i ) {  echo esc_attr( 'autofocus' ); } ?> required />
					<?php if ( isset( $errors[ 'giyg_wr_skill_name_'.$i ] ) ) { echo '<label id="giyg_wr_skill_name_'.$i.'-error" class="error" for="giyg_wr_skill_name_'.$i.'">'.$errors[ 'giyg_wr_skill_name_'.$i ].'</label>'; }?>
				</div>
				<div class="col-md-6 col-sm-6 skill-rating-box">
					<select class="skill-rating" name="giyg_wr_rating_<?php echo esc_attr( $i ); ?>" id="giyg_wr_rating_<?php echo esc_attr( $i ); ?>" autocomplete="off" required>
						<option value=""></option>
						<?php for ( $j = 1; $j <= 10; $j++ ) { ?>
							<option value="<?php echo $j; ?>" <?php if ( $form_values[ 'giyg_wr_rating_'.$i ] == $j ) { echo ' selected="selected"'; } ?>><?php echo $j; ?></option>
						<?php } ?>
					</select>
					<?php if ( isset( $errors[ 'giyg_wr_rating_'.$i ] ) ) { echo '<label id="giyg_wr_rating_'.$i.'-error" class="error" for="giyg_wr_rating_'.$i.'">'.$errors[ 'giyg_wr_rating_'.$i ].'</label>'; }?>
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
	jQuery('#form-5').on('submit', function(event){
		jQuery('input.giyg_wr_skill_name').each(function() {
            jQuery(this).rules("add", 
            {
                required: true,
                maxlength: 40,
            });
        });
		jQuery('select.skill-rating').each(function() {
            jQuery(this).rules("add", 
            {
                required: true,
                min: 1,
                max: 10,
                number: true,
            });
        });
	});
	jQuery('#form-5').validate({
		ignore: [],
		errorPlacement: function(error, element) {
			element.parent('div').append(error);
		}
	});
	jQuery('.skill-rating').barrating('show', {
		theme: 'bars-square',
		showValues: true,
		showSelectedRating: false,
		allowEmpty: false,
	});  
})
</script>
