<?php
/**
 * This is the plugin controller file.
 *
 * @package WooCommerce Resumes.
 */

/**
 * Woocommerce_Resumes
 *
 * An controller class.
 */
class GIYG_WR_Controller {
	/**
	 * The error messages
	 *
	 * Potential values are list of errors.
	 *
	 * @var array
	 */
	public $error;
	/**
	 * Function which is used as contructor.
	 */
	public function __construct() {
    
		$nonce = giyg_wr_post( 'giyg_wr_nonce_field' );
		if ( ! isset( $nonce ) || ! wp_verify_nonce( $nonce, 'giyg_wr_nonce_action' ) ) {
			print 'Sorry, your nonce did not verify.';
			exit;
		} else {
			require_once GIYG_WR_BASEPATH . '/lib/vendor/autoload.php';
			$form = 1;
			if ( giyg_wr_post( 'giyg_wr_form' ) ) {
				$form = giyg_wr_post( 'giyg_wr_form' );
			}
			$giyg_wr_form = 'form_'.$form;
            
			$status_form = $this->$giyg_wr_form();
			if ( $status_form ) {
				$post_values = giyg_wr_post_all();				
				unset( $post_values['giyg_wr_nonce_field'], $post_values['_wp_http_referer'], $post_values['giyg_wr_form'], $post_values['next'], $post_values['preview'] );
				$_SESSION['woocommerce_resumes'][ $giyg_wr_form ] = $post_values;
                
                $session_values = giyg_wr_session( 'woocommerce_resumes' );

                if($session_values['post_id']!=""){
                	$post_id = $session_values['post_id'];
                } elseif($session_values['form_1']['last_post_id']!="") {
                	$_SESSION['woocommerce_resumes']['post_id'] = $session_values['form_1']['last_post_id'];
                	$post_id = $_SESSION['woocommerce_resumes']['post_id'];
                } else {
                	$post_id = '';
                }
                
                    if('form_1' === $giyg_wr_form){
                        
                        if('' != $_FILES['avatar']['name'] && 0 == $_FILES['avatar']['error']){
                            if(isset($post_values['attachment_id'])){
                                unset( $post_values['attachment_id'] );
                            }
                            // These files need to be included as dependencies when on the front end.
                            require_once( ABSPATH . 'wp-admin/includes/image.php' );
                            require_once( ABSPATH . 'wp-admin/includes/file.php' );
                            require_once( ABSPATH . 'wp-admin/includes/media.php' );
                            $attachment_id = media_handle_upload( 'avatar', 0 );
                            $_SESSION['woocommerce_resumes'][ $giyg_wr_form ]['attachment_id'] = $attachment_id;  
                        }                        
                        $post_array = array(
                            'post_title' => $session_values['form_1']['giyg_wr_title'],
                            'post_status' => 'publish',
                            'post_type' => 'resume',
                        );
                        if(empty($post_id)){
                            $post_id = wp_insert_post( $post_array );
                            $_SESSION['woocommerce_resumes']['post_id'] = $post_id;
                        }
                        
                        if(!empty($post_id)){
                        	if( !metadata_exists( 'post', $post_id, 'first_name' ) )
	                        	add_post_meta( $post_id, 'first_name', $session_values['form_1']['first_name'] );
	                        else
	                        	update_post_meta( $post_id, 'first_name', $session_values['form_1']['first_name'] );

	                        if( !metadata_exists( 'post', $post_id, 'last_name' ) )
	                        	add_post_meta( $post_id, 'last_name', $session_values['form_1']['last_name'] );
	                        else
	                        	update_post_meta( $post_id, 'last_name', $session_values['form_1']['last_name'] );

	                        if( !metadata_exists( 'post', $post_id, 'email' ) )
	                        	add_post_meta( $post_id, 'email', $session_values['form_1']['email'] );
	                        else
	                        	update_post_meta( $post_id, 'email', $session_values['form_1']['email'] );

	                        if( !metadata_exists( 'post', $post_id, 'phone' ) )
	                        	add_post_meta( $post_id, 'phone', $session_values['form_1']['phone'] );
	                        else
	                        	update_post_meta( $post_id, 'phone', $session_values['form_1']['phone'] );

	                        if( !metadata_exists( 'post', $post_id, 'giyg_wr_title' ) )
	                        	add_post_meta( $post_id, 'giyg_wr_title', $session_values['form_1']['giyg_wr_title'] );
	                        else
	                        	update_post_meta( $post_id, 'giyg_wr_title', $session_values['form_1']['giyg_wr_title'] );

	                        if( !metadata_exists( 'post', $post_id, 'giyg_wr_title2' ) )
	                        	add_post_meta( $post_id, 'giyg_wr_title2', $session_values['form_1']['giyg_wr_title2'] );
	                        else
								update_post_meta( $post_id, 'giyg_wr_title2', $session_values['form_1']['giyg_wr_title2'] );

                            if( $attachment_id )
                                $attachment_id = $attachment_id;
                            else
                                $attachment_id = $session_values['form_1']['attachment_id'];

	                        set_post_thumbnail( $post_id, $attachment_id );
                            $uploaded_image = wp_get_attachment_url( get_post_thumbnail_id( $post_id ) );

                            if($uploaded_image){
                                if (!file_exists( GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $post_id )) {
                                    mkdir(GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $post_id, 0777, true);
                                    chmod(GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $post_id, 0777);      
                                }                            

                                $max_width = "500";
                                $path = GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $post_id;
                                list($txt, $ext) = explode(".", $_FILES['avatar']['name']);
                                $actual_image_name = 'resume_' . $post_id . '.' . $ext;                               
                                $filePath = trailingslashit( $path ) . $actual_image_name;
                                $tmp = $_FILES['avatar']['tmp_name'];                               
                                
                                if( copy($uploaded_image, $filePath) )
                                {
                                    $sizes = getimagesize($filePath);
                                    $width = $sizes[0];
                                    $height = $sizes[1];
                                    //Scale the image if it is greater than the width set above
                                    if ($width > $max_width){
                                        $scale = $max_width/$width;
                                        $uploaded = $this->resizeImage($filePath,$width,$height,$scale);
                                    }else{
                                        $scale = 1;
                                        $uploaded = $this->resizeImage($filePath,$width,$height,$scale);
                                    }
                                }
                                
                            }                            
                        }                       
                        
                    }
                    
                    if( 'form_2' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
	                        
                            wp_set_post_terms( $post_id, implode( ',', $session_values['form_2']['category'] ), 'resume-category' );                            

                    		if( !metadata_exists( 'post', $post_id, 'giyg_wr_category_0' ) )
                                add_post_meta( $post_id, 'giyg_wr_category_0', $session_values['form_2']['category'][0] );
                            else
                            	update_post_meta( $post_id, 'giyg_wr_category_0', $session_values['form_2']['category'][0] );

                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_category_1' ) )
                                add_post_meta( $post_id, 'giyg_wr_category_1', $session_values['form_2']['category'][1] );
                            else
                            	update_post_meta( $post_id, 'giyg_wr_category_1', $session_values['form_2']['category'][1] );                            
                        
                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_custom_category' ) )
                                add_post_meta( $post_id, 'giyg_wr_custom_category', $session_values['form_2']['giyg_wr_custom_category'] );
                            else
                            	update_post_meta( $post_id, 'giyg_wr_custom_category', $session_values['form_2']['giyg_wr_custom_category'] );
	                        
	                    }
                    }
                    if( 'form_3' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
	                        
                            wp_set_post_terms( $post_id, $session_values['form_3']['ideal_company'], 'resume-ideal-company' );

                            $ideal_copmany_terms = wp_get_post_terms( $post_id, 'resume-ideal-company' );

                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_ideal_company' ) )
                                add_post_meta( $post_id, 'giyg_wr_ideal_company', $session_values['form_3']['ideal_company'] );
                            else
                            	update_post_meta( $post_id, 'giyg_wr_ideal_company', $session_values['form_3']['ideal_company'] );

                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_ideal_company_description' ) )
                                add_post_meta( $post_id, 'giyg_wr_ideal_company_description', $ideal_copmany_terms[0]->description );
                            else
                                update_post_meta( $post_id, 'giyg_wr_ideal_company_description', $ideal_copmany_terms[0]->description );
                        
                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_custom_ideal_company' ) )
                                add_post_meta( $post_id, 'giyg_wr_custom_ideal_company', $session_values['form_3']['giyg_wr_custom_ideal_company'] );
                            else
                            	update_post_meta( $post_id, 'giyg_wr_custom_ideal_company', $session_values['form_3']['giyg_wr_custom_ideal_company'] );
                        
	                    }
                    }
                    if( 'form_4' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
	                        for ( $i = 0; $i < 3; $i++ ) {
	                        	if( !metadata_exists( 'post', $post_id, 'giyg_wr_company_name_'.$i ) )
	                            	add_post_meta( $post_id, 'giyg_wr_company_name_'.$i, $session_values['form_4'][ 'giyg_wr_company_name_'.$i ] );
	                            else
	                            	update_post_meta( $post_id, 'giyg_wr_company_name_'.$i, $session_values['form_4'][ 'giyg_wr_company_name_'.$i ] );

	                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_location_'.$i ) )
	                            	add_post_meta( $post_id, 'giyg_wr_location_'.$i, $session_values['form_4'][ 'giyg_wr_location_'.$i ] );
	                            else
	                            	update_post_meta( $post_id, 'giyg_wr_location_'.$i, $session_values['form_4'][ 'giyg_wr_location_'.$i ] );

	                            /*add_post_meta( $post_id, 'giyg_wr_from_date_'.$i, $session_values['form_4'][ 'giyg_wr_from_date_'.$i ] );
	                            add_post_meta( $post_id, 'giyg_wr_to_date_'.$i, $session_values['form_4'][ 'giyg_wr_to_date_'.$i ] );
	                            add_post_meta( $post_id, 'giyg_wr_job_description_'.$i, $session_values['form_4'][ 'giyg_wr_job_description_'.$i ] );*/
	                        }
	                    }
                    }
                    if( 'form_5' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
	                        for ( $i = 0; $i < 5; $i++ ) {
	                        	if( !metadata_exists( 'post', $post_id, 'giyg_wr_skill_name_'.$i ) )
	                            	add_post_meta( $post_id, 'giyg_wr_skill_name_'.$i, $session_values['form_5'][ 'giyg_wr_skill_name_'.$i ] );
	                            else
	                            	update_post_meta( $post_id, 'giyg_wr_skill_name_'.$i, $session_values['form_5'][ 'giyg_wr_skill_name_'.$i ] );

	                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_rating_'.$i ) )
	                            	add_post_meta( $post_id, 'giyg_wr_rating_'.$i, $session_values['form_5'][ 'giyg_wr_rating_'.$i ] );
	                            else
	                            	update_post_meta( $post_id, 'giyg_wr_rating_'.$i, $session_values['form_5'][ 'giyg_wr_rating_'.$i ] );
	                        }
	                    }
                    }
                    if( 'form_6' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
	                        for ( $i = 0; $i < 3; $i++ ) {
	                        	if( !metadata_exists( 'post', $post_id, 'giyg_wr_activity_name_'.$i ) )
	                            	add_post_meta( $post_id, 'giyg_wr_activity_name_'.$i, $session_values['form_6'][ 'giyg_wr_activity_name_'.$i ] );
	                            else
	                            	update_post_meta( $post_id, 'giyg_wr_activity_name_'.$i, $session_values['form_6'][ 'giyg_wr_activity_name_'.$i ] );
	                        }
	                    }
                    }
                    if( 'form_7' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){                        	

                        	wp_set_post_terms( $post_id, $session_values['form_7']['professional_personality'], 'resume-professional-personality' );       	

                        	$professional_personality_terms = wp_get_post_terms( $post_id, 'resume-professional-personality' );

                        	if( !metadata_exists( 'post', $post_id, 'giyg_wr_professional_personality' ) )
                            	add_post_meta( $post_id, 'giyg_wr_professional_personality', $session_values['form_7'][ 'professional_personality' ] );
                            else
                            	update_post_meta( $post_id, 'giyg_wr_professional_personality', $session_values['form_7'][ 'professional_personality' ] );

                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_professional_personality_description' ) )
                                add_post_meta( $post_id, 'giyg_wr_professional_personality_description', $professional_personality_terms[0]->description );
                            else
                                update_post_meta( $post_id, 'giyg_wr_professional_personality_description', $professional_personality_terms[0]->description );

                            $professional_personality_listings = explode( ',', get_field( 'listings', 'resume-professional-personality_'.$professional_personality_terms[0]->term_id ) );

                            for ( $i = 0; $i < 6; $i++ ) {
                            	if( !metadata_exists( 'post', $post_id, 'giyg_wr_professional_personality_attr_'.$i ) )
	                            	add_post_meta( $post_id, 'giyg_wr_professional_personality_attr_'.$i, $professional_personality_listings[$i] );
	                            else
	                            	update_post_meta( $post_id, 'giyg_wr_professional_personality_attr_'.$i, $professional_personality_listings[$i] );
                            }
                            
                       	}
                    }
                    if( 'form_8' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
	                        wp_set_post_terms( $post_id, implode( ',', $session_values['form_8']['core_value'] ), 'resume-core-value' );

	                        for ( $i = 0; $i < 10; $i++ ) {
	                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_core_value_'.$i ) )
	                                add_post_meta( $post_id, 'giyg_wr_core_value_'.$i, $session_values['form_8']['core_value'][$i] );
	                            else
	                            	update_post_meta( $post_id, 'giyg_wr_core_value_'.$i, $session_values['form_8']['core_value'][$i] );
	                        }
	                    }
                    }
                    if( 'form_9' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
                        	wp_set_post_terms( $post_id, $session_values['form_9']['corporate_culture'], 'resume-corporate-culture' );

                        	$corporate_culture_terms = wp_get_post_terms( $post_id, 'resume-corporate-culture' );
                        	
                        	if( !metadata_exists( 'post', $post_id, 'giyg_wr_corporate_culture' ) )
                            	add_post_meta( $post_id, 'giyg_wr_corporate_culture', $session_values['form_9'][ 'corporate_culture' ] );
                            else
                            	update_post_meta( $post_id, 'giyg_wr_corporate_culture', $session_values['form_9'][ 'corporate_culture' ] );

                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_corporate_culture_description' ) )
                                add_post_meta( $post_id, 'giyg_wr_corporate_culture_description', $corporate_culture_terms[0]->description );
                            else
                                update_post_meta( $post_id, 'giyg_wr_corporate_culture_description', $corporate_culture_terms[0]->description );

                            $corporate_culture_listings = explode( ',', get_field( 'listings', 'resume-corporate-culture_'.$corporate_culture_terms[0]->term_id ) );

                            for ( $i = 0; $i < 6; $i++ ) {
                            	if( !metadata_exists( 'post', $post_id, 'giyg_wr_corporate_culture_attr_'.$i ) )
	                            	add_post_meta( $post_id, 'giyg_wr_corporate_culture_attr_'.$i, $corporate_culture_listings[$i] );
	                            else
	                            	update_post_meta( $post_id, 'giyg_wr_corporate_culture_attr_'.$i, $corporate_culture_listings[$i] );
                            }
                        }
                    }
                    if( 'form_10' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
	                        wp_set_post_terms( $post_id, implode( ',', $session_values['form_10']['team_attribute'] ), 'resume-team-attribute' );

	                        for ( $i = 0; $i < 5; $i++ ) {
	                            if( !metadata_exists( 'post', $post_id, 'giyg_wr_team_attribute_'.$i ) )
	                                add_post_meta( $post_id, 'giyg_wr_team_attribute_'.$i, $session_values['form_10']['team_attribute'][$i] );
	                            else
	                            	update_post_meta( $post_id, 'giyg_wr_team_attribute_'.$i, $session_values['form_10']['team_attribute'][$i] );
	                        }

	                    }
                    }
                    if( 'form_11' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
                        	if( !metadata_exists( 'post', $post_id, 'giyg_wr_impact_statement' ) )
                        		add_post_meta( $post_id, 'giyg_wr_impact_statement', stripslashes($session_values['form_11']['giyg_wr_impact_statement']) );
                        	else
                        		update_post_meta( $post_id, 'giyg_wr_impact_statement', stripslashes($session_values['form_11']['giyg_wr_impact_statement']) );
                        }
                    }
                    if( 'form_12' === $giyg_wr_form ){
                        //$post_id = $session_values['post_id'];
                        if(!empty($post_id)){
                        	if( !metadata_exists( 'post', $post_id, 'giyg_wr_facebook_url' ) )
	                        	add_post_meta( $post_id, 'giyg_wr_facebook_url', giyg_wr_post( 'giyg_wr_facebook_url' ) );
	                        else
	                        	update_post_meta( $post_id, 'giyg_wr_facebook_url', giyg_wr_post( 'giyg_wr_facebook_url' ) );

	                        if( !metadata_exists( 'post', $post_id, 'giyg_wr_twitter_url' ) )
	                        	add_post_meta( $post_id, 'giyg_wr_twitter_url', giyg_wr_post( 'giyg_wr_twitter_url' ) );
	                        else
	                        	update_post_meta( $post_id, 'giyg_wr_twitter_url', giyg_wr_post( 'giyg_wr_twitter_url' ) );

	                        if( !metadata_exists( 'post', $post_id, 'giyg_wr_other_url' ) )
	                        	add_post_meta( $post_id, 'giyg_wr_other_url', giyg_wr_post( 'giyg_wr_other_url' ) );
	                        else
	                        	update_post_meta( $post_id, 'giyg_wr_other_url', giyg_wr_post( 'giyg_wr_other_url' ) );

	                        if( !metadata_exists( 'post', $post_id, 'giyg_wr_linkedin_url' ) )
	                        	add_post_meta( $post_id, 'giyg_wr_linkedin_url', giyg_wr_post( 'giyg_wr_linkedin_url' ) );
	                        else
	                        	update_post_meta( $post_id, 'giyg_wr_linkedin_url', giyg_wr_post( 'giyg_wr_linkedin_url' ) );
	                    }
                        $check_post_id = $_SESSION['is_first_resume'];
                        unset( $_SESSION['woocommerce_resumes'] );
                        unset( $_SESSION['is_first_resume'] );

                        if( $check_post_id===0 ) {
                            $_SESSION['is_first_resume'] = 1;
                            wp_redirect( add_query_arg( array('wr-resume-id' => $post_id, 'survey-status' => 'success'), get_permalink( get_option( 'giyg_wr_preview_page_id' ) ) ) );
                        } else {
                            $_SESSION['is_first_resume'] = 1;
                            wp_redirect( add_query_arg( 'wr-resume-id', $post_id, get_permalink( get_option( 'giyg_wr_preview_page_id' ) ) ) );
                        }
                        
                        exit;
                    }                    
				wp_redirect( add_query_arg( 'survey-form', ($form + 1), get_permalink( get_option( 'giyg_wr_survey_page_id' ) ) ) );
				exit;
			}
		}
	}
	/**
	 * Function which is used for form-1 validation page.
	 */
    
	public function form_1() {
        
		$validator = new PHPValidation\Validation();
		$fields = array(
		    'first_name'   => array( 'required' => true, 'maxlength' => 20 ),
		    'last_name'      => array( 'required' => true, 'maxlength' => 20 ),
		    'email' => array( 'required' => true,'email' => true,'maxlength' => 50 ),
		    'phone' => array( 'required' => true, 'maxlength' => 16 ),
		    /*'giyg_wr_title'      => array( 'required' => true, 'maxlength' => 100 ),*/
		);
		$validator->rules( $fields );
		$data = array(
		    'first_name'   => giyg_wr_post( 'first_name' ),
		    'last_name'      => giyg_wr_post( 'last_name' ),
		    'email'      => giyg_wr_post( 'email' ),
		    'phone'      => giyg_wr_post( 'phone' ),
		    /*'giyg_wr_title'      => giyg_wr_post( 'giyg_wr_title' ),*/
		);
        
		if ( ! $validator->valid( $data ) ) {
			$this->error = $validator->errors();
			return false;
		}

		/*if ( empty( $_FILES['avatar']['type'] ) ) {
			$this->error['avatar'] = 'This field is required.';
			return false;
		}*/
		$accepted_formats = array( 'image/jpeg','image/png' );
		if ( !empty( $_FILES['avatar']['type'] ) && ! in_array( $_FILES['avatar']['type'], $accepted_formats, true ) ) {
			$this->error['avatar'] = 'Please upload the valid image';
			return false;
		}
		if ( 20000000 < $_FILES['avatar']['size'] ) {
			$this->error['avatar'] = 'The uploaded file is large in size';
			return false;
		}
        
		return true;
	}
	/**
	 * Function which is used for form-2 validation page.
	 */
	public function form_2() {
    	$count = 0;
    	$count2 = 0;

		if ( !empty( $_POST['giyg_wr_custom_category'] ) ) 
			$count = 1;
		else
			$count = 0;

		if ( array_key_exists( 'category', $_POST ) )
			$count2 = count( $_POST['category'] );
		else
			$count2 = 0;

		if ( 2 !== $count + $count2 ) {
			$this->error['category'] = 'Please choose/enter exactly 2 category.';
			return false;			
		} else {
			if ( 1 === $count ) {
				$validator = new PHPValidation\Validation();
				$fields = array(
				    'giyg_wr_custom_category'   => array( 'required' => true, 'maxlength' => 55 ),
				);
				$validator->rules( $fields );
				$data = array(
				    'giyg_wr_custom_category'   => giyg_wr_post( 'giyg_wr_custom_category' ),
				);
				if ( ! $validator->valid( $data ) ) {
					$this->error['giyg_wr_custom_category'] = $validator->errors();
					return false;
				}
			}
		}
        
		return true;
	}
	/**
	 * Function which is used for form-3 validation page.
	 */
	public function form_3() {
		$count = 0;
    	$count2 = 0;

		if ( !empty( $_POST['giyg_wr_custom_ideal_company'] ) ) 
			$count = 1;
		else
			$count = 0;

		if ( array_key_exists( 'ideal_company', $_POST ) )
			$count2 = count( $_POST['ideal_company'] );
		else
			$count2 = 0;

		if ( 1 !== $count + $count2 ) {			
			$this->error['ideal_company'] = 'Please choose/enter one company.';
			return false;			
		} else {
			if ( 1 === $count ) {
				$validator = new PHPValidation\Validation();
				$fields = array(
				    'giyg_wr_custom_ideal_company'   => array( 'required' => true, 'maxlength' => 55 ),
				);
				$validator->rules( $fields );
				$data = array(
				    'giyg_wr_custom_ideal_company'   => giyg_wr_post( 'giyg_wr_custom_ideal_company' ),
				);
				if ( ! $validator->valid( $data ) ) {
					$this->error = $validator->errors();
					return false;
				}
			}
		}
		
		return true;
	}
	/**
	 * Function which is used for form-4 validation page.
	 */
	public function form_4() {
       
		$validator = new PHPValidation\Validation();
		$fields = $data = array();
		for ( $i = 0; $i < 3; $i++ ) {
		    $fields[ 'giyg_wr_company_name_'.$i ]   = array( 'required' => true, 'maxlength' => 140 );
		    $fields[ 'giyg_wr_location_'.$i ]   = array( 'required' => true, 'maxlength' => 25 );
		    /*$fields[ 'giyg_wr_from_date_'.$i ]   = array( 'required' => true, 'maxlength' => 4, 'min' => 1960, 'max' => date( 'Y' ) );
		    $fields[ 'giyg_wr_to_date_'.$i ]   = array( 'required' => true, 'maxlength' => 4, 'min' => $giyg_wr_from_date[ $key ], 'max' => date( 'Y' ) );
		    $fields[ 'giyg_wr_job_description_'.$i ]   = array( 'required' => true, 'maxlength' => 250 );*/
		    $data[ 'giyg_wr_company_name_'.$i ]   = giyg_wr_post( 'giyg_wr_company_name_'.$i );
		    $data[ 'giyg_wr_location_'.$i ]   = giyg_wr_post( 'giyg_wr_location_'.$i );
		    /*$data[ 'giyg_wr_from_date_'.$i ]   = giyg_wr_post( 'giyg_wr_from_date_'.$i );
		    $data[ 'giyg_wr_to_date_'.$i ]   = giyg_wr_post( 'giyg_wr_to_date_'.$i );
		    $data[ 'giyg_wr_job_description_'.$i ]   = giyg_wr_post( 'giyg_wr_job_description_'.$i );*/
		}
		$validator->rules( $fields );
		if ( ! $validator->valid( $data ) ) {
			$this->error = $validator->errors();
			return false;
		}
      
		return true;
	}
	/**
	 * Function which is used for form-5 validation page.
	 */
	public function form_5() {
       
		$validator = new PHPValidation\Validation();
		$fields = $data = array();
		for ( $i = 0; $i < 5; $i++ ) {
		    $fields[ 'giyg_wr_skill_name_'.$i ]   = array( 'required' => true, 'maxlength' => 40 );
		    $fields[ 'giyg_wr_rating_'.$i ]   = array( 'required' => true, 'number' => true, 'min' => 1, 'max' => 10 );
		    $data[ 'giyg_wr_skill_name_'.$i ]   = giyg_wr_post( 'giyg_wr_skill_name_'.$i );
		    $data[ 'giyg_wr_rating_'.$i ]   = giyg_wr_post( 'giyg_wr_rating_'.$i );
		}
		$validator->rules( $fields );
		if ( ! $validator->valid( $data ) ) {
			$this->error = $validator->errors();
			return false;
		}
		return true;
	}
	/**
	 * Function which is used for form-6 validation page.
	 */
	public function form_6() {
		$validator = new PHPValidation\Validation();
		$fields = $data = array();
		for ( $i = 0; $i < 3; $i++ ) {
		    $fields[ 'giyg_wr_activity_name_'.$i ]   = array( 'required' => true, 'maxlength' => 48 );
		    $data[ 'giyg_wr_activity_name_'.$i ]   = giyg_wr_post( 'giyg_wr_activity_name_'.$i );
		}
		$validator->rules( $fields );
		if ( ! $validator->valid( $data ) ) {
			$this->error = $validator->errors();
			return false;
		}
		return true;
	}
	/**
	 * Function which is used for form-7 validation page.
	 */
	public function form_7() {
		$validator = new PHPValidation\Validation();
		$professional_personality = giyg_wr_post( 'professional_personality' );
		$fields = array(
		    'professional_personality'   => array( 'required' => true ),
		);
		$validator->rules( $fields );
		$data = array(
		    'professional_personality'   => $professional_personality,
		);
		if ( ! $validator->valid( $data ) ) {
			$this->error = $validator->errors();
			return false;
		}
		return true;
	}
	/**
	 * Function which is used for form-8 validation page.
	 */
	public function form_8() {		
    	$cnt2 = 0;

		if ( array_key_exists( 'core_value', $_POST ) )
			$cnt2 = count( $_POST['core_value'] );
		else
			$cnt2 = 0;

		if ( 10 !== $cnt2 ) {			
			$this->error['core_value'] = 'Please choose 10 core values.';
			return false;			
		}
        
		return true;
	}
	/**
	 * Function which is used for form-9 validation page.
	 */
	public function form_9() {
       
		$validator = new PHPValidation\Validation();
		$corporate_culture = giyg_wr_post( 'corporate_culture' );
		$fields = array(
		    'corporate_culture'   => array( 'required' => true ),
		);
		$validator->rules( $fields );
		$data = array(
		    'corporate_culture'   => $corporate_culture,
		);
		if ( ! $validator->valid( $data ) ) {
			$this->error = $validator->errors();
			return false;
		}
        
		return true;
	}
	/**
	 * Function which is used for form-10 validation page.
	 */
	public function form_10() {		
    	$cnt2 = 0;

		if ( array_key_exists( 'team_attribute', $_POST ) )
			$cnt2 = count( $_POST['team_attribute'] );
		else
			$cnt2 = 0;

		if ( 5 !== $cnt2 ) {			
			$this->error['team_attribute'] = 'Please choose 5 team attributes.';
			return false;			
		}
        
		return true;
	}
	/**
	 * Function which is used for form-11 validation page.
	 */
	public function form_11() {
        
		$validator = new PHPValidation\Validation();
		$fields = array(
		    'giyg_wr_impact_statement'   => array( 'required' => true, 'maxlength' => 200 ),
		);
		$validator->rules( $fields );
		$data = array(
		    'giyg_wr_impact_statement'   => giyg_wr_post( 'giyg_wr_impact_statement' ),
		);
		if ( ! $validator->valid( $data ) ) {
			$this->error = $validator->errors();
			return false;
		}
       
		return true;
	}
	/**
	 * Function which is used for form-12 validation page.
	 */
	public function form_12() {
		$validator = new PHPValidation\Validation();
		
		$fields = array(
		    'giyg_wr_facebook_url'   => array( /*'required' => true,*/ 'maxlength' => 50, /*'url' => true*/ ),
		    'giyg_wr_twitter_url'   => array( /*'required' => true,*/ 'maxlength' => 50, /*'url' => true*/ ),
		    'giyg_wr_other_url'   => array( /*'required' => true,*/ 'maxlength' => 50, /*'url' => true*/ ),
		    'giyg_wr_linkedin_url'   => array( /*'required' => true,*/ 'maxlength' => 50, /*'url' => true*/ ),
		);
		$validator->rules( $fields );
		$data = array(
		    'giyg_wr_facebook_url'   => giyg_wr_post( 'giyg_wr_facebook_url' ),
		    'giyg_wr_twitter_url'   => giyg_wr_post( 'giyg_wr_twitter_url' ),
		    'giyg_wr_other_url'   => giyg_wr_post( 'giyg_wr_other_url' ),
		    'giyg_wr_linkedin_url'   => giyg_wr_post( 'giyg_wr_linkedin_url' ),
		);
		if ( ! $validator->valid( $data ) ) {
			$this->error = $validator->errors();
			return false;
		}
		return true;
	}

    /*********************************************************************
     Purpose            : resize image.
     Parameters         : null
     Returns            : image
     ***********************************************************************/
    public function resizeImage($image,$width,$height,$scale) {
        $size=getimagesize($image);

        $newImageWidth = ceil($width * $scale);
        $newImageHeight = ceil($height * $scale);
        $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);

        if( $size["mime"] == 'image/jpeg' )
            $source = imagecreatefromjpeg($image);

        if( $size["mime"] == 'image/png' )
            $source = imagecreatefrompng($image);

        if( $size["mime"] == 'image/gif' )
            $source = imagecreatefromgif($image);

        imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);

        if( $size["mime"] == 'image/jpeg' )
            imagejpeg($newImage,$image,90);

        if( $size["mime"] == 'image/png' )
            imagepng($newImage,$image,9);

        if( $size["mime"] == 'image/gif' )
            imagegif($newImage,$image);

        chmod($image, 0777);
        return $image;
    }
}
