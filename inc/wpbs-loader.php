<?php
/**
 * WPBS
 *
 * Settings
 *
 * @author   Fabio Gonzaga
 * @since    1.0
 */
if ( ! defined( 'ABSPATH' ) ) 
{
	exit; // Exit if accessed directly.
}

/**
 * Detect plugin. For use in Admin area only.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

require_once 'wpbs-functions.php';

if ( defined('WPBS_THEME_STARTER') && WPBS_THEME_STARTER === true)
{
	require_once 'wpbs-settings.php';
}

if ( defined('WPBS_ACF_OPTIONS') && WPBS_ACF_OPTIONS === true)
{

	if ( (is_plugin_active( 'advanced-custom-fields-pro/acf.php' )) || ( is_plugin_active( 'advanced-custom-fields/acf.php' )) ) 
	{
		require_once 'wpbs-acf-options.php';
	} 
	else 
	{
		function wpbs_admin_notice__error() 
		{
	        $class = 'notice notice-error';
	        $message = __( 'WP Base Starter says: To use ACF Options, ACF Plugin must be installed and activated.', 'wpbs' );

	        printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
	    }
	    add_action( 'admin_notices', 'wpbs_admin_notice__error' );
	}
}
