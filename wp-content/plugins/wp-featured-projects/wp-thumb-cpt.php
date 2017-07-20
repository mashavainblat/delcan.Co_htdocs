<?php 

function thumbnail_size_register_post_type(){

		/*variable for single and plural version of our name*/
		$singular = 'Thumbnail Size';
		$plural = 'Thumbnail Sizes';

		/*associative array of all our labels*/
		$labels = array(
			'name' 								=> $plural,
			'singular' 							=> $singular,
			'add_name' 							=> 'Add New',
			'add_new_item' 						=> 'Add New ' . $singular,
			'edit' 								=> 'Edit',
			'edit_item' 						=> 'Edit ' . $singular,
			'new_item' 							=> 'New ' . $singular,
			'view' 								=> 'View ' . $singular,
			'view_item' 						=> 'View ' . $singular,
			'search_term'						=> 'Search ' . $plural,
			'parent' 							=> 'Parent ' . $singular,
			'not_found' 						=> 'No ' . $plural . ' found',
			'not_found_in_trash' 				=> 'No ' . $plural . ' in Trash'
		);
		/*end $labels array*/

		/*An array of arguments*/
		$args = array(
			'labels'			 => $labels,
			'public'             => true,
			'publicly_queryable' => true, /*do you want this post type to be part of WP loop*/
			'exclude_from_search'=> false, /*if serach functionality built it, do you want to exclude this from post type showing up in search results*/
			'show_in_nav_menus'	 => true, /*visible*/
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_admin_bar'	 => true,
			'menu_icon'			 => 'dashicons-welcome-view-site',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'book' ),
			'capability_type'    => 'post', /*any user role has access to this custom post type*/
			'has_archive'        => true,
			'hierarchical'       => false,
			// 'taxonomies'		 => array('category', 'post_tag'),
			'menu_position'      => 4,
				/*create custom capabilities for diff user roles in WP*/
				/*they are not associated to user roles*/
				/*user roles have to be edited and added to user roles*/
			// 'capabilities'			 => array(),
			'rewrite'						 => array(
				'slug' => 'projects', /*permalinks /postTypesTitles*/
				'with_front' => true,
				'pages' => true, /*easy pagination set it*/
				'feeds' => false, /* part of rss feed */
			),
			/**/
			'supports'=> array( 
				'title', 
				'editor', 
				'author', 
				'thumbnail', 
				'comments',
				'custom-fields')
		);
		/* end of $args array*/

		register_post_type('thumbnail-size', $args);
	
	}
	// add_action('init', 'thumbnail_size_register_post_type');


/*
	'featured_image' - Default is Featured Image.
	'set_featured_image' - Default is Set featured image.
	'remove_featured_image' - Default is Remove featured image.
	'use_featured_image' - Default is Use as featured image.
*/



/********************************************************************/
/* THIS IS WHAT YOU WANT*/

/* CUSTOM TAXONOMY */
/* SIMILAR TO CATEGORY */

	function thumbnail_size_register_taxonomy(){

		$plural = 'Thumbnail Sizes';
		$singular = 'Thumbnail Size';

		/* getting passed into args */
		/* requires an array of arguments */

		/* Hierarchical taxonomy*/
		$labels = array(
			'name' 							=> $plural, /*generic taxonomy name MUST be plural*/
			'singular' 						=> $singular,
			'search_items' 					=> 'Search ' . $plural,
			'popular_items'					=> 'Popular ' . $plural,
			'all_items'						=> 'All ' . $plural,
			'parent_item'					=> 'Parent Type',
			'parent_item_colon'				=> 'Parent Type: ',
			'edit_item'						=> 'Edit ' . $singular,
			'update_item'					=> 'Update ' . $singular,
			'add_new_item'					=> 'Add New ' . $singular,
			'new_item_name'					=> 'New ' . $singular . ' Name',
			'seperate_items_with_commas' 	=> 'Seperate ' . $plural . ' with commas',
			'add_or_remove_items'			=> 'Add or remove ' . $plural,
			'choose_from_most_used'			=> 'Choose from most used ' . $plural,
			'menu_name'						=>	$plural, /*left side menu*/
			'not_found' 					=> 'No ' . $plural . ' found'
		);
		$args = array(
			/* hierarchical only accepts boolean value */
			'hierarchical'					=> false, /*do you want taxonomy to have parent-child relationship like categories or taxonomy. yes we want parent-child relationship*/
			'labels' 						=> $labels, /*include labels we decided in array above ^ */
			'show_ui' 						=> true,
			'show_admin_column' 			=> true,
			'update_count_callback' 		=> '_update_post_term_count', /**/
			'query_var'						=> true, /* if want to directly query these custom taxonomies, needs to be defined */
			'rewrite' 						=> array('slug' => $singular)
				// mysite.com/development
				// mysite.com/type/development (url slugs aka permalink slug)
		);

		/*parameters: 1 taxonomy name-string, 2. object type -- which post type we want to add this to, 3.  */
		// register_taxonomy('thumbnail-size', 'featured-project', $args);
		register_taxonomy('thumbnail-size', array('post'), $args);

	}

/*registereing taxonomy to jobs custom post type passing arguemtns and adding add action so WP uses and runs our function*/
	add_action('init', 'thumbnail_size_register_taxonomy');

?>