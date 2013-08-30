<?php
/**
* ADD CUSTOM THEME FUNCTIONS HERE -----
*
*/

//Harness helper filter to create meta boxes for post types
//add_filter( 'prso_theme_add_meta_boxes', 'theme_add_meta_boxes' );
function theme_add_meta_boxes( $meta_box_data ) {
	
	//Add page widget to 'page' post type
	$meta_box_data[] = array(
		'cja_page_widget',
	    'Page Widget', 
	    'page',
	    array(
	        'name'          => 'Page Widget',
	        'label'         => 'Widget Content',
	        'description'   => '',
	        'type'          => 'wysiwyg'
	    )
	);
	
	return $meta_box_data;
}