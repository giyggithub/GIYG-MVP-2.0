<?php
/**
 * This is the theme template file.
 *
 * @package WooCommerce Resumes.
 */
require_once( 'themes/library.php' );

?>	
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
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon2-2']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-2'] = $image__with_color_directory . 'icon-energize-two.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon2-3']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon2-3'] = $image__with_color_directory . 'icon-energize-three.svg';
                    }
                    

                    if( !isset($giyg_wr_theme_icon['classic_custom-icon3-1']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-1'] = $image__with_color_directory . 'icon_compass.svg';
                    }
                    if( !isset($giyg_wr_theme_icon['classic_custom-icon3-2']) ) {
                        $_SESSION['giyg_wr_theme_icon']['classic_custom-icon3-2'] = $image__with_color_directory . 'icon_compass.svg';
                    }
                }				
				require_once( 'themes/'.$wr_theme.'/index.php' );
				//require_once( 'themes/js.php' );
			?>
		</div>
	</div>
</div>

<?php
/**
 * This is the theme js file.
 *
 * @package WooCommerce Resumes.
 */

?>
<script type="text/javascript">
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
        max: 10,
        change: function(event, ui) {
            jQuery('#loader').show();
            jQuery.post(
                ajaxurl, 
                {
                    security: '<?php echo esc_html( $ajax_nonce ); ?>',
                    action: 'theme_submit',
                    name: jQuery(this).attr('id'),
                    value: ui.value,
                    pk: <?php echo esc_html( $resume_id ); ?>,
                }, 
                function(response){
                    jQuery('#loader').hide();
                    var response = JSON.parse(response);
                    if('success' === response.status){
                        //alert('Rating Updated');
                    }
                    else{
                        alert('Error in updation');
                    }
                }
            );
        }
      });
    });
    jQuery("#amount").val("$" + jQuery("#slider").slider("value"));
    
    jQuery('.skill-rating').barrating('show', {
        theme: 'bars-1to10',
        onSelect: function(value, text, event){
            
        }
    });    


    var templ_font;
    var templ_font_val;
    <?php if( esc_attr( $wr_theme ) == 'traditional') { ?>
        if( jQuery('h1 #first_name').text().length == 20 || jQuery('h1 #last_name').text().length == 20 ) {        
            jQuery('h1').css('font-size', '22px');
            templ_font = 'traditional_flname_font';
            templ_font_val = "font-size: 22px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else if( jQuery('h1 #first_name').text().length > 15 || jQuery('h1 #last_name').text().length > 15 ) {     
            jQuery('h1').css('font-size', '24px');
            templ_font = 'traditional_flname_font';
            templ_font_val = "font-size: 24px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else if( jQuery('h1 #first_name').text().length > 10 || jQuery('h1 #last_name').text().length > 10 ) {     
            jQuery('h1').css('font-size', '30px');
            templ_font = 'traditional_flname_font';
            templ_font_val = "font-size: 30px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else {
            jQuery('h1').css('font-size', '43px');
            templ_font = 'traditional_flname_font';
            templ_font_val = "font-size: 43px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }

        jQuery('#first_name, #last_name').on('save', function(e, params) {            
            if( params.newValue.length == 20 ) {                
                jQuery(this).parents('h1').css('font-size', '22px');
                templ_font = 'traditional_flname_font';
                templ_font_val = "font-size: 22px;";
            }
            else if( params.newValue.length > 15 ) { 
                jQuery(this).parents('h1').css('font-size', '24px');
                templ_font = 'traditional_flname_font';
                templ_font_val = "font-size: 24px;";
            }
            else if( params.newValue.length > 10 ) {
                jQuery(this).parents('h1').css('font-size', '30px');
                templ_font = 'traditional_flname_font';
                templ_font_val = "font-size: 30px;";
            }
            else {
                jQuery(this).parents('h1').css('font-size', '43px');
                templ_font = 'traditional_flname_font';
                templ_font_val = "font-size: 43px;";
            }
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        });
    <?php } else if( esc_attr( $wr_theme ) == 'conservative') { ?>
        if( jQuery('h1 #first_name').text().length == 20 || jQuery('h1 #last_name').text().length == 20 ) {        
            jQuery('h1').css('font-size', '17px');
            templ_font = 'conservative_flname_font';
            templ_font_val = "font-size: 17px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else if( jQuery('h1 #first_name').text().length > 15 || jQuery('h1 #last_name').text().length > 15 ) {     
            jQuery('h1').css('font-size', '19px');
            templ_font = 'conservative_flname_font';
            templ_font_val = "font-size: 19px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else if( jQuery('h1 #first_name').text().length >= 12 || jQuery('h1 #last_name').text().length >= 12 ) {   
            jQuery('h1').css('font-size', '23px');
            templ_font = 'conservative_flname_font';
            templ_font_val = "font-size: 23px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else if( jQuery('h1 #first_name').text().length >= 10 || jQuery('h1 #last_name').text().length >= 10 ) {   
            jQuery('h1').css('font-size', '26px');
            templ_font = 'conservative_flname_font';
            templ_font_val = "font-size: 26px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else{
            jQuery('h1').css('font-size', '37px');
            templ_font = 'conservative_flname_font';
            templ_font_val = "font-size: 37px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }

        jQuery('#first_name, #last_name').on('save', function(e, params) {            
            if( params.newValue.length == 20 ) {                
                jQuery(this).parents('h1').css('font-size', '17px');
                templ_font = 'conservative_flname_font';
                templ_font_val = "font-size: 17px;";
            }
            else if( params.newValue.length > 15 ) { 
                jQuery(this).parents('h1').css('font-size', '19px');
                templ_font = 'conservative_flname_font';
                templ_font_val = "font-size: 19px;";
            }
            else if( params.newValue.length >= 12 ) {   
                jQuery(this).parents('h1').css('font-size', '23px');
                templ_font = 'conservative_flname_font';
                templ_font_val = "font-size: 23px;";                
            }
            else if( params.newValue.length >= 10 ) {
                jQuery(this).parents('h1').css('font-size', '26px');
                templ_font = 'conservative_flname_font';
                templ_font_val = "font-size: 26px;";
            }
            else{
                jQuery(this).parents('h1').css('font-size', '37px');
                templ_font = 'conservative_flname_font';
                templ_font_val = "font-size: 37px;";
            }
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        });
    <?php } else if( esc_attr( $wr_theme ) == 'bold') { ?>
        if( jQuery('h1 #first_name').text().length == 20 || jQuery('h1 #last_name').text().length == 20 ) {        
            jQuery('.profile-detail h1').css('font-size', '25px');
            jQuery('.profile-detail h1 span').css('font-size', '25px');
            templ_font = 'bold_flname_font';
            templ_font_val = "font-size: 25px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else if( jQuery('h1 #first_name').text().length >= 15 || jQuery('h1 #last_name').text().length >= 15 ) {   
            jQuery('.profile-detail h1').css('font-size', '34px');
            jQuery('.profile-detail h1 span').css('font-size', '34px');
            templ_font = 'bold_flname_font';
            templ_font_val = "font-size: 34px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else if( jQuery('h1 #first_name').text().length >= 10 || jQuery('h1 #last_name').text().length >= 10 ) {   
            jQuery('.profile-detail h1').css('font-size', '42px');
            jQuery('.profile-detail h1 span').css('font-size', '42px');
            templ_font = 'bold_flname_font';
            templ_font_val = "font-size: 42px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else{
            jQuery('.profile-detail h1').css('font-size', '46px');
            jQuery('.profile-detail h1 span').css('font-size', '46px');
            templ_font = 'bold_flname_font';
            templ_font_val = "font-size: 46px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }

        jQuery('#first_name, #last_name').on('save', function(e, params) {            
            if( params.newValue.length == 20 ) {                
                jQuery(this).parents('h1').css('font-size', '25px');
                jQuery(this).parents('h1').find('span').css('font-size', '25px');
                templ_font = 'bold_flname_font';
                templ_font_val = "font-size: 25px;";
            }
            else if( params.newValue.length >= 15 ) { 
                jQuery(this).parents('h1').css('font-size', '34px');
                jQuery(this).parents('h1').find('span').css('font-size', '34px');
                templ_font = 'bold_flname_font';
                templ_font_val = "font-size: 34px;";
            }
            else if( params.newValue.length >= 10 ) {
                jQuery(this).parents('h1').css('font-size', '42px');
                jQuery(this).parents('h1').find('span').css('font-size', '42px');
                templ_font = 'bold_flname_font';
                templ_font_val = "font-size: 42px;";
            }
            else{
                jQuery(this).parents('h1').css('font-size', '46px');
                jQuery(this).parents('h1').find('span').css('font-size', '46px');
                templ_font = 'bold_flname_font';
                templ_font_val = "font-size: 46px;";
            }
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        });
    <?php } else if( esc_attr( $wr_theme ) == 'classic') { ?>
        
        if( jQuery('h1 #first_name').text().length == 20 || jQuery('h1 #last_name').text().length == 20 ) {        
            jQuery('h1').css('font-size', '25px');
            templ_font = 'classic_flname_font';
            templ_font_val = "font-size: 25px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else if( jQuery('h1 #first_name').text().length >= 15 || jQuery('h1 #last_name').text().length >= 15 ) {   
            jQuery('h1').css('font-size', '30px');
            templ_font = 'classic_flname_font';
            templ_font_val = "font-size: 30px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else if( jQuery('h1 #first_name').text().length >= 10 || jQuery('h1 #last_name').text().length >= 10 ) {   
            jQuery('h1').css('font-size', '34px');
            templ_font = 'classic_flname_font';
            templ_font_val = "font-size: 34px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }
        else{
            jQuery('h1').css('font-size', '37px');
            templ_font = 'classic_flname_font';
            templ_font_val = "font-size: 37px;";
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        }

        jQuery('#first_name, #last_name').on('save', function(e, params) {            
            if( params.newValue.length == 20 ) {                
                jQuery(this).parents('h1').css('font-size', '25px');
                templ_font = 'classic_flname_font';
                templ_font_val = "font-size: 25px;";
            }
            else if( params.newValue.length >= 15 ) { 
                jQuery(this).parents('h1').css('font-size', '30px');
                templ_font = 'classic_flname_font';
                templ_font_val = "font-size: 30px;";
            }
            else if( params.newValue.length >= 10 ) {
                jQuery(this).parents('h1').css('font-size', '34px');
                templ_font = 'classic_flname_font';
                templ_font_val = "font-size: 34px;";
            }
            else{
                jQuery(this).parents('h1').css('font-size', '37px');
                templ_font = 'classic_flname_font';
                templ_font_val = "font-size: 37px;";
            }
            update_flname_fontSize(ajaxurl,templ_font,templ_font_val);
        });
    <?php } ?>

    function update_flname_fontSize(ajaxurl,templ_font,templ_font_val){
        jQuery.post(
            ajaxurl, 
            {
                security: '<?php echo esc_html( $ajax_nonce ); ?>',
                action: 'theme_flname_fontsize_update',
                name: templ_font,
                value: templ_font_val,
            }, 
            function(response){            
                var response = JSON.parse(response);
                if('success' === response.status){
                    //alert('Icon Updated');
                }
                else{
                    alert('Error in updation');
                }
            }
        );
    }
    
});

</script>