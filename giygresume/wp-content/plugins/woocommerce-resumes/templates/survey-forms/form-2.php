<?php
/**
 * This is the second form template file.
 *
 * @package WooCommerce Resumes.
 */
$check_form_submit = giyg_wr_post( 'giyg_wr_form' );
$check_session = giyg_wr_session( 'woocommerce_resumes' );
$resume_categories = get_terms( array(
	'taxonomy' => 'resume-category',
	'hide_empty' => false,
) );
$resume_categories_html = '';
foreach ( $resume_categories as $resume_category ) {
	$resume_categories_html .= '<li><label>'.$resume_category->name.' </label><input type="checkbox" name="category[]" value="'.$resume_category->name.'" class="category"></li>';
}
if ( $check_form_submit ) {
	$form_values = giyg_wr_post_all();
	if ( array_key_exists( 'category', $form_values ) ) {
		$resume_categories_html = '';
		foreach ( $resume_categories as $resume_category ) {
			$resume_categories_html .= '<li><label>'.$resume_category->name.' </label><input type="checkbox" name="category[]" value="'.$resume_category->name.'" class="category"';
			if ( in_array( $resume_category->name, $form_values['category'], true ) ) {
				$resume_categories_html .= ' checked';
			}
			$resume_categories_html .= '></li>';
		}
	}
} elseif ( array_key_exists( 'form_2', $_SESSION['woocommerce_resumes'] ) ) {
	$form_values = $check_session['form_2'];
	if ( array_key_exists( 'category', $form_values ) ) {
		$resume_categories_html = '';
		foreach ( $resume_categories as $resume_category ) {
			$resume_categories_html .= '<li><label>'.$resume_category->name.' </label><input type="checkbox" name="category[]" value="'.$resume_category->name.'" class="category"';
			if ( in_array( $resume_category->name, $form_values['category'], true ) ) {
				$resume_categories_html .= ' checked';
			}
			$resume_categories_html .= '></li>';
		}
	}
} elseif ( $_SESSION['woocommerce_resumes']['post_id'] ) {
	$last_post_id = $_SESSION['woocommerce_resumes']['post_id'];
	$category = get_the_terms( $last_post_id, 'resume-category' );
	$category_name = wp_list_pluck( $category, 'name' );	
	$form_values_array = array(
		'category' => $category_name
		);
	$form_values = $form_values_array;
	if ( array_key_exists( 'category', $form_values ) ) {
		$resume_categories_html = '';
		foreach ( $resume_categories as $resume_category ) {
			$resume_categories_html .= '<li><label>'.$resume_category->name.' </label><input type="checkbox" name="category[]" value="'.$resume_category->name.'" class="category"';
			if ( in_array( $resume_category->name, $form_values['category'], true ) ) {
				$resume_categories_html .= ' checked';
			}
			$resume_categories_html .= '></li>';
		}
	}
} else {
	$form_values = array();
}
?>
<div class="giyg-survey-form">
	<div class="row">
		<ul id="progressbar">
	        <li class="active first tick"><span>Contact Info</span></li>
			<li class="active bar"><span class="active">Dream Job</span></li>
			<li class="bar"><span>Ideal Company</span></li>
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
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/dreamJob.svg" alt="Step">
			  </div>
			  <div class="media-body">
			  	<div class="mobile-progress">
					<p>2 of 12</p>
				</div>
			    <h1 class="media-heading">Dream Job</h1>
                <p>Thanks! Now let's get your juices flowing! Tell us about your top 2 dream jobs. You can simply select 2 from the categories provided or select 1 from the categories and then key in your own short phrase describing the sort of work you'd like to do.</p>
			  </div>
			</div>
		</div>
	</div>
	<article class="survey-form-wrap">
	<div class="row">
		<form method="POST" class="form_validate" id="form-2">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<?php
							echo $resume_categories_html;
						if ( isset( $errors['category'] ) ) {
							echo '</div><div class="row"><label id="category-error" class="error" for="category">'.$errors['category'].'</label>';
						}
						?>
					</ul>
				</div>
			</div>
			<article class="category-sec">
				<div class="row">
					<div class="col-sm-12">
						<h5>Don’t see your dream job above, type in your own short description (Limit 55 characters)</h5>
					</div>
					<div class="col-sm-8">
						<input class="form-control input-md <?php if ( isset( $errors['giyg_wr_custom_category'] ) ) { echo esc_attr( 'error' ); }?>" type="text" id="giyg_wr_custom_category" name="giyg_wr_custom_category" value="<?php if ( array_key_exists( 'giyg_wr_custom_category', $form_values ) ) { echo esc_attr( $form_values['giyg_wr_custom_category'] ); } ?>" maxlength="55" /><?php if ( isset( $errors['giyg_wr_custom_category'] ) ) { echo '<label id="giyg_wr_custom_category-error" class="error" for="giyg_wr_custom_category">'.$errors['giyg_wr_custom_category'].'</label>'; }?>
					</div>
				</div>
			</article>
				<?php giyg_wr_navigation_button(); ?>
		</form>
	</div>
	</article>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('input.category').each(function(){
		var self = jQuery(this),
		label = self.prev(),
		label_text = label.text();

		label.remove();
		self.iCheck({
			checkboxClass: 'icheckbox_line-green',
			insert:  label_text + '<div class="icheck_line-icon"></div>'
		});
	});
	jQuery('#form-2').validate({
		rules: {
			giyg_wr_custom_category: {
				required: function() {
					return (jQuery('.category:checked').length === 0)
				},
				maxlength: 55,
			},
		}
	});
    jQuery('.iCheck-helper').click(function(e){
        var count = 0;
		for(var i=0; i < 1; i++){
			if(jQuery('#giyg_wr_custom_category').val() != ''){
				count++;
			}
		}
		if(jQuery('.category:checked').length > 2){
            jQuery(this).parents('.icheckbox_line-green').removeClass('checked');
            jQuery(this).parents('.icheckbox_line-green').find('.category').prop('checked',false);
            alert('Choose exactly 2 please');
			return false;
		}
        
        if((jQuery('#giyg_wr_custom_category').length + count) != 0 && (jQuery('.category:checked').length + count > 2 )){
            jQuery(this).parents('.icheckbox_line-green').removeClass('checked');
            jQuery(this).parents('.icheckbox_line-green').find('.category').prop('checked',false);
            alert('Choose exactly 2 please');
			return false;
        }
	});
	jQuery('#form-2').submit(function(){
        var count = 0;
		for(var i=0; i < 1; i++){
			if(jQuery('#giyg_wr_custom_category').val() != ''){
				count++;
			}
		}
        
		if( (jQuery('.category:checked').length + count) != 0 && (jQuery('.category:checked').length + count)!== 2 ){
            alert('Please choose exactly 2');
			return false;
		}
	})
})
</script>
