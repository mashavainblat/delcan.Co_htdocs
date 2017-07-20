<?php
/*-----------------------------------------------------------------------------------*/
/*	Create a new post type called portfolios
/*-----------------------------------------------------------------------------------*/

function thb_create_post_type_portfolios() {
	$slug = function_exists('ot_get_option') ? sanitize_title(ot_get_option('portfolio_slug','portfolio')) : 'portfolio';
	$labels = array(
		'name' => __( 'Portfolio','notio'),
		'singular_name' => __( 'Portfolio','notio' ),
		'rewrite' => array('slug' => __( 'portfolios','notio' )),
		'add_new' => _x('Add New', 'portfolio', 'notio'),
		'add_new_item' => __('Add New Portfolio','notio'),
		'edit_item' => __('Edit Portfolio','notio'),
		'new_item' => __('New Portfolio','notio'),
		'view_item' => __('View Portfolio','notio'),
		'search_items' => __('Search Portfolio','notio'),
		'not_found' =>  __('No portfolios found','notio'),
		'not_found_in_trash' => __('No portfolios found in Trash','notio'), 
		'parent_item_colon' => ''
  );
  
  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'menu_icon' => 'dashicons-schedule',
		'query_var' => true,
		'taxonomies' => array( 'post_tag' ),
		'rewrite' => array('slug' => $slug, 'with_front' => false),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor', 'excerpt', 'thumbnail', 'comments')
  ); 
  
  register_post_type('portfolio',$args);
  flush_rewrite_rules();
  
  $category_labels = array(
  	'name' => __( 'Project Categories', 'notio'),
  	'singular_name' => __( 'Project Category', 'notio'),
  	'search_items' =>  __( 'Search Project Categories', 'notio'),
  	'all_items' => __( 'All Project Categories', 'notio'),
  	'parent_item' => __( 'Parent Project Category', 'notio'),
  	'edit_item' => __( 'Edit Project Category', 'notio'),
  	'update_item' => __( 'Update Project Category', 'notio'),
  	'add_new_item' => __( 'Add New Project Category', 'notio'),
    'menu_name' => __( 'Project Categories', 'notio')
  ); 	
  
  register_taxonomy("project-category", 
  		array("portfolio"), 
  		array("hierarchical" => true, 
  				'labels' => $category_labels,
  				'show_ui' => true,
      		'query_var' => true,
  				'rewrite' => array( 'slug' => 'project-category' )
  ));
  
  /* Add Custom Columns */
  function thb_column_value($column_name, $id) {
  	if ($column_name == 'thbpid') echo $id;
  }
  function thb_column_add_clean($cols) {
  	$cols['thbpid'] = __('ID', 'notio');
  	return $cols;
  }

  add_filter("manage_portfolio_posts_custom_column", 'thb_column_value', 10, 2);
  add_filter("manage_portfolio_posts_columns", 'thb_column_add_clean', 10 );
}

/* Initialize post types */
add_action( 'after_setup_theme', 'thb_create_post_type_portfolios' );