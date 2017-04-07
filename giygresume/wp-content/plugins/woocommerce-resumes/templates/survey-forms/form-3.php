<?php
/**
 * This is the third form template file.
 *
 * @package WooCommerce Resumes.
 */

$check_form_submit = giyg_wr_post( 'giyg_wr_form' );
$check_session = giyg_wr_session( 'woocommerce_resumes' );
$resume_ideal_companies = get_terms( array(
	'taxonomy' => 'resume-ideal-company',
	'hide_empty' => false,
) );
$resume_ideal_companies_html = '';
foreach ( $resume_ideal_companies as $resume_ideal_company ) {
	$resume_ideal_companies_html .= '<li><label>'.$resume_ideal_company->name.' </label><input type="checkbox" name="ideal_company" value="'.$resume_ideal_company->name.'" class="ideal_company"></li>';
}
if ( $check_form_submit ) { 
	$form_values = giyg_wr_post_all();
} elseif ( array_key_exists( 'form_3', $_SESSION['woocommerce_resumes'] ) ) { 
	$form_values = $check_session['form_3'];
	if ( array_key_exists( 'ideal_company', $form_values ) ) {
		$resume_ideal_companies_html = '';
		foreach ( $resume_ideal_companies as $resume_ideal_company ) {
			$resume_ideal_companies_html .= '<li><label>'.$resume_ideal_company->name.' </label><input type="checkbox" name="ideal_company" value="'.$resume_ideal_company->name.'" class="ideal_company"';
			if ( $resume_ideal_company->name === $form_values['ideal_company'] ) {
				$resume_ideal_companies_html .= ' checked';
			}
			$resume_ideal_companies_html .= '></li>';
		}
	}
} elseif ( $_SESSION['woocommerce_resumes']['post_id'] ) { 
	$last_post_id = $_SESSION['woocommerce_resumes']['post_id'];
	$ideal_company = get_the_terms( $last_post_id, 'resume-ideal-company' );
	$ideal_company_description = wp_list_pluck( $ideal_company, 'description' );
	$ideal_company_name = wp_list_pluck( $ideal_company, 'name' );
	
	$form_values_array = array(
		'ideal_company' => $ideal_company_name[0]
		);
	$form_values = $form_values_array;
	if ( array_key_exists( 'ideal_company', $form_values ) ) {
		$resume_ideal_companies_html = '';
		foreach ( $resume_ideal_companies as $resume_ideal_company ) {
			$resume_ideal_companies_html .= '<li><label>'.$resume_ideal_company->name.' </label><input type="checkbox" name="ideal_company" value="'.$resume_ideal_company->name.'" class="ideal_company"';
			if ( $resume_ideal_company->name === $form_values['ideal_company'] ) {
				$resume_ideal_companies_html .= ' checked';
			}
			$resume_ideal_companies_html .= '></li>';
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
			<li class="active bar tick"><span>Dream Job</span></li>
			<li class="active bar"><span class="active">Ideal Company</span></li>
			<li class="bar"><span>Accomplishments</span></li>
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
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/idealCompany.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  	<div class="mobile-progress">
					<p>3 of 12</p>
				</div>
			    <h1 class="media-heading">Ideal Company</h1>
			    <p>Great! Now please choose your ideal company style. If you don't see it in the list, you can enter your own below.</p>
			  </div>
			</div>
		</div>
	</div>
	<article class="survey-form-wrap">
	<div class="row">
		<form method="POST" class="form_validate" id="form-3">
			<div class="row">
				<div class="col-sm-12">
					<ul>
						<?php 
							echo $resume_ideal_companies_html; 
							if ( isset( $errors['ideal_company'] ) ) { 
								echo '</div><div class="row"><label id="ideal_company-error" class="error" for="ideal_company">'.$errors['ideal_company'].'</label>'; 
							}
						?>
					</ul>
				</div>
			</div>
			<article class="category-sec">
				<div class="row">
					<div class="col-sm-12">
						<h5>Please enter your ideal company style here (Limit 55 characters)</h5>
					</div>
					<div class="col-sm-8">
						<input class="form-control input-md <?php if ( isset( $errors['giyg_wr_custom_ideal_company'] ) ) { echo esc_attr( 'error' ); }?>" type="text" name="giyg_wr_custom_ideal_company" id="giyg_wr_custom_ideal_company" value="<?php if ( array_key_exists( 'giyg_wr_custom_ideal_company', $form_values ) ) { echo esc_attr( $form_values['giyg_wr_custom_ideal_company'] ); } ?>" maxlength="55" autofocus /><?php if ( isset( $errors['giyg_wr_custom_ideal_company'] ) ) { echo '<label id="giyg_wr_custom_ideal_company-error" class="error" for="giyg_wr_custom_ideal_company">'.$errors['giyg_wr_custom_ideal_company'].'</label>'; }?>
					</div>
				</div>
			</article>
				<?php giyg_wr_navigation_button(); ?>
		</form>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('input.ideal_company').each(function(){
		var self = jQuery(this),
		label = self.prev(),
		label_text = label.text();

		label.remove();
		self.iCheck({
			checkboxClass: 'icheckbox_line-green',
			insert:  label_text + '<div class="icheck_line-icon"></div>'
		});
	});
	jQuery('#form-3').validate({
		rules: {
			giyg_wr_custom_ideal_company: {
				required: function() {
					return (jQuery('.ideal_company:checked').length === 0 );
				},
				maxlength: 55,
			},
		}
	});
    jQuery('.iCheck-helper').click(function(e){
        var count = 0;
		for(var i=0; i < 1; i++){
			if(jQuery('#giyg_wr_custom_ideal_company').val() != ''){
				count++;
			}
		}
		if(jQuery('.ideal_company:checked').length > 1){
            jQuery(this).parents('.icheckbox_line-green').removeClass('checked');
            jQuery(this).parents('.icheckbox_line-green').find('.ideal_company').prop('checked',false);
            alert('Choose exactly 1 please');
			return false;
		}	
	});
    jQuery('#form-3').submit(function(){
        var count = 0;		
		if(jQuery('#giyg_wr_custom_ideal_company').val() != ''){
			count = 1;
		}
		
		if( (jQuery('.ideal_company:checked').length + count) != 0 && (jQuery('.ideal_company:checked').length + count)!= 1 ){
            alert('Please choose exactly 1');
			return false;
		}
	});
    /*jQuery("#giyg_wr_custom_ideal_company").keydown(function(e){
        if(e.which != 13 && e.which != 8 && e.which != 32){
            jQuery('.icheckbox_line-green').removeClass('checked');
            jQuery(".ideal_company").prop("checked",false);
        }
    })*/
})
</script>
