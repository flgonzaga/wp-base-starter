<?php
/**
 * WPBS
 *
 * Dashboard Template
 *
 * @author   Fabio Gonzaga
 * @package wp-base-starter
 * @since    1.0
 */
if ( ! defined( 'ABSPATH' ) ) 
{
	exit; // Exit if accessed directly.
}


/** WordPress Administration Bootstrap */
require_once( ABSPATH . 'wp-load.php' );
require_once( ABSPATH . 'wp-admin/admin.php' );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
?>
<div class="wrap about-wrap">
	<h1><?php _e( 'WP Base Starter' ); ?></h1>

	<div class="about-text">
		<?php _e('Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.' ); ?>
	</div>

	<h2 class="nav-tab-wrapper">
		<a href="#" class="nav-tab nav-tab-active"><?php _e( 'Setting' ); ?></a>
	</h2>

	<div class="changelog">
		<h3><?php _e( 'Morbi leo risus, porta ac consectetur' ); ?></h3>
		<div class="feature-section images-stagger-right">
			
		</div><!-- /.feature-section -->
	</div><!-- /.changelog -->
</div><!-- /.wrap -->
<?php include( ABSPATH . 'wp-admin/admin-footer.php' );