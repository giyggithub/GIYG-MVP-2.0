<?php
if ( function_exists( 'register_sidebar' ) ) {

	$sidebars=get_theme_mod('sidebars','');
	if($sidebars!=''){
		$sidebars = explode('|', $sidebars);
		$i = 0;
		foreach($sidebars as $sidebar){
			$i++;
			$sidebar_class = ABdev_revelance_name_to_class($sidebar);
			register_sidebar(array(
				'name'=>$sidebar,
				'id' => 'sidebar-'.$i,
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<div class="sidebar-widget-heading"><h3>',
				'after_title' => '</h3></div>',
			));
		}
	}


	register_sidebar( array (
		'name' => __( 'Primary Sidebar', 'ABdev_revelance'),
		'id' => 'primary-widget-area',
		'description' => __( 'The Primary Widget Area', 'ABdev_revelance'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<div class="sidebar-widget-heading"><h3>',
		'after_title' => '</h3></div>',
	) );


	register_sidebar( array (
		'name' => __( 'Search Results Sidebar', 'ABdev_revelance' ),
		'id' => 'search-results-widget-area',
		'description' => __( 'Search Results Sidebar', 'ABdev_revelance'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class=sidebar-widget-heading>',
		'after_title' => '</h3>',
	) );


}