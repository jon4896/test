<?php

/*
Plugin Name:   3MW Plus
Plugin URI:    https://3mediaweb.com/
Description:   Extends the functionality of 3 Media Web's custom Gutenberg theme
Version:       1.0
Author:        3 Media Web
Author URI:    https://www.3mediaweb.com
*/


/*-------------------------------------------------------------------
# Enqueue Admin Scripts
-------------------------------------------------------------------*/

function enqueue_css_js_files() {
	if(is_user_logged_in()) {
		wp_enqueue_style( 'muli-gfont', 'https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );

		/****** Enqueue JS Files ******/
		wp_enqueue_script( 'admin-js', plugins_url( 'assets/js/admin.js', __FILE__ ), $deps = array( 'jquery' ), $ver = false, $in_footer = true );
	}
}

add_action('admin_enqueue_scripts', 'enqueue_css_js_files');
add_action('wp_enqueue_scripts', 'enqueue_css_js_files');