<?php
/**
 * Plugin Name: Absolute Privacy
 * Plugin URI:  http://www.johnkolbert.com/portfolio/wp-plugins/absolute-privacy
 * Description: Give your blog absolute privacy. Forces users to register with their name and to choose a password (do not forget to enable registrations). Users cannot login until approved by an administrator. Also, gives the option to lock down your site from non-logged in viewers.
 * Version:     2.1
 * Author:      John Kolbert, Eric Mann
 * Author URI:  http://www.johnkolbert.com/
 * License:     GPLv2+
 * Text Domain: absprivacy
 * Domain Path: /languages
 *
 * Copyright Notice
 *
 * Copyright 2009-2013 by John Kolbert and Eric Mann
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Useful global constants
define( 'ABSPRIVACY_OPTIONS',   'absolute-privacy-options' );   // options name
define( 'ABSPRIVACY_DBOPTION',  'absolute-privacy-dbversion' ); // database version options name
define( 'ABSPRIVACY_DBVERSION', 1 );                            // database version
define( 'ABSPRIVACY_PATH',      WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__)) );
define( 'ABSPRIVACY_URL',       WP_PLUGIN_URL . '/' . basename(dirname(__FILE__)) );
define( 'ABSPRIVACY_ROLEREF',   'unapproved' );
define( 'ABSPRIVACY_ROLENAME',  'Unapproved User' );

/**
 * Default initialization for the plugin:
 * - Registers the default textdomain.
 */
function absprivacy_init() {
	$locale = apply_filters( 'plugin_locale', get_locale(), 'absprivacy' );
	load_textdomain( 'absprivacy', WP_LANG_DIR . '/absprivacy/absprivacy-' . $locale . '.mo' );
	load_plugin_textdomain( 'absprivacy', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
	
require_once( 'functions.php' ); // holds all the functions for the plugin

register_activation_hook( __FILE__, 'abpr_doUpgrade' ); //adds role and options on activation

/* Install the menus */
add_action( 'admin_menu', 'abpr_installOptionsMenu' ); //install the options menu
add_action( 'admin_menu', 'abpr_moderateMenu' );       //install the moderate user menu

if ( is_multisite() ) {	// No multisite support yet
	return;
}

// Wireup actions
add_action( 'init',              'absprivacy_init' );       // Initialize textdomain
add_action( 'template_redirect', 'abpr_lockDown' );         // lock down website
add_action( 'init',              'abpr_adminLockDown', 0 ); // lock down admin area
add_action( 'register_form',     'abpr_registrationBox' );  // adds password field & first/last name to registration box
add_action( 'user_register',     'abpr_addNewUser' );       // adds registration info to database

if ( isset( $_GET[ 'action' ] ) && ( $_GET[ 'action' ] == 'register' ) ) {
	add_action( 'login_head', 'abpr_regCSS' ); //adds registration form CSS
}

if ( abpr_needsUpgrade() ) {
	add_action( 'admin_notices', 'abpr_adminnotice' );
}

// Wireup filters
add_filter( 'the_content',            'abpr_check_is_feed' );              // filter content for feeds
add_filter( 'registration_errors',    'abpr_checkRegErrors' ); 		       // adds registration form error checks
add_filter( 'authenticate',           'abpr_authenticateUser', 10, 3 );	   // authenticate new user
add_filter( 'password_reset_message', 'abpr_profileRecoveryLink', 10, 2 );

// Wireup shortcodes
add_shortcode( 'loginform',   'abpr_loginShortcode' );
add_shortcode( 'profilepage', 'abpr_profileShortcode' );