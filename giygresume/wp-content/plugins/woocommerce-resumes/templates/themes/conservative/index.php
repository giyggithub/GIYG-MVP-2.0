<?php
/**
 * This is the conservative theme file.
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
        <div class="container">
            <section class="header-section">
                <!-- top-accomplish-wrap -->
                <div class="top-accomplish-wrap">
                    <div class="star-border">
                        <h2><span class="stars"></span>TOP ACCOMPLISHMENTS<span class="stars right"></span></h2>
                        <span class="star-middle"></span>
                    </div>
                    <div class="top-box">
                        <div class="top-left light-bg">
                            <div class="custom-icon" id="custom-icon1-1">
                            <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon1-1']; ?>" width="32px" alt="Batch">
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
                        <div class="top-right light-color">
                            <div class="location-wrap">
                                <span class="edit-text location" id="giyg_wr_location_0" data-type="text" data-title="Location 1" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_0', true ) ); ?></span> 
                            </div>
                            <div class="location-content-wrap">
                                <span class="edit-text location-text" id="giyg_wr_company_name_0" data-type="textarea" data-title="Accompolishment 1" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_0', true ) ); ?></span> 
                            </div>
                        </div>
                    </div>
                    <div class="top-box">
                        <div class="top-left dark-bg">
                            <div class="custom-icon" id="custom-icon1-2">
                            <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon1-2']; ?>" width="32px" alt="Batch">
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
                        <div class="top-right dark-color">
                            <div class="location-wrap">
                                <span class="edit-text location" id="giyg_wr_location_1" data-type="text" data-title="Location 2" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_1', true ) ); ?></span>
                            </div>
                            <div class="location-content-wrap">
                                <span class="edit-text location-text" id="giyg_wr_company_name_1" data-type="textarea" data-title="Accompolishment 2" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_1', true ) ); ?></span> 
                            </div>
                        </div>
                    </div>
                    <div class="top-box">
                        <div class="top-left darker-bg">
                            <div class="custom-icon" id="custom-icon1-3">
                            <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon1-3']; ?>" width="32px" alt="Batch">
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
                        <div class="top-right darker-color">
                            <div class="location-wrap">
                                <span class="edit-text location" id="giyg_wr_location_2" data-type="text" data-title="Location 3" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_2', true ) ); ?></span>
                            </div>
                            <div class="location-content-wrap">
                                <span class="edit-text location-text" id="giyg_wr_company_name_2" data-type="textarea" data-title="Accompolishment 3" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_2', true ) ); ?></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./top-accomplish-wrap -->
                <!-- Profile -->
                <div class="profile-wrap light-bg">
                    <h1 class="profile-name">
                        <div class="profile-first-letter">
                        <span class="edit-text" id="first_name" data-title="First Name" data-tpl="<input type='text' maxlength='20'>"><?php echo esc_html( get_post_meta( $resume_id, 'first_name', true ) ); ?></span>
                        </div>
                        <div class="profile-last-letter">
                        <span class="edit-text" id="last_name" data-title="Last Name" data-tpl="<input type='text' maxlength='20'>"><?php echo esc_html( get_post_meta( $resume_id, 'last_name', true ) ); ?></span>
                        </div>
                    </h1>
                    <div class="star-border">
                        <span class="star-middle white-bg"></span>
                    </div>
                    <div class="dream-job">
                        <p class="edit-text" id="giyg_wr_category_0" data-title="Select Dream Job 1" data-tpl="<textarea maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_0', true ); ?></p>
                        <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_category_1', true ) ) ) { ?>
                            <p class="edit-text" id="giyg_wr_category_1" data-title="Select Dream Job 2" data-tpl="<textarea maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_1', true ); ?></p>
                        <?php } else { ?>
                            <p class="edit-text" id="giyg_wr_custom_category" data-title="Select Dream Job 2" data-tpl="<textarea maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_category', true )?></p>
                        <?php } ?>
                    </div>
                    <div class="basic-info">
                        <ul>
                            <li class="phone-contact"><img src="<?php echo esc_url( $image_directory ); ?>icon-phone.svg" class="img-phone" align="Phone"> <span class="edit-text" id="phone" data-title="Best Contact Phone Number" data-tpl="<input type='text' maxlength='16'>"><?php echo esc_html( get_post_meta( $resume_id, 'phone', true ) ); ?></span> </li>
                            <li class="mail-contact"><img src="<?php echo esc_url( $image_directory ); ?>icon-mail.svg" class="img-mail" align="Mail"> <span class="edit-text" id="email" data-title="Email" data-tpl="<input type='text' maxlength='50'>"><?php echo esc_html( get_post_meta( $resume_id, 'email', true ) ); ?></span> </li>
                        </ul>
                        <!-- <div class="tagline-block">
                        <h3 class="edit-text tagline" id="giyg_wr_title2" data-title="Enter Resume Title" data-tpl="<input type='text' maxlength='50'>"><?php //echo esc_html( get_post_meta( $resume_id, 'giyg_wr_title2', true ) ); ?></h3>
                        </div> -->
                    </div>

                    <div class="profile-image">
                        <div class="profile-pic white-bg <?php if(get_post_thumbnail_id( $resume_id ) == ''){ ?>profile-not-visible<?php }?>">
                            <a href="#" data-toggle="modal" data-target="#change_image_popup" data-backdrop="static" data-keyboard="false"><img src="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $resume_id ) ) ); ?>" alt="Profile"></a>
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
                            <div class="left-skill-icon">                                
                                <div class="custom-icon" id="custom-icon2-1">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-1']; ?>" width="16px" height="16px" alt="Skills">
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
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_0" data-title="Professional skill 1" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_0', true ) ); ?> </p>
                            </div>
                        </div>
                        <div class="skill-ranger skill-ranger-one">
                            <div class="slider" id="giyg_wr_rating_0"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_rating_0', true ) ); ?></div>
                        </div>
                    </div>
                    <div class="skill-wrap  skill-two">
                        <div class="skill-box">
                            <div class="left-skill-icon">                                
                                <div class="custom-icon" id="custom-icon2-2">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-2']; ?>" width="16px" height="16px" alt="Skills">
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
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_1" data-title="Professional skill 2" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_1', true ) ); ?> </p>
                            </div>
                        </div>
                        <div class="skill-ranger skill-ranger-two">
                            <div class="slider" id="giyg_wr_rating_1"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_rating_1', true ) ); ?></div>
                        </div>
                    </div>
                    <div class="skill-wrap skill-three">
                        <div class="skill-box">
                            <div class="left-skill-icon">                                
                                <div class="custom-icon" id="custom-icon2-3">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-3']; ?>" width="16px" height="16px" alt="Skills">
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
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_2" data-title="Professional skill 3" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_2', true ) ); ?> </p>
                            </div>
                        </div>
                        <div class="skill-ranger skill-ranger-three">
                            <div class="slider" id="giyg_wr_rating_2"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_rating_2', true ) ); ?></div>
                        </div>
                    </div>
                    <div class="skill-wrap skill-four">
                        <div class="skill-box">
                            <div class="left-skill-icon">
                                <div class="custom-icon" id="custom-icon2-4">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-4']; ?>" width="16px" height="16px" alt="Skills">
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
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_3" data-title="Professional skill 4" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_3', true ) ); ?> </p>
                            </div>
                        </div>
                        <div class="skill-ranger skill-ranger-one">
                            <div class="slider" id="giyg_wr_rating_3"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_rating_3', true ) ); ?></div>
                        </div>
                    </div>
                    <div class="skill-wrap skill-two">
                        <div class="skill-box">
                            <div class="left-skill-icon">
                                <div class="custom-icon" id="custom-icon2-5">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon2-5']; ?>" width="16px" height="16px" alt="Skills">
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
                            <div class="skill-name">
                                <p class="edit-text" id="giyg_wr_skill_name_4" data-title="Professional skill 5" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_4', true ) ); ?> </p>
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
                                
                                <div class="custom-icon" id="custom-icon3-1">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon3-1']; ?>" width="26px" height="36px" alt="Men">
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
                            <div class="energy-circle-top-outer">
                                <div class="energy-circle-top-inner">1
                                </div>
                            </div>
                        </div>
                        <div class="energy-one-title">
                            <h4 class="edit-text" id="giyg_wr_activity_name_0" data-title="Activity 1" data-tpl="<textarea maxlength='48'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_0', true ) ); ?></h4>
                        </div>
                    </div>
                    <div class="energy_one energy_two">
                        <div class="energy-circle">
                            <div class="energy-circle-inner">                                
                                <div class="custom-icon" id="custom-icon3-2">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon3-2']; ?>" width="26px" height="36px" alt="Men">
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
                            <div class="energy-circle-top-outer">
                                <div class="energy-circle-top-inner">2
                                </div>
                            </div>
                        </div>
                        <div class="energy-one-title">
                            <h4 class="edit-text" id="giyg_wr_activity_name_1" data-title="Activity 2" data-tpl="<textarea maxlength='48'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_1', true ) ); ?></h4>
                        </div>
                    </div>
                    <div class="energy_one energy_sinlge energy_three">
                        <div class="energy-circle">
                            <div class="energy-circle-inner">                                
                                <div class="custom-icon" id="custom-icon3-3">
                                <img src="<?php echo $giyg_wr_theme_icon['conservative_custom-icon3-3']; ?>" width="26px" height="36px" alt="Men">
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
                            <div class="energy-circle-top-outer">
                                <div class="energy-circle-top-inner">3
                                </div>
                            </div>
                        </div>
                        <div class="energy-one-title">
                            <h4 class="edit-text" id="giyg_wr_activity_name_2" data-title="Activity 3" data-tpl="<textarea maxlength='48'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_2', true ) ); ?></h4>
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
                                    <h5 class="edit-text" id="giyg_wr_professional_personality" data-title="Professional Personality" data-tpl="<input type='text' maxlength='13'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality', true ); ?></h5>
                                    </div>
                                    <p class="text-gray"><span class="edit-text" id="giyg_wr_professional_personality_description" data-tpl="<textarea  maxlength='50'>"><?php echo  get_post_meta( $resume_id, 'giyg_wr_professional_personality_description', true ); ?></span></p>
                                </li>

                                <li id="professional_personality_0" class="professional_personality center-circle circle-two circle-bottom"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_0" data-tpl="<input type='text' maxlength='23'>"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_0', true ); ?></span></span> <i class="corner-dot"></i></span></li>

                                <li id="professional_personality_1" class="professional_personality center-circle circle-three circle-top"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_1" data-tpl="<input type='text' maxlength='23'>"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_1', true ); ?></span></span> <i class="corner-dot"></i></span></li>

                                <li id="professional_personality_2" class="professional_personality center-circle circle-four circle-bottom"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_2" data-tpl="<input type='text' maxlength='23'>"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_2', true ); ?></span></span> <i class="corner-dot"></i></span></li>

                                <li id="professional_personality_3" class="professional_personality center-circle circle-five circle-top"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_3" data-tpl="<input type='text' maxlength='23'>"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_3', true ); ?></span></span> <i class="corner-dot"></i></span></li>

                                <li id="professional_personality_4" class="professional_personality center-circle circle-six  circle-bottom"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_4" data-tpl="<input type='text' maxlength='23'>"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_4', true ); ?></span></span> <i class="corner-dot"></i></span></li>

                                <li id="professional_personality_5" class="professional_personality center-circle circle-five circle-top"><span class="inner-border"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_5" data-tpl="<input type='text' maxlength='23'>"><span class="cc-vertical-bottom"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_5', true ); ?></span></span> <i class="corner-dot"></i></span><span class="dot"></span></li>

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
                                <h5 class="edit-text" id="giyg_wr_ideal_company" data-title="My Ideal Company" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ); ?></h5>
                                </div>
                            <?php } else {?>
                                <div class="ideal-contet-sec">
                                <h5 class="edit-text" id="giyg_wr_custom_ideal_company" data-title="My Ideal Company" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_ideal_company', true );?></h5>
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
                                                    $str .= '<div class="'.$core_val_num[$k].' value'.$m.'"><div class="dark-ball-cell"><span class="edit-text" id="giyg_wr_core_value_'.$j.'" data-title="Core Value" data-tpl="<input type=\'text\' maxlength=\'22\'>">';
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
                                        
                                        $strs .= '<div class="'.$core_val_nums[$b].' value'.$m.'"><div class="dark-ball-cell"><span class="edit-text" id="giyg_wr_core_value_'.$j.'" data-title="Core Value" data-tpl="<input type=\'text\' maxlength=\'22\'>">';
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
                                        $team_attribute_name_html .= '<li><span class="tick"><img src="'.esc_url( $image__with_color_directory ).'icon_tick-mark.svg" /></span><span class="edit-text" id="giyg_wr_team_attribute_'.$j.'" data-title="Team Attribute" data-tpl="<input type=\'text\' maxlength=\'38\'>">';
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
                                <h3 class="edit-text" id="giyg_wr_corporate_culture" data-title="Best Fit Corporate Culture" data-tpl="<input type='text' maxlength='22'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture', true ); ?> Culture</h3>
                            </div>
                            <h5 class="edit-text text-gray" style="display:none" id="giyg_wr_corporate_culture_description" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_description', true ); ?></h5>
                            <div class="attribute-list">
                                <ul class="corporate_culture_listings">
                                <?php
                                    $str = '';
                                    for ( $i = 0; $i < 6; $i++ ) {
                                        $str .= '<li id="corporate_culture_'.$i.'" class="corporate_culture"><span class="tick"><img src="'.esc_url( $image__with_color_directory ).'icon_tick-mark-gray.svg"></span><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_'.$i.'" data-tpl="<input type=\'text\' maxlength=\'25\'>">'.get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_'.$i, true ).'</span></li>';
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
                    <p class="edit-text" id="giyg_wr_impact_statement" data-type="textarea" data-title="#1 Irresponsibility reason to hire me" data-tpl="<textarea maxlength='200'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_impact_statement', true ) ); ?></p>
                </div>
                <!-- ./reason-section -->
            </section>
            <!-- Footer -->
            <footer class="conservative-footer">
                <div class="footer-inner-wrap">
                <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ))) { ?>
                    <a href="javascript:;"><img src="<?php echo esc_url( $image_directory ); ?>icon_linkedin.svg" class="social-space">
                    <label class="edit-text" id="giyg_wr_linkedin_url" data-title="LinkedIn URL" data-tpl="<input type='text' maxlength='50'>"> <?php echo get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ); ?> </label></a>
                <?php } ?> 
                <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ))) { ?>
                    <a href="javascript:;"><img src="<?php echo esc_url( $image_directory ); ?>icon_twitter.svg">
                    <label class="edit-text" id="giyg_wr_twitter_url" data-title="Twitter URL" data-tpl="<input type='text' maxlength='50'>"> <?php echo get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ); ?> </label> </a>
                <?php } ?>
                <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ))) { ?>
                    <a href="javascript:;"><img src="<?php echo esc_url( $image_directory ); ?>icon_facebook.svg">
                    <label class="edit-text" id="giyg_wr_facebook_url" data-title="Facebook URL" data-tpl="<input type='text' maxlength='50'>"> <?php echo get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ); ?> </label></a> 
                <?php } ?>                
                <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_other_url', true ))) { ?>
                    <a href="javascript:;"><img src="<?php echo esc_url( $image_directory ); ?>icon_weblink.svg">
                    <label class="edit-text" id="giyg_wr_other_url" data-title="Other URL(Github, Blog, Personal Website)" data-tpl="<input type='text' maxlength='50'>"> <?php echo get_post_meta( $resume_id, 'giyg_wr_other_url', true ); ?> </label></a>
                <?php } ?>                      
                </div>          
            </footer>
            <!-- ./Footer -->
        </div>
    </div>
</div>