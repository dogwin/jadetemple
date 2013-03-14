<?php
/**
 * Plugin Name: General
 * Plugin URI: http://www.dogwin.net/wp/plugin/general
 * Description: dogwin learn wordpress plugin
 * Author: dogwin
 * Author URI: http://www.dogwin.net
 */
function cccomm_init()
{
	register_setting('general','cccomm_cc_email');
}
add_action('admin_init','cccomm_init');

function cccomm_setting_field()
{
	?>
	<input type="text" name="cccomm_cc_email" id="cccomm_cc_email"
			value="<?php echo get_option('cccomm_cc_email'); ?>" />
	<?php 
}

function cccomm_setting_section()
{
	?>
	<p>Settings for the CC Comments plugin:</p>
	<?php 
}

function cccomm_plugin_menu()
{ 	
	add_settings_section('cccomm','CC Comments','cccomm_setting_section','general');
	add_settings_field('cccomm_cc_email', 'CC Comments Email','cccomm_setting_field','general','cccomm');
}
add_action('admin_menu', 'cccomm_plugin_menu');