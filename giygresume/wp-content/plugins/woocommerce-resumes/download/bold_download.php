<?php
/**
 * This is the bold theme download file.
 *
 * @package WooCommerce Resumes.
 */
$giyg_wr_theme_icon = giyg_wr_session('giyg_wr_theme_icon');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Get In Your Groove">

    <title>GIYGgraph <?php echo esc_attr( $wr_theme.' '.$wr_color ); ?></title>

    <link rel="stylesheet" id="giyg_wr_bootstrap_css-css"  href="<?php echo GIYG_WR_BASEURL.'bootstrap/css/bootstrap.min.css'; ?>" type="text/css" />   
         
    <link rel="stylesheet" id="giyg_wr_style_css-css"  href="<?php echo GIYG_WR_BASEURL.'css/style.css'; ?>" type="text/css" />     
    <link rel="stylesheet" id="main_css-css"  href="<?php echo get_stylesheet_directory_uri().'/style.css'; ?>" type="text/css" />

    <script type="text/javascript" src="<?php echo get_site_url().'/wp-includes/js/jquery/jquery.js'; ?>"></script>
    <style type="text/css">
        body{
             margin: 0;
             padding: 0;
        }
        @page{
            margin: 0;
            padding: 0;
            width: 100%;
        }
        .theme-wrap .container-wrap{
            width: 1100px;
        }
        
        footer{
            margin-top: 0px; 
        }
        .theme-wrap .dashboard-common-area,
        .giyg-themes{
            margin: 0;
            padding: 0;
        }
        #watermark{
            border:0px !important;
        }
        body .container-wrap .container {
            width: 92% !important;
        }
        body .top-summary .container {
            width: 88.8% !important;
        }
        .summary-section,
        .summary-section-skills{
            width: 48% !important;
        }
        .header-title-section {
            padding-top: 5px !important;
            min-height: 39px !important;
        }
        .profile-image{
            left: 0px;
            top: 15px;
        }

        .summary-content-list {
            height: 125px !important;
            width: 79.5% !important;
        }
        .summary-title{
            margin-left: 62px;
            font-weight: 700;
            font-size: 24px;
        }
        .summary-content table td h3{
            background: #d1d2d4 !important;
        }
        .summary-section.summary-section-energy {
            width: 100% !important;
        }
        .market-circle{
            border-radius: 85px;
        }
        .summary-content{
            padding-bottom: 10px;
            width: 98% !important;
        }
        .summary-content-list .summary-content{
            width: 90.8% !important;
        }
        .summary-title{
            width: 86% !important;
        }
        .summary-content-list .summary-title{
            width: 84.5% !important;
            margin-left: 58px !important;
        }
        .summary-section-skills .summary-content, .summary-section-skills .skills-footer{
            width: 95% !important;
        }
        .bold-green .summary-content,
        .bold-red .summary-content {
            background: #1b1819 !important;
        }
        .bold-green .summary-content-one .summary-content {
            background: #79c9a7 !important;
        }
        .bold-green .summary-content-two .summary-content {
            background: #749d79 !important;
        }
        .bold-green .summary-content-three .summary-content {
            background: #5cb494 !important;
        }
        .bold-red .summary-content-one .summary-content {
            background: #6BC6AE !important;
        }
        .bold-red .summary-content-two .summary-content {
            background: #008E96 !important;
        }
        .bold-red .summary-content-three .summary-content {
            background: #00B7C1 !important;
        }
        .bold-red .summary-section-skills .summary-content,
        .bold-green .summary-section-skills .summary-content,
        .bold-red .summary-section-energy .summary-content,
        .bold-green .summary-section-energy .summary-content {
            background: #322f31 !important;
        }
        .summary-content-colunm {
            background: #d4d5d6 !important;
            margin: 0 auto !important;
            width: 97% !important;
        }
        .summary-right-section .summary-content{
            padding-top: 10px !important;
            top: -3px !important;
            position: relative !important;
        }
        .summary-content-one-block{
            top: -3px !important;
            padding-top: 5px !important; 
        }
        .table-index {
            width: 0 !important;
            height: 0 !important;
            border-left: 6px solid transparent !important;
            position: absolute !important;
            left: -6px !important;
            top: 15px !important;
        }
        #watermark .watermark-contnet{
            color: rgba(45, 139, 255, 0.1) !important;
            font-weight: bold !important;
        }
        .bold-red .summary-content table td h3,
        .bold-green .summary-content table td h3,
        .summary-content table td h3 {
            background: transparent !important;
        }
        .bold-green .summary-content-colunm,
        .bold-red .summary-content-colunm {
            background: #1b1819 !important;
        }
        .cloud-section {
            margin-top: 5px !important;
        }
        .personal-section {
            margin-top: 22px !important;
        }
        .cloud-core-values .core-values-three, .cloud-core-values .core-values-block-three .editable-inline .form-control{
            font-size: 23px;
        }
        .personal-section{
            width: 100% !important
        }
        .personal-section .personal-content{
            float: none !important;
            width: 90% !important;
            margin: 0 auto !important;
        }
        .personal-content-common{
            width: 33% !important;
            margin-right: 0px !important;
            padding: 0 5px !important; 
        }
        .cloud-core-values{
            width: 400px !important;
        }
        .scale-order{
            left: 65px !important;
        }
        .circle-two{
            left: 160px !important;
            top: 29px !important
        }
        .circle-three{
            left: 215px !important;
            top: 46px !important
        }
        .circle-four{
            left: 302px !important;
            top: 35px !important
        }
        .ideal-content-left{
            position: relative;
            left: -40px
        }
        .ideal-content-right ul{
            position: relative;
            left: -40px
        }
        .ideal-bottom:after{
            width: 165px !important;
        }
        .top-summary{
            margin-top: 30px !important;
        }
        .personal-content-middle {
            min-height: 205px !important;
        }
        .personal-content-gray {
            height: 65px !important;
        }
        .cloud-img{
            width: 100% !important
        }
        .summary-icon .custom-icon >img{
            height: 30px !important;
            width: 30px !important
        }
        .skills-footer td{
            text-align: left;
             width: auto;
        }
         .skills-footer td:first-child{
            padding-left: 20px;
         }
         .profile-image {
            background: transparent !important;
        }
        .profile-shadow{
            background: #fff !important
        }



    </style>
