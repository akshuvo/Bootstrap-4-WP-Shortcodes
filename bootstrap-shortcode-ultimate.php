<?php 
/*
Plugin Name:  Bootstrap Shortcodes Ultimate
Plugin URI:   https://devshuvo.com
Author:       Akhtarujjaman Shuvo
Author URI:   https://fb.com/suvobd.ml
Version: 	  1.0
Description:  Simple Plugin for Enqueue Bootstrap 4 and Some Helpful Shortcodes.
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/
	
	function btsu_scripts(){
		wp_enqueue_style('bootstrap-css', plugin_dir_url(__FILE__).'assets/css/bootstrap.min.css',null,'4.01');
		
		wp_enqueue_script('bootstrap-js', plugin_dir_url(__FILE__).'assets/js/bootstrap.min.js',array('jquery'),'4.0');
	}
	add_action('wp_enqueue_scripts','btsu_scripts');
	
// Shortcodes
require_once('inc/shortcodes.php');
