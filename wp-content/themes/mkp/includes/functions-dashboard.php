<?php
/**
* Functions: Dashboard
*
* @package WordPress
* @subpackage MKP
* @since 1.0
*/

/*
|--------------------------------------------------------------------------
/**
 * Remove Editor Screens
 *
 * Due to this: http://core.trac.wordpress.org/ticket/14365 
 * we have to remove screens by hand from the Editor role
 * since we are forced to give the Editor role manage_options capability
 *
 * @since 1.0
 *
 */
function wpx_remove_dashboard_submenus() {
	if(!current_user_can('activate_plugins')) {
		global $submenu;
		unset($submenu['tools.php']);
		unset($submenu['themes.php'][5]);
		unset($submenu['themes.php'][6]);
		unset($submenu['options-general.php'][10]);
		unset($submenu['options-general.php'][15]);
		unset($submenu['options-general.php'][20]);
		unset($submenu['options-general.php'][25]);
		unset($submenu['options-general.php'][30]);
		unset($submenu['options-general.php'][40]);
		unset($submenu['options-general.php'][41]);
		unset($submenu['options-general.php'][42]);
		remove_menu_page( 'edit.php?post_type=apis' );
	}
}

add_action('admin_init', 'wpx_remove_dashboard_submenus');

/*
|--------------------------------------------------------------------------
/**
 * Disable Dashboard Widgets
 *
 * Removes widgets loaded in the Dashboard. 
 *
 * @since 1.0
 *
 */
function wpx_disable_dashboard_widgets() {
	remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
	remove_meta_box('dashboard_primary', 'dashboard', 'core');
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');
}

add_action('admin_menu', 'wpx_disable_dashboard_widgets');

/*
|--------------------------------------------------------------------------
/**
 * Disable Default Widgets
 *
 * Oftentimes we do not need all the default widgets WP has to offer.
 * We deregister each of the defaults here. 
 *
 * @since 1.0
 *
 */
function wpx_disable_default_widgets() {
	unregister_widget( 'WP_Widget_Calendar' );
	unregister_widget( 'WP_Widget_Tag_Cloud' );
	unregister_widget( 'WP_Widget_Pages' );
	unregister_widget( 'WP_Widget_Search' );
	unregister_widget( 'WP_Nav_Menu_Widget' );
	unregister_widget( 'WP_Widget_Meta' );
	unregister_widget( 'WP_Widget_Text' );
	unregister_widget( 'WP_Widget_RSS' );
	unregister_widget( 'WP_Widget_Recent_Comments' );
	unregister_widget( 'WP_Widget_Recent_Posts' );
	unregister_widget( 'Akismet_Widget' );
}

add_action( 'widgets_init', 'wpx_disable_default_widgets' );