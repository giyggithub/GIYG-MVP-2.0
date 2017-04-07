<?php
/**
 * This is the first form template file.
 *
 * @package WooCommerce Resumes.
 */

$check_form_submit = giyg_wr_post( 'giyg_wr_form' );
$check_session = giyg_wr_session( 'woocommerce_resumes' );
$current_time = date('m/d/Y H:i:s');
$user_last_posval = giyg_wr_user_last_post();
$last_post_id = $user_last_posval[0]->ID;
$pometa = get_post_meta($last_post_id);
if ( array_key_exists( 'giyg_wr_impact_statement', $pometa ) ) {
	$last_post_id = '';
}

if ( $check_form_submit ) {
	$form_values = giyg_wr_post_all();
} elseif ( $check_session ) {
	$form_values = $check_session['form_1'];
	if( empty($form_values['phone']) )
		$form_values['phone'] = get_post_meta( $last_post_id, 'phone', true );
	if( empty($form_values['attachment_id']) )
		$form_values['attachment_id'] = get_post_thumbnail_id( $last_post_id );
} elseif ( $last_post_id ) { 
	$form_values_array = array(
		'phone' => get_post_meta( $last_post_id, 'phone', true ),
		'attachment_id' => get_post_thumbnail_id( $last_post_id )
		);
    $form_values = $form_values_array;
} else {
	$form_values = array();
}
//print_r($form_values);
?>
<div class="giyg-survey-form container giyg-survey-form-common">
	<div class="row">
		<ul id="progressbar">
	        <li class="active first"><span class="active">Contact Info</span></li>
	        <li class="bar"><span>Dream Job</span></li>
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
			      <img class="media-object" src="<?php echo GIYG_WR_BASEURL; ?>images/common/contactInfo.svg" alt="Step">
			  </div>
			  <div class="media-body">
			    <div class="mobile-progress">
					<p>1 of 12</p>
				</div>
			    <h1 class="media-heading">Contact Info</h1>
			    <p>Let's start with the basics.&nbsp;&nbsp;Please enter your information as you would like to see it on your GIYGgraph:</p>
			  </div>
			</div>
		</div>
	</div>
	<article class="survey-form-wrap">
		<div class="row">
			<form method="POST" class="form_validate" id="form-1" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-8 survey-form-profile">
						<div class="row">
							<div class="col-md-12">
									<input class="form-control input-md <?php if ( isset( $errors['first_name'] ) ) { echo esc_attr( 'error' ); }?>" type="text" placeholder="First Name" name="first_name" id="first_name" value="<?php if ( array_key_exists( 'first_name', $form_values ) ) { echo esc_attr( $form_values['first_name'] );
		} else { echo esc_attr( $current_user->user_firstname ); } ?>" maxlength="50" minlength="3" autocomplete="off" autofocus required /><?php if ( isset( $errors['first_name'] ) ) { echo '<label id="first_name-error" class="error" for="first_name">'.$errors['first_name'].'</label>'; }?>
									<input class="form-control input-md <?php if ( isset( $errors['last_name'] ) ) { echo 'error'; }?>" type="text" placeholder="Last Name" name="last_name" id="last_name" value="<?php if ( array_key_exists( 'last_name', $form_values ) ) { echo esc_attr( $form_values['last_name'] );
		} else { echo esc_attr( $current_user->user_lastname ); }  ?>" maxlength="50" autocomplete="off" required /><?php if ( isset( $errors['last_name'] ) ) { echo '<label id="last_name-error" class="error" for="last_name">'.$errors['last_name'].'</label>'; }?>
									<input class="form-control input-md <?php if ( isset( $errors['email'] ) ) { echo 'error'; }?>" type="email" placeholder="Email" name="email" id="email" value="<?php if ( array_key_exists( 'email', $form_values ) ) { echo esc_attr( $form_values['email'] );
		} else { echo esc_attr( $current_user->user_email ); }  ?>" maxlength="50" autocomplete="off" required /><?php if ( isset( $errors['email'] ) ) { echo '<label id="email-error" class="error" for="email">'.$errors['email'].'</label>'; }?>
									<input class="form-control input-md <?php if ( isset( $errors['phone'] ) ) { echo 'error'; }?>" type="text" placeholder="Best Contact Phone Number" name="phone" id="phone_number" value="<?php if ( array_key_exists( 'phone', $form_values ) ) { echo esc_attr( $form_values['phone'] ); } ?>" maxlength="16" autocomplete="off" required /><?php if ( isset( $errors['phone'] ) ) { echo '<label id="phone-error" class="error" for="phone">'.$errors['phone'].'</label>'; }?>
									<?php /*
									<input class="form-control input-md <?php if ( isset( $errors['giyg_wr_title'] ) ) { echo 'error'; }?>" type="text" placeholder="GIYGgraph Title" name="giyg_wr_title" id="giyg_wr_title" value="<?php if ( array_key_exists( 'giyg_wr_title', $form_values ) ) { echo esc_attr( $form_values['giyg_wr_title'] ); } ?>" maxlength="100" autocomplete="off" required /><?php if ( isset( $errors['giyg_wr_title'] ) ) { echo '<label id="giyg_wr_title-error" class="error" for="giyg_wr_title">'.$errors['giyg_wr_title'].'</label>'; }?>
									*/ ?>
									<input class="form-control input-md" type="hidden" placeholder="GIYGgraph Title" name="giyg_wr_title" id="giyg_wr_title" value="Untitled GIYGgraph <?php echo $current_time; ?>" maxlength="100" autocomplete="off" />
                                    <input class="form-control input-md" type="hidden" placeholder="GIYGgraph Title" name="giyg_wr_title2" id="giyg_wr_title2" value="Who I Am, What I Have Done, How I Fit" maxlength="40" autocomplete="off" />
									<input class="form-control input-md" type="hidden" placeholder="Last Post ID" name="last_post_id" id="last_post_id" value="<?php echo $last_post_id; ?>" maxlength="100" autocomplete="off" />
								</div>
							</div>
					</div>
                    <div class="col-md-4 col-sm-6 col-xs-12 profile-upload-wrap">
						
						<div class="profile-upload">
							<label class="fileinput-button" for="avatar">
								<?php
								if(!empty($form_values['attachment_id'])){
									$image_attributes = wp_get_attachment_image_src( $form_values['attachment_id'], 'medium' );
								?>
									<input id="attachment_id" type="hidden" name="attachment_id" value="<?php echo $form_values['attachment_id']; ?>" />
								<?php
								}
								?>								
						        <i class="glyphicon glyphicon-camera"></i>
						        <!-- The file input field used as target for the file upload widget -->
						        <input id="avatar" type="file" name="avatar" onchange="loadFile(event)" />
						   		<?php if ( isset( $errors['avatar'] ) ) { echo '<label id="avatar-error" class="error" for="avatar">'.$errors['avatar'].'</label>'; }?>
						   		<img id="out_avatar" class="our-avatar" src="<?php echo $image_attributes[0]; ?>"/>
                                 
						    </label>						    
					   		  <p class="text-center">Click to Upload <br> Your High Resolution GIYGgraph Photo (Optional) <br> For better resolution please use 500*500 scale images or square shaped images.</p>
					   </div>
					</div>
				</div>
				<div class="row nav-btn-wrap">
					<div class="col-md-2 col-md-offset-5">
						<?php wp_nonce_field( 'giyg_wr_nonce_action', 'giyg_wr_nonce_field' ); ?>
						<input type="hidden" value="1" name="giyg_wr_form">
						<button type="submit" name="next" class="btn btn-success btn-md">NEXT</button>
					</div>
				</div>
			</form>
		</div>
	</article>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#form-1').validate({
		rules: {
			first_name: {
				required: true,
				maxlength: 20,
				minlength: 1,
			},
			last_name: {
				required: true,
				maxlength: 20,
			},
			email: {
				required: true,
				email: true,
				maxlength: 50,
			},
			phone: {
				required: true,
				phoneUS: true,
				maxlength: 16,
			},
			/*giyg_wr_title: {
				required: true,
				maxlength: 100,
			},*/
            /*avatar: {
			<?php if ( ! array_key_exists( 'avatar', $form_values ) ) { ?>
				required: true,
			<?php } ?>
				accept: 'image/*',
			},*/
		},
	});

	//mask	
    //jQuery('#phone_number').mask("999-999-9999",{positionCaretOnClick: 'radixFocus'});
    //end mask
})
jQuery( function() {
	var tooltips = jQuery( "[title]" ).tooltip({
		position: {
			my: "left top",
			at: "right+5 top-5",
			collision: "none"
		}
	});
} );

function loadFile(event) {
	var output = document.getElementById('out_avatar');
	output.src = URL.createObjectURL(event.target.files[0]);
};
</script>