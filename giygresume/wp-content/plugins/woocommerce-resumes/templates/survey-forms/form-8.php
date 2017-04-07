<?php
/**
 * This is the eighth form template file.
 *
 * @package WooCommerce Resumes.
 */
 
$check_form_submit = giyg_wr_post( 'giyg_wr_form' );
$check_session = giyg_wr_session( 'woocommerce_resumes' );
$resume_core_values = get_terms( array(
	'taxonomy' => 'resume-core-value',
	'hide_empty' => false,
) );
$resume_core_values_html = '';
foreach ( $resume_core_values as $resume_core_value ) {
	$resume_core_values_html .= '<li><label>'.$resume_core_value->name.' </label><input type="checkbox" id="icheck_' . $i . '" name="core_value[]" value="'.$resume_core_value->name.'" class="core_value"></li>';
}
if ( $check_form_submit ) {
	$form_values = giyg_wr_post_all();
	if ( array_key_exists( 'core_value', $form_values ) ) {
		$resume_core_values_html = '';
		foreach ( $resume_core_values as $resume_core_value ) {
			$resume_core_values_html .= '<li><label>'.$resume_core_value->name.' </label><input type="checkbox" name="core_value[]" value="'.$resume_core_value->name.'" class="core_value"';
			if ( in_array( $resume_core_value->name, $form_values['core_value'], true ) ) {
				$resume_core_values_html .= ' checked';
			}
			$resume_core_values_html .= '></li>';
		}
	}
} elseif ( array_key_exists( 'form_8', $_SESSION['woocommerce_resumes'] ) ) {
	$form_values = $check_session['form_8'];
	if ( array_key_exists( 'core_value', $form_values ) ) {
		$resume_core_values_html = '';
		foreach ( $resume_core_values as $resume_core_value ) {
			$resume_core_values_html .= '<li><label>'.$resume_core_value->name.' </label><input type="checkbox" name="core_value[]" value="'.$resume_core_value->name.'" class="core_value"';
			if ( in_array( $resume_core_value->name, $form_values['core_value'], true ) ) {
				$resume_core_values_html .= ' checked';
			}
			$resume_core_values_html .= '></li>';
		}
	}
} elseif ( $_SESSION['woocommerce_resumes']['post_id'] ) {
	$last_post_id = $_SESSION['woocommerce_resumes']['post_id'];
	$core_value = get_the_terms( $last_post_id, 'resume-core-value' );
	$core_value_name = wp_list_pluck( $core_value, 'name' );
	$form_values_array = array(
		'core_value' => $core_value_name
		);
	$form_values = $form_values_array;
	if ( array_key_exists( 'core_value', $form_values ) ) {
		$resume_core_values_html = '';
		foreach ( $resume_core_values as $resume_core_value ) {
			$resume_core_values_html .= '<li><label>'.$resume_core_value->name.' </label><input type="checkbox" name="core_value[]" value="'.$resume_core_value->name.'" class="core_value"';
			if ( in_array( $resume_core_value->name, $form_values['core_value'], true ) ) {
				$resume_core_values_html .= ' checked';
			}
			$resume_core_values_html .= '></li>';
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
			<li class="active tick"><span>Personality</span></li>
			<li class="active"><span class="active">Values</span></li>
			<li class="bar"><span>Culture</span></li>
			<li class="bar"><span>Team</span></li>
			<li class="bar"><span>Impact Statement</span></li>
			<li class="bar"><span>Social Handles</span></li>
	    </ul>
	    <div class="survey-form-header">
		    <div class="media">
			  <div class="media-left">
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/values.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  	<div class="mobile-progress">
					<p>8 of 12</p>
				</div>
			    <h1 class="media-heading">Values</h1>
                <p>You work best when your personal core values align with company culture.</p>
                <p>Please select your top 10 core values from the list below. Don't see one that's important to you? No worries! You can switch it on your GIYGgraph later.</p>
                <div class="count-checkboxes-wrapper">
		      		<p>Total selected: <span id="count-checked-checkboxes">0</span></p>
		      	</div>
			  </div>			  
			</div>			
		</div>
	</div>
	<article class="survey-form-wrap survey-form-eight">
		<div class="row">
			<form method="POST" class="form_validate" id="form-8">
				<div class="row">
					<div class="col-sm-12">
						<ul>
							<?php
								echo $resume_core_values_html;
							if ( isset( $errors['core_value'] ) ) {
								echo '</div><div class="row"><label id="core_value-error" class="error" for="core_value">'.$errors['core_value'].'</label>';
							}
							?>
						</ul>
					</div>                    
				</div>
				<?php giyg_wr_navigation_button(); ?>
			</form>
		</div>
	</article>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('input.core_value').each(function(){
		var self = jQuery(this),
		label = self.prev(),
		label_text = label.text();

		label.remove();
		self.iCheck({
			checkboxClass: 'icheckbox_line-green',
			insert:  label_text + '<div class="icheck_line-icon"></div>'
		});
	});
	jQuery('.iCheck-helper').click(function(e){
		if((jQuery('.core_value:checked').length) > 10){
            jQuery(this).parents('.icheckbox_line-green').removeClass('checked');
            jQuery(this).parents('.icheckbox_line-green').find('.core_value').prop('checked',false);
			alert('Please choose 10 core values.');
			return false;
		}
		var countCheckedCheckboxes = jQuery('.core_value:checked').length;
		jQuery('#count-checked-checkboxes').text(countCheckedCheckboxes);
	});	
	jQuery('#form-8').submit(function(){		
		if( jQuery('.core_value:checked').length == 0 || ( (jQuery('.core_value:checked').length) >= 1 && (jQuery('.core_value:checked').length) !== 10) ) {
			alert('Please choose 10 core values.');
			return false;
		}
	});
})
</script>