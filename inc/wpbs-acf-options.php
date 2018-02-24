<?php
/**
 * WPBS
 *
 * WPBS ACF Options 
 * Advanced Custom Field Plugin is required
 *
 * @author   Fabio Gonzaga
 * @since    1.0
 */
if ( ! defined( 'ABSPATH' ) ) 
{
	exit; // Exit if accessed directly.
}

/**
* Remove header from ACF Metabox in admin panel
* @since 1.0
*/
function wpbs_admin_css() 
{
	echo '<style>
			.acf-postbox .hndle,
			.acf-postbox .handlediv{
			display: none !important;
			}
		</style>';
}
add_action('admin_head', 'wpbs_admin_css');

/**
* Add Theme Options using ACF
* @since 1.0
*/
if( function_exists('acf_add_options_page') ) 
{
	acf_add_options_page(array(
		'page_title' 	=> __('Theme Options'),
		'menu_title'	=> __('Theme Options'),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}