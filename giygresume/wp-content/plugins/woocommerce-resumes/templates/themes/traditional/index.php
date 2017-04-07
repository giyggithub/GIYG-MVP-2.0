<?php
/**
 * This is the traditional theme file.
 *
 * @package WooCommerce Resumes.
 */

?>
<div class="final_resume dashboard-common-area">
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
            <header>
                <div class="header-info">
                    <div class="profile-image">
                        <div class="profile-img-wrap profile-img-border <?php if(get_post_thumbnail_id( $resume_id ) == ''){ ?>profile-not-visible<?php }?>">
                            <a href="#" data-toggle="modal" data-target="#change_image_popup" data-backdrop="static" data-keyboard="false"><img src="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( $resume_id ) ) ); ?>" alt="Profile" /></a>                                                      
                        </div>
                    </div>

                    <?php if( !is_page('share-infographic') ): ?>

                    <!-- Image Crop -->
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
                                            <img id='photo' file-name="<?php echo wp_basename( GIYG_WR_BASEURL . 'image-crop/images/resume_' . $resume_id . '/' . $image_name ) ?>" class='' src="<?php echo GIYG_WR_BASEURL . 'image-crop/images/resume_' . $resume_id . '/' . $image_name; ?>" class='preview'/>
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
                    <!-- Image Crop -->

                    <?php endif; ?>

                    <div class="profile-details">
                        <h1>
                          <div class="first-name-text">
                          <span class="edit-text" id="first_name" data-title="First Name" data-tpl="<input type='text' maxlength='20'>"><?php echo esc_html( get_post_meta( $resume_id, 'first_name', true ) ); ?></span>
                          </div>
                          <div class="lasts-name-text">
                            <span class="edit-text" id="last_name" data-title="Last Name" data-tpl="<input type='text' maxlength='20'>"><?php echo esc_html( get_post_meta( $resume_id, 'last_name', true ) ); ?></span>
                          </div>
                        </h1>
                        <div class="text-designation">
                        <p class="designation-text">
                          <span class="edit-text" id="giyg_wr_category_0" data-title="Select Dream Job 1" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_0', true ); ?></span><span class="comma">,</span> 
                          <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_category_1', true ) ) ) { ?>
                              <span class="edit-text" id="giyg_wr_category_1" data-title="Select Dream Job 2" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_1', true ); ?></span>
                          <!-- </div> -->
                          <?php } else {?>
                              <span class="edit-text" id="giyg_wr_custom_category" data-title="Select Dream Job 2" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_category', true ); ?></span>
                          <?php } ?>
                        </p>                        
                        <!-- <div class="who-am-section">
                          <p class="edit-text tagline" id="giyg_wr_title2" data-title="Enter Resume Title" data-tpl="<input type='text' maxlength='50'>"><?php //echo esc_html( get_post_meta( $resume_id, 'giyg_wr_title2', true ) ); ?></p>
                        </div> -->
                        <div class="contact">
                            <div class="phone-num"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_phone.svg"/><span class="edit-text" id="phone" data-title="Best Contact Phone Number" data-tpl="<input type='text' maxlength='16'>"><?php echo esc_html( get_post_meta( $resume_id, 'phone', true ) ); ?></span> </div>
                            <div class="email"><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_email.svg"><span class="edit-text" id="email" data-title="Email" data-tpl="<input type='text' maxlength='50'>"><?php echo esc_html( get_post_meta( $resume_id, 'email', true ) ); ?></span></div>
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
                          <span class="edit-text" id="giyg_wr_location_0" data-type="text" data-title="Location 1" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_0', true ) ); ?></span>
                        </div>
                        <div class="location-text-content">
                          <span class="edit-text" id="giyg_wr_company_name_0" data-type="textarea" data-title="Accompolishment 1" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_0', true ) ); ?></span>
                        </div>
                        </li>
                        <li><div class="location-text"><span class="edit-text" id="giyg_wr_location_1" data-type="text" data-title="Location 2" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_1', true ) ); ?></span></div><div class="location-text-content"><span class="edit-text" id="giyg_wr_company_name_1" data-type="textarea" data-title="Accompolishment 2" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_1', true ) ); ?></span></div></li>
                        <li><div class="location-text"><span class="edit-text" id="giyg_wr_location_2" data-type="text" data-title="Location 3" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_2', true ) ); ?></span></div><div class="location-text-content"><span class="edit-text" id="giyg_wr_company_name_2" data-type="textarea" data-title="Accompolishment 3" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_2', true ) ); ?></span></div></li>
                    </ul>
                </section>
                <section class="energises">
                    <h2 class="title">WHAT ENERGIZES ME</h2>
                    <ul class="energises-list">
                        <li><span class="edit-text" id="giyg_wr_activity_name_0" data-title="Activity 1" data-tpl="<input type='text' maxlength='48'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_0', true ) ); ?></span></li>
                        <li><span class="edit-text" id="giyg_wr_activity_name_1" data-title="Activity 2" data-tpl="<input type='text' maxlength='48'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_1', true ) ); ?></span></li>
                        <li><span class="edit-text" id="giyg_wr_activity_name_2" data-title="Activity 3" data-tpl="<input type='text' maxlength='48'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_2', true ) ); ?></span></li>
                    </ul>
                </section>
            </div>
            <div class="second-row">
                <section class="top-skills">
                    <h2 class="title">MY TOP SKILLS</h2>
                    <div class="skill-list">
                        <p class="edit-text" id="giyg_wr_skill_name_0" data-title="Professional skill 1"data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_0', true ) ); ?></p>
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
                        <p class="edit-text" id="giyg_wr_skill_name_1" data-title="Professional skill 2" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_1', true ) ); ?></p>
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
                        <p class="edit-text" id="giyg_wr_skill_name_2" data-title="Professional skill 3" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_2', true ) ); ?></p>
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
                        <p class="edit-text" id="giyg_wr_skill_name_3" data-title="Professional skill 4" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_3', true ) ); ?></p>
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
                        <p class="edit-text" id="giyg_wr_skill_name_4" data-title="Professional skill 5" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_4', true ) ); ?></p>
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
                                    $str .= '<li><i class="dot"></i><span class="edit-text" id="giyg_wr_core_value_'.$j.'" data-title="Core Value" data-tpl="<input type=\'text\' maxlength=\'22\'>">';
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
                          <span class="edit-text" id="giyg_wr_professional_personality" data-title="Professional Personality" data-tpl="<input type='text' maxlength='13'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality', true ); ?></span>
                          </div>
                          <div class="personality-box-textarea">
                          <small class="edit-text" id="giyg_wr_professional_personality_description" data-tpl="<textarea maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_description', true ); ?></small>
                          </div>
                      </div>
                      <ul class="personality-list-one">
                          <li id="professional_personality_0" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_0" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_0', true ); ?></span></li>
                          <li id="professional_personality_1" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_1" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_1', true ); ?></span></li>
                          <li id="professional_personality_2" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_2" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_2', true ); ?></span></li>
                      </ul>
                      <ul class="personality-list-two">
                          <li id="professional_personality_3" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_3" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_3', true ); ?></span></li>
                          <li id="professional_personality_4" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_4" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_4', true ); ?></span></li>
                          <li id="professional_personality_5" class="professional_personality"><span class="edit-text professional_personality_text" id="giyg_wr_professional_personality_attr_5" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_5', true ); ?></span></li>
                      </ul>
                    </div>
                </section>
                <section class="best-fit">
                    <h2 class="title">BEST FIT CORPORATE CULTURE</h2>
                    <ul class="culture-list-left">
                        <li class="border-class-left"></li>
                        <li class="value-top" id="corporate_culture_0"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_0" data-tpl="<input type='text' maxlength='25'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_0', true ); ?></span></li>
                        <li id="corporate_culture_1"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_1" data-tpl="<input type='text' maxlength='25'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_1', true ); ?></span></li>
                        <li id="corporate_culture_2"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_2" data-tpl="<input type='text' maxlength='25'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_2', true ); ?></span></li>                  
                    </ul>
                    <div class="culture-type">
                            <p class="edit-text" id="giyg_wr_corporate_culture" data-title="Corporate Culture" data-tpl="<input type='text' maxlength='22'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture', true ); ?> Culture</p>
                            <h5 class="edit-text text-gray" style="display:none" id="giyg_wr_corporate_culture_description" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_description', true ); ?></h5>
                    </div>
                    <ul class="culture-list-right">
                        <li class="border-class"></li>
                        <li class="value-top" id="corporate_culture_3"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_3" data-tpl="<input type='text' maxlength='25'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_3', true ); ?></span></li>
                        <li id="corporate_culture_4"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_4" data-tpl="<input type='text' maxlength='25'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_4', true ); ?></span></li>
                        <li id="corporate_culture_5"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_5" data-tpl="<input type='text' maxlength='25'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_5', true ); ?></span></li>
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
                                    $str .= '<div class="each-value"><p class="edit-text" id="giyg_wr_team_attribute_'.$j.'" data-title="Team Attribute" data-tpl="<input type=\'text\' maxlength=\'38\'>">';
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
                            <li><span class="edit-text" id="giyg_wr_ideal_company" data-title="My Ideal Company" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_ideal_company', true ); ?></span></li>
                        <?php } else {?>
                            <li><span class="edit-text" id="giyg_wr_custom_ideal_company" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_ideal_company', true );?></span> </li>
                        <?php }?>
                    </ul>
                </section>
            </div>
            <section class="hire-me">
                <h2 class="title">#1 IRRESISTABLE REASON TO HIRE ME</h2>
                <p class="edit-text" id="giyg_wr_impact_statement" data-type="textarea" data-title="#1 irresponsibility reason to hire me" data-tpl="<textarea maxlength='200'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_impact_statement', true ) ); ?></p>
            </section>
            <footer class="social-label-only">
                <div class="social-icons-wrap">
                    <div class="social-icons">
                        <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ))) { ?>
                          <a href="javascript:;"><label class="label-one edit-text" id="giyg_wr_linkedin_url" data-title="LinkedIn URL" data-tpl="<input type='text' maxlength='50'>"> <?php echo get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ); ?> </label></a>
                        <?php } ?> 
                        <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ))) { ?>
                          <a href="javascript:;"><label class="label-two edit-text" id="giyg_wr_twitter_url" data-title="Twitter URL" data-tpl="<input type='text' maxlength='50'>"> <?php echo get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ); ?> </label></a>
                        <?php } ?>
                        <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ))) { ?>
                          <a href="javascript:;"><label class="label-two edit-text" id="giyg_wr_facebook_url" data-title="Facebook URL" data-tpl="<input type='text' maxlength='50'>"> <?php echo get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ); ?> </label></a>
                        <?php } ?>                
                        <?php if(!empty(get_post_meta( $resume_id, 'giyg_wr_other_url', true ))) { ?>
                          <a href="javascript:;"><label class="label-three edit-text" id="giyg_wr_other_url" data-title="Other URL(Github, Blog, Personal Website)" data-tpl="<input type='text' maxlength='50'>"> <?php echo get_post_meta( $resume_id, 'giyg_wr_other_url', true ); ?> </label></a>
                        <?php } ?>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

<style type="text/css">
.popover-content {
    width: 500px;
}
</style>