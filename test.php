<?php

/*
Plugin Name:   Test Plugin
Plugin URI:    https://3mediaweb.com/
Description:   This is a test plugin
Version:       1.0
Author:        3 Media Web
Author URI:    https://www.3mediaweb.com
*/


/*-------------------------------------------------------------------
# Enqueue Admin Scripts
-------------------------------------------------------------------*/

function enqueue_some_stuff() {
	if(is_user_logged_in()) {
		wp_enqueue_style( 'muli-gfont', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap', false );
	}
}

add_action('admin_enqueue_scripts', 'enqueue_some_stuff');
