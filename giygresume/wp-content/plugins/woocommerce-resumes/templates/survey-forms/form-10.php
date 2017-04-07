<?php
/**
 * This is the tenth form template file.
 *
 * @package WooCommerce Resumes.
 */

$check_form_submit = giyg_wr_post( 'giyg_wr_form' );
$check_session = giyg_wr_session( 'woocommerce_resumes' );
$resume_team_attributes = get_terms( array(
	'taxonomy' => 'resume-team-attribute',
	'hide_empty' => false,
) );
$resume_team_attributes_html = '';
foreach ( $resume_team_attributes as $resume_team_attribute ) {
	$resume_team_attributes_html .= '<li><label>'.$resume_team_attribute->name.' </label><input type="checkbox" name="team_attribute[]" value="'.$resume_team_attribute->name.'" class="team_attribute"></li>';
}
if ( $check_form_submit ) {
	$form_values = giyg_wr_post_all();
	if ( array_key_exists( 'team_attribute', $form_values ) ) {
		$resume_team_attributes_html = '';
		foreach ( $resume_team_attributes as $resume_team_attribute ) {
			$resume_team_attributes_html .= '<li><label>'.$resume_team_attribute->name.' </label><input type="checkbox" name="team_attribute[]" value="'.$resume_team_attribute->name.'" class="team_attribute"';
			if ( in_array( $resume_team_attribute->name, $form_values['team_attribute'], true ) ) {
				$resume_team_attributes_html .= ' checked';
			}
			$resume_team_attributes_html .= '></li>';
		}
	}
} elseif ( array_key_exists( 'form_10', $_SESSION['woocommerce_resumes'] ) ) {
	$form_values = $check_session['form_10'];
	if ( array_key_exists( 'team_attribute', $form_values ) ) {
		$resume_team_attributes_html = '';
		foreach ( $resume_team_attributes as $resume_team_attribute ) {
			$resume_team_attributes_html .= '<li><label>'.$resume_team_attribute->name.' </label><input type="checkbox" name="team_attribute[]" value="'.$resume_team_attribute->name.'" class="team_attribute"';
			if ( in_array( $resume_team_attribute->name, $form_values['team_attribute'], true ) ) {
				$resume_team_attributes_html .= ' checked';
			}
			$resume_team_attributes_html .= '></li>';
		}
	}
} elseif ( $_SESSION['woocommerce_resumes']['post_id'] ) {
	$last_post_id = $_SESSION['woocommerce_resumes']['post_id'];
	$team_attribute = get_the_terms( $last_post_id, 'resume-team-attribute' );
	$team_attribute_name = wp_list_pluck( $team_attribute, 'name' );
	$form_values_array = array(
		'team_attribute' => $team_attribute_name
		);
	$form_values = $form_values_array;
	if ( array_key_exists( 'team_attribute', $form_values ) ) {
		$resume_team_attributes_html = '';
		foreach ( $resume_team_attributes as $resume_team_attribute ) {
			$resume_team_attributes_html .= '<li><label>'.$resume_team_attribute->name.' </label><input type="checkbox" name="team_attribute[]" value="'.$resume_team_attribute->name.'" class="team_attribute"';
			if ( in_array( $resume_team_attribute->name, $form_values['team_attribute'], true ) ) {
				$resume_team_attributes_html .= ' checked';
			}
			$resume_team_attributes_html .= '></li>';
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
			<li class="active tick"><span>Values</span></li>
			<li class="active tick"><span>Culture</span></li>
			<li class="bar active"><span class="active">Team</span></li>
			<li class="bar"><span>Impact Statement</span></li>
			<li class="bar"><span>Social Handles</span></li>
	    </ul>
	    <div class="survey-form-header survey-form-header-unique">
		    <div class="media">
			  <div class="media-left">
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/team.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  <div class="mobile-progress">
					<p>10 of 12</p>
				</div>
			    <h1 class="media-heading">Team</h1>
			    <p>When evaluating opportunities, what team attributes do you value most? Pick your top 5 from the list below.  Want to add a few of your own? No problem! You'll be able to customize your GIYGgraph shortly.</p>
			  </div>
			</div>
		</div>
	</div>	
	<article class="survey-form-wrap survey-form-ten">
		<!-- <div class="row">
			<h2>When evaluating opportunities, what team attributes do you value most? Pick your top 5 from the list below, or key in your own.&nbsp;&nbsp;(Limit 30 characters)</h2>
		</div> -->
		<div class="row">
			<form method="POST" class="form_validate" id="form-10">
				<div class="row">
					<div class="col-sm-12">
						<ul>
							<?php
								echo $resume_team_attributes_html;
							if ( isset( $errors['team_attribute'] ) ) {
								echo '</div><div class="row"><label id="team_attribute-error" class="error" for="team_attribute">'.$errors['team_attribute'].'</label>';
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
	jQuery('input.team_attribute').each(function(){
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
		if((jQuery('.team_attribute:checked').length) > 5){
            jQuery(this).parents('.icheckbox_line-green').removeClass('checked');
            jQuery(this).parents('.icheckbox_line-green').find('.team_attribute').prop('checked',false);
			alert('Please choose 5 team attributes.');
			return false;
		}	
	});
	jQuery('#form-10').submit(function(){
		if( jQuery('.team_attribute:checked').length == 0 || ( (jQuery('.team_attribute:checked').length) >= 1 && (jQuery('.team_attribute:checked').length) !== 5 ) ) {
			alert('Please choose 5 team attributes.');
			return false;
		}
	});
})
</script>
