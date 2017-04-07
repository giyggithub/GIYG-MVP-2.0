<?php
/**
 * This is the seventh form template file.
 *
 * @package WooCommerce Resumes.
 */
 
$check_form_submit = giyg_wr_post( 'giyg_wr_form' );
$check_session = giyg_wr_session( 'woocommerce_resumes' );
$resume_professional_personalities = get_terms( array(
	'taxonomy' => 'resume-professional-personality',
	'hide_empty' => false,
) ); 
$resume_professional_personalities_html = '';
foreach ( $resume_professional_personalities as $resume_professional_personality ) {
   
	$resume_professional_personalities_html .= '<div class="col-md-4 col-sm-6 resource-wrap"><div class="resource-section"><input type="radio" name="professional_personality" id="chcked" value="'.$resume_professional_personality->name.'" class="professional_personality" required><h1>'.$resume_professional_personality->name.' </h1><p>' .$resume_professional_personality->description. '</p><div class="img-wrap"><img src="'.esc_url( get_field( 'image', 'resume-professional-personality_'.$resume_professional_personality->term_id ) ).'" alt="'.esc_attr( $resume_professional_personality->name ).'" /></div><div class="resource-content"><dl class="dl-horizontal">'.get_field( 'html_listings', 'resume-professional-personality_'.$resume_professional_personality->term_id ).'</dl></div></div></div>';
}
if ( $check_form_submit ) {
	$form_values = giyg_wr_post_all();
	if ( array_key_exists( 'professional_personality', $form_values ) ) {
		$resume_professional_personalities_html = '';
		foreach ( $resume_professional_personalities as $resume_professional_personality ) {
			if ( $resume_professional_personality->name === $form_values['professional_personality'] ) {
				$checked = ' checked';
				$resource_active = ' resource-active';
			} else {
				$checked = '';
				$resource_active = '';
			}
			$resume_professional_personalities_html .= '<div class="col-md-4 col-sm-6 resource-wrap' .$resource_active. '"><div class="resource-section"><input type="radio" name="professional_personality" id="chcked" value="'.$resume_professional_personality->name.'" class="professional_personality required"' .$checked. '><h1>'.$resume_professional_personality->name.' </h1><p>' .$resume_professional_personality->description. '</p>';			
			$resume_professional_personalities_html .= '<div class="img-wrap"><img src="'.esc_url( get_field( 'image', 'resume-professional-personality_'.$resume_professional_personality->term_id ) ).'" alt="'.esc_attr( $resume_professional_personality->name ).'" /></div><div class="resource-content"><dl class="dl-horizontal">'.get_field( 'html_listings', 'resume-professional-personality_'.$resume_professional_personality->term_id ).'</dl></div></div></div>';
		}
	}
} elseif ( array_key_exists( 'form_7', $_SESSION['woocommerce_resumes'] ) ) {
	$form_values = $check_session['form_7'];
	if ( array_key_exists( 'professional_personality', $form_values ) ) {
		$resume_professional_personalities_html = '';
		foreach ( $resume_professional_personalities as $resume_professional_personality ) {
			if ( $resume_professional_personality->name === $form_values['professional_personality'] ) {
				$checked = ' checked';
				$resource_active = ' resource-active';
			} else {
				$checked = '';
				$resource_active = '';
			}
			$resume_professional_personalities_html .= '<div class="col-md-4 col-sm-6 resource-wrap"><div class="resource-section' .$resource_active. '"><input type="radio" name="professional_personality" id="chcked" value="'.$resume_professional_personality->name.'" class="professional_personality required"' .$checked. '><h1>'.$resume_professional_personality->name.' </h1><p>' .$resume_professional_personality->description. '</p>';			
			$resume_professional_personalities_html .= '<div class="img-wrap"><img src="'.esc_url( get_field( 'image', 'resume-professional-personality_'.$resume_professional_personality->term_id ) ).'" alt="'.esc_attr( $resume_professional_personality->name ).'" /></div><div class="resource-content"><dl class="dl-horizontal">'.get_field( 'html_listings', 'resume-professional-personality_'.$resume_professional_personality->term_id ).'</dl></div></div></div>';
		}
	}
} elseif ( $_SESSION['woocommerce_resumes']['post_id'] ) {
	$last_post_id = $_SESSION['woocommerce_resumes']['post_id'];
	
	$professional_personality = get_the_terms( $last_post_id, 'resume-professional-personality' );
	$professional_personality_description = wp_list_pluck( $professional_personality, 'description' );
	$professional_personality_name = wp_list_pluck( $professional_personality, 'name' );
	
	$form_values_array = array(
		'professional_personality' => $professional_personality_name[0]
		);
	$form_values = $form_values_array;
		
	if ( array_key_exists( 'professional_personality', $form_values ) ) {
		$resume_professional_personalities_html = '';
		foreach ( $resume_professional_personalities as $resume_professional_personality ) {
			if ( $resume_professional_personality->name === $form_values['professional_personality'] ) {
				$checked = ' checked';
				$resource_active = ' resource-active';
			} else {
				$checked = '';
				$resource_active = '';
			}
			$resume_professional_personalities_html .= '<div class="col-md-4 col-sm-6 resource-wrap"><div class="resource-section' .$resource_active. '"><input type="radio" name="professional_personality" id="chcked" value="'.$resume_professional_personality->name.'" class="professional_personality required"' .$checked. '><h1>'.$resume_professional_personality->name.' </h1><p>' .$resume_professional_personality->description. '</p>';			
			$resume_professional_personalities_html .= '<div class="img-wrap"><img src="'.esc_url( get_field( 'image', 'resume-professional-personality_'.$resume_professional_personality->term_id ) ).'" alt="'.esc_attr( $resume_professional_personality->name ).'" /></div><div class="resource-content"><dl class="dl-horizontal">'.get_field( 'html_listings', 'resume-professional-personality_'.$resume_professional_personality->term_id ).'</dl></div></div></div>';
		}
	}
} else {
	$form_values = array();
}
?>
<div class="giyg-survey-form container">
	<div class="row">
		<ul id="progressbar">
	        <li class="active first tick"><span>Contact Info</span></li>
			<li class="active tick"><span>Dream Job</span></li>
			<li class="active tick"><span>Ideal Company</span></li>
			<li class="active tick"><span>Accomplishments</span></li>
			<li class="active tick"><span>Skills</span></li>
			<li class="active tick"><span>Activities</span></li>
			<li class="active"><span class="active">Personality</span></li>
			<li class="bar"><span>Values</span></li>
			<li class="bar"><span>Culture</span></li>
			<li class="bar"><span>Team</span></li>
			<li class="bar"><span>Impact Statement</span></li>
			<li class="bar"><span>Social Handles</span></li>
	    </ul>
	    <div class="survey-form-header">
		    <div class="media">
			  <div class="media-left">
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/personality.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  	<div class="mobile-progress">
					<p>7 of 12</p>
				</div>
			    <h1 class="media-heading">Personality</h1>
			    <p>Now, let’s start talking about what’s really “under the hood.”&nbsp;&nbsp;This is designed to better align your passions, interests and core values with potential employers.&nbsp;&nbsp;Below are 6 professional personality types and associated key words that will help you understand them.&nbsp;&nbsp;You will be able to edit these on your GIYGgraph later.&nbsp;&nbsp;Please pick the ONE that fits you BEST.</p>
			  </div>
			</div>
		</div>
	</div>
	<article class="survey-form-wrap">
		<div class="row">
			<form method="POST" class="form_validate" id="form-7">
				<div class="col-sm-12 personality-form-section">
					<ul>
				<?php
					echo '<div class="row">'.$resume_professional_personalities_html.'</div>';
				if ( isset( $errors['professional_personality'] ) ) {
					echo '<div class="row"><label id="professional_personality-error" class="error" for="professional_personality">'.$errors['professional_personality'].'</label></div>';
				}
					giyg_wr_navigation_button();
				?>
				</ul>
			</form>
		</div>
	</article>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('input.professional_personality').each(function(){
		var self = jQuery(this),
		label = self.prev(),
		label_text = label.text();

		label.remove();
		//self.iCheck({
		//	radioClass: 'icheckbox_line-green',
		//	insert:  label_text + '<div class="icheck_line-icon"></div>'
		//});
	});
	jQuery('#form-7').validate({
		errorPlacement: function(error, element) {
			element.parents('div.col-sm-4').append(error);
		}
	});

	//resource radio box
	jQuery('.resource-section').click(function() {
	    jQuery('input[name="professional_personality"]', this).prop("checked",true);
	    jQuery('.resource-section').removeClass('resource-active');
	    jQuery(this).addClass('resource-active');
	});
})
</script>
