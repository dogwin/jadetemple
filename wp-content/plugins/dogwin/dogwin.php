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
/*
function send_ms(){
	global $_REQUEST;
	
	$to = 'weblsfamily@gmail.com';
	$subject = "New message to darren.miao".$_REQUEST['subject'];
	$message = "Message from:".$_REQUEST['name']." at email:".$_REQUEST['email'].
	":\n".$_REQUEST['comments'];
	mail($to,$subject,$message);
}
add_action('comment_post','send_ms');
*/
