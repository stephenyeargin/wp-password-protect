<?php
/*
Plugin Name: Password Protection
Plugin URI: http://wordpress.org/#
Description: Require username and password to access the site.
Author: Stephen Yeargin
Version: 1.0
Author URI: http://stephenyeargin.com

Totally ripped off from http://zeo.my/password-protected-wordpress/

*/

function password_protected() {
	if ( !is_user_logged_in() )
		auth_redirect();
}

add_action('login_head', 'rsd_link');
add_action('login_head', 'wlwmanifest_link');
add_action('template_redirect', 'password_protected');
add_action('do_feed', 'password_protected');
