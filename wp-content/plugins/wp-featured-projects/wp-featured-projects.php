<?php
/*
	Plugin Name: WP Thumbnail Size
	Description: This Plugin will allow user to choose different sxed thumbnail per post on featured project page
	Author: Masha Vainblat
	Version: 1.0.0
*/

//Exit of accessed directly
	/*Will not all anyone except wordpress to use this file*/
	if ( ! defined('ABSPATH')){
		exit;
	}

	require_once ( plugin_dir_path(__FILE__) . 'wp-thumb-cpt.php' );
	// require_once ( plugin_dir_path(__FILE__) . 'wp-thumb-render_admin.php' );
	require_once ( plugin_dir_path(__FILE__) . 'wp-thumb-fields.php' );

?>