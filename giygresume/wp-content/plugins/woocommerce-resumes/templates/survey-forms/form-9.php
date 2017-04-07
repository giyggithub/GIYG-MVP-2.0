<?php
/**
 * This is the nineth form template file.
 *
 * @package WooCommerce Resumes.
 */

$check_form_submit = giyg_wr_post( 'giyg_wr_form' );
$check_session = giyg_wr_session( 'woocommerce_resumes' );
$resume_corporate_cultures = get_terms( array(
	'taxonomy' => 'resume-corporate-culture',
	'hide_empty' => false,
) );
$resume_corporate_cultures_html = '';
foreach ( $resume_corporate_cultures as $resume_corporate_culture ) {

	$resume_corporate_cultures_html .= '<div class="col-md-6 col-sm-6 col-xs-12 resource-wrap"><div class="resource-section"><input type="radio" name="corporate_culture" id="chcked" value="'.$resume_corporate_culture->name.'" class="corporate_culture" required><h1>'.$resume_corporate_culture->name.' </h1><div class="img-wrap"><img src="'.esc_url( get_field( 'image', 'resume-corporate-culture_'.$resume_corporate_culture->term_id ) ).'" alt="'.esc_attr( $resume_corporate_culture->name ).'" /></div><div class="resource-content"><dl class="dl-horizontal">'.get_field( 'html_listings', 'resume-corporate-culture_'.$resume_corporate_culture->term_id ).'</dl></div></div></div>';
}
if ( $check_form_submit ) {
	$form_values = giyg_wr_post_all();
	if ( array_key_exists( 'corporate_culture', $form_values ) ) {
		$resume_corporate_cultures_html = '';
		foreach ( $resume_corporate_cultures as $resume_corporate_culture ) {
			if ( $resume_corporate_culture->name === $form_values['corporate_culture'] ) {
				$checked = ' checked';
				$culture_active = ' resource-active';
			} else {
				$checked = '';
				$culture_active = '';
			}
			$resume_corporate_cultures_html .= '<div class="col-md-6 col-sm-6 col-xs-12 resource-wrap"><div class="resource-section'.$culture_active.'"><input type="radio" name="corporate_culture" id="chcked" value="'.$resume_corporate_culture->name.'" class="corporate_culture" required'.$checked.'><h1>'.$resume_corporate_culture->name.' </h1><div class="img-wrap"><img src="'.esc_url( get_field( 'image', 'resume-corporate-culture_'.$resume_corporate_culture->term_id ) ).'" alt="'.esc_attr( $resume_corporate_culture->name ).'" /></div><div class="resource-content"><dl class="dl-horizontal">'.get_field( 'html_listings', 'resume-corporate-culture_'.$resume_corporate_culture->term_id ).'</dl></div></div></div>';
		}
	}
} elseif ( array_key_exists( 'form_9', $_SESSION['woocommerce_resumes'] ) ) {
	$form_values = $check_session['form_9'];
	if ( array_key_exists( 'corporate_culture', $form_values ) ) {
		$resume_corporate_cultures_html = '';
		foreach ( $resume_corporate_cultures as $resume_corporate_culture ) {
			if ( $resume_corporate_culture->name === $form_values['corporate_culture'] ) {
				$checked = ' checked';
				$culture_active = ' resource-active';
			} else {
				$checked = '';
				$culture_active = '';
			}
			$resume_corporate_cultures_html .= '<div class="col-md-6 col-sm-6 col-xs-12 resource-wrap"><div class="resource-section'.$culture_active.'"><input type="radio" name="corporate_culture" id="chcked" value="'.$resume_corporate_culture->name.'" class="corporate_culture" required'.$checked.'><h1>'.$resume_corporate_culture->name.' </h1><div class="img-wrap"><img src="'.esc_url( get_field( 'image', 'resume-corporate-culture_'.$resume_corporate_culture->term_id ) ).'" alt="'.esc_attr( $resume_corporate_culture->name ).'" /></div><div class="resource-content"><dl class="dl-horizontal">'.get_field( 'html_listings', 'resume-corporate-culture_'.$resume_corporate_culture->term_id ).'</dl></div></div></div>';
		}
	}
} elseif ( $_SESSION['woocommerce_resumes']['post_id'] ) {
	$last_post_id = $_SESSION['woocommerce_resumes']['post_id'];
	$corporate_culture = get_the_terms( $last_post_id, 'resume-corporate-culture' );
	$corporate_culture_description = wp_list_pluck( $corporate_culture, 'description' );
	$corporate_culture_name = wp_list_pluck( $corporate_culture, 'name' );
	$form_values_array = array(
		'corporate_culture' => $corporate_culture_name[0]
		);
	$form_values = $form_values_array;
	if ( array_key_exists( 'corporate_culture', $form_values ) ) {
		$resume_corporate_cultures_html = '';
		foreach ( $resume_corporate_cultures as $resume_corporate_culture ) {
			if ( $resume_corporate_culture->name === $form_values['corporate_culture'] ) {
				$checked = ' checked';
				$culture_active = ' resource-active';
			} else {
				$checked = '';
				$culture_active = '';
			}
			$resume_corporate_cultures_html .= '<div class="col-md-6 col-sm-6 col-xs-12 resource-wrap"><div class="resource-section'.$culture_active.'"><input type="radio" name="corporate_culture" id="chcked" value="'.$resume_corporate_culture->name.'" class="corporate_culture" required'.$checked.'><h1>'.$resume_corporate_culture->name.' </h1><div class="img-wrap"><img src="'.esc_url( get_field( 'image', 'resume-corporate-culture_'.$resume_corporate_culture->term_id ) ).'" alt="'.esc_attr( $resume_corporate_culture->name ).'" /></div><div class="resource-content"><dl class="dl-horizontal">'.get_field( 'html_listings', 'resume-corporate-culture_'.$resume_corporate_culture->term_id ).'</dl></div></div></div>';
		}
	}
} else {
	$form_values = array();
}
?>
<div class="giyg-survey-form container giyg-survey-culture">
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
			<li class="bar active"><span class="active">Culture</span></li>
			<li class="bar"><span>Team</span></li>
			<li class="bar"><span>Impact Statement</span></li>
			<li class="bar"><span>Social Handles</span></li>
	    </ul>
	    <div class="survey-form-header">
		    <div class="media">
			  <div class="media-left">
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/culture.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  <div class="mobile-progress">
					<p>9 of 12</p>
				</div>
			    <h1 class="media-heading">Culture</h1>
                <p>You're almost done! Now, let's get to know the company culture that helps you do your best work! Choose the culture that fits your personality best.</p>
			  </div>
			</div>
		</div>
	</div>
	<article class="survey-form-wrap">
		<div class="row">
			<form method="POST" class="form_validate" id="form-9">
				<div class="col-sm-12">
					<ul>
						<?php
							echo '<div class="row">'.$resume_corporate_cultures_html.'</div>';
						if ( isset( $errors['corporate_culture'] ) ) {
							echo '<div class="row"><label id="corporate_culture-error" class="error" for="corporate_culture">'.$errors['corporate_culture'].'</label></div>';
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
	jQuery('input.corporate_culture').each(function(){
		var self = jQuery(this),
		label = self.prev(),
		label_text = label.text();

		label.remove();
		//self.iCheck({
		//	radioClass: 'icheckbox_line-green',
		//	insert:  label_text + '<div class="icheck_line-icon"></div>'
		//});
	});
	jQuery('#form-9').validate({
		errorPlacement: function(error, element) {
			element.parents('div.col-lg-2').append(error);
		}
	});
    jQuery('.resource-section').click(function() {
	    jQuery('input[name="corporate_culture"]', this).prop("checked",true);
	    jQuery('.resource-section').removeClass('resource-active');
	    jQuery(this).addClass('resource-active');
	});
})
</script>
