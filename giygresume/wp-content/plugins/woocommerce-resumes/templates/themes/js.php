<?php
/**
 * This is the theme js file.
 *
 * @package WooCommerce Resumes.
 */

?>
<script type="text/javascript">
function custom_validate( value, validations ){
    if( validations.hasOwnProperty('required') &&  value.trim() === '' ){    
        return 'This field is required';
    }
    if( validations.hasOwnProperty('required') &&  value.trim() === '' ){    
        return 'This field is required';
    }
    if ( validations.hasOwnProperty('phone') &&  !/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/.test(value)) {
        return 'Enter valid phone number';
    }
    if ( validations.hasOwnProperty('email') &&  !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
        return 'Enter valid email';
    }
    if( validations.hasOwnProperty('maxLength') && value.length > validations.maxLength ){
        return 'Please enter no more than '+validations.maxLength+' characters.';
    }   
    var urlregex = new RegExp("^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
    if( validations.hasOwnProperty('url') && value.trim() != '' && !urlregex.test(value) ){
        return 'Please enter valid url';
    }   
}
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

    //mask
    /* jQuery(document).on("click", "#phone", function () {
        jQuery("#phone").parent().addClass('maskclass');
        jQuery('.maskclass').find('.editfield').addClass('mask1');
        jQuery('.maskclass .mask1').mask("999-999-9999");
        // jQuery('.phone').mask("(999) 999-9999");
        jQuery('.maskclass').on("focus", ".mask1", function () {
            jQuery('.mask1').mask("999-999-9999");
        });
    }); */    
    //end mask

    jQuery('.edit-text').editable({
        type: 'text',
        url: ajaxurl,  
        inputclass: 'input-sm editfield mask1',
        pk: <?php echo esc_html( $resume_id ); ?>,
        ajaxOptions: {
            type: 'post',/*
            beforeSend: function( ) {
                console.log( jQuery(this).text() );
            },*/
        },
        mode: 'inline',
        showbuttons: false,
        toggle: 'click',
        onblur: 'submit',
        params : {
            security: '<?php echo esc_html( $ajax_nonce ); ?>',
            action: 'theme_submit',
        },
        validate: function(value){
            var field = jQuery(this).attr('id');
            var skills = ['giyg_wr_skill_name_0','giyg_wr_skill_name_1','giyg_wr_skill_name_2','giyg_wr_skill_name_3','giyg_wr_skill_name_4'];
            var activities = ['giyg_wr_activity_name_0','giyg_wr_activity_name_1','giyg_wr_activity_name_2'];
            var accomplishments = ['giyg_wr_company_name_0','giyg_wr_company_name_1','giyg_wr_company_name_2'];
            var location = ['giyg_wr_location_0','giyg_wr_location_1','giyg_wr_location_2'];
            var social_links = ['giyg_wr_twitter_url','giyg_wr_linkedin_url','giyg_wr_facebook_url','giyg_wr_other_url'];
            var professional_personality_attr = ['giyg_wr_professional_personality_attr_0', 'giyg_wr_professional_personality_attr_1', 'giyg_wr_professional_personality_attr_2', 'giyg_wr_professional_personality_attr_3', 'giyg_wr_professional_personality_attr_4', 'giyg_wr_professional_personality_attr_5'];
            var core_values = ['giyg_wr_core_value_0', 'giyg_wr_core_value_1', 'giyg_wr_core_value_2', 'giyg_wr_core_value_3', 'giyg_wr_core_value_4', 'giyg_wr_core_value_5', 'giyg_wr_core_value_6', 'giyg_wr_core_value_7', 'giyg_wr_core_value_8', 'giyg_wr_core_value_9'];
            var corporate_culture_attr = ['giyg_wr_corporate_culture_attr_0', 'giyg_wr_corporate_culture_attr_1', 'giyg_wr_corporate_culture_attr_2', 'giyg_wr_corporate_culture_attr_3', 'giyg_wr_corporate_culture_attr_4', 'giyg_wr_corporate_culture_attr_5'];
            var team_attributes = ['giyg_wr_team_attribute_0', 'giyg_wr_team_attribute_1', 'giyg_wr_team_attribute_2', 'giyg_wr_team_attribute_3', 'giyg_wr_team_attribute_4'];
            if( 'first_name' === field || 'last_name' === field ){
                var rules = {
                    required: true,
                    maxLength: 20,
                };
            }
            else if( 'post_title' === field ){
                var rules = {
                    required: true,
                    maxLength: 100,
                };
            }
            else if( 'giyg_wr_title' === field ){
                var rules = {
                    required: true,
                    maxLength: 100,
                };
            }
            else if( 'giyg_wr_title2' === field ){
                var rules = {
                    required: true,
                    maxLength: 50,
                };
            }
            else if( 'phone' === field ){
                var rules = {
                    required: true,
                    phoneUS: true,
                    maxLength: 16,
                };
            }
            else if('email' === field){
                var rules = {
                    required: true,
                    email: true,
                    maxLength: 50,
                };              
            }
            else if( 'giyg_wr_category_0' === field ){
                var rules = {
                    required: true,
                    maxLength: 55,
                };
            }
            else if( 'giyg_wr_category_1' === field ){
                var rules = {
                    required: true,
                    maxLength: 55,
                };
            }
            else if( 'giyg_wr_custom_category' === field ){
                var rules = {
                    required: true,
                    maxLength: 55,
                };
            }
            else if( 'giyg_wr_ideal_company' === field ){
                var rules = {
                    required: true,
                    maxLength: 50,
                };
            }
            else if( 'giyg_wr_ideal_company_description' === field ){
                var rules = {
                    required: true,
                    maxLength: 55,
                };
            }
            else if( 'giyg_wr_custom_ideal_company' === field ){
                var rules = {
                    required: true,
                    maxLength: 55,
                };
            }
            else if( 0 <= accomplishments.indexOf(field) ){
                var rules = {
                    required: true,
                    maxLength: 140,
                }; 
            }
            else if( 0 <= location.indexOf(field) ){
                var rules = {
                    required: true,
                    maxLength: 25,
                }; 
            }
            else if( 0 <= skills.indexOf(field) ){
                var rules = {
                    required: true,
                    maxLength: 40,
                }; 
            }
            else if( 0 <= activities.indexOf(field) ){
                var rules = {
                    required: true,
                    maxLength: 48,
                }; 
            }
            else if('giyg_wr_professional_personality' === field){
                var rules = {
                    required: true,
                    maxLength: 13,
                }; 
            }
            else if('giyg_wr_professional_personality_description' === field){
                var rules = {
                    required: true,
                    maxLength: 50,
                }; 
            }
            else if( 0 <= professional_personality_attr.indexOf(field) ){
                var rules = {
                    required: true,
                    maxLength: 23,
                }; 
            }
            else if( 0 <= core_values.indexOf(field) ){
                var rules = {
                    required: true,
                    maxLength: 22,
                }; 
            }
            else if('giyg_wr_corporate_culture' === field){
                var rules = {
                    required: true,
                    maxLength: 22,
                }; 
            }
            else if('giyg_wr_corporate_culture_description' === field){
                var rules = {
                    required: true,
                    maxLength: 50,
                }; 
            }
            else if( 0 <= corporate_culture_attr.indexOf(field) ){
                var rules = {
                    required: true,
                    maxLength: 25,
                }; 
            }
            else if( 0 <= team_attributes.indexOf(field) ){
                var rules = {
                    required: true,
                    maxLength: 38,
                }; 
            }
            else if('giyg_wr_impact_statement' === field){
                var rules = {
                    required: true,
                    maxLength: 200,
                }; 
            }           
            else if( 0 <= social_links.indexOf(field) ){
                var rules = {
                    maxLength: 50,
                    //url: true,
                }; 
            }           
            else{
                var rules = {};
            }
            return custom_validate( value, rules );
        },
        success: function(response, newValue){
            var field = jQuery(this).attr('id');
            var response = JSON.parse(response);
            if(response.status === 'error'){
                return response.message;
            }
            else{
                var option_sets = ['ideal_company','professional_personality','corporate_culture'];
                var option_sets2 = ['corporate_culture'];
                var option_sets3 = ['professional_personality'];
                if( 0 <= option_sets.indexOf(field) ){
                    jQuery('#'+field+'_description').html(response.message).text();
                }
                if( 0 <= option_sets2.indexOf(field) ){
                    var listings = response.listings.split(',');
                    jQuery('.'+field+' .'+field+'_text').text('');
                    var str = '';
                    jQuery('.corporate_culture_listings').html(str);
                    for (i = 0; i < listings.length; i++) {

                        <?php if( esc_attr( $wr_theme ) == 'conservative'){ ?>
                            var icon_url = '<?php echo esc_url( $image__with_color_directory ); ?>';
                            str += '<li id="corporate_culture_'+i+'" class="corporate_culture"><span class="tick"><img src="'+icon_url+'icon_tick-mark-gray.svg"></span><span class="corporate_culture_text" >'+listings[i]+'</span></li>';
                            jQuery('.corporate_culture_listings').html(str);
                        
                        <?php } elseif( esc_attr( $wr_theme ) == 'classic'){ ?>                         
                            str += '<li id="corporate_culture_'+i+'" class="corporate_culture"><span class="corporate_culture_text" >'+listings[i]+'</span></li>';
                            jQuery('.corporate_culture_listings').html(str);
                        
                        <?php } else { ?>
                            jQuery('#'+field+'_'+i+' .'+field+'_text').text(listings[i]);
                        <?php } ?>
                    }
                }
                if( 0 <= option_sets3.indexOf(field) ){
                    var listings = response.listings.split(',');
                    jQuery('.'+field+' .'+field+'_text').text('');

                    <?php if( esc_attr( $wr_theme ) == 'classic'){ ?>
                        var div = Math.ceil(listings.length/2);                        
                        var str = '';
                        var str2 = '';
                        jQuery('.professional-box').html(str);
                        jQuery('.professional-box.right-box').html(str2);
                        var array_val = ["one","two","three","four","five","six"];
                        for (i = 0; i < div; i++) {                            
                            str += '<div class="profess-wrap professional_personality prof-'+array_val[i]+'" id="professional_personality_'+i+'"><span class="circle-content professional_personality_text" >'+listings[i]+'</span></div>';
                            jQuery('.professional-box').html(str);                            
                        }
                        for (j = div; j < listings.length; j++) {
                            str2 += '<div class="profess-wrap professional_personality prof-'+array_val[j]+'" id="professional_personality_'+j+'"><span class="circle-content professional_personality_text" >'+listings[j]+'</span></div>';
                            jQuery('.professional-box.right-box').html(str2);                           
                        }
                    
                    <?php } else { ?>

                    for (i = 0; i < listings.length; i++) {
                        jQuery('#'+field+'_'+i+' .'+field+'_text').text(listings[i]);
                    }

                    <?php } ?>
                }
            }            
        }
    });
    jQuery('.skill-rating').barrating('show', {
        theme: 'bars-1to10',
        onSelect: function(value, text, event){
            
        }
    });
    jQuery('.skill-rating').change(function(){
        jQuery('#loader').show();
        jQuery.post(
            ajaxurl, 
            {
                security: '<?php echo esc_html( $ajax_nonce ); ?>',
                action: 'theme_submit',
                name: jQuery(this).attr('id'),
                value: jQuery(this).val(),
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
    });
    <?php for($inc = 0; $inc < 5; $inc++){ ?>
        jQuery('#giyg_wr_rating_'+<?php echo $inc; ?>+' input[type="checkbox"]').click(function(){
            jQuery('#giyg_wr_rating_'+<?php echo $inc; ?>+' input[type="checkbox"]').prop('checked', false);
            var current = jQuery(this).parent(".Checkbox").index();
            var current_val = current+1;
            for(var i = 1; i <= current_val; i++){
                jQuery('#giyg_wr_rating_'+<?php echo $inc; ?>+' #giyg_wr_rating_ch_'+i).prop('checked', true);
            }
            jQuery('#giyg_wr_rating_'+<?php echo $inc; ?>+' #loader').show();
            jQuery.post(
                ajaxurl, 
                {
                    security: '<?php echo esc_html( $ajax_nonce ); ?>',
                    action: 'theme_submit',
                    name: 'giyg_wr_rating_'+<?php echo $inc; ?>,
                    value: current_val,
                    pk: <?php echo esc_html( $resume_id ); ?>,
                }, 
                function(response){
                    jQuery('#giyg_wr_rating_'+<?php echo $inc; ?>+' #loader').hide();
                    var response = JSON.parse(response);
                    if('success' === response.status){
                        //alert('Rating Updated');
                    }
                    else{
                        alert('Error in updation');
                    }
                }
            );
        });
    <?php } ?>

    // Custom icon
    jQuery(".custom-icon").find("img").click(function(e) {
        e.preventDefault();
        jQuery(".custom-icon-popup").hide();
        jQuery(this).parent().find(".custom-icon-popup").fadeToggle();
    });

    jQuery(".custom-icon-popup").find(".close").click(function() {
        jQuery(".custom-icon-popup").hide();
    });

    jQuery(".custom-icon-popup").find("ul").find("li").find("a").click(function(){
        var img_src = jQuery(this).find("img").attr("src");
        var icon_name;
        jQuery(this).parents().eq(3).find("img:eq(0)").attr('src', img_src);
        <?php if( esc_attr( $wr_theme ) == 'bold') { ?>
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon1") {                
                icon_name = 'bold_custom-icon1';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon2") {
                icon_name = 'bold_custom-icon2';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon3") {
                icon_name = 'bold_custom-icon3';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon4") {
                icon_name = 'bold_custom-icon4';
            }
        <?php } if( esc_attr( $wr_theme ) == 'conservative') { ?>
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon1-1") {
                icon_name = 'conservative_custom-icon1-1';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon1-2") {
                icon_name = 'conservative_custom-icon1-2';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon1-3") {
                icon_name = 'conservative_custom-icon1-3';
            }

            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon2-1") {
                icon_name = 'conservative_custom-icon2-1';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon2-2") {
                icon_name = 'conservative_custom-icon2-2';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon2-3") {
                icon_name = 'conservative_custom-icon2-3';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon2-4") {
                icon_name = 'conservative_custom-icon2-4';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon2-5") {
                icon_name = 'conservative_custom-icon2-5';
            }

            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon3-1") {
                icon_name = 'conservative_custom-icon3-1';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon3-2") {
                icon_name = 'conservative_custom-icon3-2';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon3-3") {
                icon_name = 'conservative_custom-icon3-3';
            }
        <?php } if( esc_attr( $wr_theme ) == 'classic') { ?>
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon1-1") {
                icon_name = 'classic_custom-icon1-1';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon1-2") {
                icon_name = 'classic_custom-icon1-2';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon1-3") {
                icon_name = 'classic_custom-icon1-3';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon1-4") {
                icon_name = 'classic_custom-icon1-4';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon1-5") {
                icon_name = 'classic_custom-icon1-5';
            }

            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon2-1") {
                icon_name = 'classic_custom-icon2-1';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon2-2") {
                icon_name = 'classic_custom-icon2-2';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon2-3") {
                icon_name = 'classic_custom-icon2-3';
            }

            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon3-1") {
                icon_name = 'classic_custom-icon3-1';
            }
            if( jQuery(this).parents().eq(3).attr('id') == "custom-icon3-2") {
                icon_name = 'classic_custom-icon3-2';
            }
        <?php } ?>
        
        jQuery.post(
            ajaxurl, 
            {
                security: '<?php echo esc_html( $ajax_nonce ); ?>',
                action: 'theme_icon_update',
                name: icon_name,
                value: img_src,
            }, 
            function(response){            
                var response = JSON.parse(response);
                if('success' === response.status){
                    alert('Icon Updated');
                }
                else{
                    alert('Error in updation');
                }
            }
        );
    });

    //jQuery( ".cloud-core-content" ).draggable();
    
    jQuery(".template-styles").click(function() {
        if( jQuery(".color-styles-sidebar").is(':visible') ) {
            jQuery(".color-styles-sidebar").slideToggle("slow");    
        }
        if( jQuery(".font-styles-sidebar").is(':visible') ) {
            jQuery(".font-styles-sidebar").slideToggle("slow");    
        }
        jQuery(".template-styles-sidebar").slideToggle("slow");
    });

    jQuery(".color-styles").click(function() {
        if( jQuery(".template-styles-sidebar").is(':visible') ) {
            jQuery(".template-styles-sidebar").slideToggle("slow");    
        }
        if( jQuery(".font-styles-sidebar").is(':visible') ) {
            jQuery(".font-styles-sidebar").slideToggle("slow");    
        }
        jQuery(".color-styles-sidebar").slideToggle("slow");
    });

    jQuery(".font-styles").click(function() {
        if( jQuery(".template-styles-sidebar").is(':visible') ) {
            jQuery(".template-styles-sidebar").slideToggle("slow");    
        }
        if( jQuery(".color-styles-sidebar").is(':visible') ) {
            jQuery(".color-styles-sidebar").slideToggle("slow");    
        }
        jQuery(".font-styles-sidebar").slideToggle("slow");
    }); 

    /*Image Crop js*/    

    jQuery('#change_image_popup').on('shown.bs.modal', function () {
        jQuery('img#photo').imgAreaSelect({
            aspectRatio: '1:1',
            onSelectEnd: getSizes,
            handles: true,
        });
        jQuery('#image_name').val(jQuery('#photo').attr('file-name'));

        jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-selection,.imgareaselect-outer").css('display', 'none');
        jQuery(".imgareaselect-selection").parent().css('display', 'none');
        jQuery('#hdn-x1-axis').val("");
        jQuery('#hdn-y1-axis').val("");
        jQuery('#hdn-x2-axis').val("");
        jQuery('#hdn-y2-axis').val("");
        jQuery('#hdn-thumb-width').val("");
        jQuery('#hdn-thumb-height').val("");
    });  
    
    jQuery('#photoimg').on('change', function()   
    { 
        jQuery("#preview-avatar-profile").html('');
        jQuery("#preview-avatar-profile").html('Uploading....');
        jQuery("#cropimage").ajaxForm(
        {
            type:'POST',
            url: ajaxurl,
            data: {
                security: '<?php echo esc_html( $ajax_nonce ); ?>',
                action: 'giyggraph_image_update',
                resume_id: '<?php echo esc_html( $resume_id ); ?>',
                image_action: 'upload',
            },
            cache: false,
            contentType: false,
            processData: false,
            target: '#preview-avatar-profile',
            success: function() { 
                jQuery('img#photo').imgAreaSelect({
                    aspectRatio: '1:1',
                    onSelectEnd: getSizes,
                    handles: true,
                });
                jQuery('#image_name').val(jQuery('#photo').attr('file-name'));
            }
        }).submit();
    });        
    
    jQuery('#btn-crop').on('click', function(e){
        e.preventDefault();
        params = {
            targetUrl: ajaxurl,
            action: 'giyggraph_image_update',
            x_axis: jQuery('#hdn-x1-axis').val(),
            y_axis : jQuery('#hdn-y1-axis').val(),
            x2_axis: jQuery('#hdn-x2-axis').val(),
            y2_axis : jQuery('#hdn-y2-axis').val(),
            thumb_width : jQuery('#hdn-thumb-width').val(),
            thumb_height:jQuery('#hdn-thumb-height').val()
        };

        if( jQuery('#image_name').val() == "" ){
            alert("Please choose an image.");
            return false;
        } else if( jQuery('#hdn-x1-axis').val() == "" && jQuery('#hdn-y1-axis').val() == "" && jQuery('#hdn-x2-axis').val() == "" && jQuery('#hdn-y2-axis').val() == "" && jQuery('#hdn-thumb-width').val() == "" && jQuery('#hdn-thumb-height').val() == "") {
            alert("Please select portion..!");
            return false;
        } else {
            saveCropImage(params);
        }        
    }); 

    jQuery('#btn-open-crop-area').on('click', function(e){
        e.preventDefault();
        jQuery('img#photo').imgAreaSelect({
            aspectRatio: '1:1',
            x1: 120, 
            y1: 90, 
            x2: 280, 
            y2: 210,
            width: 220,
            height: 180,
            handles: true,
        });
        jQuery('#hdn-x1-axis').val(120);
        jQuery('#hdn-y1-axis').val(90);
        jQuery('#hdn-x2-axis').val(280);
        jQuery('#hdn-y2-axis').val(210);
        jQuery('#hdn-thumb-width').val(220);
        jQuery('#hdn-thumb-height').val(180);
    });

    function getSizes(img, obj)
    {
        var x_axis = obj.x1;
        var x2_axis = obj.x2;
        var y_axis = obj.y1;
        var y2_axis = obj.y2;
        var thumb_width = obj.width;
        var thumb_height = obj.height;
        if(thumb_width > 0)
            {

                jQuery('#hdn-x1-axis').val(x_axis);
                jQuery('#hdn-y1-axis').val(y_axis);
                jQuery('#hdn-x2-axis').val(x2_axis);
                jQuery('#hdn-y2-axis').val(y2_axis);
                jQuery('#hdn-thumb-width').val(thumb_width);
                jQuery('#hdn-thumb-height').val(thumb_height);
                
            }
        else
            alert("Please select portion..!");
    }
    
    function saveCropImage(params) {
        jQuery.ajax({
            url: params['targetUrl'],
            cache: false,
            dataType: "html",
            data: {
                action: params['action'],
                id: jQuery('#hdn-profile-id').val(),
                t: 'ajax',
                w1:params['thumb_width'],
                x1:params['x_axis'],
                h1:params['thumb_height'],
                y1:params['y_axis'],
                x2:params['x2_axis'],
                y2:params['y2_axis'],
                image_name :jQuery('#image_name').val(),
                security: '<?php echo esc_html( $ajax_nonce ); ?>',
                image_action: 'save',
                resume_id: '<?php echo esc_html( $resume_id ); ?>',
            },
            type: 'Post',            
           // async:false,
            success: function (response) {
                if(response == "no_image") {
                    jQuery("#preview-avatar-profile").html('<span style="color:#f00;">Please choose an image.</span>');
                } else {                   
                    jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-selection,.imgareaselect-outer").css('display', 'none');
                    jQuery(".imgareaselect-selection").parent().css('display', 'none');
                    jQuery(".preview_fullwidth").find(".profile-image img:first").attr('src', response);
                    jQuery("#photoimg").val('');
                    jQuery('#change_image_popup .modal-dialog button#close').trigger('click');
                }                    
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert('status Code:' + xhr.status + 'Error Message :' + thrownError);
            }
        });
    }

    jQuery('#change_image_popup .modal-dialog button#close').on('click', function(e){
        jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-selection,.imgareaselect-outer").css('display', 'none');
        jQuery(".imgareaselect-selection").parent().css('display', 'none');
        jQuery('#hdn-x1-axis').val("");
        jQuery('#hdn-y1-axis').val("");
        jQuery('#hdn-x2-axis').val("");
        jQuery('#hdn-y2-axis').val("");
        jQuery('#hdn-thumb-width').val("");
        jQuery('#hdn-thumb-height').val("");
    });
    /*Image Crop js*/

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

    jQuery('.menu-list').find('.social_share').on('click', function(){
       
        if (jQuery('body').find('.userpro-overlay').length==0) {
            jQuery('body').append('<div class="userpro-overlay"/><div class="userpro-overlay-inner social-sharing-popup"/>');
        }        
        var str = "action=socialshare_popup&resume_id=<?php echo get_query_var( 'wr-resume-id' ); ?>&wr_theme=<?php echo $wr_theme; ?>&wr_color=<?php echo $wr_color; ?>&wr_font=<?php echo $wr_font; ?>";  
        jQuery.ajax({
            url: userpro_ajax_url,
            data: str,
            dataType: 'JSON',
            type: 'POST',
            error: function(xhr, status, error){            
            },
            success:function(data){
                jQuery('body').find('.userpro-overlay-inner').html( data.response );
                userpro_responsive();
                userpro_chosen();
                userpro_fluid_videos();
                userpro_ajax_picupload();
                if(typeof(userpro_media_manager)=='function')
                {   
                    userpro_media_manager();
                }            
                userpro_overlay_center('.userpro-overlay-inner');
            }
        });        
    });

    <?php
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
            if(empty($_GET['survey-status'])) {
        ?>
        jQuery('#mobile_detect_popup').modal('show');
        jQuery(document).on('click', 'a.ok', function(e){
            jQuery('#mobile_detect_popup').modal('hide');
        });
        <?php
            }
    }   
    ?>

    jQuery(document).on('click', ".btnShareFB", function(e){    
        e.preventDefault();
        elem = jQuery(this);
        postToFeed(elem.prop('href'));
        return false;
    });
});

