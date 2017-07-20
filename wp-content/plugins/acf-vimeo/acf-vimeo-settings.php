<?php

// SETTINGS FIELD
function acf_vimeo_settings_field()
{
	add_submenu_page('options-general.php', __('Vimeo Field','acf-vimeo'), __('Vimeo Field','acf-vimeo'), 'manage_options', 'acf-vimeo-settings', 'acf_vimeo_settings_field_html');
}

add_action('admin_menu', 'acf_vimeo_settings_field', 13, 0);


function acf_vimeo_settings_field_html()
{
?>
<div class="wrap">
    <h2><?php _e('Vimeo Field', 'acf-vimeo'); ?></h2>
    <form action="options.php" method="POST">
        <?php settings_fields( 'acf-vimeo-basic-settings-group' ); ?>
        <?php do_settings_sections( 'acf-vimeo-field' ); ?>
        <?php submit_button(); ?>
    </form>
</div>
<?php
}


add_action( 'admin_init', 'acf_vimeo_setting_init' );
function acf_vimeo_setting_init()
{
    register_setting( 'acf-vimeo-basic-settings-group', 'acf-vimeo-updater-email-account' );
    add_settings_section( 'acf-vimeo-basic-settings', '', 'acf_vimeo_nothing', 'acf-vimeo-field' );
	add_settings_field( 'acf-vimeo-updater-email-account', __('Register for Updates', 'acf-vimeo'), 'acf_vimeo_updater_email', 'acf-vimeo-field', 'acf-vimeo-basic-settings' );
}

function acf_vimeo_nothing() { }

function acf_vimeo_updater_email()
{
	echo "<input type='text' name='acf-vimeo-updater-email-account' value='" . esc_attr( get_option( 'acf-vimeo-updater-email-account' ) ) . "' style='width:70%;' />";
	echo "<p>";
	echo __("This is used to update your plugin when new versions become available.", 'acf-vimeo');
	echo "&nbsp;";
	echo __("Insert the email address you used to purchase this plugin.", 'acf-vimeo');
	echo "</p>";
}


// SET SETTINGS LINK ON PLUGIN PAGE
function acf_vimeo_plugin_action_links( $links, $file ) 
{
	if( !get_option('acf-vimeo-updater-email-account') )
	{
		$register_link = '<a href="' . admin_url( 'options-general.php?page=acf-vimeo-settings' ) . '">' . esc_html__( 'Register', 'acf-vimeo' ) . '</a>';
	
		if ( $file == 'acf-vimeo/acf-vimeo.php' )
		{
			array_unshift( $links, $register_link );
		}
	}
	
	return $links;
}
add_filter( 'plugin_action_links', 'acf_vimeo_plugin_action_links', 10, 2 );