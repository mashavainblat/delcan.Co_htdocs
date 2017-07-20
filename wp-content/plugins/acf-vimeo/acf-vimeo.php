<?php
/*
Plugin Name: Advanced Custom Fields: Vimeo Field
Plugin URI: http://halgatewood.com/downloads/acf-vimeo-field
Description: This premium Add-on adds a vimeo field type for the Advanced Custom Fields plugin
Version: 1.1.5
Author: Hal Gatewood
Author URI: http://halgatewood.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


// LANGS
load_plugin_textdomain( 'acf-vimeo', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 


// GLOBAL FUNCTIONS
include_once('acf-vimeo-funcs.php');
include_once('acf-vimeo-settings.php');


// VERSION 5+
function include_field_types_vimeo( $version ) 
{
	include_once('acf-vimeo-v5.php');	
}

add_action('acf/include_field_types', 'include_field_types_vimeo');	


// VERSION 4
function register_fields_vimeo() 
{
	include_once('acf-vimeo-v4.php');
}

add_action('acf/register_fields', 'register_fields_vimeo');


// EDD AUTO UPLOADER
if( is_admin() AND get_option('acf-vimeo-updater-email-account'))
{
	$edd_auto_updater_script = dirname(__FILE__) . "/edd-remote-auto-updater.php";
	
	if( !class_exists('edd_remote_auto_updater') AND file_exists($edd_auto_updater_script) )
	{
		include_once($edd_auto_updater_script);
	}
	
	if( class_exists('edd_remote_auto_updater') )
	{
		// vars
		$settings = array(
			'version' 		=> '1.1.5',
			'remote' 		=> 'https://halgatewood.com/',
			'slug' 			=> 'acf-vimeo-field',
			'email'			=> get_option('acf-vimeo-updater-email-account'),
			'basename' 		=> plugin_basename(__FILE__)
		);
		new edd_remote_auto_updater( $settings );
	}
}