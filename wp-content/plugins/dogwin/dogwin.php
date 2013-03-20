<?php
/**
 * Plugin Name: Dogwin
 * Plugin URI: http://www.dogwin.net/wp/plugin/dogwin
 * Description: dogwin learn wordpress plugin
 * Author: dogwin
 * Author URI: http://www.dogwin.net
 */
//
/*
function adfilter($content){
	if(is_page){
		return $content."This is a page filter test......";
	}
	return $content;
}

add_filter("the_content","adfilter");*/

/*
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
register_deactivation_hook(__FILE__,"my_plugin_deactivate");*/

function send_ms(){
	global $_REQUEST;
	global $post_ID;
	global $post;
	$to = 'weblsfamily@gmail.com';
	$subject = "New message to darren.miao".$post_ID;
	$category = get_the_category($post_ID);
	$message = "Message from:".$category[0]->cat_name;
	wp_mail($to,$subject,$message);
}
add_action('publish_post','send_ms');