window.fbAsyncInit = function() {
FB.init({
  appId      : '<?php echo userpro_get_option("facebook_app_id"); ?>',
  xfbml      : true,
  version    : 'v2.8'
});
FB.AppEvents.logPageView();
};

(function(d, s, id){
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function postToFeed(url){    
    var obj = {method: 'feed', link: url, picture: "<?php echo GIYG_WR_BASEURL .'images/common/'.ucfirst(esc_attr( $wr_theme )).'.png'; ?>", name: 'Check out my NEW eye-popping career infographic'};
    function callback(response){}
    FB.ui(obj, callback);
}

//Reference: 
//http://www.onextrapixel.com/2012/12/10/how-to-create-a-custom-file-input-with-jquery-css3-and-php/
;(function($) {

  // Browser supports HTML5 multiple file?
  var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
      isIE = /msie/i.test( navigator.userAgent );

  $.fn.customFile = function() {

    return this.each(function() {

      var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
          $wrap = $('<div class="file-upload-wrapper">'),
          $input = $('<input type="text" class="file-upload-input" />'),
          // Button that will be used in non-IE browsers
          $button = $('<button type="button" class="file-upload-button">Choose File</button>'),
          // Hack for IE
          $label = $('<label class="file-upload-button" for="'+ $file[0].id +'">Choose File</label>');

      // Hide by shifting to the left so we
      // can still trigger events
      $file.css({
        position: 'absolute',
        left: '-9999px'
      });

      $wrap.insertAfter( $file )
        .append( $file, $input, ( isIE ? $label : $button ) );

      // Prevent focus
      $file.attr('tabIndex', -1);
      $button.attr('tabIndex', -1);

      $button.click(function () {
        $file.focus().click(); // Open dialog
      });

      $file.change(function() {

        var files = [], fileArr, filename;

        // If multiple is supported then extract
        // all filenames from the file array
        if ( multipleSupport ) {
          fileArr = $file[0].files;
          for ( var i = 0, len = fileArr.length; i < len; i++ ) {
            files.push( fileArr[i].name );
          }
          filename = files.join(', ');

        // If not supported then just take the value
        // and remove the path to just show the filename
        } else {
          filename = $file.val().split('\\').pop();
        }

        $input.val( filename ) // Set the value
          .attr('title', filename) // Show filename in title tootlip
          .focus(); // Regain focus

      });

      $input.on({
        blur: function() { $file.trigger('blur'); },
        keydown: function( e ) {
          if ( e.which === 13 ) { // Enter
            if ( !isIE ) { $file.trigger('click'); }
          } else if ( e.which === 8 || e.which === 46 ) { // Backspace & Del
            // On some browsers the value is read-only
            // with this trick we remove the old input and add
            // a clean clone with all the original events attached
            $file.replaceWith( $file = $file.clone( true ) );
            $file.trigger('change');
            $input.val('');
          } else if ( e.which === 9 ){ // TAB
            return;
          } else { // All other keys
            return false;
          }
        }
      });

    });

  };

  // Old browser fallback
  if ( !multipleSupport ) {
    $( document ).on('change', 'input.customfile', function() {

      var $this = $(this),
          // Create a unique ID so we
          // can attach the label to the input
          uniqId = 'customfile_'+ (new Date()).getTime(),
          $wrap = $this.parent(),

          // Filter empty input
          $inputs = $wrap.siblings().find('.file-upload-input')
            .filter(function(){ return !this.value }),

          $file = $('<input type="file" id="'+ uniqId +'" name="'+ $this.attr('name') +'"/>');

      // 1ms timeout so it runs after all other events
      // that modify the value have triggered
      setTimeout(function() {
        // Add a new input
        if ( $this.val() ) {
          // Check for empty fields to prevent
          // creating new inputs when changing files
          if ( !$inputs.length ) {
            $wrap.after( $file );
            $file.customFile();
          }
        // Remove and reorganize inputs
        } else {
          $inputs.parent().remove();
          // Move the input so it's always last on the list
          $wrap.appendTo( $wrap.parent() );
          $wrap.find('input').focus();
        }
      }, 1);

    });
  }

}(jQuery));

jQuery('input[type=file]').customFile(); 
</script>
