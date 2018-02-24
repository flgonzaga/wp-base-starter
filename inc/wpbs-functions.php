<?php
/**
 * WPBS
 *
 * Functions
 *
 * @author   Fabio Gonzaga
 * @since    1.0
 */
if ( ! defined( 'ABSPATH' ) ) 
{
	exit; // Exit if accessed directly.
}

/**
* Hide page from other users who are not administrators
* @since 1.0
*/
function wpbs_exclude_pages_from_admin($query) 
{
	if ( ! is_admin() )
    	return $query;
  		global $pagenow, $post_type, $pages_to_exclude;
  	if ( !current_user_can( 'administrator' ) && $pagenow == 'edit.php' && $post_type == 'page' )
    	$query->query_vars['post__not_in'] = $pages_to_exclude; // Enter your page IDs here
}
add_filter( 'parse_query', 'wpbs_exclude_pages_from_admin' );
