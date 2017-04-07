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
            /*width: 100%;*/
        }
        body, html{
            margin: 0;
            padding: 0;
        }

        .personality-list-one li:before, .personality-list-two li:before {
            height: 1px;
        }
        /*.theme-wrap .container-wrap{
          width: 100% !important;
          page: cover;
        }*/
        .preview_fullwidth .traditional-theme-wrap .container-wrap .container{
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
        .theme-wrap .dashboard-common-area{
            margin: 0;
            padding: 0;
        }
        .preview_fullwidth{
            background: transparent;
        }
        .accomplishment-list li:before, .energises-list li:before, .ideal-list li:before, .value-list li .dot, .value-circle, .profile-img-wrap, .profile-img-wrap.profile-img-border > img{
          border-radius: 85px;
        }
        .value-list li{
          width: 220px;
          float: left;
        }
        #watermark {
            border:none;
        }
        #watermark .watermark-contnet{
          color: rgba(0,0,0, 0.1);
          opacity: 0.2;
          font-size: 200px !important;
          top: 37% !important;
        }
        .header-info {
            padding-top: 40px !important;
        }
        .each-value, .each-value p {
            width: 335px !important;
        }
        .hire-me {
              margin-top: 10px !important;
          }
        .location-text-content{
          /*min-height: 54px !important;*/
          height: auto !important; 
        }
        .each-value, .each-value p, .best-fit{
          width: 100% !important;
        }
        .personality-list-two li::before {
            left: -173px !important;
            width: 173px !important;
        }
        .personality-wrap{
            width: 95% !important;            
        }
        .personality-list-two li::before {
            left: -200% !important;
            width: 200% !important;
        }
        .personality-list-two{
          float: left !important;
        }
        .value-list li{
          width: 49% !important;
        }
        .top-skills, .core-values{
          margin-top: 0px !important
        }
        .social-icons-wrap label{
          margin-bottom: 2px !important;
        }
        .traditional-theme-wrap .energises, .traditional-theme-wrap .accomplishments{
            margin-top: 25px !important;
        }
        .traditional-theme-wrap .best-fit{
          margin-top: 5px !important;
        }
        .traditional-theme-wrap .ideal-company {
            margin-top: 40px !important;
        }
        .traditional-theme-wrap footer {
          margin-top: 5px !important;
          margin-bottom: 10px !important;
        }
        .traditional-theme-wrap .third-row-right, .traditional-theme-wrap .personality {
            margin-top: 10px !important;
        }
        
    </style>
  </head>

  <body class="<?php echo esc_attr( $wr_theme.'-'.$wr_color ); ?>-theme preview_fullwidth">

  <div class="giyg-themes container">
  <div class="theme-wrap">

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
                  <div class="header-info">
                      <div class="profile-image">
                          <div class="profile-img-wrap profile-img-border <?php if(get_post_thumbnail_id( $resume_id ) == ''){ ?>profile-not-visible<?php }?>">
                              <img src="<?php echo esc_url( wp_get_attachment_thumb_url( get_post_thumbnail_id( $resume_id ) ) ); ?>" alt="Profile" />
                          </div>
                      </div>
                      <div class="profile-details">
                          <h1 style="<?php echo $_SESSION['traditional_flname_font']; ?>">
                            <div class="first-name-text">
                            <span class="edit-text" id="first_name" data-title="First Name" style="font-weight: 300;"><?php echo esc_html( get_post_meta( $resume_id, 'first_name', true ) ); ?></span>
                            </div>
                            <div class="lasts-name-text">
                              <span class="edit-text" id="last_name" data-title="Last Name"><?php echo esc_html( get_post_meta( $resume_id, 'last_name', true ) ); ?></span>
                            </div>
                          </h1>
                          <div class="text-designation">
                          <p class="designation-text">
                          <span class="edit-text" id="giyg_wr_category_0" data-title="Select Dream Job 1"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_0', true ); ?></span><span class="comma">,</span> 
                          <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_category_1', true ) ) ) { ?>
                              <span class="edit-text" id="giyg_wr_category_1" data-title="Select Dream Job 2"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_1', true ); ?></span>
                          <!-- </div> -->
                          <?php } else {?>
                              <span class="edit-text" id="giyg_wr_custom_category" data-title="Select Dream Job 2"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_category', true ); ?></span>
                          <?php } ?>
                          </p>                          
                          <!-- <div class="who-am-section">
                            <p class="edit-text tagline" id="giyg_wr_title2" data-title="Enter Resume Title"><?php //echo esc_html( get_post_meta( $resume_id, 'giyg_wr_title2', true ) ); ?></p>
                          </div> -->
                          <div class="contact">
                              <div class="phone-num"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_phone.svg"/><span class="edit-text" id="phone" data-title="Best Contact Phone Number"><?php echo esc_html( get_post_meta( $resume_id, 'phone', true ) ); ?></span> </div>
                              <div class="email"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_email.svg"><span class="edit-text" id="email" data-title="Email"><?php echo esc_html( get_post_meta( $resume_id, 'email', true ) ); ?></span></div>
                          </div>
                      </div>
                  </div>
              </header>
              <div class="first-row">
                  <section class="accomplishments">
                      <h2 class="title">TOP ACCOMPLISHMENTS</h2>
                      <ul class="accomplishment-list">
                          <li>
                          <div class="location-text">
                            <span class="edit-text" id="giyg_wr_location_0" data-type="text" data-title="Location 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_0', true ) ); ?></span>
                          </div>
                          <div class="location-text-content">
                            <span class="edit-text" id="giyg_wr_company_name_0" data-type="textarea" data-title="Accompolishment 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_0', true ) ); ?></span>
                          </div>
                          </li>
                          <li><div class="location-text"><span class="edit-text" id="giyg_wr_location_1" data-type="text" data-title="Location 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_1', true ) ); ?></span></div><div class="location-text-content"><span class="edit-text" id="giyg_wr_company_name_1" data-type="textarea" data-title="Accompolishment 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_1', true ) ); ?></span></div></li>
                          <li><div class="location-text"><span class="edit-text" id="giyg_wr_location_2" data-type="text" data-title="Location 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_2', true ) ); ?></span></div><div class="location-text-content"><span class="edit-text" id="giyg_wr_company_name_2" data-type="textarea" data-title="Accompolishment 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_2', true ) ); ?></span></div></li>
                      </ul>
                  </section>
                  <section class="energises">
                      <h2 class="title">WHAT ENERGIZES ME</h2>
                      <ul class="energises-list">
                          <li><span class="edit-text" id="giyg_wr_activity_name_0" data-title="Activity 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_0', true ) ); ?></span></li>
                          <li><span class="edit-text" id="giyg_wr_activity_name_1" data-title="Activity 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_1', true ) ); ?></span></li>
                          <li><span class="edit-text" id="giyg_wr_activity_name_2" data-title="Activity 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_2', true ) ); ?></span></li>
                      </ul>
                  </section>
              </div>
              <div class="second-row">
                  <section class="top-skills">
                      <h2 class="title">MY TOP SKILLS</h2>
                      <div class="skill-list">
                          <p class="edit-text" id="giyg_wr_skill_name_0" data-title="Professional skill 1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_0', true ) ); ?></p>
                          <div id="giyg_wr_rating_0" class="rating-section">
                              <div class="Checkbox first-chkbox">
                                    <input type="checkbox" <?php if ( 1 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_1" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox second-chkbox">
                                    <input type="checkbox" <?php if ( 2 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_2" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox third-chkbox">
                                    <input type="checkbox" <?php if ( 3 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_3" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fourth-chkbox">
                                    <input type="checkbox" <?php if ( 4 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_4" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fifth-chkbox">
                                    <input type="checkbox" <?php if ( 5 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_5" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox sixth-chkbox">
                                    <input type="checkbox" <?php if ( 6 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_6" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 7 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_7" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 8 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_8" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 9 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_9" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 10 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_10" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <img src="<?php echo GIYG_WR_BASEURL . "img/loading.gif"; ?>" alt"Loading" id="loader" style="display:none;"/>
                          </div>
                          <p class="edit-text" id="giyg_wr_skill_name_1" data-title="Professional skill 2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_1', true ) ); ?></p>
                          <div id="giyg_wr_rating_1" class="rating-section">
                              <div class="Checkbox first-chkbox">
                                    <input type="checkbox" <?php if ( 1 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_1" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox second-chkbox">
                                    <input type="checkbox" <?php if ( 2 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_2" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox third-chkbox">
                                    <input type="checkbox" <?php if ( 3 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_3" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fourth-chkbox">
                                    <input type="checkbox" <?php if ( 4 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_4" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fifth-chkbox">
                                    <input type="checkbox" <?php if ( 5 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_5" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox sixth-chkbox">
                                    <input type="checkbox" <?php if ( 6 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_6" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 7 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_7" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 8 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_8" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 9 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_9" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 10 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_10" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <img src="<?php echo GIYG_WR_BASEURL . "img/loading.gif"; ?>" alt"Loading" id="loader" style="display:none;"/>
                          </div>                        
                          <p class="edit-text" id="giyg_wr_skill_name_2" data-title="Professional skill 3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_2', true ) ); ?></p>
                          <div id="giyg_wr_rating_2" class="rating-section">
                              <div class="Checkbox first-chkbox">
                                    <input type="checkbox" <?php if ( 1 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_1" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox second-chkbox">
                                    <input type="checkbox" <?php if ( 2 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_2" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox third-chkbox">
                                    <input type="checkbox" <?php if ( 3 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_3" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fourth-chkbox">
                                    <input type="checkbox" <?php if ( 4 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_4" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fifth-chkbox">
                                    <input type="checkbox" <?php if ( 5 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_5" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox sixth-chkbox">
                                    <input type="checkbox" <?php if ( 6 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_6" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 7 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_7" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 8 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_8" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 9 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_9" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 10 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_10" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <img src="<?php echo GIYG_WR_BASEURL . "img/loading.gif"; ?>" alt"Loading" id="loader" style="display:none;"/>
                          </div>
                          <p class="edit-text" id="giyg_wr_skill_name_3" data-title="Professional skill 4"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_3', true ) ); ?></p>
                          <div id="giyg_wr_rating_3" class="rating-section">
                              <div class="Checkbox first-chkbox">
                                    <input type="checkbox" <?php if ( 1 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_1" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox second-chkbox">
                                    <input type="checkbox" <?php if ( 2 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_2" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox third-chkbox">
                                    <input type="checkbox" <?php if ( 3 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_3" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fourth-chkbox">
                                    <input type="checkbox" <?php if ( 4 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_4" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fifth-chkbox">
                                    <input type="checkbox" <?php if ( 5 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_5" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox sixth-chkbox">
                                    <input type="checkbox" <?php if ( 6 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_6" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 7 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_7" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 8 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_8" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 9 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_9" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 10 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_10" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <img src="<?php echo GIYG_WR_BASEURL . "img/loading.gif"; ?>" alt"Loading" id="loader" style="display:none;"/>
                          </div>
                          <p class="edit-text" id="giyg_wr_skill_name_4" data-title="Professional skill 5"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_4', true ) ); ?></p>
                          <div id="giyg_wr_rating_4" class="rating-section">
                              <div class="Checkbox first-chkbox">
                                    <input type="checkbox" <?php if ( 1 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_1" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox second-chkbox">
                                    <input type="checkbox" <?php if ( 2 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_2" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox third-chkbox">
                                    <input type="checkbox" <?php if ( 3 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_3" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fourth-chkbox">
                                    <input type="checkbox" <?php if ( 4 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_4" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox fifth-chkbox">
                                    <input type="checkbox" <?php if ( 5 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_5" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox sixth-chkbox">
                                    <input type="checkbox" <?php if ( 6 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_6" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 7 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_7" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 8 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_8" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 9 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_9" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <div class="Checkbox last-four-chkbox">
                                    <input type="checkbox" <?php if ( 10 <= (int) get_post_meta( $resume_id, 'giyg_wr_rating_4', true ) ) { echo "checked"; } ?> id="giyg_wr_rating_ch_10" />
                                    <div class="Checkbox-visible"></div>
                              </div>
                              <img src="<?php echo GIYG_WR_BASEURL . "img/loading.gif"; ?>" alt"Loading" id="loader" style="display:none;"/>
                          </div>
                      </div>
                  </section>
                  <section class="core-values">
                      <h2 class="title">MY CORE VALUES</h2>
                      <ul class="value-list">
                          <?php                            
                            $str = '';
                            for ( $j = 0; $j < 10; $j++ ) {
                                if( !empty( get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true ) ) ) {
                                    $str .= '<li><i class="dot"></i><span class="edit-text" id="giyg_wr_core_value_'.$j.'" data-title="Core Value">';
                                    $str .= get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true );
                                    $str .= '</span></li>';
                                }
                            }                            
                            echo $str;
                          ?>
                      </ul>
                  </section>
              </div>
              <div class="third-row-left">
                  <section class="personality">
                      <h2 class="title">MY PROFESSIONAL PERSONALITY</h2>
                      <div class="personality-wrap">
                      <div class="personality-box">
                        <div class="personality-box-section">
                          <span class="edit-text" id="giyg_wr_professional_personality" data-title="Professional Personality"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality', true ); ?></span>
                          </div>
                          <div class="personality-box-textarea">
                            <small class="edit-text" id="giyg_wr_professional_personality_description"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_description', true ); ?></small>
                          </div>
                      </div>
                      <ul class="personality-list-one">
                          <li id="professional_personality_0" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_0"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_0', true ); ?></span></li>
                          <li id="professional_personality_1" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_1"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_1', true ); ?></span></li>
                          <li id="professional_personality_2" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_2"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_2', true ); ?></span></li>
                      </ul>
                      <ul class="personality-list-two">
                          <li id="professional_personality_3" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_3"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_3', true ); ?></span></li>
                          <li id="professional_personality_4" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_4"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_4', true ); ?></span></li>
                          <li id="professional_personality_5" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_5"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_5', true ); ?></span></li>
                      </ul>
                    </div>
                  </section>
                  <section class="best-fit">
                      <h2 class="title">BEST FIT CORPORATE CULTURE</h2>
                      <ul class="culture-list-left">
                        <li class="border-class-left"></li>
                        <li class="value-top" id="corporate_culture_0"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_0"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_0', true ); ?></span></li>
                        <li id="corporate_culture_1"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_1"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_1', true ); ?></span></li>
                        <li id="corporate_culture_2"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_2"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_2', true ); ?></span></li>                  
                    </ul>
                    <div class="culture-type">
                            <p class="edit-text" id="giyg_wr_corporate_culture" data-title="Corporate Culture"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture', true ); ?> Culture</p>
                            <h5 class="edit-text text-gray" style="display:none" id="giyg_wr_corporate_culture_description"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_description', true ); ?></h5>
                    </div>
                    <ul class="culture-list-right">
                        <li class="border-class"></li>
                        <li class="value-top" id="corporate_culture_3"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_3"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_3', true ); ?></span></li>
                        <li id="corporate_culture_4"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_4"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_4', true ); ?></span></li>
                        <li id="corporate_culture_5"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_5"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_5', true ); ?></span></li>
                    </ul>
                  </section>
              </div>
              <div class="third-row-right">
                  <section class="most-valued">
                      <h2 class="title">MOST VALUED TEAM ATTRIBUTES</h2>
                      <div class="most-values">
                          <?php                            
                            $str = '';
                            for ( $j = 0; $j < 5; $j++ ) { 
                                if( !empty(get_post_meta( $resume_id, 'giyg_wr_team_attribute_'.$j, true )) ) {
                                    $str .= '<div class="each-value"><p class="edit-text" id="giyg_wr_team_attribute_'.$j.'" data-title="Team Attribute">';
                                    $str .= get_post_meta( $resume_id, 'giyg_wr_team_attribute_'.$j, true ); 
                                    $str .= '</p><div class="value-circle"></div></div>';
                                }
                            }                            
                            echo $str;
                          ?>
                      </div>
                  </section>
                  <section class="ideal-company">
                      <h2 class="title">MY IDEAL COMPANY</h2>
                      <ul class="energises-list ideal-list">
                        <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ) ) ) {?>
                            <li><span class="edit-text" id="giyg_wr_ideal_company" data-title="My Ideal Company"><?php echo get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ); ?></span></li>
                        <?php } else {?>
                            <li><span class="edit-text" id="giyg_wr_custom_ideal_company"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_ideal_company', true );?></span></li>
                        <?php }?>
                    </ul>
                  </section>
              </div>
              <section class="hire-me">
                  <h2 class="title">#1 IRRESISTABLE REASON TO HIRE ME</h2>
                  <p class="edit-text" id="giyg_wr_impact_statement" data-type="textarea" data-title="#1 irresponsibility reason to hire me"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_impact_statement', true ) ); ?></p>
              </section>
              <footer class="social-label-only">
                  <div class="social-icons-wrap">
                      <div class="social-icons">
                        <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ))) { ?>
                          <a href="javascript:;"><label class="label-one edit-text" id="giyg_wr_linkedin_url" data-title="LinkedIn URL"> <?php echo get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ); ?> </label></a>
                        <?php } ?> 
                        <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ))) { ?>
                          <a href="javascript:;"><label class="label-two edit-text" id="giyg_wr_twitter_url" data-title="Twitter URL"> <?php echo get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ); ?> </label></a>
                        <?php } ?>
                        <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ))) { ?>
                          <a href="javascript:;"><label class="label-two edit-text" id="giyg_wr_facebook_url" data-title="Facebook URL"> <?php echo get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ); ?> </label></a>
                        <?php } ?>                
                        <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_other_url', true ))) { ?>
                          <a href="javascript:;"><label class="label-three edit-text" id="giyg_wr_other_url" data-title="Other URL(Github, Blog, Personal Website)"> <?php echo get_post_meta( $resume_id, 'giyg_wr_other_url', true ); ?> </label></a>
                        <?php } ?>
                    </div>
                  </div>
              </footer>
          </div>
      </div>
  </div>

  </div>

  </div>
  </div>  

<link rel='stylesheet' id='giyg_wr_google_fonts-css'  href='https://fonts.googleapis.com/css?family=Cairo:300,300i,400,400i,500,500i,700,700i|Lato:300,300i,400,400i,500,500i,700,700i|Oswald:300,300i,400,400i,500,500i,700,700i|PT+Sans:300,300i,400,400i,500,500i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Source+Sans+Pro:300,300i,400,400i,500,500i,700,700i|Titillium+Web:300,400,500,500i,700,700i' type='text/css' media='all' />
  <link rel="stylesheet" id="giyg_wr_theme_traditional_css-css"  href="<?php echo GIYG_WR_BASEURL.'templates/themes/'.$wr_theme.'/style.css'; ?>" type="text/css" />  

  </body>
</html>