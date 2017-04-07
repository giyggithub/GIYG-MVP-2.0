var getUrlParameter = function getUrlParameter(sParam) {
	var sPageURL = decodeURIComponent(window.location.search.substring(1)),
	   sURLVariables = sPageURL.split('&'),
	   sParameterName,
	   i;

	for (i = 0; i < sURLVariables.length; i++) {
		sParameterName = sURLVariables[i].split('=');

		if (sParameterName[0] === sParam) {
			return sParameterName[1] === undefined ? true : sParameterName[1];
		}
	}
};

jQuery(document).ready(function() {
    var survey_status = getUrlParameter('survey-status');
    var survey_form_status = getUrlParameter('survey-form-status');

    if( ( jQuery('[class^="userpro"]').length > 0 || jQuery('[class^="tip-sidebar"]').length || survey_form_status == "unfinished") ){
		var up_link  = document.createElement('link');
		up_link.id   = 'userpro_min';
		up_link.rel  = 'stylesheet';
		up_link.type = 'text/css';
		up_link.href = up_values.up_url+'css/userpro.min.css';
		up_link.media = 'all';
		document.getElementsByTagName("head")[0].appendChild(up_link);
		jQuery.getScript(up_values.up_url+"scripts/scripts.min.js");
    }

	jQuery(document).on('click', "*[class^='tip-sidebar'],*[class^='tip-sidebar'] a", function(e){        
		if (jQuery('body').find('.userpro-overlay').length==0) {
			jQuery('body').append('<div class="userpro-overlay"/><div class="userpro-overlay-inner"/>');
		}
		var id = jQuery(this).attr('id');
		var str = 'action=dashboard_tips_popup&id='+id;  
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
    
    
	if( survey_status == "success" ) {
		if (jQuery('body').find('.userpro-overlay').length==0) {
		  jQuery('body').append('<div class="userpro-overlay"/><div class="userpro-overlay-inner"/>');
		}
		var id = 'survey_success';
		var str = 'action=success_popup&id='+id;  
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
	}

	if( survey_form_status == "unfinished" ) {
		if (jQuery('body').find('.userpro-overlay').length==0) {
		  jQuery('body').append('<div class="userpro-overlay"/><div class="userpro-overlay-inner"/>');
		}
		var id = 'survey_unfinished';
		var str = 'action=survey_form_incompletion_popup&id='+id;  
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
	}       
    
    
	jQuery('.menu-list').find('.upgrade_message').on('click', function(){
	  
		if (jQuery('body').find('.userpro-overlay').length==0) {
		  jQuery('body').append('<div class="userpro-overlay"/><div class="userpro-overlay-inner download_popup"/>');
		}        
		var str = 'action=download_popup';  
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
    
	jQuery(document).on('click', '.userpro-overlay, a.continue', function(e){
		jQuery('.userpro-overlay').fadeOut(function(){jQuery('.userpro-overlay').remove()});
		jQuery('.userpro-overlay-inner').fadeOut(function(){jQuery('.userpro-overlay-inner').remove()});
	});
    
});
