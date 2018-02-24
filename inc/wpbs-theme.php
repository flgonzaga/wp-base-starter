<?php
/**
 * WPBS
 *
 * Theme settings
 *
 * @author   Fabio Gonzaga
 * @package wp-base-starter
 * @since    1.0
 */
if ( ! defined( 'ABSPATH' ) ) 
{
	exit; // Exit if accessed directly.
}

/**
 * Sets content width.
 * @since 1.0
 */
if ( ! isset( $content_width ) ) 
{
	$content_width = 600;
}

/**
* Adding main menu
* @since 1.0
*/
function wpbs_register_theme_menu() 
{
	register_nav_menu(
		array(
			'main-menu' => __( 'Primary Menu' )
		)
	);
}
add_action( 'init', 'wpbs_register_theme_menu' );

/**
* Add theme support
* @since 1.0
*/
function wpbs_add_theme_support() 
{
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'wpbs_add_theme_support' );
