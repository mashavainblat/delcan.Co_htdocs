<?php 

function learningWordPress_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'learningWordPress_resources');



// Theme setup 
function delcanCo2017_setup(){
	
	// Nav menus
	// registering theme locations
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer menu')
	));

	//Add featured images support
	add_theme_support('post-thumbnails');
	// add_image_size('small-thumbnail', 960, 540, true);
	// add_image_size('large-thumbnail', 960, 540, true);
	//(params, px width, px height, cropping aspect: true=perfect fit to crop ratio/hard crop)
	// add_image_size("small-thumbnail");

	//Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
}

add_action('after_setup_theme', 'delcanCo2017_setup');

?>