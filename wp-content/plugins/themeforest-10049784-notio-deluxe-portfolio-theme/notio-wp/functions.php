<?php

/*-----------------------------------------------------------------------------------

	Here we have all the custom functions for the theme
	Please be extremely cautious editing this file.
	You have been warned!

-------------------------------------------------------------------------------------*/

// Define Theme Name for localization
define('THB_THEME_ROOT', esc_url(get_template_directory_uri()));
define('THB_THEME_ROOT_ABS', get_template_directory());

// Option-Tree Theme Mode
require get_template_directory() .'/inc/admin/option-tree/init.php';

// Theme Admin
require get_template_directory() .'/inc/admin/welcome/fuelthemes.php';

// TGM Plugin Activation Class
require get_template_directory() .'/inc/admin/plugins/plugins.php';

// Imports
require get_template_directory() .'/inc/admin/imports/import.php';

// Ajax
require get_template_directory() .'/inc/ajax.php';

// Add Menu Support
require get_template_directory() .'/inc/wp3menu.php';

// Enable Sidebars
require get_template_directory() .'/inc/sidebar.php';

// Related Posts
require get_template_directory() .'/inc/related.php';

// Post Types
require get_template_directory() .'/inc/posttypes.php';

// Misc 
require get_template_directory() .'/inc/misc.php';

// Widgets
require get_template_directory() .'/inc/widgets.php';

// Script Calls
require get_template_directory() .'/inc/script-calls.php';

// Portfolio RElated
require get_template_directory() .'/inc/portfolio-related.php';

// CSS Output of Theme Options
require get_template_directory() .'/inc/selection.php';

// WPML Support
require get_template_directory() .'/inc/wpml.php';

// Twitter oAuth
require get_template_directory() .'/inc/thb-twitter-api.php';
require get_template_directory() .'/inc/thb-twitter-helper.php';

// WooCommerce Settings specific for theme
require get_template_directory() .'/inc/woocommerce.php';

// Visual Composer Integration
require get_template_directory() .'/inc/visualcomposer.php';
