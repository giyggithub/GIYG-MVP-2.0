<?php
/**
 * This is the classic theme file.
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
                <header>
                    <div class="profile-image">
                        <div class="profile-img <?php if(get_post_thumbnail_id( $resume_id ) == ''){ ?>profile-not-visible<?php }?>">
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
                    
                    <div class="profile-desc">
                        <h1 class="profile-name">
                            <span class="edit-text" id="first_name" data-title="First Name" data-tpl="<input type='text' maxlength='20'>"><?php echo esc_html( get_post_meta( $resume_id, 'first_name', true ) ); ?></span>
                            <span class="edit-text" id="last_name" data-title="Last Name" data-tpl="<input type='text' maxlength='20'>"><?php echo esc_html( get_post_meta( $resume_id, 'last_name', true ) ); ?></span>
                        </h1>
                        <h4 class="dream-job">
                            <span class="edit-text" id="giyg_wr_category_0" data-title="Select Dream Job 1" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_0', true ); ?></span><span class="comma">,</span>
                            <?php if( !empty( get_post_meta( $resume_id, 'giyg_wr_category_1', true ) ) ) { ?>
                                <span class="edit-text" id="giyg_wr_category_1" data-title="Select Dream Job 2" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_category_1', true ); ?></span>
                            <?php } else {?>
                                <span class="edit-text" id="giyg_wr_custom_category" data-title="Select Dream Job 2" data-tpl="<input type='text' maxlength='55'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_custom_category', true )?></span>
                            <?php }?>
                        </h4>            
                        <!-- <div class="accomplish-box-text">
                            <p class="edit-text tagline" id="giyg_wr_title2" data-title="Enter Resume Title" data-tpl="<input type='text' maxlength='50'>"><?php //echo esc_html( get_post_meta( $resume_id, 'giyg_wr_title2', true ) ); ?></p>
                        </div> -->
                        <div class="web-contact">
                            <div class="profile-catagory call">
                                <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_phone.svg" alt="Phone"></label>
                                <div class="content-edit edit-box">
                                    <a class="edit-text" id="phone" data-title="Best Contact Phone Number" data-tpl="<input type='text' maxlength='16'>"><?php echo esc_html( get_post_meta( $resume_id, 'phone', true ) ); ?></a>    
                                </div>
                            </div>
                            <div class="profile-catagory mail">
                                <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_email.svg" alt="Phone"></label>
                                <div class="content-edit edit-box">
                                    <a class="edit-text" id="email" data-title="Email" data-tpl="<input type='text' maxlength='50'>"><?php echo esc_html( get_post_meta( $resume_id, 'email', true ) ); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="web-communication">
                            <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true )) ) { ?>
                            <div class="profile-catagory italic linkedin">
                                <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_linkedin.svg" alt="Linkedin"></label>
                                <div class="content-edit edit-box">
                                    <a class="edit-text" id="giyg_wr_linkedin_url" data-title="LinkedIn URL" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_linkedin_url', true ); ?>  </a>   
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_twitter_url', true )) ) { ?>
                            <div class="profile-catagory italic">
                                <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_twitter.svg" alt="Twitter"></label>
                                <div class="content-edit edit-box">
                                    <a class="edit-text" id="giyg_wr_twitter_url" data-title="Twitter URL" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_twitter_url', true ); ?></a>    
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_facebook_url', true )) ) { ?>
                            <div class="profile-catagory italic">
                                <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_facebook.svg" alt="Facebook"></label>
                                <div class="content-edit edit-box">
                                    <a class="edit-text" id="giyg_wr_facebook_url" data-title="Facebook URL" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_facebook_url', true ); ?></a>    
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ( !empty(get_post_meta( $resume_id, 'giyg_wr_other_url', true )) ) { ?>
                            <div class="profile-catagory italic">
                                <label><img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_weblink.svg" alt="Weblink"></label>
                                <div class="content-edit edit-box">
                                    <a class="edit-text" id="giyg_wr_other_url" data-title="Other URL(Github, Blog, Personal Website)" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_other_url', true ); ?></a>    
                                </div>
                            </div>
                            <?php } ?> 
                        </div>
                    </div>
                </header>
                <section class="skills-wrap">
                    <section class="top-accomplish dark-bg">
                        <h4>TOP ACCOMPLISHMENTS</h4>
                        <div class="accomplish-item">
                            <div class="accomplish-box light-bg">
                                <div class="top-number light-bg">
                                    <img src="<?php echo esc_url( $image_directory ); ?>icon_1-decoration.svg">
                                </div>
                                <div class="location-head">
                                <p class="edit-text location" id="giyg_wr_location_0" data-type="text" data-title="Location 1" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_0', true ) ); ?></p>
                                </div>
                                <div class="location-contnet">
                                <p class="edit-text description" id="giyg_wr_company_name_0" data-type="textarea" data-title="Accompolishment 1" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_0', true ) ); ?></p> 
                                </div>
                            </div>
                            <div class="accomplish-box strong-bg">
                                <div class="top-number strong-bg">
                                    <img src="<?php echo esc_url( $image_directory ); ?>icon_2-decoration.svg">
                                </div>
                                <div class="location-head">
                                <p class="edit-text location" id="giyg_wr_location_1" data-type="text" data-title="Location 2" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_1', true ) ); ?></p>
                                </div>
                                <div class="location-contnet">
                                <p class="edit-text description" id="giyg_wr_company_name_1" data-type="textarea" data-title="Accompolishment 2" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_1', true ) ); ?></p> 
                                </div>
                            </div>
                            <div class="accomplish-box stronger-bg">
                                <div class="top-number stronger-bg">
                                    <img src="<?php echo esc_url( $image_directory ); ?>icon_3-decoration.svg">
                                </div>
                                <div class="location-head">
                                <p class="edit-text location" id="giyg_wr_location_2" data-type="text" data-title="Location 3" data-tpl="<input type='text' maxlength='25'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_location_2', true ) ); ?></p>
                                </div>
                                <div class="location-contnet">
                                <p class="edit-text description" id="giyg_wr_company_name_2" data-type="textarea" data-title="Accompolishment 3" data-tpl="<textarea maxlength='140'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_company_name_2', true ) ); ?></p> 
                                </div>
                            </div>
                        </div>
                    </section>
                
                    <div class="topskill-wrap">
                        <div class="top-skill-box">
                            <h4>My Top Skills <img src="<?php echo GIYG_WR_BASEURL . "img/loading.gif"; ?>" alt"Loading" id="loader" style="display:none;"/></h4>
                            <div class="skill-box">
                                <ul class="skill-name">
                                    <li class="skill1 characters-wrap"><span class="edit-text description skill1" id="giyg_wr_skill_name_0" data-title="Professional skill 1" data-tpl="<input type='text' maxlength='40'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_0', true ) ); ?> </span></li>
                                    <li class="skill1 skill-bg-wrap"> 
                                        <label class="skill1-bg">                                      
                                            <div class="custom-icon" id="custom-icon1-1">
                                            <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-1']; ?>">
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
                                        </label> <span> 
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
                                    <li class="skill2 characters-wrap"> <span class="description skill2 edit-text" id="giyg_wr_skill_name_1" data-title="Professional skill 2" data-tpl="<input type='text' maxlength='40'>"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_1', true ) ); ?> </span></li>
                                    <li class="skill2 skill-bg-wrap"> 
                                        <label class="skill2-bg">                                      
                                            <div class="custom-icon" id="custom-icon1-2">
                                            <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-2']; ?>">
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
                                        </label> <span> 
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
                                    <li class="skill3 characters-wrap"> <span class="description skill3 edit-text" id="giyg_wr_skill_name_2" data-title="Professional skill 3" data-tpl="<input type='text' maxlength='40'>"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_2', true ) ); ?> </span></li>
                                    <li class="skill3 skill-bg-wrap"> 
                                        <label class="skill3-bg"> 
                                            <div class="custom-icon" id="custom-icon1-3">
                                            <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-3']; ?>">
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
                                        </label> <span> 
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
                                    <li class="skill4 characters-wrap"> <span class="description skill4 edit-text" id="giyg_wr_skill_name_3" data-title="Professional skill 4" data-tpl="<input type='text' maxlength='40'>"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_3', true ) ); ?> </span></li>
                                    <li class="skill4 skill-bg-wrap"> 
                                        <label class="skill4-bg"> 
                                            <div class="custom-icon" id="custom-icon1-4">
                                            <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-4']; ?>">
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
                                        </label> <span> 
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
                                    <li class="skill5 characters-wrap"> <span class="description skill5 edit-text" id="giyg_wr_skill_name_4" data-title="Professional skill 5" data-tpl="<input type='text' maxlength='40'>"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_skill_name_4', true ) ); ?> </span></li>
                                    <li class="skill5 skill-bg-wrap"> 
                                        <label class="skill5-bg"> 
                                            <div class="custom-icon" id="custom-icon1-5">
                                            <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon1-5']; ?>">
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
                                        </label> <span> 
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
                                        <div class="custom-icon" id="custom-icon2-1">
                                        <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon2-1']; ?>" class="wave-icon" alt="Wave">
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
                                    </span>
                                    <span class="count">1</span></div>   
                                    <div class="description skill1">
                                    <div class="edit-text" id="giyg_wr_activity_name_0" data-title="Activity 1" data-tpl="<textarea maxlength='48'>"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_0', true ) ); ?> </div>
                                    </div> 
                                </div>
                                <div class="energi-wrap skill2">
                                    <div class="energi-number">
                                    <span class="wave-wrap"><!-- wave -->                                   
                                        <div class="custom-icon" id="custom-icon2-2">
                                        <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon2-2']; ?>" class="wave-icon" alt="Wave">
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
                                    </span>
                                    <span class="count">2</span></div>   
                                    <div class="description skill2">
                                    <div class="edit-text" id="giyg_wr_activity_name_1" data-title="Activity 2" data-tpl="<textarea maxlength='48'>"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_1', true ) ); ?> </div>
                                    </div> 
                                </div>
                                <div class="energi-wrap skill3">
                                    <div class="energi-number">
                                    <span class="wave-wrap"><!-- wave -->                                   
                                        <div class="custom-icon" id="custom-icon2-3">
                                        <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon2-3']; ?>" class="wave-icon" alt="Wave">
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
                                    </span>
                                    <span class="count">3</span></div> 
                                    <div class="description skill3">
                                    <div class="edit-text" id="giyg_wr_activity_name_2" data-title="Activity 3" data-tpl="<textarea maxlength='48'>"> <?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_activity_name_2', true ) ); ?> </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="core-value dark-bg">
                        <div class="core-value-section-block">
                            <div class="core-img">                            
                                <div class="custom-icon" id="custom-icon3-1">
                                <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon3-1']; ?>" alt="compass">
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
                            <div class="core-img pull-right">                            
                                <div class="custom-icon" id="custom-icon3-2">
                                <img src="<?php echo $giyg_wr_theme_icon['classic_custom-icon3-2']; ?>" alt="compass">
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
                            <div class="core-description">
                                <h2 class="skill1">My Core Values</h2>
                                <div class="core-value-group">
                                    <?php
                                     
                                      $core_val_num = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten");

                                        $str = '';
                                        $k = 0;
                                        for ( $j = 0; $j < 10; $j++ ) { 
                                            if( !empty(get_post_meta( $resume_id, 'giyg_wr_core_value_'.$j, true )) ) {
                                                $str .= '<div class="core-values-block core-values-block-'.$core_val_num[$k].'"><span class="core-desc edit-text core-values-'.$core_val_num[$k].'" id="giyg_wr_core_value_'.$j.'" data-title="Core Value" data-tpl="<input type=\'text\' maxlength=\'22\'>">';
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
                                        <div class="profess-wrap professional_personality prof-<?php echo $array_val[$i];?>" id="professional_personality_<?php echo esc_attr($i); ?>"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_<?php echo esc_attr($i); ?>" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_'.$i, true ); ?></span></div>
                                    <?php } ?>                                    
                                </div>
                                
                                <div class="professional-box right-box">
                                    
                                    <?php for($j=$split; $j<count($professional_personality_listings); $j++) { ?>
                                        <div class="profess-wrap professional_personality prof-<?php echo $array_val[$j];?>" id="professional_personality_<?php echo esc_attr($j); ?>"><span class="edit-text circle-content professional_personality_text" id="giyg_wr_professional_personality_attr_<?php echo esc_attr($j); ?>" data-tpl="<input type='text' maxlength='23'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_attr_'.$j, true ); ?></span></div>
                                    <?php } ?>
                                </div>
                                <div class="center-creator">
                                    <div class="edit-wrap-box">
                                        <img src="<?php echo esc_url( $image__with_color_directory ); ?>icon_creator.svg">
                                    </div>
                                    <div class="professional-personality-block">
                                        <h5 class="edit-text" id="giyg_wr_professional_personality" data-title="Professional Personality" data-tpl="<input type='text' maxlength='13'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality', true ); ?></h5>
                                    </div>
                                    <div class="professional-personality-desc">
                                        <small class="edit-text" id="giyg_wr_professional_personality_description" data-tpl="<textarea maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_professional_personality_description', true ); ?></small>
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
                                        <span class="edit-text" id="giyg_wr_corporate_culture" data-title="Best Fit Corporate Culture" data-tpl="<input type='text' maxlength='22'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture', true ); ?> Culture</span>
                                    </div>
                                    <span class="edit-text text-gray" style="display:none" id="giyg_wr_corporate_culture_description" data-tpl="<input type='text' maxlength='50'>"><?php echo get_post_meta( $resume_id, 'giyg_wr_corporate_culture_description', true ); ?></span>
                                </div>
                                <ul class="corporate_culture_listings">
                                     <?php
                                        $str = '';
                                        for ( $i = 0; $i < count($corporate_culture_listings); $i++ ) {
                                            $str .= '<li id="corporate_culture_'.$i.'" class="corporate_culture"><span class="edit-text corporate_culture_text" id="giyg_wr_corporate_culture_attr_<?php echo esc_attr( $i ); ?>" data-tpl="<input type=\'text\' maxlength=\'25\'>">'.get_post_meta( $resume_id, 'giyg_wr_corporate_culture_attr_'.$i, true ).'</span></li>';
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
                                            $team_attribute_name_html .= '<p class="tick edit-text" id="giyg_wr_team_attribute_'.$j.'" data-title="Team Attribute" data-tpl="<input type=\'text\' maxlength=\'38\'>">';
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
                            <p class="description white edit-text" id="giyg_wr_impact_statement" data-type="textarea" data-title="#1 Irresponsibility reason to hire me" data-tpl="<textarea maxlength='200'>"><?php echo esc_html( get_post_meta( $resume_id, 'giyg_wr_impact_statement', true ) ); ?></p>
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