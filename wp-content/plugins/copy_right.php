<?php
/**
 * Plugin Name: Copy Right
 * Plugin URI: http://www.dogwin.net/wp/plugin/copy_right
 * Description: dogwin learn wordpress plugin
 * Author: dogwin
 * Author URI: http://www.dogwin.net
 */
global $wp_version;

if(!version_compare($wp_version,'3.0','>=')):
	die("You need at least version 3.0 of WordPress to use the copyright plugin.");
endif;

function add_copyRight(){
	$copyright_message = "Copyright ".date(Y)." Falkon Productions, All Rights Reserved";
	echo $copyright_message;
}
add_action('wp_footer',add_copyRight);