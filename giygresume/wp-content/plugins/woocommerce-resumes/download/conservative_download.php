<?php
/**
 * This is the conservative theme download file.
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
    <link rel='stylesheet' id='userpro_google_font-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A400%2C400italic%2C700%2C700italic%2C300italic%2C300' type='text/css' media='all' />    
    <link rel="stylesheet" id="giyg_wr_style_css-css"  href="<?php echo GIYG_WR_BASEURL.'css/style.css'; ?>" type="text/css" />   
    <link rel="stylesheet" id="main_css-css"  href="<?php echo get_stylesheet_directory_uri().'/style.css'; ?>" type="text/css" />

    <script type="text/javascript" src="<?php echo get_site_url().'/wp-includes/js/jquery/jquery.js'; ?>"></script>
    
    <style type="text/css">
        @page{
            margin: 0;
            padding: 0;
            /*width: 100%;*/
        }
        body, html{
            margin: 0;
            padding: 0;
        }
        /*.theme-wrap .container-wrap{
          width: 100% !important;
          page: cover;
        }*/
        .preview_fullwidth .conservative-theme-wrap .container-wrap .container{
            width: 940px;
        }
        /*.theme-wrap .container-wrap,
        .theme-wrap .container,
        .preview_fullwidth .traditional-theme-wrap .container-wrap .container{
            width: 940px !important;
            page: cover;
            height: 100%;
            margin:0 auto;
        }*/
        section.header-section{
            width: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        .theme-wrap .dashboard-common-area{
            margin: 0;
            padding: 0;
        }
        .preview_fullwidth{
            background: transparent;
        }
        .conservative-blue .dark-company-profile{
            text-align: center;
        }
        .dark-company-profile img {
            height: auto;
            width: 72px;
            margin: 0 auto;
        }
        footer{
            height: 58px !important;
        }
        #watermark {
            border: none;
        }
        .skill-box{
            width: 100% !important;
        }
        .top-right{
            width: 77% !important;
        }
        .top-left{
            width: 23% !important;
        }
        .top-box{
            width: 100% !important;
        }
        #watermark .watermark-contnet{
            left: 10% !important;
            top: 37% !important;
        }
        .ideal-section{
            width: 31% !important;
        }
        .adptive-culture{
            width: 50% !important;
        }
        .dark-company-profile-wrap{
            width: 50% !important;
        }
        .top-box {
            width: 100% !important;
        }
        .top-left {
            width: 25%;
        }
        .top-right {
            width: 75%;
        }
        .skill-ranger .ui-slider-horizontal{
            width: 96% !important;
        }
        .top-skills-wrap{
            width: 32% !important;
        }
        .core-values{
            width: 48%;
        }
        .corner-dot{
            right: -35px !important;
        }
        .circle-top .corner-dot {
            left: -35px !important;
            top: -54px !important;
        }
        .conservative-theme-wrap .top-accomplish-wrap .top-box img{
            height:auto !important;
        }
        .clearfix{
            clear: both !important;
            height: 35px;
            width: 100% !important;
        }
        .personal-section{
            margin-top: -30px !important;
        }
        .core-value-company-profile{
            margin-top: 30px !important;
        }
        #team-attributes {
            margin-bottom: 0px !important;
        }
        footer{
            margin-top: 10px !important;
        }
        .top-accomplish-wrap, .top-skills-wrap{
            padding-top: 35px !important;
        }
        .profile-wrap{
            padding-top: 30px !important;
        }
        /*.ideal-section{
            margin-top: 35px !important;
        }
        */
       /* .reason-section{
            margin-top: -25px !important;
        }*/
        .personality-type h2{
            font-weight: 700 !important;
        }
        .profile-pic, .profile-pic img{
            border-radius: 85px
        }
        .profile-pic img{
            width: 172px;
            height: 172px;
        }

        .conservative-blue .white-bg{
            background:transparent !important;
        }

    </style>
  </head>

  <body class="<?php echo esc_attr( $wr_theme.'-'.$wr_color ); ?>-theme preview_fullwidth">
  <div class="<?php echo esc_attr( $wr_theme.'-'.$wr_color ); ?> <?php echo esc_attr( $wr_theme ); ?>-theme-wrap common-font-style font-<?php echo esc_attr( $wr_font ); ?>">

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
        <div class="container">
            <section class="header-section">
                <!-- top-accomplish-wrap -->
                <div class="top-accomplish-wrap">
                    <div class="star-border">
                        <h2><span class="stars"></span>TOP ACCOMPLISHMENTS<span class="stars right"></span></h2>
                        <span class="star-middle"></span>
                    </div>
                    <div class="top-box">
                        <div class="top-left light-bg"><img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon1-1']; ?>" width="32px" alt="Batch"></div>
                        <div class="top-right light-color">
                            <div class="location-wrap">
                                <span class="edit-text location" id="giyg_wr_location_0" data-type="text" data-title="Location 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_0', true ) ); ?></span> 
                            </div>
                            <div class="location-content-wrap">
                                <span class="edit-text location-text" id="giyg_wr_company_name_0" data-type="textarea" data-title="Accompolishment 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_0', true ) ); ?></span> 
                            </div>
                        </div>
                    </div>
                    <div class="top-box">
                        <div class="top-left dark-bg"><img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon1-2']; ?>" width="32px" alt="Batch"></div>
                        <div class="top-right dark-color">
                            <div class="location-wrap">
                                <span class="edit-text location" id="giyg_wr_location_1" data-type="text" data-title="Location 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_1', true ) ); ?></span>
                            </div>
                            <div class="location-content-wrap">
                                <span class="edit-text location-text" id="giyg_wr_company_name_1" data-type="textarea" data-title="Accompolishment 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_1', true ) ); ?></span> 
                            </div>
                        </div>
                    </div>
                    <div class="top-box">
                        <div class="top-left darker-bg"><img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon1-3']; ?>" width="32px" alt="Batch"></div>
                        <div class="top-right darker-color">
                            <div class="location-wrap">
                                <span class="edit-text location" id="giyg_wr_location_2" data-type="text" data-title="Location 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_2', true ) ); ?></span>
                            </div>
                            <div class="location-content-wrap">
                                <span class="edit-text location-text" id="giyg_wr_company_name_2" data-type="textarea" data-title="Accompolishment 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_2', true ) ); ?></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./top-accomplish-wrap -->
                <!-- Profile -->
                <div class="profile-wrap light-bg">
                    <h1 class="profile-name" style="<?php echo $_SESSION['conservative_flname_font']; ?>">
                        <div class="profile-first-letter">
                        <span class="edit-text" id="first_name" data-title="First Name"><?php echo esc_html( get_post_meta( $resume_id, 'first_name', true ) ); ?></span>
                        </div>
                        <div class="profile-last-letter">
                        <span class="edit-text" id="last_name" data-title="Last Name"><?php echo esc_html( get_post_meta( $resume_id, 'last_name', true ) ); ?></span>
                        </div>
                    </h1>
                    <div class="star-border">
                        <span class="star-middle white-bg"></span>
                    </div>
                    <div class="dream-job">
                        <p class="edit-text" id="giyg_wr_category_0" data-title="Select Dream Job 1"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_0', true ); ?></p>
                        <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_category_1', true ) ) ) { ?>
                            <p class="edit-text" id="giyg_wr_category_1" data-title="Select Dream Job 2"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_1', true ); ?></p>
                        <?php } else { ?>
                            <p class="edit-text" id="giyg_wr_custom_category" data-title="Select Dream Job 2"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_category', true )?></p>
                        <?php } ?>
                    </div>
                    <div class="basic-info">
                        <ul>
                            <li class="phone-contact"><img src="<?php echo esc_url( $image_directory ); ?>icon-phone.svg" class="img-phone" align="Phone"> <span class="edit-text" id="phone" data-title="Best Contact Phone Number"><?php echo esc_html( get_post_meta( $resume_id, 'phone', true ) ); ?></span> </li>
                            <li class="mail-contact"><img src="<?php echo esc_url( $image_directory ); ?>icon-mail.svg" class="img-mail" align="Mail"> <span class="edit-text" id="email" data-title="Email"><?php echo esc_html( get_post_meta( $resume_id, 'email', true ) ); ?></span> </li>
                        </ul>
                        <!-- <div class="tagline-block">
                        <h3 class="edit-text tagline" id="giyg_wr_title2" data-title="Enter Resume Title"><?php //echo esc_html( get_post_meta( $resume_id, 'giyg_wr_title2', true ) ); ?></h3>
                        </div> -->
                    </div>
                    <div class="profile-pic white-bg <?php if(get_post_thumbnail_id( $resume_id ) == ''){ ?>profile-not-visible<?php }?>">
                        <img src="<?php echo esc_url( wp_get_attachment_thumb_url( get_post_thumbnail_id( $resume_id ) ) ); ?>" alt="Profile">
                    </div>
                </div>
                <!-- ./Profile -->
                <div class="top-skills-wrap">
                    <div class="star-border">
                        <h2><span class="stars"></span>MY TOP SKILLS<span class="stars right"></span></h2>
                        <span class="star-middle"></span>
                        <img src="<?php echo GIYG_WR_BASEURL . "img/loading.gif"; ?>" alt"Loading" id="loader" style="display:none;"/>
                    </div>
                    <div class="skill-wrap skill-one">
                        <div class="skill-box">
                            <div class="left-skill-icon"><img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-1']; ?>" width="16px" height="16px" alt="Skills">
                            </div>
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_0" data-title="Professional skill 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_0', true ) ); ?> </p>
                            </div>
                        </div>
                        <div class="skill-ranger skill-ranger-one">
                            <div class="slider" id="giyg_wr_rating_0"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ); ?></div>
                        </div>
                    </div>
                    <div class="skill-wrap  skill-two">
                        <div class="skill-box">
                            <div class="left-skill-icon"><img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-2']; ?>" width="16px" height="16px" alt="Skills">
                            </div>
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_1" data-title="Professional skill 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_1', true ) ); ?> </p>
                            </div>
                        </div>
                        <div class="skill-ranger skill-ranger-two">
                            <div class="slider" id="giyg_wr_rating_1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ); ?></div>
                        </div>
                    </div>
                    <div class="skill-wrap skill-three">
                        <div class="skill-box">
                            <div class="left-skill-icon"><img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-3']; ?>" width="16px" height="16px" alt="Skills">
                            </div>
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_2" data-title="Professional skill 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_2', true ) ); ?> </p>
                            </div>
                        </div>
                        <div class="skill-ranger skill-ranger-three">
                            <div class="slider" id="giyg_wr_rating_2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ); ?></div>
                        </div>
                    </div>
                    <div class="skill-wrap skill-four">
                        <div class="skill-box">
                            <div class="left-skill-icon"><img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-4']; ?>" width="16px" height="16px" alt="Skills">
                            </div>
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_3" data-title="Professional skill 4"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_3', true ) ); ?> </p>
                            </div>
                        </div>
                        <div class="skill-ranger skill-ranger-one">
                            <div class="slider" id="giyg_wr_rating_3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ); ?></div>
                        </div>
                    </div>
                    <div class="skill-wrap skill-two">
                        <div class="skill-box">
                            <div class="left-skill-icon"><img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-5']; ?>" width="16px" height="16px" alt="Skills">
                            </div>
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_4" data-title="Professional skill 5"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_4', true ) ); ?> </p>
                            </div>
                        </div>
                        <div class="skill-ranger skill-ranger-two">
                            <div class="slider" id="giyg_wr_rating_4"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ); ?></div>
                        </div>
                    </div>
                </div>
                <div class="energises">
                    <div class="star-border">
                        <h2><span class="stars"></span>WHAT ENERGIZES ME<span class="stars right"></span></h2>
                        <span class="star-middle"></span>
                    </div>
                    <div class="energy_one energy_sinlge">
                        <div class="energy-circle">
                            <div class="energy-circle-inner">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon3-1']; ?>" width="26px" height="36px" alt="Men">
                            </div>
                            <div class="energy-circle-top-outer">
                                <div class="energy-circle-top-inner">1
                                </div>
                            </div>
                        </div>
                        <div class="energy-one-title">
                            <h4 class="edit-text" id="giyg_wr_activity_name_0" data-title="Activity 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_0', true ) ); ?></h4>
                        </div>
                    </div>
                    <div class="energy_one energy_two">
                        <div class="energy-circle">
                            <div class="energy-circle-inner">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon3-2']; ?>" width="26px" height="36px" alt="Men">
                            </div>
                            <div class="energy-circle-top-outer">
                                <div class="energy-circle-top-inner">2
                                </div>
                            </div>
                        </div>
                        <div class="energy-one-title">
                            <h4 class="edit-text" id="giyg_wr_activity_name_1" data-title="Activity 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_1', true ) ); ?></h4>
                        </div>
                    </div>
                    <div class="energy_one energy_sinlge energy_three">
                        <div class="energy-circle">
                            <div class="energy-circle-inner">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon3-3']; ?>" width="26px" height="36px" alt="Men">
                            </div>
                            <div class="energy-circle-top-outer">
                                <div class="energy-circle-top-inner">3
                                </div>
                            </div>
                        </div>
                        <div class="energy-one-title">
                            <h4 class="edit-text" id="giyg_wr_activity_name_2" data-title="Activity 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_2', true ) ); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- /* Karthi */ -->

                <!-- personal-section -->
                <div class="personal-section">
                    <div class="personality-block">
                        <div class="personality-type">
                            <h2><span class="stars"></span>my professional personality type<span class="stars right"></span></h2>
                        </div>
                        <div class="timeline-section">
                            <ul>
                                <li class="creater">
                                    <img src="<?php echo esc_url( $image_directory ); ?>blue/speaker.svg" alt="Speaker">
                                    <div class="the-helper-section">
                                    <h5 class="edit-text" id="giyg_wr_professional_personality" data-title="Professional Personality"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality', true ); ?></h5>
                                    </div>
                                    <p class="text-gray"><span class="edit-text text-gray" id="giyg_wr_professional_personality_description"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_professional_personality_description', true ) ); ?></span></p>
                                </li>

                                <li id="professional_personality_0" class="professional_personality center-circle circle-two circle-bottom"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_0"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_0', true ); ?></span></span><i class="corner-dot"></i></span></li>

                                <li id="professional_personality_1" class="professional_personality center-circle circle-three circle-top"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_1"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_1', true ); ?></span></span> <i class="corner-dot"></i></span></li>

                                <li id="professional_personality_2" class="professional_personality center-circle circle-four circle-bottom"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_2"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_2', true ); ?></span></span> <i class="corner-dot"></i></span></li>

                                <li id="professional_personality_3" class="professional_personality center-circle circle-five circle-top"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_3"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_3', true ); ?></span></span> <i class="corner-dot"></i></span></li>

                                <li id="professional_personality_4" class="professional_personality center-circle circle-six  circle-bottom"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_4"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_4', true ); ?></span></span> <i class="corner-dot"></i></span></li>

                                <li id="professional_personality_5" class="professional_personality center-circle circle-five circle-top"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_5"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_5', true ); ?></span></span> <i class="corner-dot"></i></span><span class="dot"></span></li>

                                <!-- <li id="professional_personality_6" class="professional_personality center-circle circle-six  circle-bottom"><span class="inner-border"><span class="circle-content professional_personality_text" ><?php //echo esc_html( $professional_personality_listings[6] ); ?></span> <i class="corner-dot"></i></span><span class="dot"></span></li>
                                <li id="professional_personality_7" class="professional_personality center-circle circle-five circle-top"><span class="inner-border"><span class="circle-content professional_personality_text" ><?php //echo esc_html( $professional_personality_listings[7] ); ?></span> <i class="corner-dot"></i></span></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="ideal-section">
                        <div class="personality-type">
                            <h2><span class="stars"></span>MY IDEAL COMPANY<span class="stars right"></span></h2>
                        </div>
                           
                            <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ) ) ) { ?>
                                <div class="ideal-contet-sec">
                                <h5 class="edit-text" id="giyg_wr_ideal_company" data-title="My Ideal Company"><?php echo get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ); ?></h5>
                                </div>
                            <?php } else {?>
                                <div class="ideal-contet-sec">
                                <h5 class="edit-text" id="giyg_wr_custom_ideal_company" data-title="My Ideal Company"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_ideal_company', true );?></h5>
                                </div>
                            <?php } ?>
                    </div>
                </div>
                <!-- personal-section -->
                <div class="core-value-company-profile">
                    <div class="core-values">
                        <div class="core-value-ball">
                            <?php
                            $core_val_num = array("dark-ball", "dark-ball", "light-ball", "light-ball", "light-ball");                                  

                                    $str = '';
                                    $i = 0;
                                    $k = 0;
                                        for ( $j = 0; $j < 5; $j++ ) { 
                                            $m = $k+1;
                                            if( !empty(get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true )) ) {
                                                if($k < 5){
                                                    $str .= '<div class="'.$core_val_num[$k].' value'.$m.'"><div class="dark-ball-cell"><span class="edit-text" id="giyg_wr_core_value_'.$j.'" data-title="Core Value">';
                                                    $str .= get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true ); 
                                                    $str .= '</span></div></div>';
                                                    $i++;
                                                    $k++;
                                                }
                                            }
                                        }                                   
                                    echo $str;
                            ?>
                        </div>
                        <div class="core-title">
                            <h2><span class="stars"></span>my core values<span class="stars right"></span></h2>
                        </div>
                        <div class="core-value-ball bottom-value-ball">                            
                            <?php                                
                                $core_val_nums = array("dark-ball", "dark-ball", "dark-ball", "light-ball", "light-ball");
                                $strs = '';
                                $b = 0;
                                $n = 5;
                                for ( $j = $i; $j < ($i+5); $j++ ) { 
                                    $m = $n+1;
                                    if( !empty(get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true )) ) {
                                        
                                        $strs .= '<div class="'.$core_val_nums[$b].' value'.$m.'"><div class="dark-ball-cell"><span class="edit-text" id="giyg_wr_core_value_'.$j.'" data-title="Core Value">';
                                        $strs .= get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true ); 
                                        $strs .= '</span></div></div>';
                                        $n++;
                                        $b++;
                                    
                                    }
                                }
                                echo $strs;                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="company-profile">
                        <div class="dark-company-profile-wrap">
                            <div class="dark-company-profile">
                                <img src="<?php echo esc_url( $image_directory ); ?>icon_corporate-culture.svg">
                                <p>best fit</p>
                                <p>corporate culture</p>
                            </div>
                            <div class="light-company-profile">
                                <img src="<?php echo esc_url( $image_directory ); ?>icon_setting-groups.svg">
                                <p>most valued team attributes</p>
                            </div>
                            <div class="attribute-list">
                                <ul id="team-attributes">
                                <?php
                                $team_attribute_name_html = '';
                                for ( $j = 0; $j < 5; $j++ ) { 
                                    if( !empty( get_post_meta( $resume_id, 'giyg_wr_team_attribute_'.$j, true ) ) ) {
                                        $team_attribute_name_html .= '<li><span class="tick"><img src="'.esc_url( $image__with_color_directory ).'icon_tick-mark.svg" /></span><span class="edit-text" id="giyg_wr_team_attribute_'.$j.'" data-title="Team Attribute">';
                                        $team_attribute_name_html .= get_post_meta( $resume_id, 'giyg_wr_team_attribute_'.$j, true ); 
                                        $team_attribute_name_html .= '</span></li>';
                                    }
                                }                        
                                
                                echo $team_attribute_name_html;
                                ?>
                                </ul>
                            </div>
                        </div>
                        <div class="adptive-culture">
                            <div class="adptive-culture-head">
                                <h3 class="edit-text" id="giyg_wr_corporate_culture" data-title="Best Fit Corporate Culture"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture', true ); ?> Culture</h3>
                            </div>
                            <h5 class="edit-text text-gray" style="display:none" id="giyg_wr_corporate_culture_description"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_description', true ); ?></h5>
                            <div class="attribute-list">
                                <ul class="corporate_culture_listings">
                                <?php
                                    $str = '';
                                    for ( $i = 0; $i < 6; $i++ ) {
                                        $str .= '<li id="corporate_culture_'.$i.'" class="corporate_culture"><span class="tick"><img src="'.esc_url( $image__with_color_directory ).'icon_tick-mark-gray.svg"></span><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_'.$i.'">'.get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_'.$i, true ).'</span></li>';
                                    }
                                    echo $str;
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./personal-section -->
                <!-- reason-section -->
                <div class="reason-section">
                    <h3 class="reason-hire-me">#1 Irresistable reason to hire me</h3>
                    <span class="star-middle"></span>
                    <p class="edit-text" id="giyg_wr_impact_statement" data-type="textarea" data-title="#1 Irresponsibility reason to hire me"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_impact_statement', true ) ); ?></p>
                </div>
                <!-- ./reason-section -->
            </section>
            <!-- Footer -->
            <footer class="conservative-footer">
                <div class="footer-inner-wrap">
                <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ))) { ?>
                    <a href="javascript:;"><img src="<?php echo esc_url( $image_directory ); ?>icon_linkedin.svg" class="social-space">
                    <label class="edit-text" id="giyg_wr_linkedin_url" data-title="LinkedIn URL"> <?php echo get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ); ?> </label></a>
                <?php } ?> 
                <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ))) { ?>
                    <a href="javascript:;"><img src="<?php echo esc_url( $image_directory ); ?>icon_twitter.svg">
                    <label class="edit-text" id="giyg_wr_twitter_url" data-title="Twitter URL"> <?php echo get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ); ?> </label> </a>
                <?php } ?>
                <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ))) { ?>
                    <a href="javascript:;"><img src="<?php echo esc_url( $image_directory ); ?>icon_facebook.svg">
                    <label class="edit-text" id="giyg_wr_facebook_url" data-title="Facebook URL"> <?php echo get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ); ?> </label></a> 
                <?php } ?>                
                <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_other_url', true ))) { ?>
                    <a href="javascript:;"><img src="<?php echo esc_url( $image_directory ); ?>icon_weblink.svg">
                    <label class="edit-text" id="giyg_wr_other_url" data-title="Other URL(Github, Blog, Personal Website)"> <?php echo get_post_meta( $resume_id, 'giyg_wr_other_url', true ); ?> </label></a>
                <?php } ?>
                </div>          
            </footer>
            <!-- ./Footer -->
        </div>
    </div>
  </div>  

  </div>

  <script>
  jQuery(document).ready(function() {
    var ajaxurl = "<?php echo esc_url( $admin_ajax_url ); ?>";
    jQuery( ".slider" ).each(function() {
      // read initial values from markup and remove that
      var value = parseInt( jQuery( this ).text(), 10 );
      jQuery( this ).empty().slider({
        value: value,
        range: "min",
        animate: true,
        step: 1,
        max: 10
      });
    });
  });
  </script>

   <link rel='stylesheet' id='giyg_wr_google_fonts-css'  href='https://fonts.googleapis.com/css?family=Cairo:300,300i,400,400i,500,500i,700,700i|Lato:300,300i,400,400i,500,500i,700,700i|Oswald:300,300i,400,400i,500,500i,700,700i|PT+Sans:300,300i,400,400i,500,500i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Source+Sans+Pro:300,300i,400,400i,500,500i,700,700i|Titillium+Web:300,400,500,500i,700,700i' type='text/css' media='all' />
   
  <link rel="stylesheet" id="giyg_wr_theme_conservative_css-css"  href="<?php echo GIYG_WR_BASEURL.'templates/themes/'.$wr_theme.'/style.css'; ?>" type="text/css" />  
  
  <link rel="stylesheet" id="giyg_wr_jquery_ui_min_css-css" href="<?php echo GIYG_WR_BASEURL.'jquery-ui/jquery-ui.min.css'; ?>" type="text/css" media="all">  
  <script type="text/javascript" src="<?php echo GIYG_WR_BASEURL.'jquery-ui/jquery-ui.min.js'; ?>"></script>
  </body>
</html>