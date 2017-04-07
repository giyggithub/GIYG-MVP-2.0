<?php
/**
 * This is the theme library file.
 *
 * @package WooCommerce Resumes.
 */

$wr_themes = array(
                    'traditional' => array(
                            'label' => 'Traditional',
                            'colors' => array(
                                    'black' => 'Black',
                                    'blue' => 'Blue',
                                    'beige' => 'Beige',
                                    'bold-blue' => 'Bold Blue',
                                    'bold-green' => 'Blue Green',
                                    'bold-red' => 'Blue Red',
                                    'classic-brown' => 'Classic Brown',
                                    'classic-light-blue' => 'Classic Light Blue',
                                    'classic-teal' => 'Classic Teal',
                                ),
                            ),
                    'conservative' => array(
                            'label' => 'Conservative',
                            'colors' => array(
                                    'blue' => 'Blue',
                                    'teal' => 'Teal',
                                    'beige' => 'Beige',
                                ),
                            ),                    
                    'bold' => array(
                            'label' => 'Bold',
                            'colors' => array(
                                    'blue' => 'Blue',
                                    'green' => 'Green',
                                    'red' => 'Red',
                                ),
                            ),
                    'classic' => array(
                            'label' => 'Classic',
                            'colors' => array(
                                    'light-blue' => 'Light Blue',
                                    'teal' => 'Teal',
                                    'brown' => 'Brown',
                                ),
                            ),
                );
$wr_fonts = array(
            'roboto' => 'Roboto',
            'lato' => 'Lato',
            'clear-sans' => 'Clear Sans',
            'oswald' => 'Oswald',
            'pt-sans' => 'PT Sans',
            'source-sans-pro' => 'Source Sans Pro',
            'titillium-web' => 'Titillium Web',
            'cairo' => 'Cairo',
            'helvetica' => 'Helvetica',
);

$font_navigation = '';
$theme_navigation = $color_navigation = '';

foreach ( $wr_themes as $key => $value ) {
   
    $theme_navigation .= '<li';
    if ( $key === $wr_theme ) {
        $theme_navigation .= ' class="active"';
    }

    if ( 'traditional' === $key  ) {
        $theme_navigation .= '><span class="theme_name_span free-trail">Free Traditional<i></i></span><a href="'.esc_url( add_query_arg( 'wr-theme', $key, $preview_page ) ).'" title="'.$value['label'].'"><img  src='. GIYG_WR_BASEURL .'images/common/'.$value['label'].'.png alt='.$value['label'].'/></a></li>';
    } else {
        $theme_navigation .= '><span class="theme_name_span">'.$value['label']. '<i></i></span><a href="'.esc_url( add_query_arg( 'wr-theme', $key, $preview_page ) ).'" title="'.$value['label'].'"><img  src='. GIYG_WR_BASEURL .'images/common/'.$value['label'].'.png alt='.$value['label'].'/></a></li>';
    }
    
   
}

foreach ( $wr_themes[ $wr_theme ]['colors'] as $key => $value ) {
    $color_navigation .= '<li class="'.$key;
    if ( $key === $wr_color ) {
        $color_navigation .= ' active';
    }
    $color_navigation .= '"><a href="'.esc_url( add_query_arg( array( 'wr-theme' => $wr_theme, 'wr-color' => $key ), $preview_page ) ).'" title="'.$value.'"><span class="color-one"></span><span class="color-two"></span><span class="color-three"></span></a></li>';
}

foreach ( $wr_fonts as $key => $value ) {
    $font_navigation .= '<li><a';
    if ( $key === $wr_font ) {
        $font_navigation .= ' class="active-font"';
    }
    $font_navigation .= ' href="'.esc_url( add_query_arg( array( 'wr-theme' => $wr_theme, 'wr-color' => $wr_color, 'wr-font' =>  $key ), $preview_page ) ).'" title="'.$value.'"><span>'.$value.'</span></a></li>';
}

