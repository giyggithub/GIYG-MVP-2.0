<?php
/**
 * This is the plugin theme controller file.
 *
 * @package WooCommerce Resumes.
 */

$data = giyg_wr_post_all();
$resume_id = $data['pk'];
$name = $data['name'];
$value = $data['value'];
require_once GIYG_WR_BASEPATH . '/lib/vendor/autoload.php';
$validator = new PHPValidation\Validation();
$status = array();

/* function post_exists($title) {
    global $wpdb;
    $return = $wpdb->get_row( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $title . "' && post_type = 'resume'", 'ARRAY_N' );
    if( empty( $return ) ) {
        return false;
    } else {
        return true;
    }
} */

if ( in_array( $name, array( 'post_title','first_name', 'last_name', 'giyg_wr_title', 'giyg_wr_title2', 'phone', 'email', 'giyg_wr_impact_statement', 'giyg_wr_skill_name_0', 'giyg_wr_skill_name_1', 'giyg_wr_skill_name_2', 'giyg_wr_skill_name_3', 'giyg_wr_skill_name_4', 'giyg_wr_activity_name_0', 'giyg_wr_activity_name_1', 'giyg_wr_activity_name_2', 'giyg_wr_company_name_0', 'giyg_wr_company_name_1', 'giyg_wr_company_name_2', 'giyg_wr_twitter_url', 'giyg_wr_linkedin_url', 'giyg_wr_facebook_url', 'giyg_wr_other_url', 'avatar', 'giyg_wr_custom_category', 'giyg_wr_custom_ideal_company', 'giyg_wr_location_0', 'giyg_wr_location_1', 'giyg_wr_location_2', 'giyg_wr_category_0', 'giyg_wr_category_1', 'giyg_wr_ideal_company', 'giyg_wr_ideal_company_description', 'giyg_wr_professional_personality', 'giyg_wr_professional_personality_description', 'giyg_wr_professional_personality_attr_0', 'giyg_wr_professional_personality_attr_1', 'giyg_wr_professional_personality_attr_2', 'giyg_wr_professional_personality_attr_3', 'giyg_wr_professional_personality_attr_4', 'giyg_wr_professional_personality_attr_5', 'giyg_wr_corporate_culture', 'giyg_wr_corporate_culture_description', 'giyg_wr_corporate_culture_attr_0', 'giyg_wr_corporate_culture_attr_1', 'giyg_wr_corporate_culture_attr_2', 'giyg_wr_corporate_culture_attr_3', 'giyg_wr_corporate_culture_attr_4', 'giyg_wr_corporate_culture_attr_5', 'giyg_wr_core_value_0', 'giyg_wr_core_value_1', 'giyg_wr_core_value_2', 'giyg_wr_core_value_3', 'giyg_wr_core_value_4', 'giyg_wr_core_value_5', 'giyg_wr_core_value_6', 'giyg_wr_core_value_7', 'giyg_wr_core_value_8', 'giyg_wr_core_value_9','giyg_wr_team_attribute_0', 'giyg_wr_team_attribute_1', 'giyg_wr_team_attribute_2', 'giyg_wr_team_attribute_3', 'giyg_wr_team_attribute_4' ) , true ) ) {

	if ( 'first_name' === $name || 'last_name' === $name ) {

		$fields = array(
		    $name => array( 'required' => true, 'maxlength' => 20 ),
		);

	} else if ( 'post_title' === $name ) {
        //$check = post_exists($value);
        global $wpdb;
        $return = $wpdb->get_row( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $value . "' && post_type = 'resume'", 'ARRAY_N' );
        //echo "testing";print_r($return);//exit;
        if(!empty($return)){
            $title_error = "This title already exists";
        } else{
            $title_error = '';
        } 
		$fields = array(
		    $name => array( 'required' => true, 'maxlength' => 100 ),
		);

	} else if ( 'giyg_wr_title' === $name ) {

		$fields = array(
		    'giyg_wr_title' => array( 'required' => true, 'maxlength' => 100 ),
		);

	} else if ( 'giyg_wr_title2' === $name ) {

		$fields = array(
		    'giyg_wr_title2' => array( 'required' => true, 'maxlength' => 50 ),
		);

	} else if ( 'phone' === $name ) {

		$fields = array(
		    'phone' => array( 'required' => true, 'maxlength' => 16 ),
		);

	} elseif ( 'email' === $name ) {

		$fields = array(
		    'email' => array( 'required' => true,'email' => true,'maxlength' => 50 ),
		);

	} elseif ( 'giyg_wr_category_0' === $name ) {

		$fields = array(
		    'giyg_wr_category_0' => array( 'required' => true,'maxlength' => 55 ),
		);

	} elseif ( 'giyg_wr_category_1' === $name ) {

		$fields = array(
		    'giyg_wr_category_1' => array( 'required' => true,'maxlength' => 55 ),
		);

	} elseif ( 'giyg_wr_custom_category' === $name ) {

		$fields = array(
		    'giyg_wr_custom_category' => array( 'required' => true,'maxlength' => 55 ),
		);

	} elseif ( 'giyg_wr_ideal_company' === $name ) {

		$fields = array(
		    'giyg_wr_ideal_company' => array( 'required' => true,'maxlength' => 50 ),
		);

	} elseif ( 'giyg_wr_ideal_company_description' === $name ) {

		$fields = array(
		    'giyg_wr_ideal_company_description' => array( 'required' => true,'maxlength' => 55 ),
		);

	} elseif ( 'giyg_wr_custom_ideal_company' === $name ) {

		$fields = array(
		    'giyg_wr_custom_ideal_company' => array( 'required' => true,'maxlength' => 55 ),
		);

	} elseif ( in_array( $name, array( 'giyg_wr_company_name_0', 'giyg_wr_company_name_1', 'giyg_wr_company_name_2' ) , true ) ) {

		$fields = array(
		    $name => array( 'required' => true,'maxlength' => 140 ),
		);

	} elseif ( in_array( $name, array( 'giyg_wr_location_0', 'giyg_wr_location_1', 'giyg_wr_location_2' ) , true ) ) {

		$fields = array(
		    $name => array( 'required' => true,'maxlength' => 25 ),
		);

	} elseif ( in_array( $name, array( 'giyg_wr_skill_name_0', 'giyg_wr_skill_name_1', 'giyg_wr_skill_name_2', 'giyg_wr_skill_name_3', 'giyg_wr_skill_name_4' ) , true ) ) {

		$fields = array(
		    $name => array( 'required' => true,'maxlength' => 40 ),
		);

	} elseif ( in_array( $name, array( 'giyg_wr_activity_name_0', 'giyg_wr_activity_name_1', 'giyg_wr_activity_name_2' ) , true ) ) {

		$fields = array(
		    $name => array( 'required' => true,'maxlength' => 48 ),
		);

	} elseif ( 'giyg_wr_professional_personality' === $name ) {

		$fields = array(
		    'giyg_wr_professional_personality' => array( 'required' => true,'maxlength' => 13 ),
		);

	}  elseif ( 'giyg_wr_professional_personality_description' === $name ) {

		$fields = array(
		    'giyg_wr_professional_personality_description' => array( 'required' => true,'maxlength' => 50 ),
		);

	} elseif ( in_array( $name, array( 'giyg_wr_professional_personality_attr_0', 'giyg_wr_professional_personality_attr_1', 'giyg_wr_professional_personality_attr_2', 'giyg_wr_professional_personality_attr_3', 'giyg_wr_professional_personality_attr_4', 'giyg_wr_professional_personality_attr_5' ) , true ) ) {

		$fields = array(
		    $name => array( 'required' => true,'maxlength' => 23 ),
		);

	}  elseif ( in_array( $name, array( 'giyg_wr_core_value_0', 'giyg_wr_core_value_1', 'giyg_wr_core_value_2', 'giyg_wr_core_value_3', 'giyg_wr_core_value_4', 'giyg_wr_core_value_5', 'giyg_wr_core_value_6', 'giyg_wr_core_value_7', 'giyg_wr_core_value_8', 'giyg_wr_core_value_9' ) , true ) ) {

		$fields = array(
		    $name => array( 'required' => true,'maxlength' => 22 ),
		);

	}  elseif ( 'giyg_wr_corporate_culture' === $name ) {

		$fields = array(
		    'giyg_wr_corporate_culture' => array( 'required' => true,'maxlength' => 22 ),
		);

	}  elseif ( 'giyg_wr_corporate_culture_description' === $name ) {

		$fields = array(
		    'giyg_wr_corporate_culture_description' => array( 'required' => true,'maxlength' => 50 ),
		);

	} elseif ( in_array( $name, array( 'giyg_wr_corporate_culture_attr_0', 'giyg_wr_corporate_culture_attr_1', 'giyg_wr_corporate_culture_attr_2', 'giyg_wr_corporate_culture_attr_3', 'giyg_wr_corporate_culture_attr_4', 'giyg_wr_corporate_culture_attr_5' ) , true ) ) {

		$fields = array(
		    $name => array( 'required' => true,'maxlength' => 25 ),
		);

	} elseif ( in_array( $name, array( 'giyg_wr_team_attribute_0', 'giyg_wr_team_attribute_1', 'giyg_wr_team_attribute_2', 'giyg_wr_team_attribute_3', 'giyg_wr_team_attribute_4' ) , true ) ) {

		$fields = array(
		    $name => array( 'required' => true,'maxlength' => 38 ),
		);

	} elseif ( 'giyg_wr_impact_statement' === $name ) {

		$fields = array(
		    'giyg_wr_impact_statement' => array( 'required' => true,'maxlength' => 200 ),
		);

	} elseif ( in_array( $name, array( 'giyg_wr_twitter_url', 'giyg_wr_linkedin_url', 'giyg_wr_facebook_url', 'giyg_wr_other_url' ) , true ) ) {

		$fields = array(
		    $name => array( 'maxlength' => 50, /*'url' => true*/ ),
		);

	} 

	$validator->rules( $fields );
	$data = array(
	    $name      => $value,
	);
    if(!empty($title_error)){
        $status['status'] = 'error';
        $status['message'] = $title_error;
    }else{
        if ( ! $validator->valid( $data ) ) {
            $status['status'] = 'error';
            $errors = $validator->errors();
            $status['message'] = $errors[ $name ];
        } else {
            if( 'post_title' === $name ){
                wp_update_post( array( 'ID' => $resume_id, 'post_title' => $value ) );
            } else {
                update_post_meta( $resume_id, $name, $value );
                $status['status'] = 'success';
            }
        }
        /* if( 'giyg_wr_title' === $name ){
            wp_update_post( array( 'ID' => $resume_id, 'post_title' => $value ) );
        } */
    }
}
elseif ( in_array( $name, array('ideal_company', 'professional_personality','corporate_culture', 'team_attribute' )) ) {
	$taxonomy = str_replace('_', '-', $name );
	wp_set_post_terms( $resume_id, $value, 'resume-'.$taxonomy );
	$term = get_term_by( 'name', $value, 'resume-'.$taxonomy );
	$status['status'] = 'success';
	$status['message'] = $term->description;
	if( in_array( $name, array('professional_personality','corporate_culture'))){
		$status['listings'] = get_field( 'listings', 'resume-'.$taxonomy.'_'.$term->term_id );		
	}
}
elseif ( in_array( $name, array( 'category_0', 'category_1' ))) {
	$name = explode('_', $name );
	$category = get_the_terms( $resume_id, 'resume-category' );
	$category_name = wp_list_pluck( $category, 'name' );
	$category_name[$name[1]] = $value;
	wp_set_post_terms( $resume_id, implode(',', $category_name ), 'resume-category' );
	$status['status'] = 'success';
}
elseif ( in_array( $name, array( 'core_value_0', 'core_value_1','core_value_2', 'core_value_3','core_value_4', 'core_value_5','core_value_6', 'core_value_7','core_value_8', 'core_value_9', 'team_attribute_0', 'team_attribute_1','team_attribute_2', 'team_attribute_3','team_attribute_4', 'team_attribute_5','team_attribute_6', 'team_attribute_7','team_attribute_8', 'team_attribute_9' ))) {
	$name = explode('_', $name );
	$tag_type = get_the_terms( $resume_id, 'resume-'.$name[0].'-'.$name[1] );
	$tag_type_name = wp_list_pluck( $tag_type, 'name' );
	$tag_type_name[$name[2]] = $value;
	wp_set_post_terms( $resume_id, implode(',', $tag_type_name ), 'resume-'.$name[0].'-'.$name[1] );
	$status['status'] = 'success';
}
else{
	update_post_meta( $resume_id, $name, $value );
	$status['status'] = 'success';
}
echo json_encode( $status );
exit;
