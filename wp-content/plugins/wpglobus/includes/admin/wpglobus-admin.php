<?php
/**
 * @since   1.8.1
 * @package WPGlobus
 */

/**
 * Admin page central.
 *
 * @since 1.6.6
 */
require_once dirname( __FILE__ ) . '/central/class-wpglobus-admin-central.php';
WPGlobus_Admin_Central::construct();

/**
 * @since 2.2.24
 */
require_once dirname( __FILE__ ) . '/register-post-types/class-wpglobus-register-post-types.php';
WPGlobus_Register_Post_Types::construct();

if ( ! empty( $_GET['wpglobus-debug'] ) && 'godmode' === $_GET['wpglobus-debug'] ) { // WPCS: input var ok, sanitization ok.
	/**
	 * To load debug info
	 * site/wp-admin/post.php?post={{post_ID}}&action=edit&wpglobus-debug=godmode
	 */
	require_once dirname( __FILE__ ) . '/debug/class-wpglobus-admin-debug.php';
	WPGlobus_Admin_Debug::get_instance();
}