// For all themes index.php.
$resume_categories = get_terms( array(
    'taxonomy' => 'resume-category',
    'hide_empty' => true,
) );
$resume_categories_array = array();
foreach ( $resume_categories as $key => $resume_category ) {
    $resume_categories_array[ $key ]['value'] = $resume_category->name;
    $resume_categories_array[ $key ]['text'] = $resume_category->name;
}
$category = get_the_terms( $resume_id, 'resume-category' );
$category_name = wp_list_pluck( $category, 'name' );


$resume_ideal_companies = get_terms( array(
    'taxonomy' => 'resume-ideal-company',
    'hide_empty' => false,
) );
$resume_ideal_companies_array = array();
foreach ( $resume_ideal_companies as $key => $resume_ideal_company ) {
    $resume_ideal_companies_array[ $key ]['value'] = $resume_ideal_company->name;
    $resume_ideal_companies_array[ $key ]['text'] = $resume_ideal_company->name;
}
$ideal_company = get_the_terms( $resume_id, 'resume-ideal-company' );
$ideal_company_description = wp_list_pluck( $ideal_company, 'description' );
$ideal_company_name = wp_list_pluck( $ideal_company, 'name' );


$resume_professional_personalities = get_terms( array(
    'taxonomy' => 'resume-professional-personality',
    'hide_empty' => false,
) );
$resume_professional_personalities_array = array();
foreach ( $resume_professional_personalities as $key => $resume_professional_personality ) {
    $resume_professional_personalities_array[ $key ]['value'] = $resume_professional_personality->name;
    $resume_professional_personalities_array[ $key ]['text'] = $resume_professional_personality->name;
}
$professional_personality = get_the_terms( $resume_id, 'resume-professional-personality' );
$professional_personality_description = wp_list_pluck( $professional_personality, 'description' );
$professional_personality_name = wp_list_pluck( $professional_personality, 'name' );
$professional_personality_listings = explode( ',', get_field( 'listings', 'resume-professional-personality_'.$professional_personality[0]->term_id ) );


$resume_corporate_cultures = get_terms( array(
    'taxonomy' => 'resume-corporate-culture',
    'hide_empty' => false,
) );
$resume_corporate_cultures_array = array();
foreach ( $resume_corporate_cultures as $key => $resume_corporate_culture ) {
    $resume_corporate_cultures_array[ $key ]['value'] = $resume_corporate_culture->name;
    $resume_corporate_cultures_array[ $key ]['text'] = $resume_corporate_culture->name.' Culture';
}
$corporate_culture = get_the_terms( $resume_id, 'resume-corporate-culture' );
$corporate_culture_description = wp_list_pluck( $corporate_culture, 'description' );
$corporate_culture_name = wp_list_pluck( $corporate_culture, 'name' );
$corporate_culture_listings = explode( ',', get_field( 'listings', 'resume-corporate-culture_'.$corporate_culture[0]->term_id ) );


$resume_team_attributes = get_terms( array(
    'taxonomy' => 'resume-team-attribute',
    'hide_empty' => false,
) );
$resume_team_attributes_array = array();
foreach ( $resume_team_attributes as $key => $resume_team_attribute ) {
    $resume_team_attributes_array[ $key ]['value'] = $resume_team_attribute->name;
    $resume_team_attributes_array[ $key ]['text'] = $resume_team_attribute->name;
}
$team_attribute = get_the_terms( $resume_id, 'resume-team-attribute' );
$team_attribute_name = wp_list_pluck( $team_attribute, 'name' );


$resume_core_values = get_terms( array(
    'taxonomy' => 'resume-core-value',
    'hide_empty' => false,
) );
$resume_core_values_array = array();
foreach ( $resume_core_values as $key => $resume_core_value ) {
    $resume_core_values_array[ $key ]['value'] = $resume_core_value->name;
    $resume_core_values_array[ $key ]['text'] = $resume_core_value->name;
}
$core_value = get_the_terms( $resume_id, 'resume-core-value' );
$core_value_name = wp_list_pluck( $core_value, 'name' );
