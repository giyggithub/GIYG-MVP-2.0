<?php
/**
 * This is the theme template file.
 *
 * @package WooCommerce Resumes.
 */

/*$order_id = $customer_orders[0]->ID;
if(!empty($order_id)) {
    $order = wc_get_order($order_id);
    $order_val = $order->get_total();
}*/

require_once( 'themes/library.php' );

?>

	<div class="inner-menu-section">
		<div class="container menu-list">

            <a href="#" class="btn btn-sm btn-green pull-right share feedback-icon" title="Feedback" data-toggle="modal" data-target="#feedback_popup">Feedback</a>
            <!-- <div style="display:none" class="fancybox-hidden"> -->
                <div id="feedback_popup" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <?php echo do_shortcode('[contact-form-7 id="2077" title="Resume Feedback Form"]');?>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
            <a href="#" class="btn btn-sm btn-green pull-right share my_support" title="Support" data-toggle="modal" data-target="#support_popup">Support</a>
            <!-- <div style="display:none" class="fancybox-hidden"> -->
                <div id="support_popup" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <?php echo do_shortcode('[contact-form-7 id="2111" title="Support Form"]');?>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->

            <?php if($wr_theme == 'traditional' && $wr_color == 'black') { ?>                  
                                        
                <a href="#" class="btn btn-sm btn-green pull-right share social_share" id="share" title="Share">Share</a>
                <a href="<?php echo esc_url( add_query_arg( array( 'wr-theme' => $wr_theme, 'wr-color' => $wr_color, 'wr-font' =>  $wr_font, 'wr-download' => 'true'), $preview_page ) ); ?>" class="btn btn-sm btn-green pull-right btn-download" title="Download">Download</a>
               
            <?php } else {  ?>
            
                <?php
                    if( revelance_child_has_woocommerce_subscription('','','active') ) {
                ?>                                    
                    <a href="#" class="btn btn-sm btn-green pull-right share social_share" title="Share">Share</a>
                    <a href="<?php echo esc_url( add_query_arg( array( 'wr-theme' => $wr_theme, 'wr-color' => $wr_color, 'wr-font' =>  $wr_font, 'wr-download' => 'true'), $preview_page ) ); ?>" class="btn btn-sm btn-green pull-right btn-download" title="Download">Download</a>
                <?php } else { ?>                    
                    <a href="#" class="btn btn-sm btn-green pull-right share upgrade_message" title="Share">Share</a>
                    <a href="#" class="btn btn-sm btn-green pull-right btn-download upgrade_message" title="Download">Download</a>
                <?php } ?>

            <?php } ?>
            <div class="title_view">
                <span class="title-label"><strong>Title:</strong> <img src="<?php echo GIYG_WR_BASEURL; ?>images/common/title_edit.png" alt="Edit Icon"></span>
                <?php $resume_id = $_GET['wr-resume-id']; $post_title = get_the_title($resume_id);?>
                <span class="edit-text" id="post_title" data-title="Post Title" data-tpl="<input type='text' maxlength='100'>"><?php echo $post_title;?></span>
            </div>
		</div>
	</div>
