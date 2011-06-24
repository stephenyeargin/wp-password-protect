<?php
/*
Plugin Name: Password Protection
Plugin URI: https://github.com/stephenyeargin/wp-password-protect
Description: Require username and password to access the site.
Author: Stephen Yeargin
Version: 1.0
Author URI: http://stephenyeargin.com

Totally ripped off from <http://zeo.my/password-protected-wordpress/>. I have simply
abstracted it so that it could be enabled/disabled as a plugin.

*/

function password_protected() {
  if ( !is_user_logged_in() )
    auth_redirect();
}

add_action('login_head', 'rsd_link');
add_action('login_head', 'wlwmanifest_link');
add_action('template_redirect', 'password_protected');
add_action('do_feed', 'password_protected');
