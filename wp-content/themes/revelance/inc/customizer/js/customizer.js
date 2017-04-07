(function($){

	function dynamic_css_targets(){
		var css_styles_targets = '<style id="customizer_dynamic_color_css" type="text/css"></style>'+
			'<style id="customizer_dark_scheme_css" type="text/css"></style>'+
			'<style id="customizer_custom_css" type="text/css"></style>';
		if(!$('#customizer_dynamic_color_css').length){
			$('#main_css-inline-css').after(css_styles_targets);
		}
	}
	
	wp.customize('custom_css', function(value){
		value.bind(function(newval){
			dynamic_css_targets();
			$('#customizer_custom_css').text(newval);
		});
	});

	wp.customize('header_logo', function(value){
		value.bind(function(newval){
			$('#main_logo').attr('src', newval);
		});
	});
	
	wp.customize('sidebars', function(value){
		value.bind(function(newval){
		});
	});
	
	wp.customize('inversed_header_logo', function(value){
		value.bind(function(newval){
			$('#inversed_logo').attr('src', newval);
		});
	});
	
	wp.customize('main_color', function(value){
		value.bind(function(newval){
			dynamic_css_targets();
			var new_colors = '.dnd_section_dd header h3:after,.tcvpb_section_tc header h3:after{color: '+newval+';}.dnd_section_dd.pattern_overlayed a,.dnd_section_dd.color_overlayed a,.tcvpb_section_tc.pattern_overlayed a,.tcvpb_section_tc.color_overlayed a{color: '+newval+';}.dnd_blockquote p small,.tcvpb_blockquote p small{color: '+newval+';}.dnd_team_member .dnd_team_member_position,.tcvpb_team_member .tcvpb_team_member_position{color: '+newval+';}.dnd_team_member .dnd_team_member_social_under a:hover i,.tcvpb_team_member .tcvpb_team_member_social_under a:hover i{color: '+newval+';}.dnd_pricing-table-1.dnd_popular-plan .dnd_pricebox_name,.tcvpb_pricing-table-1.tcvpb_popular-plan .tcvpb_pricebox_name{background: '+newval+';}.dnd_pricing-table-2.dnd_popular-plan .dnd_pricebox_name,.tcvpb_pricing-table-2.tcvpb_popular-plan .tcvpb_pricebox_name{background: '+newval+';}.dnd_pricing-table-2.dnd_popular-plan .dnd_pricebox_feature:last-of-type,.tcvpb_pricing-table-2.tcvpb_popular-plan .tcvpb_pricebox_feature:last-of-type{border-bottom: 4px solid '+newval+';}.dnd_service_box .dnd_icon_boxed,.tcvpb_service_box .tcvpb_icon_boxed{background: '+newval+';}.dnd_service_box.dnd_service_box_round_stroke:hover a.dnd_icon_boxed,.tcvpb_service_box.tcvpb_service_box_round_stroke:hover a.tcvpb_icon_boxed{border: 1px solid '+newval+';background: '+newval+';}.dnd_service_box.dnd_service_box_round_aside h3:hover,.tcvpb_service_box.tcvpb_service_box_round_aside h3:hover{color: '+newval+';}.dnd_service_box.dnd_service_box_aside_small h3:hover,.tcvpb_service_box.tcvpb_service_box_aside_small h3:hover{color: '+newval+';}.dnd_service_box.dnd_service_box_aside_small .dnd_icon_boxed i,.tcvpb_service_box.tcvpb_service_box_aside_small .tcvpb_icon_boxed i{color: '+newval+';}.dnd_service_box_square .dnd_icon_boxed,.tcvpb_service_box_square .tcvpb_icon_boxed {background:none;}.dnd_service_box_square:hover a.dnd_icon_boxed i,.tcvpb_service_box_square:hover a.tcvpb_icon_boxed i{color: '+newval+';}.dnd_service_box.dnd_service_box_round_stroke:hover a.dnd_icon_boxed,.tcvpb_service_box.tcvpb_service_box_round_stroke:hover a.tcvpb_icon_boxed{background: '+newval+'; border: 1px solid '+newval+';}.dnd_service_box_square:hover a.dnd_icon_boxed i,.tcvpb_service_box_square:hover a.tcvpb_icon_boxed i{color:'+newval+';}.dnd-button_green,.tcvpb-button_green{background: '+newval+';border: 1px solid '+newval+';}.dnd-button_dark:hover,.tcvpb-button_dark:hover{background: '+newval+';border: 1px solid '+newval+';}.dnd-button_light:hover,.tcvpb-button_light:hover{border: 1px solid '+newval+';color: '+newval+' !important;}.main_title:after{color: '+newval+';}.color_highlight{color: '+newval+';}.dnd_dropcap,.tcvpb_dropcap{background: '+newval+';}.section_color_background{background: '+newval+';}.leading_line:after{background: '+newval+';}#abdev_main_header.menu_over_slider .menu_social:hover{color: '+newval+';border-color: '+newval+';}nav > ul > li a:hover{color: '+newval+';}nav .menu_social:hover{color: '+newval+';border-color: '+newval+';}nav > ul > .current-menu-item > a,nav > ul > .current-post-ancestor > a,nav > ul > .current-menu-ancestor > a{color: '+newval+';}#abdev_main_header.menu_over_slider nav > ul > li a:hover{color: '+newval+';}.tp-bullets.simplebullets.round .bullet:hover,.tp-bullets.simplebullets.round .bullet.selected{background-color:'+newval+';}.tp-caption.revelance-button:hover{border-color: '+newval+';background: '+newval+';}.dnd-toggle .ui-accordion-header,.tcvpb-toggle .ui-accordion-header {border: 1px solid '+newval+';background: '+newval+';}.dnd-toggle .ui-accordion-content,.tcvpb-toggle .ui-accordion-content {border: 1px solid '+newval+';}.dnd-tabs .ui-tabs-nav li a:hover,.tcvpb-tabs .nav-tabs li a:hover{color:'+newval+';}.dnd-tabs .ui-tabs-nav li.ui-tabs-active:before,.tcvpb-tabs .nav-tabs li.active:before{background: '+newval+';border-left: 1px solid '+newval+';border-right: 1px solid '+newval+';}.dnd-tabs-style2 .ui-tabs-nav li,.tcvpb-tabs-style2 .nav-tabs li{border-top: 1px solid '+newval+';border-left: 1px solid '+newval+';border-right: 1px solid '+newval+';background: '+newval+';}.dnd-tabs-style2 .ui-tabs-nav li:hover a,.tcvpb-tabs-style2 .nav-tabs li:hover a{color:#505050;}.dnd-tabs-style2 .ui-tabs-nav li.ui-tabs-active:before,.tcvpb-tabs-style2 .nav-tabs li.active:before{background: #fff;border-top: 1px solid '+newval+';border-left: 1px solid '+newval+';border-right: 1px solid'+newval+';}.dnd-tabs-style2 .ui-tabs-nav li:last-child,.tcvpb-tabs-style2 .nav-tabs li:last-child{border-right: 1px solid '+newval+';}.dnd-tabs-style2 .dnd-tabs-wrapper,.tcvpb-tabs-style2 .tab-content{border: 1px solid '+newval+';}.latest_news_shortcode_content h5{color: '+newval+';}.latest_news_shortcode_content h5 a{color: '+newval+';}.ABdev_overlayed .ABdev_overlay { background:'+newval+';}.ABdev_overlayed .ABdev_overlay p a:hover{color: '+newval+';}.dnd-callout_box,.tcvpb-callout_box{border-left: 6px solid '+newval+';}.dnd-callout_box_no_button,.tcvpb-callout_box_no_button{border-top: 6px solid '+newval+';}.ABt_testimonials_slide .testimonial_big .source,.ABt_testimonials_slide .testimonial_big .source a{color: '+newval+';}.dnd_meter .dnd_meter_percentage,.tcvpb_meter .tcvpb_meter_percentage {background: '+newval+' !important;}.dnd_stats_excerpt .dnd_stats_number,.dnd_stats_excerpt .dnd_stats_number_sign,.tcvpb_stats_excerpt .tcvpb_stats_number,.tcvpb_stats_excerpt .tcvpb_stats_number_sign{color: '+newval+';}.dnd_stats_excerpt i,tcvpb_stats_excerpt i {color: '+newval+';}.dnd_stats_excerpt_style_color,.tcvpb_stats_excerpt_style_color{background: '+newval+';}.dnd_stats_excerpt_style_color .dnd_stats_number, .dnd_stats_excerpt_style_color .dnd_stats_number_sign,.tcvpb_stats_excerpt_style_color .tcvpb_stats_number, .tcvpb_stats_excerpt_style_color tcvpb_stats_number_sign{color:#fff;}.more-link:hover{background: '+newval+';border: 1px solid '+newval+';}.comment .reply a:hover,.comment .edit-link a:hover{color: '+newval+';}#single_post_pagination .prev a,#single_post_pagination .next a{color: #fff;background: '+newval+';}#blog_pagination .page-numbers:hover{background: '+newval+';color: #fff;border-color: '+newval+';}#blog_pagination .page-numbers.current{background: '+newval+';color: #fff;border-color: '+newval+';}#inner_post_pagination span{border-color: '+newval+';background: '+newval+';color: #fff;}#inner_post_pagination a:hover span{color: #fff;background: '+newval+';border-color: '+newval+';}.wpcf7-submit{background: '+newval+' !important;}#abdev_contact_form_submit:hover{background: '+newval+' !important;}aside .widget a:hover{color: '+newval+';}.tagcloud a:hover{background: '+newval+';border: 1px solid '+newval+';color: #fff !important;}.ab-tweet-navigation a{background: '+newval+';color: #fff !important;}.portfolio_item h4 a:hover,.portfolio_item:hover h4 a{color: '+newval+';}#filters li:hover a,#filters li a.selected{background: '+newval+';color: #fff;border: 1px solid '+newval+';}#page404 .big_404{color: '+newval+';}#abdev_back_to_top:hover{background-color: '+newval+';border-color: '+newval+';}.dnd_section_dd header h3:after,.tcvpb_section_tc header h3:after{color: '+newval+';}';
			$('#customizer_dynamic_color_css').text(new_colors);

		});
	});

	wp.customize('dark_scheme', function(value){
		value.bind(function(newval){
			dynamic_css_targets();
			if(newval){
				var dark_colors = 'body{color: #676767;background:#222222;}h1, h2, h3, h4, h5, h6{color: #676767;}.dnd_section_dd header h3,.tcvpb_section_tc header h3,.main_title span {color: #676767;}.dnd_section_dd header h3:before,.tcvpb_section_tc header h3:before,.main_title:before{border-color:#676767;}#abdev_main_header{background:#111;}nav > ul > li a{color:#676767;}nav > ul ul{background: #333;border: none;}nav > ul ul ul{border: none;}nav > ul ul li:hover{background: #222;}nav .menu_social{border-color:#676767;}.dnd_service_box.dnd_service_box_round_aside h3,.dnd_service_box.dnd_service_box_aside_small h3,.tcvpb_service_box.tcvpb_service_box_round_aside h3,.tcvpb_service_box.tcvpb_service_box_aside_smallh3{color:#676767;}input[type="text"], input[type="password"], input[type="email"], textarea {color:#222;background:#676767;border: 2px solid #919191;}::-webkit-input-placeholder {color: #222;}:-moz-placeholder {color: #222;}::-moz-placeholder {color: #222;}:-ms-input-placeholder {color: #222;}.dnd_service_box.dnd_service_box_round_stroke:hover .dnd_icon_boxed,.tcvpb_service_box.tcvpb_service_box_round_stroke:hover .tcvpb_icon_boxed {box-shadow: 0 0 0 5px #222 inset;}.dnd_team_member_modal,.tcvpb_team_member_modal{background:#222;}.dnd_team_member_modal h4, .dnd_team_member_modal .dnd_team_member_position,.tcvpb_team_member_modal h4, .tcvpb_team_member_modal .tcvpb_team_member_position{color:#676767;}aside .widget h3{color:#676767;}.post_meta i{color:#676767;}.widget > ul li a{color:#676767;}.more-link {color: #676767;border: 1px solid #676767;}.post_wrapper {border-bottom: 1px solid #333;}#blog_pagination .page-numbers {color: #676767;border: 1px solid #676767;}#inner_post_pagination a span{color: #676767;border: 1px solid #676767;}#comments_section,.comment-text,#respond{border-color:#333;}#respond .comment-reply-title{color:#676767;}.dnd-accordion .ui-accordion-header,.tcvpb-accordion .ui-accordion-header{background:#333;border-color:#333;color:#676767;}.dnd-accordion .ui-accordion-content,.tcvpb-accordion .ui-accordion-content{border-color:#333;}.dnd-tabs .ui-tabs-nav li a,.tcvpb-tabs .ui-tabs-nav li a{background:#333;color:#676767;}.dnd-tabs .ui-tabs-nav li,.dnd-tabs .ui-tabs-nav li:last-child,.dnd-tabs .dnd-tabs-wrapper,.tcvpb-tabs .ui-tabs-nav li,.tcvpb-tabs .ui-tabs-nav li:last-child,.tcvpb-tabs .tcvpb-tabs-wrapper{border-color:#333!important;}.dnd-tabs .ui-tabs-nav li.ui-tabs-active:after,.tcvpb-tabs .nav-tabs li.active:after{display:none;}.dnd-tabs .ui-tabs-nav li.ui-tabs-active a,.tcvpb-tabs .nav-tabs li.active a{color:#fff;}.dnd-tabs-style2 .ui-tabs-nav li.ui-tabs-active:before,.tcvpb-tabs-style2 .nav-tabs li.active:before{display:none;}.dnd-button_light,.tcvpb-button_light {border: 1px solid #676767;color: #676767 !important;}.dnd_meter,.tcvpb_meter{background:#333 !important;}.dnd_progress_bar_balloon .dnd_meter .dnd_meter_percentage span,.tcvpb_progress_bar_balloon .tcvpb_meter .tcvpb_meter_percentage span{background:#333;color:#999;}.dnd_progress_bar_balloon .dnd_meter .dnd_meter_percentage span:after,.tcvpb_progress_bar_balloon .tcvpb_meter .tcvpb_meter_percentage span:after {border-top-color:#333;}.dnd-callout_box,.tcvpb-callout_box{background:#333;color:#676767;}.dnd-callout_box_title,.tcvpb-callout_box_title{color:#676767;}';
				$('#customizer_dark_scheme_css').text(dark_colors);
			}
			else{
				$('#customizer_dark_scheme_css').text('');
			}

		});
	});

	wp.customize('bg_color', function(value){
		value.bind(function(newval){
			dynamic_css_targets();
			var new_colors = 'body{ background: '+newval+';} ';
			$('#customizer_dynamic_color_css').text(new_colors);
		});
	});
	
	wp.customize('blogname', function(value){
		value.bind(function(newval){
			$('#main_logo_textual').html(newval);
		});
	});
	
	wp.customize('blogdescription', function(value){
		value.bind(function(newval){
			$('#main_logo_tagline').html(newval);
		});
	});
	

	
})(jQuery);