<div class="giyg-themes container">	
	<div class="theme-wrap">
		<div class="<?php echo esc_attr( $wr_theme.'-'.$wr_color ); ?> <?php echo esc_attr( $wr_theme ); ?>-theme-wrap common-font-style font-<?php echo esc_attr( $wr_font ); ?>">			
			<?php
				$image_directory = GIYG_WR_BASEURL.'templates/themes/'.$wr_theme.'/images/';
                $image__with_color_directory = GIYG_WR_BASEURL.'templates/themes/'.$wr_theme.'/images/'.$wr_color.'/';
                $image_icon_directory = GIYG_WR_BASEPATH.'templates/themes/'.$wr_theme.'/icons/*.svg';
                $image_icon_url = GIYG_WR_BASEURL.'templates/themes/'.$wr_theme.'/icons/';

                $giyg_wr_theme_icon = giyg_wr_session('giyg_wr_theme_icon');
                if( 'bold' === $wr_theme ) {
                    if( !isset($giyg_wr_theme_icon['bold_custom-icon1']) ) {
                        $_SESSION['giyg_wr_theme_icon']['bold_custom-icon1'] = $image_directory . 'icon_title-award.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['bold_custom-icon2']) ) {
                        $_SESSION['giyg_wr_theme_icon']['bold_custom-icon2'] = $image__with_color_directory . 'scale.svg';
                    } else {
                        $icon_path = explode("/",$giyg_wr_theme_icon['bold_custom-icon2']);
                        if( in_array('scale.svg',$icon_path) )
                            $_SESSION['giyg_wr_theme_icon']['bold_custom-icon2'] = $image__with_color_directory . 'scale.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['bold_custom-icon3']) ) {
                        $_SESSION['giyg_wr_theme_icon']['bold_custom-icon3'] = $image_directory . 'icon_star.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['bold_custom-icon4']) ) {
                        $_SESSION['giyg_wr_theme_icon']['bold_custom-icon4'] = $image_directory . 'icon_energy.svg';
                    }
                }
                if( 'conservative' === $wr_theme ) {
                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon1-1']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon1-1'] = $image_directory . 'batch.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon1-2']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon1-2'] = $image_directory . 'batch.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon1-3']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon1-3'] = $image_directory . 'batch.svg';
                    }

                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon2-1']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-1'] = $image_directory . 'icon_skills.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon2-2']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-2'] = $image_directory . 'icon_skills.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon2-3']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-3'] = $image_directory . 'icon_skills.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon2-4']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-4'] = $image_directory . 'icon_skills.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon2-5']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon2-5'] = $image_directory . 'icon_skills.svg';
                    }

                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon3-1']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon3-1'] = $image_directory . 'men.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon3-2']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon3-2'] = $image_directory . 'men.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['conservative_custom-icon3-3']) ) {
                        $_SESSION['giyg_wr_theme_icon']['conservative_custom-icon3-3'] = $image_directory . 'men.svg';
                    }
                }
                if( 'classic' === $wr_theme ) {
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon1-1']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-1'] = $image__with_color_directory . 'icon_star.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon1-2']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-2'] = $image__with_color_directory . 'icon_star.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon1-3']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-3'] = $image__with_color_directory . 'icon_star.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon1-4']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-4'] = $image__with_color_directory . 'icon_star.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon1-5']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon1-5'] = $image__with_color_directory . 'icon_star.svg';
                    }

                    if( !isset($giyg_wr_theme_icon['classic_custom-icon2-1']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-1'] = $image__with_color_directory . 'icon-energize-one.svg';
                    } else {
                        $icon_path = explode("/",$giyg_wr_theme_icon['classic_custom-icon2-1']);
                        if( in_array('icon-energize-one.svg',$icon_path) )
                            $_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-1'] = $image__with_color_directory . 'icon-energize-one.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon2-2']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-2'] = $image__with_color_directory . 'icon-energize-two.svg';
                    } else {
                        $icon_path = explode("/",$giyg_wr_theme_icon['classic_custom-icon2-2']);
                        if( in_array('icon-energize-two.svg',$icon_path) )
                            $_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-2'] = $image__with_color_directory . 'icon-energize-two.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon2-3']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-3'] = $image__with_color_directory . 'icon-energize-three.svg';
                    } else {
                        $icon_path = explode("/",$giyg_wr_theme_icon['classic_custom-icon2-3']);
                        if( in_array('icon-energize-three.svg',$icon_path) )
                            $_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-3'] = $image__with_color_directory . 'icon-energize-three.svg';
                    }
                    

                    if( !isset($giyg_wr_theme_icon['classic_custom-icon3-1']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-1'] = $image__with_color_directory . 'icon_compass.svg';
                    } else {
                        $icon_path = explode("/",$giyg_wr_theme_icon['classic_custom-icon3-1']);
                        if( in_array('icon_compass.svg',$icon_path) )
                            $_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-1'] = $image__with_color_directory . 'icon_compass.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon3-2']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-2'] = $image__with_color_directory . 'icon_compass.svg';
                    } else {
                        $icon_path = explode("/",$giyg_wr_theme_icon['classic_custom-icon3-2']);
                        if( in_array('icon_compass.svg',$icon_path) )
                            $_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-2'] = $image__with_color_directory . 'icon_compass.svg';
                    }
                }
				require_once( 'themes/sidebar.php' );
				require_once( 'themes/'.$wr_theme.'/index.php' );
				require_once( 'themes/js.php' );
			?>
		</div>
	</div>
</div>

<div id="mobile_detect_popup" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">                
            <p>Hi there!</p>  
            <p>We've detected that you are using a mobile device. Once your GIYG profile is complete, we recommend using a non-mobile device for best GIYGgraph viewing or editing.</p>
            <p><a href="#" class="btn btn-sm btn-green ok" title="Ok">Ok</a></p>
          </div>
      </div>
  </div>
</div>
