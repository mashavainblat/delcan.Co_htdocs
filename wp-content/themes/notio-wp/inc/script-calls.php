<?php

// Main Styles
function main_styles() {	
	global $post;
	
	// Enqueue 
	wp_enqueue_style("thb-app", THB_THEME_ROOT .  "/assets/css/app.css", null, esc_attr(Thb_Theme_Admin::$thb_theme_version));
	
	if ( $_SERVER['HTTP_HOST'] !== 'newnotio.fuelthemes.net') {
		wp_enqueue_style('thb-style', get_stylesheet_uri(), null, null);	
	}
	wp_enqueue_style( 'thb-google-fonts', thb_google_webfont() );
	wp_add_inline_style( 'thb-app', thb_selection() );
	
	if ( $post ) {
		if ( has_shortcode($post->post_content, 'contact-form-7') && function_exists( 'wpcf7_enqueue_styles' ) ) {
			wpcf7_enqueue_styles();
		}
	}
}

add_action('wp_enqueue_scripts', 'main_styles');

// Main Scripts
function register_js() {
	if (!is_admin()) {
		global $post;
		$thb_api_key = ot_get_option('map_api_key');
		
		// Register 
		wp_enqueue_script('thb-vendor', THB_THEME_ROOT . '/assets/js/vendor.min.js', array('jquery'), esc_attr(Thb_Theme_Admin::$thb_theme_version), TRUE);
		wp_enqueue_script('thb-app', THB_THEME_ROOT . '/assets/js/app.min.js', array('jquery', 'thb-vendor'), esc_attr(Thb_Theme_Admin::$thb_theme_version), TRUE);
		
		// Enqueue
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
			wp_enqueue_script('comment-reply');
		}
		if ( $post ) {
			if ( has_shortcode($post->post_content, 'thb_map_parent') ) {
				wp_enqueue_script('gmapdep', 'https://maps.google.com/maps/api/js?key='.esc_attr($thb_api_key).'', false, null, false);
			}
			
			if ( has_shortcode($post->post_content, 'contact-form-7') && function_exists( 'wpcf7_enqueue_scripts' ) ) {
				wpcf7_enqueue_scripts();
			}
		}
		
		// Typekit 
		if ($typekit_id = ot_get_option('typekit_id')) {
			wp_enqueue_script('thb-typekit', 'https://use.typekit.net/'.$typekit_id.'.js', array(), NULL, FALSE );
			wp_add_inline_script( 'thb-typekit', 'try{Typekit.load({ async: true });}catch(e){}' );
		}
		
		wp_enqueue_script('thb-vendor');
		wp_enqueue_script('thb-app');
		wp_localize_script( 'thb-app', 'themeajax', array( 
			'url' => admin_url( 'admin-ajax.php' ),
			'l10n' => array (
				'loading' => esc_html__("Loading ...", 'notio'),
				'nomore' => esc_html__("No More Posts", 'notio'),
				'added' => esc_html__("Added To Cart", 'notio'),
				'copied' => esc_html__("Copied", 'notio'),
				//'added_svg' => thb_load_template_part('assets/svg/arrows_check.svg')
			),
			'arrows' => array (
				'left' => thb_load_template_part('assets/svg/arrows_slim_left.svg'),
				'right' => thb_load_template_part('assets/svg/arrows_slim_right.svg')	
			)
		) );
	}
}
add_action('wp_enqueue_scripts', 'register_js');

/* WooCommerce */
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
/* WooCommerce */
if(thb_wc_supported()) {
	function thb_woocommerce_scripts() {
		wp_dequeue_script( 'prettyPhoto' );
		wp_dequeue_script( 'prettyPhoto-init' );
	}
	add_action('wp_enqueue_scripts', 'thb_woocommerce_scripts');
}
/* De-register Contact Form 7 styles */
remove_action( 'wp_enqueue_scripts', 'wpcf7_enqueue_styles' );