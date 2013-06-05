<?php
/*
Plugin Name: WP Password Protect
Plugin URI: https://github.com/stephenyeargin/wp-password-protect
Description: Require username and password to access the site.
Author: Stephen Yeargin
Version: 1.0
Author URI: http://stephenyeargin.com

Totally ripped off from <http://zeo.my/password-protected-wordpress/>. I have simply
abstracted it so that it could be enabled/disabled as a plugin.

*/

function wp_password_protect() {
  if ( !is_user_logged_in() )
    auth_redirect();
}

add_action('login_head', 'rsd_link');
add_action('login_head', 'wlwmanifest_link');
add_action('template_redirect', 'wp_password_protect');
add_action('do_feed', 'wp_password_protect');
