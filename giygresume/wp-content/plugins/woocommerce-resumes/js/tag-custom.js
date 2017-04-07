// Dashboard Height 
jQuery(document).ready(function() {  
  
	var height = jQuery(document).height() - jQuery('#abdev_main_header').height();
	jQuery('.fullwidth-sidebar, .design_change li .sub-menu-list').height(height);
	var themeHeight = jQuery(window).height()-jQuery('#abdev_main_header').height();
	jQuery('.design_change li .theme_list').height(themeHeight);

	jQuery(function() {
	    jQuery('[data-toggle="tooltip"]').tooltip();
	})

	jQuery(window).resize(function() {
	    var height = jQuery(document).height() - jQuery('#abdev_main_header').height();
	    jQuery('.fullwidth-sidebar, .design_change li .sub-menu-list').height(height);
	    var themeHeight = jQuery(window).height()-jQuery('#abdev_main_header').height();
	    jQuery('.design_change li .theme_list').height(themeHeight);
	});

});
