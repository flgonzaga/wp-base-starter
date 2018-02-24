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
* Use WPBS Theme Starter 
*/
define('WPBS_THEME_STARTER', false);

/**
* Use WPBS ACF Options
*/
define('WPBS_ACF_OPTIONS', false);

/*
* Pages to exclude from admin:
* These pages will not appear in the Wordpress panel for users who are not administrators
*/
$pages_to_exclude = array( );