</head>

<body class="<?php echo esc_attr( $wr_theme.'-'.$wr_color ); ?>-theme"  style="margin: 0">

    <div class="giyg-themes container">
        <div class="theme-wrap">    
            <div class="<?php echo esc_attr( $wr_theme.'-'.$wr_color ).' '.esc_attr( $wr_theme ); ?>-theme-wrap common-font-style font-<?php echo esc_attr( $wr_font ); ?>">
                <div class="dashboard-common-area">
                    <div class="container-wrap" id="watermark">
                        <div class="watermark-contnet">
                            <?php 
                              if( revelance_child_has_woocommerce_subscription('','','active') ) {
                              } else { 
                                  if($wr_color != 'black') { 
                                  ?>
                                    <span>Sample</span>
                                  <?php } 
                              } 
                            ?>
                        </div>
                        <div class="container-wrap">
                            <!-- Header -->    
                            <header>
                            <div class="container">
                                <div class="profile-image">
                                    <div class="profile-shadow <?php if(get_post_thumbnail_id( $resume_id ) == ''){ ?>profile-not-visible<?php }?>">
                                        <img src="<?php echo esc_url( wp_get_attachment_thumb_url( get_post_thumbnail_id( $resume_id ) ) ); ?>" alt="No Profile Image">
                                    </div>
                                </div>
                                <div class="profile-detail">
                                    <h1 style="<?php echo $_SESSION['bold_flname_font']; ?>"><span class="edit-text" id="first_name" data-title="First Name" style="<?php echo $_SESSION['bold_flname_font']; ?>"><?php echo esc_html( get_post_meta( $resume_id, 'first_name', true ) ); ?></span> <span class="edit-text" id="last_name" data-title="Last Name" style="<?php echo $_SESSION['bold_flname_font']; ?>"><?php echo esc_html( get_post_meta( $resume_id, 'last_name', true ) ); ?></span></h1>
                                    <h3><span class="edit-text" id="giyg_wr_category_0" data-title="Select Dream Job 1"  ><?php echo get_post_meta( $resume_id, 'giyg_wr_category_0', true ); ?></span><span class="comma">,</span> 
                                    <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_category_1', true ) ) ) {?>
                                        <span class="edit-text" id="giyg_wr_category_1" data-title="Select Dream Job 2" ><?php echo get_post_meta( $resume_id, 'giyg_wr_category_1', true ); ?></span>
                                    <?php } else { ?>
                                        <span class="edit-text" id="giyg_wr_custom_category" data-title="Select Dream Job 2"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_category', true )?></span>
                                    <?php } ?>
                                    </h3>
                                    <div class="profile-catagory phone">
                                        <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_phone.svg" alt="Phone"></label>
                                        <div class="content-edit">
                                            <a class="edit-text edit-contact" id="phone" data-title="Best Contact Phone Number"><?php echo esc_html( get_post_meta( $resume_id, 'phone', true ) ); ?></a>    
                                        </div>
                                    </div>
                                    <div class="profile-catagory mail">
                                        <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_email.svg" alt="Email"></label>
                                        <div class="content-edit">
                                            <a class="edit-text edit-contact" id="email" data-title="Email"><?php echo esc_html( get_post_meta( $resume_id, 'email', true ) ); ?></a>  
                                        </div>
                                    </div>
                                    <div class="header-social-link">
                                        <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true )) ) { ?>
                                        <div class="social-list">
                                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_linkedin.svg" alt="Linkedin">
                                            <a class="edit-text" id="giyg_wr_linkedin_url" data-title="LinkedIn URL">
                                            <label><?php echo get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ); ?></label>
                                        </a>
                                        </div>
                                        <?php } ?>
                                        <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_twitter_url', true )) ) { ?>
                                        <div class="social-list">
                                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_twitter.svg" alt="Twitter">
                                            <a class="edit-text" id="giyg_wr_twitter_url" data-title="Twitter URL">
                                            <label><?php echo get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ); ?></label></a>
                                        </div>
                                        <?php } ?>
                                        <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_facebook_url', true )) ) { ?>
                                        <div class="social-list">
                                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_facebook.svg" alt="Facebook">
                                            <a class="edit-text" id="giyg_wr_facebook_url" data-title="Facebook URL">
                                            <label><?php echo get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ); ?></label></a>
                                        </div>
                                        <?php } ?>
                                        <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_other_url', true )) ) { ?>
                                        <div class="social-list">
                                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_weblink.svg" alt="Weblink">
                                            <a class="edit-text" id="giyg_wr_other_url" data-title="Other URL(Github, Blog, Personal Website)">
                                            <label><?php echo get_post_meta( $resume_id, 'giyg_wr_other_url', true ); ?></label></a>
                                        </div>
                                        <?php } ?>     
                                    </div>
                                </div>
                            </div>
                            </header>
                            <!-- ./Header -->

                            <!-- Header-Title -->
                            <!-- <section class="header-title-section">
                                <div class="container">
                                    <div class="header-title">
                                        <div class="ediable-wrap">
                                            <h2 class="head-text edit-text" id="giyg_wr_title2" data-title="Enter Resume Title"><?php //echo esc_html( get_post_meta( $resume_id, 'giyg_wr_title2', true ) ); ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </section> -->
                            <!-- ./Header-Title -->

                            <!-- Top section -->
                            <section class="top-summary">
                                <div class="container">
                                    <div class="summary-section summary-left-section">
                                        <div class="top-accomblishment">
                                            <div class="summary-wrap">
                                                <div class="summary-icon"><img src="<?php echo $giyg_wr_theme_icon['bold_custom-icon1']; ?>" alt="Medal"></div>
                                                <div class="summary-title">TOP ACCOMPLISHMENTS</div>
                                            </div>
                                            <div class="summary-content-colunm">
                                                <div class="summary-content summary-content-one summary-content-one-block">
                                                    <div class="summary-content-list">
                                                        <div class="summary-wrap">
                                                            <div class="summary-icon"><h1>1</h1></div>
                                                            <div class="summary-title"></div>
                                                        </div>
                                                        <div class="summary-content">
                                                            <div class="summary-content-inner">
                                                                <div class="summary-content-location">
                                                                <span class="edit-text" id="giyg_wr_location_0" data-type="text" data-title="Location 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_0', true ) ); ?></span> 
                                                                </div>
                                                                <span class="edit-text" id="giyg_wr_company_name_0" data-type="textarea" data-title="Accompolishment 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_0', true ) ); ?></span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="summary-content summary-content-two-block">
                                                    <div class="summary-content-list summary-content-two">
                                                        <div class="summary-wrap">
                                                            <div class="summary-icon"><h1>2</h1></div>
                                                            <div class="summary-title"></div>
                                                        </div>
                                                        <div class="summary-content">
                                                            <div class="summary-content-inner">
                                                                <div class="summary-content-location">
                                                                <span class="edit-text" id="giyg_wr_location_1" data-type="text" data-title="Location 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_1', true ) ); ?></span> 
                                                                </div>
                                                                <span class="edit-text" id="giyg_wr_company_name_1" data-type="textarea" data-title="Accompolishment 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_1', true ) ); ?></span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="summary-content summary-content-three-block">
                                                    <div class="summary-content-list summary-content-three">
                                                        <div class="summary-wrap">
                                                            <div class="summary-icon"><h1>3</h1></div>
                                                            <div class="summary-title"></div>
                                                        </div>
                                                        <div class="summary-content">
                                                            <div class="summary-content-inner">
                                                                <div class="summary-content-location">
                                                                <span class="edit-text" id="giyg_wr_location_2" data-type="text" data-title="Location 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_2', true ) ); ?></span> 
                                                                </div>
                                                                <span class="edit-text" id="giyg_wr_company_name_2" data-type="textarea" data-title="Accompolishment 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_2', true ) ); ?></span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- cloud section -->
                                        <div class="cloud-section">
                                            <ul class="cloud-circle">
                                                <li class="circle-list scale-order"><img src="<?php echo $giyg_wr_theme_icon['bold_custom-icon2']; ?>"></li>
                                                <li class="circle-list circle-two">MY</li>
                                                <li class="circle-list circle-three">Core</li>
                                                <li class="circle-list circle-four">Values</li>
                                            </ul>
                                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>bg_cloud.svg" alt="Cloud" class="cloud-img">
                                            <div class="cloud-core-values">                                
                                                <?php
                                                 
                                                  $core_val_num = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten");
                                                    
                                                    $str = '';
                                                    $k = 0;
                                                    for ( $j = 0; $j < 10; $j++ ) { 
                                                        if( !empty(get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true )) ) {
                                                            $str .= '<div class="cloud-core-content core-values-block-'.$core_val_num[$k].'"><p class="core-values-'.$core_val_num[$k].' edit-text" id="giyg_wr_core_value_'.$j.'" data-title="Core Value">';
                                                            $str .= get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true ); 
                                                            $str .= '</p></div>';
                                                            $k++;
                                                        }
                                                    }
                                                    echo $str;
                                                ?>
                                            </div>
                                        </div>
                                        <!-- ./cloud section -->

                                        <!-- personal section -->
                                        <div class="personal-section">
                                            <h1>My professional personality</h1>
                                            <div class="personal-content">
                                                <div class="personal-content-common">
                                                    <div class="personal-content-inner personal-content-gray personal-gray-one">
                                                        <div class="content-inner-cell content-inner-one">
                                                            <h6 id="professional_personality_0" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_0"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_0', true ); ?></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="personal-content-inner personal-content-gray personal-gray-one">
                                                        <div class="content-inner-cell content-inner-one content-inner-two">
                                                           <h6 id="professional_personality_1" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_1"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_1', true ); ?></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="personal-content-inner personal-content-gray personal-gray-one personal-gray-final">
                                                        <div class="content-inner-cell content-inner-one content-inner-six">
                                                            <h6 id="professional_personality_2" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_2"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_2', true ); ?></span></h6>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="personal-content-inner personal-gray-two">
                                                        <div class="content-inner-cell content-inner-two">
                                                            <h6 id="professional_personality_1" class="professional_personality"><span class="professional_personality_text" ><?php echo esc_html( $professional_personality_listings[1] ); ?></span></h6>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="personal-content-common personal-content-middle">
                                                    <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon-think.svg" width="76px" height="83px" alt="Chat">
                                                    <h4 class="content-middle-head edit-text" id="giyg_wr_professional_personality" data-title="Professional Personality"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality', true ); ?></h4>
                                                    <p class="text-gray"><span class="edit-text" id="giyg_wr_professional_personality_description" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_description', true ); ?></span></p>
                                                </div>
                                                <div class="personal-content-common">
                                                    <div class="personal-content-inner personal-content-gray personal-gray-three">
                                                        <div class="content-inner-cell content-inner-three">
                                                            <h6 id="professional_personality_3" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_3"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_3', true ); ?></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="personal-content-inner personal-content-gray personal-gray-four">
                                                        <div class="content-inner-cell content-inner-four">
                                                            <h6 id="professional_personality_4" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_4"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_4', true ); ?></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="personal-content-inner personal-content-gray personal-gray-five">
                                                        <div class="content-inner-cell content-inner-five">
                                                            <h6 id="professional_personality_5" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_5"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_5', true ); ?></span></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ./personal section -->
                                    </div>
                                    <!-- summary-section-skills -->
                                    <div class="summary-right-section">
                                        <div class="summary-section summary-section-skills">
                                            <div class="summary-wrap">
                                                <div class="summary-icon"><img src="<?php echo $giyg_wr_theme_icon['bold_custom-icon3']; ?>" alt="Medal" width="30px" height="30px"></div>
                                                <div class="summary-title">MY TOP SKILLS <img src="<?php echo GIYG_WR_BASEURL . "img/loading.gif"; ?>" alt"Loading" id="loader" style="display:none;"/></div>
                                            </div>
                                            <div class="summary-content">
                                                <div class="skill-border">
                                                    <span class="common-border border-one"></span>
                                                    <span class="common-border border-two"></span>
                                                    <span class="common-border border-three"></span>
                                                </div>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="skill-rating-wrap skill-rating-one">
                                                                <span class="table-index green"></span>
                                                                <div class="top-skill-header">
                                                                <h3 class="edit-text" id="giyg_wr_skill_name_0" data-title="Professional skill 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_0', true ) ); ?> </h3>
                                                                </div>
                                                                <div class="top-skill-rate">
                                                                    <select id="giyg_wr_rating_0" class="skill-rating">
                                                                        <?php
                                                                          $str = '';
                                                                        for ( $i = 1;$i <= 10;$i++ ) {
                                                                            $str .= '<option value="'.$i.'"';
                                                                            if ( $i === (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) {
                                                                                $str .= ' selected="selected"';
                                                                            }
                                                                            $str .= '>'.$i.'</option>';
                                                                        }
                                                                          echo $str;
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="skill-rating-wrap skill-rating-two">
                                                                <span class="table-index blue"></span>
                                                                <div class="top-skill-header">
                                                                <h3 class="edit-text" id="giyg_wr_skill_name_1" data-title="Professional skill 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_1', true ) ); ?> </h3>
                                                                </div>
                                                                <div class="top-skill-rate">
                                                                <select id="giyg_wr_rating_1" class="skill-rating">
                                                                    <?php
                                                                      $str = '';
                                                                    for ( $i = 1;$i <= 10;$i++ ) {
                                                                        $str .= '<option value="'.$i.'"';
                                                                        if ( $i === (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) {
                                                                            $str .= ' selected="selected"';
                                                                        }
                                                                        $str .= '>'.$i.'</option>';
                                                                    }
                                                                      echo $str;
                                                                    ?>
                                                                </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="skill-rating-wrap skill-rating-three">
                                                                <span class="table-index orange"></span>
                                                                <div class="top-skill-header">
                                                                <h3 class="edit-text" id="giyg_wr_skill_name_2" data-title="Professional skill 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_2', true ) ); ?> </h3>
                                                                </div>
                                                                <div class="top-skill-rate">
                                                                <select id="giyg_wr_rating_2" class="skill-rating">
                                                                    <?php
                                                                      $str = '';
                                                                    for ( $i = 1;$i <= 10;$i++ ) {
                                                                        $str .= '<option value="'.$i.'"';
                                                                        if ( $i === (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) {
                                                                            $str .= ' selected="selected"';
                                                                        }
                                                                        $str .= '>'.$i.'</option>';
                                                                    }
                                                                      echo $str;
                                                                    ?>
                                                                </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="skill-rating-wrap skill-rating-four">
                                                                <span class="table-index skyblue"></span>
                                                                <div class="top-skill-header">
                                                                <h3 class="edit-text" id="giyg_wr_skill_name_3" data-title="Professional skill 4"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_3', true ) ); ?> </h3>
                                                                </div>
                                                                <div class="top-skill-rate">
                                                                <select id="giyg_wr_rating_3" class="skill-rating">
                                                                    <?php
                                                                      $str = '';
                                                                    for ( $i = 1;$i <= 10;$i++ ) {
                                                                        $str .= '<option value="'.$i.'"';
                                                                        if ( $i === (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) {
                                                                            $str .= ' selected="selected"';
                                                                        }
                                                                        $str .= '>'.$i.'</option>';
                                                                    }
                                                                      echo $str;
                                                                    ?>
                                                                </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="skill-rating-wrap skill-rating-five">
                                                                <span class="table-index light-red"></span>
                                                                <div class="top-skill-header">
                                                                <h3 class="edit-text" id="giyg_wr_skill_name_4" data-title="Professional skill 5"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_4', true ) ); ?> </h3>
                                                                </div>
                                                                <div class="top-skill-rate">
                                                                <select id="giyg_wr_rating_4" class="skill-rating">
                                                                    <?php
                                                                      $str = '';
                                                                    for ( $i = 1;$i <= 10;$i++ ) {
                                                                        $str .= '<option value="'.$i.'"';
                                                                        if ( $i === (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) {
                                                                            $str .= ' selected="selected"';
                                                                        }
                                                                        $str .= '>'.$i.'</option>';
                                                                    }
                                                                      echo $str;
                                                                    ?>
                                                                </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="skills-footer">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>Junior Level</td>
                                                            <td>Solid Contributor</td>
                                                            <td>Guru Level</td>
                                                        </tr>
                                                    </tbody>
                                                </table>                            
                                            </div>
                                        <!-- summary-section-energy -->
                                        <div class="summary-section summary-section-energy">
                                            <div class="summary-wrap">
                                                <div class="summary-icon"><img src="<?php echo $giyg_wr_theme_icon['bold_custom-icon4']; ?>" alt="Medal"></div>
                                                <div class="summary-title">WHAT ENERGIZES ME</div>
                                            </div>
                                            <!-- energy-box -->
                                            <div class="summary-content">
                                                <div class="energy-box">
                                                    <div class="energy-inner-box">
                                                        <div class="inner-box-content"><p class="edit-text" id="giyg_wr_activity_name_0" data-title="Activity 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_0', true ) ); ?></p></div>
                                                    </div>
                                                    <div class="energy-handle"></div>
                                                </div>
                                                <div class="energy-box energy-box-two">
                                                    <div class="energy-inner-box">
                                                        <div class="inner-box-content"><p class="edit-text" id="giyg_wr_activity_name_1" data-title="Activity 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_1', true ) ); ?></p></p></div>
                                                    </div>
                                                    <div class="energy-handle"></div>
                                                </div>
                                                <div class="energy-box energy-box-three">
                                                    <div class="energy-inner-box">
                                                        <div class="inner-box-content"><p class="edit-text" id="giyg_wr_activity_name_2" data-title="Activity 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_2', true ) ); ?></p></div>
                                                    </div>
                                                    <div class="energy-handle"></div>
                                                </div>
                                            </div>
                                            <!-- ./energy-box -->
                                        </div>
                                        <!-- ./summary-section-energy -->

                                        <!-- ideal-section -->
                                        <div class="ideal-section">
                                            <div class="ideal-wrap">
                                                <h1>My Ideal Company</h1>
                                                <div class="ideal-bottom">
                                                    <div class="company-circle">
                                                        <div class="company-circle-inner"> 
                                                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_company.svg" alt="Company" class="comapny">
                                                        </div>
                                                    </div>
                                                    <div class="company-para">
                                                        <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ) ) ) { ?>
                                                            <p><span class="edit-text" id="giyg_wr_ideal_company" data-title="My Ideal Company" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ); ?></span></p>
                                                        <?php } else { ?>
                                                            <p><span class="edit-text" id="giyg_wr_custom_ideal_company" data-title="My Ideal Company" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_ideal_company', true );?></span></p>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                                <div class="ideal-content-area">
                                                    <div class="ideal-content-left">
                                                        <ul>
                                                            <li class="ideal-content-head"><p>Most Valued team attributes</p></li>
                                                            <?php
                                                                $core_val_num = array("one", "two", "three", "four", "five");
                                                                
                                                                $str = '';                                             
                                                                $k = 0;

                                                                for ( $j = 0; $j < 5; $j++ ) { 
                                                                    if( !empty( get_post_meta( $resume_id, 'giyg_wr_team_attribute_'.$j, true ) ) ) {
                                                                        $str .= '<li class="ideal-content-common ideal-content-'.$core_val_num[$k].'"><p class="tick edit-text" id="giyg_wr_team_attribute_'.$j.'" data-title="Team Attribute" data-tpl="<input type=\'text\' maxlength=\'38\'>">';
                                                                        $str .= get_post_meta( $resume_id, 'giyg_wr_team_attribute_'.$j, true ); 
                                                                        $str .= '</p></li>';
                                                                        $k++;
                                                                    }
                                                                }                                                
                                                                
                                                                echo $str;
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="ideal-content-right">
                                                        <div class="cross"></div>
                                                        <ul>
                                                            <li class="ideal-content-head">Best Fit Corporate Culture</li>
                                                        </ul>
                                                        <div class="market-section">
                                                            <div class="market-circle">
                                                                <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_market.svg" alt="Statistics">
                                                            </div>
                                                            <div class="market-title">
                                                                <h4><span class="edit-text" id="giyg_wr_corporate_culture" data-title="Best Fit Corporate Culture" data-tpl="<input type='text' maxlength='22'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture', true ); ?> Culture</span></h4>
                                                                <h5 class="edit-text text-gray" style="display:none" id="giyg_wr_corporate_culture_description" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_description', true ); ?></h5>
                                                            </div>
                                                            <div class="market-sub-content">
                                                            <?php 
                                                                $color_number = array("one", "two", "three", "four", "five", "six", "one", "two", "three", "four", "five", "six");
                                                                for ( $i = 0; $i < 6; $i++ ) { ?>
                                                                    <p class="para-color-<?php echo esc_html( $color_number[$i] ); ?> corporate_culture" id="corporate_culture_<?php echo esc_attr( $i ); ?>"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_<?php echo esc_attr( $i ); ?>" data-tpl="<input type='text' maxlength='25'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_'.$i, true ); ?></span></p>
                                                                <?php } ?>                                             
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ideal-section -->
                                        </div>
                                    </div>
                                    <!-- ./summary-section-skills -->
                                </div>
                            </section>
                            <!-- ./Top section -->
                            <footer>
                                <div class="container">
                                    <div class="hire-content">
                                        <div class="hire-rate"><h1>#1</h1>
                                            <div class="hire-rate-text">Irresistible<br/> reason<br/> to hire me</div>
                                        </div>
                                        <div class="hire-para-text">
                                            <p class="edit-text" id="giyg_wr_impact_statement" data-type="textarea" data-title="#1 Irresponsibility reason to hire me"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_impact_statement', true ) ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </div>  
    <script type="text/javascript">
    jQuery(document).ready(function() {
          jQuery('.skill-rating').barrating('show',{
             theme: 'bars-1to10',
                onSelect: function(value, text, event){                     
                }
          });
    });
    </script>       
    
    <link rel='stylesheet' id='giyg_wr_google_fonts-css'  href='https://fonts.googleapis.com/css?family=Cairo:300,300i,400,400i,500,500i,700,700i|Lato:300,300i,400,400i,500,500i,700,700i|Oswald:300,300i,400,400i,500,500i,700,700i|PT+Sans:300,300i,400,400i,500,500i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Source+Sans+Pro:300,300i,400,400i,500,500i,700,700i|Titillium+Web:300,400,500,500i,700,700i' type='text/css' media='all' />

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" id="giyg_wr_theme_bold_css-css"  href="<?php echo GIYG_WR_BASEURL.'templates/themes/'.$wr_theme.'/style.css'; ?>" type="text/css" />    
    
    <style type="text/css">
        .ideal-content-right .cross:after{
            border-top: 3px solid #dcddde;
            border-right: 3px solid #dcddde;
            bottom: 2px;
            left: 2px;
        }
        .ideal-content-left{
            width: 220px !important;
         }
         .ideal-content-left ul{
            width: 200px !important;
        }
        .ideal-content-left ul li{
            width: 200px !important;
            float: left;
        }
        .ideal-content-area{
            width: 100%;
        }
        .market-section{
            width: 150px;
        }
    </style>
    <script type="text/javascript" src="<?php echo GIYG_WR_BASEURL.'jquery-bar-rating/jquery.barrating.js'; ?>"></script>

</body>
</html>