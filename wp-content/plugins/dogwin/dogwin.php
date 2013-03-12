<?php
/**
 * Plugin Name: Dogwin
 * Plugin URI: http://www.dogwin.net/wp/plugin/dogwin
 * Description: dogwin learn wordpress plugin
 * Author: dogwin
 * Author URI: http://www.dogwin.net
 */
global $wp_version;
if(!version_compare($wp_version,'3.5',">=")):
	die('the big');
endif;

function my_plugin_activate(){
	error_log('plugin activated');
}
register_activation_hook(__FILE__,"my_plugin_activate");

function my_plugin_deactivate(){
	error_log('plugin deactivated');
}
register_deactivation_hook(__FILE__,"my_plugin_deactivate");