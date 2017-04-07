<?php
/**
 * This is the bold theme file.
 *
 * @package WooCommerce Resumes.
 */
$giyg_wr_theme_icon = giyg_wr_session('giyg_wr_theme_icon');
?>
<div class="col-md-12 col-sm-12 final_resume dashboard-common-area">
    <div class="container-wrap" id="watermark">
        <div class="watermark-contnet">
            <?php 
              if( revelance_child_has_woocommerce_subscription('','','active') ) {
              } else { 
                  if($wr_color != 'black') { 
                    if( !is_page('share-infographic') ) {
                  ?>
                    <span>Sample</span>
                  <?php } 
                    }
              } 
            ?>
        </div>
        <div class="container-wrap">
            <!-- Header -->    
            <header>
            <div class="container">
                <div class="profile-image">
                    <div class="profile-shadow <?php if(get_post_thumbnail_id( $resume_id ) == ''){ ?>profile-not-visible<?php }?>">
                        <a href="#" data-toggle="modal" data-target="#change_image_popup" data-backdrop="static" data-keyboard="false"><img src="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $resume_id ) ) ); ?>" alt="No Profile Image"></a>
                    </div>
                </div>

                <?php if( !is_page('share-infographic') ): ?>

                <?php
                  $path = GIYG_WR_BASEPATH . '/image-crop/images/resume_' . $resume_id;
                  $files = array_diff(scandir($path), array('.', '..'));                              
                  foreach ($files as $key => $value) {
                    $sizes = getimagesize( $path . '/' . $value);
                    if(!empty($sizes)) {
                      $image_name = $value;
                      break;
                    }
                  }
                ?>

                <div id="change_image_popup" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <h2>Change Image</h2>
                            <div class="row">                                        
                                <div id="changePic" class="" >
                                  <form id="cropimage" method="post" enctype="multipart/form-data">
                                    <label>To change image, click "Choose File", select image from your desktop. Click "CROP" to adjust image then click "SAVE"</label>
                                    <div class="custom-file-upload">
                                      <!--<label for="file">File: </label>-->
                                      <input type="file" name="photoimg" id="photoimg" />
                                    </div>
                                    <input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
                                    <input type="hidden" name="hdn-x1-axis" id="hdn-x1-axis" value="" />
                                    <input type="hidden" name="hdn-y1-axis" id="hdn-y1-axis" value="" />
                                    <input type="hidden" name="hdn-x2-axis" value="" id="hdn-x2-axis" />
                                    <input type="hidden" name="hdn-y2-axis" value="" id="hdn-y2-axis" />
                                    <input type="hidden" name="hdn-thumb-width" id="hdn-thumb-width" value="" />
                                    <input type="hidden" name="hdn-thumb-height" id="hdn-thumb-height" value="" />
                                    <input type="hidden" name="action" value="" id="action" />
                                    <input type="hidden" name="image_name" value="" id="image_name" />                                                        
                                    <div id='preview-avatar-profile'>
                                        <?php if( file_exists(GIYG_WR_BASEPATH . 'image-crop/images/resume_' . $resume_id . '/' . $image_name) ) { ?>
                                            <img id='photo' file-name="<?php echo wp_basename( GIYG_WR_BASEURL . '/image-crop/images/resume_' . $resume_id . '/' . $image_name ) ?>" class='' src="<?php echo GIYG_WR_BASEURL . '/image-crop/images/resume_' . $resume_id . '/' . $image_name; ?>" class='preview'/>
                                        <?php } else { ?>
                                            No images found. Please upload a new one.
                                        <?php } ?>
                                    </div>
                                    <div id="thumbs" style="padding:5px; width:600p"></div>
                                  </form>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
                                    <button type="button" id="btn-open-crop-area" class="btn btn-primary">Crop</button>
                                    <button type="button" id="btn-crop" class="btn btn-primary">Save</button>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>

                <?php endif; ?>

                <div class="profile-detail">
                    <h1><span class="edit-text" id="first_name" data-title="First Name" data-tpl="<input type='text' maxlength='20'>"><?php echo esc_html( get_post_meta( $resume_id, 'first_name', true ) ); ?></span> <span class="edit-text" id="last_name" data-title="Last Name" data-tpl="<input type='text' maxlength='20'>"><?php echo esc_html( get_post_meta( $resume_id, 'last_name', true ) ); ?></span></h1>
                    <h3><span class="edit-text" id="giyg_wr_category_0" data-title="Select Dream Job 1" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_0', true ); ?></span><span class="comma">,</span> 
                    <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_category_1', true ) ) ) {?>
                        <span class="edit-text" id="giyg_wr_category_1" data-title="Select Dream Job 2" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_1', true ); ?></span>
                    <?php } else { ?>
                        <span class="edit-text" id="giyg_wr_custom_category" data-title="Select Dream Job 2" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_category', true )?></span>
                    <?php } ?>
                    </h3>
                    <div class="profile-catagory phone">
                        <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_phone.svg" alt="Phone"></label>
                        <div class="content-edit">
                            <a class="edit-text edit-contact" id="phone" data-title="Best Contact Phone Number" data-tpl="<input type='text' maxlength='16'>"><?php echo esc_html( get_post_meta( $resume_id, 'phone', true ) ); ?></a>    
                        </div>
                    </div>
                    <div class="profile-catagory mail">
                        <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_email.svg" alt="Email"></label>
                        <div class="content-edit">
                            <a class="edit-text edit-contact" id="email" data-title="Email" data-tpl="<input type='text' maxlength='50'>"><?php echo esc_html( get_post_meta( $resume_id, 'email', true ) ); ?></a>  
                        </div>
                    </div>
                    <div class="header-social-link">
                        <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true )) ) { ?>
                        <div class="social-list">
                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_linkedin.svg" alt="Linkedin">
                            <a class="edit-text" id="giyg_wr_linkedin_url" data-title="LinkedIn URL" data-tpl="<input type='text' maxlength='50'>">
                                <label><?php echo get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ); ?></label>
                            </a>
                        </div>
                        <?php } ?>
                        <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_twitter_url', true )) ) { ?>
                        <div class="social-list">
                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_twitter.svg" alt="Twitter">
                            <a class="edit-text" id="giyg_wr_twitter_url" data-title="Twitter URL" data-tpl="<input type='text' maxlength='50'>">
                            <label><?php echo get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ); ?></label></a>
                        </div>
                        <?php } ?>
                        <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_facebook_url', true )) ) { ?>
                        <div class="social-list">
                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_facebook.svg" alt="Facebook">
                            <a class="edit-text" id="giyg_wr_facebook_url" data-title="Facebook URL" data-tpl="<input type='text' maxlength='50'>">
                            <label><?php echo get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ); ?></label></a>
                        </div>
                        <?php } ?>
                        <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_other_url', true )) ) { ?>
                        <div class="social-list">
                            <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_weblink.svg" alt="Weblink">
                            <a class="edit-text" id="giyg_wr_other_url" data-title="Other URL(Github, Blog, Personal Website)" data-tpl="<input type='text' maxlength='50'>">
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
                            <h2 class="head-text edit-text" id="giyg_wr_title2" data-title="Enter Resume Title" data-tpl="<input type='text' maxlength='50'>"><?php //echo esc_html( get_post_meta( $resume_id, 'giyg_wr_title2', true ) ); ?></h2>
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
                                <div class="summary-icon">                                    
                                    <div class="custom-icon" id="custom-icon1">
                                        <img src="<?php echo $giyg_wr_theme_icon['bold_custom-icon1']; ?>" alt="Medal">
                                        <div class="custom-icon-popup">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <ul>
                                                <?php                                                 
                                                    $icon_files = glob($image_icon_directory);             
                                                    foreach($icon_files as $files){
                                                        $pathinfo = pathinfo($files);
                                                    ?>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <img src="<?php echo $image_icon_url . basename($files); ?>" alt="<?php echo $pathinfo['filename']; ?>">
                                                        </a>
                                                    </li>
                                                    <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
                                                <span class="edit-text" id="giyg_wr_location_0" data-type="text" data-title="Location 1" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_0', true ) ); ?></span> 
                                                </div>
                                                <span class="edit-text" id="giyg_wr_company_name_0" data-type="textarea" data-title="Accompolishment 1" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_0', true ) ); ?></span> 
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
                                                <span class="edit-text" id="giyg_wr_location_1" data-type="text" data-title="Location 2" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_1', true ) ); ?></span> 
                                                </div>
                                                <span class="edit-text" id="giyg_wr_company_name_1" data-type="textarea" data-title="Accompolishment 2" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_1', true ) ); ?></span> 
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
                                                <span class="edit-text" id="giyg_wr_location_2" data-type="text" data-title="Location 3" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_2', true ) ); ?></span> 
                                                </div>
                                                <span class="edit-text" id="giyg_wr_company_name_2" data-type="textarea" data-title="Accompolishment 3" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_2', true ) ); ?></span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- cloud section -->
                        <div class="cloud-section">
                            <ul class="cloud-circle">
                                <li class="circle-list scale-order">
                                <div class="custom-icon" id="custom-icon2">
                                    <img src="<?php echo $giyg_wr_theme_icon['bold_custom-icon2']; ?>">
                                    <div class="custom-icon-popup">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <ul>                                            
                                            <?php                                                 
                                                $icon_files = glob($image_icon_directory);             
                                                foreach($icon_files as $files){
                                                    $pathinfo = pathinfo($files);
                                                ?>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img src="<?php echo $image_icon_url . basename($files); ?>" alt="<?php echo $pathinfo['filename']; ?>">
                                                    </a>
                                                </li>
                                                <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                </li>
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
                                            $str .= '<div class="cloud-core-content core-values-block-'.$core_val_num[$k].'"><p class="core-values-'.$core_val_num[$k].' edit-text" id="giyg_wr_core_value_'.$j.'" data-title="Core Value" data-tpl="<input type=\'text\' maxlength=\'22\'>">';
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
                                            <h6 id="professional_personality_0" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_0" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_0', true ); ?></span></h6>
                                        </div>
                                    </div>
                                    <div class="personal-content-inner personal-content-gray personal-gray-one">
                                        <div class="content-inner-cell content-inner-one content-inner-two">
                                           <h6 id="professional_personality_1" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_1" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_1', true ); ?></span></h6>
                                        </div>
                                    </div>
                                    <div class="personal-content-inner personal-content-gray personal-gray-one personal-gray-final">
                                        <div class="content-inner-cell content-inner-one content-inner-six">
                                            <h6 id="professional_personality_2" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_2" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_2', true ); ?></span></h6>
                                        </div>
                                    </div>
                                    <!-- <div class="personal-content-inner personal-gray-two">
                                        <div class="content-inner-cell content-inner-two">
                                            <h6 id="professional_personality_1" class="professional_personality"><span class="professional_personality_text" ><?php echo esc_html( $professional_personality_listings[1] ); ?></span></h6>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="personal-content-common personal-content-middle">
                                    <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon-think.png" width="76px" height="83px" alt="Chat">
                                    <h4 class="content-middle-head edit-text" id="giyg_wr_professional_personality" data-title="Professional Personality" data-tpl="<input type='text' maxlength='13'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality', true ); ?></h4>
                                    <p class="text-gray"><span class="edit-text" id="giyg_wr_professional_personality_description" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_description', true ); ?></span></p>                      
                                </div>
                                <div class="personal-content-common">
                                    <div class="personal-content-inner personal-content-gray personal-gray-three">
                                        <div class="content-inner-cell content-inner-three">
                                            <h6 id="professional_personality_3" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_3" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_3', true ); ?></span></h6>
                                        </div>
                                    </div>
                                    <div class="personal-content-inner personal-content-gray personal-gray-four">
                                        <div class="content-inner-cell content-inner-four">
                                            <h6 id="professional_personality_4" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_4" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_4', true ); ?></span></h6>
                                        </div>
                                    </div>
                                    <div class="personal-content-inner personal-content-gray personal-gray-five">
                                        <div class="content-inner-cell content-inner-five">
                                            <h6 id="professional_personality_5" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_5" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_5', true ); ?></span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./personal section -->
                    </div>
                    <!-- summary-section-skills -->
                    <div class="summary-section summary-section-skills">
                        <div class="summary-wrap">
                            <div class="summary-icon">
                                <div class="custom-icon" id="custom-icon3">
                                    <img src="<?php echo $giyg_wr_theme_icon['bold_custom-icon3']; ?>" alt="Medal" width="30px" height="30px">
                                    <div class="custom-icon-popup">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <ul>                                            
                                            <?php                                                 
                                                $icon_files = glob($image_icon_directory);             
                                                foreach($icon_files as $files){
                                                    $pathinfo = pathinfo($files);
                                                ?>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img src="<?php echo $image_icon_url . basename($files); ?>" alt="<?php echo $pathinfo['filename']; ?>">
                                                    </a>
                                                </li>
                                                <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                </div>
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
                                            <h3 class="edit-text" id="giyg_wr_skill_name_0" data-title="Professional skill 1" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_0', true ) ); ?> </h3>
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
                                            <h3 class="edit-text" id="giyg_wr_skill_name_1" data-title="Professional skill 2" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_1', true ) ); ?> </h3>
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
                                            <h3 class="edit-text" id="giyg_wr_skill_name_2" data-title="Professional skill 3" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_2', true ) ); ?> </h3>
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
                                            <h3 class="edit-text" id="giyg_wr_skill_name_3" data-title="Professional skill 4" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_3', true ) ); ?> </h3>
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
                                            <h3 class="edit-text" id="giyg_wr_skill_name_4" data-title="Professional skill 5" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_4', true ) ); ?> </h3>
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
                                <div class="summary-icon">
                                    <div class="custom-icon" id="custom-icon4">
                                        <img src="<?php echo $giyg_wr_theme_icon['bold_custom-icon4']; ?>" alt="Medal">
                                        <div class="custom-icon-popup">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <ul>                                            
                                                <?php                                                 
                                                    $icon_files = glob($image_icon_directory);             
                                                    foreach($icon_files as $files){
                                                        $pathinfo = pathinfo($files);
                                                    ?>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <img src="<?php echo $image_icon_url . basename($files); ?>" alt="<?php echo $pathinfo['filename']; ?>">
                                                        </a>
                                                    </li>
                                                    <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-title">WHAT ENERGIZES ME</div>
                            </div>
                            <!-- energy-box -->
                            <div class="summary-content">
                                <div class="energy-box">
                                    <div class="energy-inner-box">
                                        <div class="inner-box-content"><p class="edit-text" id="giyg_wr_activity_name_0" data-title="Activity 1" data-tpl="<textarea maxlength='48'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_0', true ) ); ?></p></div>
                                    </div>
                                    <div class="energy-handle"></div>
                                </div>
                                <div class="energy-box energy-box-two">
                                    <div class="energy-inner-box">
                                        <div class="inner-box-content"><p class="edit-text" id="giyg_wr_activity_name_1" data-title="Activity 2" data-tpl="<textarea maxlength='48'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_1', true ) ); ?></p></p></div>
                                    </div>
                                    <div class="energy-handle"></div>
                                </div>
                                <div class="energy-box energy-box-three">
                                    <div class="energy-inner-box">
                                        <div class="inner-box-content"><p class="edit-text" id="giyg_wr_activity_name_2" data-title="Activity 3" data-tpl="<textarea maxlength='48'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_2', true ) ); ?></p></div>
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
                            <p class="edit-text" id="giyg_wr_impact_statement" data-type="textarea" data-title="#1 Irresponsibility reason to hire me" data-tpl="<textarea maxlength='200'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_impact_statement', true ) ); ?></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
