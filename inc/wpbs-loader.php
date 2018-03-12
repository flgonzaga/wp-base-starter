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

/**
* Register plugin menu
*/
if ( ! function_exists('wpbs_register_plugin_menu') ) 
{
	function wpbs_register_plugin_menu() 
	{
		add_menu_page( __('WP Base Starter', 'wpbs'), __('WP Base Starter', 'wpbs'), 'manage_options', 'wmpbs_menu_settings', 'wpbs_create_dashboard', 'dashicons-welcome-widgets-menus', 20);
	}
	add_action( 'admin_menu', 'wpbs_register_plugin_menu' );
}

/**
* Create Plugin Dashboard
*/
if ( ! function_exists('wpbs_create_dashboard') ) 
{
	function wpbs_create_dashboard()
	{
		include ( WPBS_PATH . 'templates/wpbs-dashboard.php' );
	}
}