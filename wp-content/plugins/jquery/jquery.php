<?php
/**
 * Plugin Name: Jquery learn
 * Plugin URI: http://www.dogwin.net/wp/plugin/JqueryLearn
 * Description: dogwin learn wordpress plugin
 * Author: dogwin
 * Author URI: http://www.dogwin.net
 */
function bdetector_activate()
{
	global $wpdb;
	
	$table_name = $wpdb->prefix . 'bdetector';
	
	// will return NULL if there isn't one
	if ( $wpdb->get_var('SHOW TABLES LIKE ' . $table_name) != $table_name )
	{
		$sql = 'CREATE TABLE ' . $table_name . '( 
				id INTEGER(10) UNSIGNED AUTO_INCREMENT,
				hit_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				user_agent VARCHAR (255),
				user_name VARCHAR (20),
				PRIMARY KEY  (id) )';
		
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		
		add_option('bdetector_database_version','1.0');
	}
}

register_activation_hook(__FILE__,'bdetector_activate');

function bdetector_insert_useragent()
{
	global $wpdb;
	global $current_user;
	
	$table_name = $wpdb->prefix . 'bdetector';
	
	$wpdb->insert($table_name,array('user_agent'=>$_SERVER['HTTP_USER_AGENT'],'user_name'=>$current_user->data->user_login),array('%s'));
}

add_action('wp_footer','bdetector_insert_useragent');

function databaseinfo_dashboard_widget(){
	global $wpdb;
	global $current_user;
	echo "<pre>";
	print_r($current_user->data->user_login);
	echo "</pre>";
}

function databaseinfo_register_widget(){
	wp_add_dashboard_widget('databaseinfo-dashboard-widget','Counter Dashboard Widget', 'databaseinfo_dashboard_widget');
}

add_action('wp_dashboard_setup', 'databaseinfo_register_widget');

