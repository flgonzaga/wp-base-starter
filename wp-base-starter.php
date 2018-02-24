<?php
/*
* Plugin Name: WP Base Starter (WPBS)
* Plugin URI: 
* Description: This is a Tool Kit Base to start any development in Wordpress
* Author: Fabio Gonzaga
* Author URI: http://gist.github.com/flgonzaga
* Version: 1.0
*/

if ( ! defined( 'ABSPATH' ) ) 
{
	exit; // Exit if accessed directly.
}

define( 'WPBS_PATH', plugin_dir_path( __FILE__ ) );

require_once 'inc/wpbs-settings.php';
require_once 'inc/wpbs-loader.php';