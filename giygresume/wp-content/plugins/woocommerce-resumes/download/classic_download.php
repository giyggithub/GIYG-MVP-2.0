<?php
/**
 * This is the classic theme file.
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
    @page{
            margin: 0;
            padding: 0;
            width: 100%;
        }
        body, html{
            margin: 0;
            padding: 0;
        }
        .theme-wrap .container-wrap,
        .theme-wrap .container{
            width: 100%;
            page: cover;
            height: 100%;
            margin:0;
        }
        .theme-wrap .dashboard-common-area{
            margin: 0;
            padding: 0;
        }
        .preview_fullwidth{
            background: transparent;
        }
        .profile-catagory.mail {
            width: 450px;
        }
        #watermark > .container {
            border: none !important;
        }
        #watermark .watermark-contnet{
            /*display: none !important;*/
            top: 35% !important;
            color: rgba(0,0,0, 0.1);
            left: 15% !important
        }
        #watermark .watermark-contnet{
              color: #848080;
        }
        .light-wrap{
            border-right: none !important; 
        }
        .classic-teal .profile-desc p{
            border-bottom: none !important;
        }
        .profile-catagory.mail {
            width: 60% !important;
        }
        .web-communication, .web-contact,{
            width:90% !important;
        }
        .profile-catagory .call label{
            width: 3% !important;
        }
        .profile-catagory .mail label{
            width: 6% !important
        }
        .profile-img {
            border-radius: 85px;
            border: 2px solid #ffffff;
            height: 137px;
            width: 137px;
            float: left;
        }

        .profile-img img {
            border-radius: 50%;
            height: 128px;
            width: 128px;
        }

        .profile-desc .profile-name {
            padding-left: 10px;
            margin: 0;
            font-weight: 300;
            font-size: 37px;
        }

        .dream-job {
            margin: 3px 0px;
            padding-left: 13px;
            text-transform: inherit;
            font-weight: normal;
            line-height: normal;
        }

        .dream-job span {
            display: inline-block;
            position: relative;
            /*padding-right: 5px;*/
        }

        .dream-job span:after {            
            position: absolute;
            right: -3px;
            font-weight: bold;
            top: -7px;
        }

        .dream-job span:last-child:after {
            display: none;
        }

        .profile-catagory.mail {
            width: 360px;
        }

        .linked_weblink {
            display: inline-block;
            width: 100%;
        }

        .profile-catagory.italic .content-edit a {
            font-size: 12px;
        }

        .profile-catagory.italic {
            line-height: normal;
        }

        .profile-desc {
            height: 141px;
            width: 100%;
            padding-left: 137px;
        }

        .profile-desc p {
            /*border-bottom: 2px solid #ffffff;*/
            font-size: 17px;
            padding-left: 13px;
            margin: 0 0 5px 0;
            line-height: 22px;
        }

        .profile-catagory img {
            width: 20px;
            height: 20px;
            display: block;
        }

        .profile-catagory {
            display: inline-block;
            float: left;
            margin-left: 10px;
            line-height: normal;
        }

        .profile-catagory .content-edit {
            padding-left: 5px;
            float: left;
            line-height: normal;
        }

        .profile-catagory .content-edit a {
            border: 0;
            width: 100%;
            display: block;
            letter-spacing: 0;
            font-size: 14px;
        }

        .profile-catagory label {
            float: left;
            width: 20px;
            height: 20px;
            margin-bottom: 5px;
        }

        .top-accomplish {
            font-size: 0;
            border-radius: 20px;
            padding: 10px !important;
        }

        .top-accomplish h4 {
            text-align: center;
        }

        .accomplish-item {
            display: inline-block;
            width: 100%;
            margin-top: 62px;
        }

        .accomplish-box {
            border-radius: 20px;
            float: left;
            height: 100px;
            padding: 0px 10px 0px 10px;
            width: 32%;
            margin-right: 16px;
        }
        .accomplish-box.stronger-bg{
            margin-right: 0px
        }
        .core-value .custom-icon > img {
            width: 75px !important;
            height: 75px !important;
        }    
        .core-value-group .core-values-block-five{
            top: 30px !important 
        }
        .core-value-group .core-values-block-eight{
            bottom: -10px !important;
        }
        .core-value-group .core-values-block-seven{
            bottom: 10px !important; 
        }
        .valued-team-gear{
            width: 260px !important;
        }
        .core-value-group .core-values-block-three{
            left: 240px !important;
        }
        .core-value-group .core-values-block-seven{
            left: 210px !important;
        }
        .core-value-group .core-values-block-eight {
            left: 250px !important;
        }
        .value-item4{
            right: 36% !important;
        }
        .value-item1{
            left: 12% !important;
        }
        .value-item2{
            right: 12% !important;
        }
        .value-item3{
            left: 7% !important;
        }
        .value-item5{
            right: 8% !important;
        }
        .center-block-accom{
            text-align: center;
            padding: 0 49px;
        }
        .top-accomplish {
            width: 100% !important;
            margin: 0 !important;
        }
        .classic-light-blue .top-number {
            outline: 0;
        }
        .profile-img, .profile-img img{
            border-radius: 85px !important;
        }
        .profile-img img{
            height: 133px;
            width: 133px;
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
                    <header>
                        <div class="profile-img <?php if(get_post_thumbnail_id( $resume_id ) == ''){ ?>profile-not-visible<?php }?>">
                            <img src="<?php echo esc_url( wp_get_attachment_thumb_url( get_post_thumbnail_id( $resume_id ) ) ); ?>" alt="No Profile Image">
                        </div>
                        <div class="profile-desc">
                            <h1 class="profile-name" style="<?php echo $_SESSION['classic_flname_font']; ?>">
                                <span class="edit-text" id="first_name" data-title="First Name"><?php echo esc_html( get_post_meta( $resume_id, 'first_name', true ) ); ?></span>
                                <span class="edit-text" id="last_name" data-title="Last Name"><?php echo esc_html( get_post_meta( $resume_id, 'last_name', true ) ); ?></span>
                            </h1>
                            <h4 class="dream-job">
                                <span class="edit-text" id="giyg_wr_category_0" data-title="Select Dream Job 1"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_0', true ); ?></span><span class="comma">,</span>
                                <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_category_1', true ) ) ) { ?>
                                    <span class="edit-text" id="giyg_wr_category_1" data-title="Select Dream Job 2"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_1', true ); ?></span>
                                <?php } else {?>
                                    <span class="edit-text" id="giyg_wr_custom_category" data-title="Select Dream Job 2"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_category', true )?></span>
                                <?php }?>
                            </h4>            
                            <!-- <div class="accomplish-box-text">
                                <p class="edit-text tagline" id="giyg_wr_title2" data-title="Enter Resume Title"><?php //echo esc_html( get_post_meta( $resume_id, 'giyg_wr_title2', true ) ); ?></p>
                            </div> -->
                            <div class="web-contact">
                                <div class="profile-catagory call">
                                    <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_phone.svg" alt="Phone"></label>
                                    <div class="content-edit edit-box">
                                        <a class="edit-text" id="phone" data-title="Best Contact Phone Number"><?php echo esc_html( get_post_meta( $resume_id, 'phone', true ) ); ?></a>    
                                    </div>
                                </div>
                                <div class="profile-catagory mail">
                                    <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_email.svg" alt="Phone"></label>
                                    <div class="content-edit edit-box">
                                        <a class="edit-text" id="email" data-title="Email"><?php echo esc_html( get_post_meta( $resume_id, 'email', true ) ); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="web-communication">
                                <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true )) ) { ?>
                                <div class="profile-catagory italic linkedin">
                                    <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_linkedin.svg" alt="Linkedin"></label>
                                    <div class="content-edit edit-box">
                                        <a class="edit-text" id="giyg_wr_linkedin_url" data-title="LinkedIn URL"><?php echo get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ); ?>  </a>   
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_twitter_url', true )) ) { ?>
                                <div class="profile-catagory italic">
                                    <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_twitter.svg" alt="Twitter"></label>
                                    <div class="content-edit edit-box">
                                        <a class="edit-text" id="giyg_wr_twitter_url" data-title="Twitter URL"><?php echo get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ); ?></a>    
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_facebook_url', true )) ) { ?>
                                <div class="profile-catagory italic">
                                    <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_facebook.svg" alt="Facebook"></label>
                                    <div class="content-edit edit-box">
                                        <a class="edit-text" id="giyg_wr_facebook_url" data-title="Facebook URL"><?php echo get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ); ?></a>    
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_other_url', true )) ) { ?>
                                <div class="profile-catagory italic">
                                    <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_weblink.svg" alt="Weblink"></label>
                                    <div class="content-edit edit-box">
                                        <a class="edit-text" id="giyg_wr_other_url" data-title="Other URL(Github, Blog, Personal Website)"><?php echo get_post_meta( $resume_id, 'giyg_wr_other_url', true ); ?></a>    
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </header>
                    <div class="center-block-accom">
                        <section class="top-accomplish dark-bg">
                            <h4>TOP ACCOMPLISHMENTS</h4>
                            <div class="accomplish-item">
                                <div class="accomplish-box light-bg">
                                    <div class="top-number light-bg">
                                        <img src="<?php echo esc_url( $image_directory ); ?>icon_1-decoration.svg">
                                    </div>
                                    <div class="location-head">
                                    <p class="edit-text location" id="giyg_wr_location_0" data-type="text" data-title="Location 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_0', true ) ); ?></p>
                                    </div>
                                    <div class="location-contnet">
                                    <p class="edit-text description" id="giyg_wr_company_name_0" data-type="textarea" data-title="Accompolishment 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_0', true ) ); ?></p> 
                                    </div>
                                </div>
                                <div class="accomplish-box strong-bg">
                                    <div class="top-number strong-bg">
                                        <img src="<?php echo esc_url( $image_directory ); ?>icon_2-decoration.svg">
                                    </div>
                                    <div class="location-head">
                                    <p class="edit-text location" id="giyg_wr_location_1" data-type="text" data-title="Location 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_1', true ) ); ?></p>
                                    </div>
                                    <div class="location-contnet">
                                    <p class="edit-text description" id="giyg_wr_company_name_1" data-type="textarea" data-title="Accompolishment 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_1', true ) ); ?></p> 
                                    </div>
                                </div>
                                <div class="accomplish-box stronger-bg">
                                    <div class="top-number stronger-bg">
                                        <img src="<?php echo esc_url( $image_directory ); ?>icon_3-decoration.svg">
                                    </div>
                                    <div class="location-head">
                                    <p class="edit-text location" id="giyg_wr_location_2" data-type="text" data-title="Location 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_2', true ) ); ?></p>
                                    </div>
                                    <div class="location-contnet">
                                    <p class="edit-text description" id="giyg_wr_company_name_2" data-type="textarea" data-title="Accompolishment 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_2', true ) ); ?></p> 
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section class="skills-wrap">
                        <div class="topskill-wrap">
                            <div class="top-skill-box">
                                <h4>My Top Skills <img src="<?php echo GIYG_WR_BASEURL . "img/loading.gif"; ?>" alt"Loading" id="loader" style="display:none;"/></h4>
                                <div class="skill-box">
                                    <ul class="skill-name">
                                        <li class="skill1 characters-wrap"><span class="edit-text description skill1" id="giyg_wr_skill_name_0" data-title="Professional skill 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_0', true ) ); ?> </span></li>
                                        <li class="skill1 skill-bg-wrap"> <label class="skill1-bg"> <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-1']; ?>"> </label> <span> 
                                        <select id="giyg_wr_rating_0" class="skill-rating" name="rating" autocomplete="off">
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
                                        </select>  </span></li>
                                        <li class="skill2 characters-wrap"> <span class="description skill2 edit-text" id="giyg_wr_skill_name_1" data-title="Professional skill 2"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_1', true ) ); ?> </span></li>
                                        <li class="skill2 skill-bg-wrap"> <label class="skill2-bg"> <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-2']; ?>"> </label> <span> 
                                        <select id="giyg_wr_rating_1" class="skill-rating" name="rating" autocomplete="off">
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
                                        </select>  </span></li>
                                        <li class="skill3 characters-wrap"> <span class="description skill3 edit-text" id="giyg_wr_skill_name_2" data-title="Professional skill 3"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_2', true ) ); ?> </span></li>
                                        <li class="skill3 skill-bg-wrap"> <label class="skill3-bg"> <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-3']; ?>"> </label> <span> 
                                        <select id="giyg_wr_rating_2" class="skill-rating" name="rating" autocomplete="off">
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
                                        </select>  </span></li>
                                        <li class="skill4 characters-wrap"> <span class="description skill4 edit-text" id="giyg_wr_skill_name_3" data-title="Professional skill 4"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_3', true ) ); ?> </span></li>
                                        <li class="skill4 skill-bg-wrap"> <label class="skill4-bg"> <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-4']; ?>"> </label> <span> 
                                        <select id="giyg_wr_rating_3" class="skill-rating" name="rating" autocomplete="off">
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
                                        </select>  </span></li>
                                        <li class="skill5 characters-wrap"> <span class="description skill5 edit-text" id="giyg_wr_skill_name_4" data-title="Professional skill 5"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_4', true ) ); ?> </span></li>
                                        <li class="skill5 skill-bg-wrap"> <label class="skill5-bg"> <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-5']; ?>"> </label> <span> 
                                        <select id="giyg_wr_rating_4" class="skill-rating" name="rating" autocomplete="off">
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
                                        </select>  </span></li>
                                    </ul>
                                    <p>Junior<br> Level</p>
                                    <div class="skill-levels"> <p>Solid<br> Contributor</p> </div>
                                    <div class="skill-levels guru-wrap"> <p>Guru<br> Level</p> </div>
                                </div>
                                
                            </div>
                            <div class="top-skill-box energies-left">
                                <div class="top-skill-box-section">
                                    <h4>WHAT ENERGIZES ME</h4>

                                    <div class="energi-wrap skill1">
                                        <div class="energi-number">
                                        <span class="wave-wrap"><!-- wave -->
                                        <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon2-1']; ?>" class="wave-icon" alt="Wave">                                    
                                        </span>
                                        <span class="count"><b style="font-weight: bold !important;">1</b></span></div>   
                                        <div class="description skill1">
                                        <div class="edit-text" id="giyg_wr_activity_name_0" data-title="Activity 1"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_0', true ) ); ?> </div>
                                        </div> 
                                    </div>
                                    <div class="energi-wrap skill2">
                                        <div class="energi-number">
                                        <span class="wave-wrap"><!-- wave -->
                                        <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon2-2']; ?>" class="wave-icon" alt="Wave">                                    
                                        </span>
                                        <span class="count"><b style="font-weight: bold !important;">2</b></span></div>   
                                        <div class="description skill2">
                                        <div class="edit-text" id="giyg_wr_activity_name_1" data-title="Activity 2"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_1', true ) ); ?> </div>
                                        </div> 
                                    </div>
                                    <div class="energi-wrap skill3">
                                        <div class="energi-number">
                                        <span class="wave-wrap"><!-- wave -->
                                        <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon2-3']; ?>" class="wave-icon" alt="Wave">                                    
                                        </span>
                                        <span class="count"><b style="font-weight: bold !important;">3</b></span></div> 
                                        <div class="description skill3">
                                        <div class="edit-text" id="giyg_wr_activity_name_2" data-title="Activity 3"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_2', true ) ); ?> </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="core-value dark-bg">
                            <div class="core-value-section-block">
                                <div class="core-img"><img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon3-1']; ?>" alt="compass" height="75" width="75"></div>
                                <div class="core-img pull-right"><img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon3-2']; ?>" alt="compass" height="75" width="75"></div>
                                <div class="core-description">
                                <h2 class="skill1">My Core Values</h2>
                                    <div class="core-value-group">
                                        <?php
                                         
                                          $core_val_num = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten");
                                            
                                            $str = '';
                                            $k = 0;
                                            for ( $j = 0; $j < 10; $j++ ) { 
                                                if( !empty(get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true )) ) {
                                                    $str .= '<div class="core-values-block core-values-block-'.$core_val_num[$k].'"><span class="core-desc edit-text core-values-'.$core_val_num[$k].'" id="giyg_wr_core_value_'.$j.'" data-title="Core Value">';
                                                    $str .= get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true ); 
                                                    $str .= '</span></div>';
                                                    $k++;
                                                }
                                            }
                                            echo $str;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="professional-wrap dark-bg">
                            <h2 class="skill3">My Professional Personality</h2>
                                <div class="creator-wrap">
                                    <?php $split = ceil(count($professional_personality_listings)/2); ?>                    
                                    <div class="professional-box">
                                        <?php $array_val = array("one","two","three","four","five","six");?>
                                        <?php for($i=0; $i<$split; $i++) { ?>
                                            <div class="profess-wrap professional_personality prof-<?php echo $array_val[$i];?>" id="professional_personality_<?php echo esc_attr($i); ?>"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_<?php echo esc_attr($i); ?>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_'.$i, true ); ?></span></div>
                                        <?php } ?>                                    
                                    </div>
                                    
                                    <div class="professional-box right-box">
                                        <?php for($j=$split; $j<count($professional_personality_listings); $j++) { ?>
                                            <div class="profess-wrap professional_personality prof-<?php echo $array_val[$j];?>" id="professional_personality_<?php echo esc_attr($j); ?>"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_<?php echo esc_attr($j); ?>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_'.$j, true ); ?></span></div>
                                        <?php } ?>
                                    </div>
                                    <div class="center-creator">
                                        <div class="edit-wrap-box">
                                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_creator.svg">
                                        </div>
                                        <div class="professional-personality-block">
                                            <h5 class="edit-text" id="giyg_wr_professional_personality" data-title="Professional Personality"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality', true ); ?></h5>
                                        </div>
                                        <div class="professional-personality-desc">
                                        <small class="edit-text" id="giyg_wr_professional_personality_description"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_description', true ); ?></small>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="ideal-section">
                            <div class="best-fit ideal-wrap">
                                <h5 class="heading-box">Best fit corporate culture</h5>
                                <div class="adaptive-wrap">
                                    <div class="heading-ideal">
                                        <div class="light-wrap">
                                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_adaptive.svg">
                                        </div>
                                        <div class="best-fit-section">
                                            <span class="edit-text" id="giyg_wr_corporate_culture" data-title="Best Fit Corporate Culture"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture', true ); ?> Culture</span>
                                        </div>
                                        <span class="edit-text text-gray" style="display:none" id="giyg_wr_corporate_culture_description"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_description', true ); ?></span>
                                    </div>
                                    <ul class="corporate_culture_listings">
                                         <?php
                                            $str = '';
                                            for ( $i = 0; $i < count($corporate_culture_listings); $i++ ) {
                                                $str .= '<li id="corporate_culture_'.$i.'" class="corporate_culture"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_<?php echo esc_attr( $i ); ?>">'.get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_'.$i, true ).'</span></li>';
                                            }
                                            echo $str;
                                            ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="ideal-box">
                            <h5 class="heading-box big-font">MY IDEAL COMPANY</h5>
                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_buildings.svg" alt="">
                            <div class="description stronger-bg"> 
                                <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ) ) ) { ?>
                                    <div class="my-ideal-section">
                                        <div class="my-ideal-content">
                                            <p class="edit-text" id="giyg_wr_ideal_company" data-title="My Ideal Company" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ); ?></p>
                                        </div>
                                    </div>
                                <?php } else {?>
                                <div class="my-ideal-section">
                                    <div class="my-ideal-content">
                                        <p class="edit-text" id="giyg_wr_custom_ideal_company" data-title="My Ideal Company" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_ideal_company', true );?></p>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                            <div class="valued-team ideal-wrap">
                                <h5 class="heading-box">Most valued Team Attributes</h5>
                                <div class="valued-team-gear">
                                <?php                                    
                                    $team_attribute_name_html = '';
                                    $i = 0;
                                    $m = 0;
                                    for ( $j = 0; $j < 5; $j++ ) { 
                                        $k = $i+1;
                                        if( !empty(get_post_meta( $resume_id, 'giyg_wr_team_attribute_'.$j, true )) ) {
                                            $team_attribute_name_html .= '<div class="value-item-wrap value-item-wrap'.$k.'"><div class="value-item-block value-item'.$k.'">';
                                            if($i == 0 ) { $team_attribute_name_html .= '<img src="'.esc_url( $image__with_color_directory ).'gear-one.svg" class="gear-icon" alt="Gear">';
                                    
                                            }
                                            if( $i == 1 ) { $team_attribute_name_html .= '<img src="'.esc_url( $image__with_color_directory ).'gear-two.svg" class="gear-icon" alt="Gear">';
                                            }
                                            if( $i == 2 ) { $team_attribute_name_html .= '<img src="'.esc_url( $image__with_color_directory ).'gear-three.svg" class="gear-icon" alt="Gear">';
                                            }
                                            if( $i == 3 ) { $team_attribute_name_html .= '<img src="'.esc_url( $image__with_color_directory ).'gear-four.svg" class="gear-icon" alt="Gear">';
                                            } 
                                            if( $i == 4 ) { $team_attribute_name_html .= '<img src="'.esc_url( $image__with_color_directory ).'gear-five.svg" class="gear-icon" alt="Gear">';
                                            }
                                                $team_attribute_name_html .= '<p class="tick edit-text" id="giyg_wr_team_attribute_'.$j.'" data-title="Team Attribute">';
                                                $team_attribute_name_html .= get_post_meta( $resume_id, 'giyg_wr_team_attribute_'.$j, true ); 
                                                $team_attribute_name_html .= '</p></div></div>';
                                                $i++;
                                        }
                                    }
                                    echo $team_attribute_name_html;
                                    
                                ?>  
                                </div>
                                
                            </div>
                        </div>          
                        <div class="reason-wrap white">
                            <div class="reason-left-wrap skill3-bg">
                                <span class="reason-number">#1</span>
                                <span>Irresistible<br> Reason <br> To hire me</span>
                            </div>
                            <div class="reason-right-wrap">
                                <p class="description white edit-text" id="giyg_wr_impact_statement" data-type="textarea" data-title="#1 Irresponsibility reason to hire me"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_impact_statement', true ) ); ?></p>
                            </div>
                        </div>
                        <!-- <footer class="dark-bg">
                            <div class="social-wrap">
                                <div class="social-addr">
                                    <a href="javascript:;" title="Twitter"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_twiter.svg"></a>
                                    <p></p>
                                </div>
                                <div class="social-addr">
                                    <a href="javascript:;" title="Linkedin"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_linkedin.svg"></a>
                                    <p></p>
                                </div>
                                <div class="social-addr">
                                    <a href="javascript:;" title="Ffacebook"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_facebook.svg"></a>
                                    <a href="javascript:;" title="Pinterest"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_pinterest.svg"></a>
                                    <a href="javascript:;" title="Instagram"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_instagram.svg"></a>
                                    <a href="javascript:;" title="Website"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_weblink.svg"></a>
                                </div>
                            </div>
                        </footer> -->
                    </section>
                </div>
        </div>
    </div>  

  </div>
 
  <link rel='stylesheet' id='giyg_wr_bar_rating_css-css'  href="<?php echo GIYG_WR_BASEURL.'jquery-bar-rating/bars-square.css'; ?>" type='text/css' media='all' />

   <link rel='stylesheet' id='giyg_wr_google_fonts-css'  href='https://fonts.googleapis.com/css?family=Cairo:300,300i,400,400i,500,500i,700,700i|Lato:300,300i,400,400i,500,500i,700,700i|Oswald:300,300i,400,400i,500,500i,700,700i|PT+Sans:300,300i,400,400i,500,500i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Source+Sans+Pro:300,300i,400,400i,500,500i,700,700i|Titillium+Web:300,400,500,500i,700,700i' type='text/css' media='all' />

  <link rel="stylesheet" id="giyg_wr_theme_classic_css-css"  href="<?php echo GIYG_WR_BASEURL.'templates/themes/'.$wr_theme.'/style.css'; ?>" type="text/css" />


<style type="text/css">
    /*.top-number{
        border-radius: 0;
        background-origin: content-box;
    }*/
    .ideal-box .description{
        margin-top: -30px;

    }
</style>
  <script type='text/javascript' src="<?php echo GIYG_WR_BASEURL.'jquery-bar-rating/jquery.barrating.js'; ?>"></script>
  <script>
  jQuery('.skill-rating').barrating('show', {
      theme: 'bars-1to10',
      onSelect: function(value, text, event){          
      }
  });
  </script>

  </body>
</html>