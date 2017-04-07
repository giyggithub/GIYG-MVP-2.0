<?php

/*********** Shortcode: Team ************************************************************/
$tcvpb_elements['team_tc'] = array(
	'name' => esc_html__('Team', 'ABdev_revelance' ),
	'type' => 'block',
	'icon' => 'pi-team',
	'category' =>  esc_html__('Social', 'ABdev_revelance'),
	'attributes' => array(
		'style' => array(
			'description' => esc_html__('Style', 'ABdev_revelance'),
			'default' => 'style_1',
			'type' => 'select',
			'values' => array(
				'style_1' =>  esc_html__('Style 1', 'ABdev_revelance'),
				'style_2' => esc_html__('Style 2', 'ABdev_revelance'),
			),
		),
		'name' => array(
			'description' => esc_html__('Name', 'ABdev_revelance'),
		),
		'position' => array(
			'description' => esc_html__('Position', 'ABdev_revelance'),
		),
		'image' => array(
			'type' => 'image',
			'description' => esc_html__('Image URL', 'ABdev_revelance'),
		),
		'link' => array(
			'description' => esc_html__('Profile URL', 'ABdev_revelance'),
			'info' => esc_html__('Link to about page', 'ABdev_revelance'),
		),
		'modal' => array(
			'type' => 'checkbox',
			'description' => esc_html__('Use Modal Instead Link', 'ABdev_revelance'),
			'info' => esc_html__('Modal window will appear on click instead of following a link. Use content to add modal window content', 'ABdev_revelance'),
		),
		'mail' => array(
			'description' => esc_html__('E-mail address', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'facebook' => array(
			'description' => esc_html__('Facebook URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'twitter' => array(
			'description' => esc_html__('Twitter URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'linkedin' => array(
			'description' => esc_html__('Linkedin URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'googleplus' => array(
			'description' => esc_html__('Google+ URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'pinterest' => array(
			'description' => esc_html__('Pinterest URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'github' => array(
			'description' => esc_html__('Github URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'feed' => array(
			'description' => esc_html__('Feed URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'behance' => array(
			'description' => esc_html__('Behance URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'dribbble' => array(
			'description' => esc_html__('Dribbble URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'dropbox' => array(
			'description' => esc_html__('Dropbox URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'flickr' => array(
			'description' => esc_html__('Flickr URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'instagram' => array(
			'description' => esc_html__('Instagram URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'lastfm' => array(
			'description' => esc_html__('Last.fm URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'picasa' => array(
			'description' => esc_html__('Picasa URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'skype' => array(
			'description' => esc_html__('Skype URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'stumbleupon' => array(
			'description' => esc_html__('StumbleUpon URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'vimeo' => array(
			'description' => esc_html__('Vimeo URL', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'social_target' => array(
			'description' => esc_html__('Social Link Target', 'ABdev_revelance'),
			'default' => '_self',
			'type' => 'select',
			'values' => array(
				'_self' =>  esc_html__('Self', 'ABdev_revelance'),
				'_blank' => esc_html__('Blank', 'ABdev_revelance'),
			),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'social_under' => array(
			'type' => 'checkbox',
			'description' => esc_html__('Social icons under position', 'ABdev_revelance'),
			'info' => esc_html__('If enabled social icons will appear under position instead on image overlay.', 'ABdev_revelance'),
			'tab' => esc_html__('Icons', 'ABdev_revelance'),
		),
		'id' => array(
			'description' => esc_html__('ID', 'ABdev_revelance'),
			'info' => esc_html__('Additional custom ID', 'ABdev_revelance'),
			'tab' => esc_html__('Advanced', 'ABdev_revelance'),
		),
		'class' => array(
			'description' => esc_html__('Class', 'ABdev_revelance'),
			'info' => esc_html__('Additional custom classes for custom styling', 'ABdev_revelance'),
			'tab' => esc_html__('Advanced', 'ABdev_revelance'),
		),
	),
	'content' => '',
	'description' => esc_html__('Modal Content', 'ABdev_revelance' )
);
function tcvpb_team_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('team_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$return = '
		<div '.esc_attr($id_out).' class="tcvpb_team_member tcvpb_team_member_'.esc_attr($style).' '.esc_attr($class).'">';

	$social_links = '';
	if($twitter!='') $social_links .= '<a href="'.esc_url($twitter).'" target="'.esc_attr($social_target).'"><i class="entypo-twitter"></i></a>';
	if($linkedin!='') $social_links .= '<a href="'.esc_url($linkedin).'" target="'.esc_attr($social_target).'"><i class="entypo-linkedin"></i></a>';
	if($facebook!='') $social_links .= '<a href="'.esc_url($facebook).'" target="'.esc_attr($social_target).'"><i class="entypo-facebook"></i></a>';
	if($googleplus!='') $social_links.='<a href="'.esc_url($googleplus).'" target="'.esc_attr($social_target).'"><i class="entypo-googleplus"></i></a>';
	if($dribbble!='') $social_links.='<a href="'.esc_url($dribbble).'" target="'.esc_attr($social_target).'"><i class="entypo-dribbble"></i></a>';
	if($skype!='') $social_links.='<a href="'.esc_url($skype).'" target="'.esc_attr($social_target).'"><i class="entypo-skype"></i></a>';
	if($vimeo!='') $social_links.='<a href="'.esc_url($vimeo).'" target="'.esc_attr($social_target).'"><i class="entypo-vimeo"></i></a>';
	if($pinterest!='') $social_links.='<a href="'.esc_url($pinterest).'" target="'.esc_attr($social_target).'"><i class="entypo-pinterest"></i></a>';
	if($github!='') $social_links.='<a href="'.esc_url($github).'" target="'.esc_attr($social_target).'"><i class="entypo-github"></i></a>';
	if($feed!='') $social_links.='<a href="'.esc_url($feed).'" target="'.esc_attr($social_target).'"><i class="entypo-rss"></i></a>';
	if($behance!='') $social_links.='<a href="'.esc_url($behance).'" target="'.esc_attr($social_target).'"><i class="entypo-behance"></i></a>';
	if($dropbox!='') $social_links.='<a href="'.esc_url($dropbox).'" target="'.esc_attr($social_target).'"><i class="entypo-dropbox"></i></a>';
	if($flickr!='') $social_links.='<a href="'.esc_url($flickr).'" target="'.esc_attr($social_target).'"><i class="entypo-flickr"></i></a>';
	if($instagram!='') $social_links.='<a href="'.esc_url($instagram).'" target="'.esc_attr($social_target).'"><i class="entypo-instagram"></i></a>';
	if($lastfm!='') $social_links.='<a href="'.esc_url($lastfm).'" target="'.esc_attr($social_target).'"><i class="entypo-lastfm"></i></a>';
	if($picasa!='') $social_links.='<a href="'.esc_url($picasa).'" target="'.esc_attr($social_target).'"><i class="entypo-picasa"></i></a>';
	if($stumbleupon!='') $social_links.='<a href="'.esc_url($stumbleupon).'" target="'.esc_attr($social_target).'"><i class="entypo-stumbleupon"></i></a>';
	if($mail!='') $social_links .= '<a href="mailto:'.$mail.'"><i class="entypo-mail"></i></a>';

	if($style == 'style_1'){
		if(($social_links!='' && $social_under!=1) || $link!=''){
			$return .= '<div class="tcvpb_overlayed">
				<img src="'.esc_url($image).'" alt="'.esc_attr($name).'">
				<div class="tcvpb_overlay">
					<p>';
						if($social_under==1 || $social_links==''){
							if ($modal==1){
								$return .='<a class="tcvpb_team_member_link tcvpb_team_member_modal_link" href="'.esc_url($link).'"><i class="entypo-plus"></i></a>';
							}else{
								$return .='<a href="'.esc_url($link).'"><i class="entypo-link"></i></a>';
							}
						}
						else{
							$return .= $social_links;
						}
					$return .= '</p>
				</div>
			</div>';
		}
		else{
			$return.= '<img src="'.esc_url($image).'" alt="'.esc_attr($name).'">';
		}
		$return .= '<a class="tcvpb_team_member_link'.(($modal==1)?' tcvpb_team_member_modal_link':'').'" href="'.esc_url($link).'">
			<span class="tcvpb_team_member_name">'.esc_attr($name).'</span>
			<span class="tcvpb_team_member_position">'.esc_html($position).'</span>
		</a>';

		if($modal == 1){
			$return .= '
				<div class="tcvpb_team_member_modal">
					<h4 class="tcvpb_team_member_name">'.esc_html($name).'</h4>
					<p class="tcvpb_team_member_position">'.esc_html($position).'</p>
					<div class="tcvpb_container">
						<div class="tcvpb_column_tc_span6">
							<img src="'.esc_url($image).'" alt="'.esc_attr($name).'">
						</div>
						<div class="tcvpb_column_tc_span6">
							'.do_shortcode($content).'
						</div>
					</div>
					<div class="tcvpb_team_member_modal_close">X</div>
				</div>';
		}
		else{
			$return .= '
				<p>'.$content.'</p>
			';
		}

		if($social_under==1){
			$return .= '<div class="tcvpb_team_member_social_under">'.$social_links.'</div>';
		}
	}

	else{
		if(($social_links!='' && $social_under!=1) || $link!=''){
			$return .= '<div class="tcvpb_overlayed">
				<img src="'.esc_url($image).'" alt="'.esc_attr($name).'">
				<div class="tcvpb_overlay">
					<p>';
						if($social_under==1 || $social_links==''){
							if ($modal==1){
								$return .='<a class="tcvpb_team_member_link tcvpb_team_member_modal_link" href="'.esc_url($link).'"><i class="entypo-plus"></i></a>';
							}else{
								$return .='<a href="'.esc_url($link).'"><i class="entypo-link"></i></a>';
							}
						}
						else{
							$return .= $social_links;
						}
					$return .= '</p>';
					$return .= '<div class="tcvpb_overlay_memeber">
									<a class="tcvpb_team_member_link'.(($modal==1)?' tcvpb_team_member_modal_link':'').'" href="'.esc_url($link).'">
										<span class="tcvpb_team_member_name">'.esc_attr($name).'</span>
										<span class="tcvpb_team_member_position">'.esc_html($position).'</span>
									</a>
								</div>';
					$return .= '
				</div>
			</div>';
		}
		else{
			$return.= '<img src="'.esc_url($image).'" alt="'.esc_attr($name).'">';
		}

		if($modal == 1){
			$return .= '
				<div class="tcvpb_team_member_modal">
					<h4 class="tcvpb_team_member_name">'.esc_attr($name).'</h4>
					<p class="tcvpb_team_member_position">'.esc_html($position).'</p>
					<div class="tcvpb_container">
						<div class="tcvpb_column_tc_span6">
							<img src="'.esc_url($image).'" alt="'.esc_attr($name).'">
						</div>
						<div class="tcvpb_column_tc_span6">
							'.do_shortcode($content).'
						</div>
					</div>
					<div class="tcvpb_team_member_modal_close">X</div>
				</div>';
		}
		else{
			$return .= '
				<p>'.$content.'</p>
			';
		}

		if($social_under==1){
			$return .= '<div class="tcvpb_team_member_social_under">'.$social_links.'</div>';
		}
	}

		$return .= '</div>';

	return $return;
}
