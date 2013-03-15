<?php
/**
 * Plugin Name: CC Comment
 * Plugin URI: http://www.dogwin.net/wp/plugin/cc_comment
 * Description: dogwin learn wordpress plugin
 * Author: dogwin
 * Author URI: http://www.dogwin.net
 */
function cccomm_init(){
	register_setting('cccom_options','cc_email');
	register_setting('cccom_options','texttest');
}
add_action('admin_init','cccomm_init');

function cccomm_option_page(){
	?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<h2>CC Comments Option Page</h2>
		
		<p>Welcome to the CC Comments Plugin. Here you can edit the email(s) you wish to have your comments CC'd to.</p>
		
		<form action="options.php" method="post" id="cc-comments-email-options-form">
		<?php settings_fields('cccom_options');?>
		<h3>
			<label for="cc_email">Email to send CC to: </label> 
			<input type="text" id="cc_email" name="cc_email" value="<?php echo esc_attr( get_option('cc_email') ); ?>" /></h3>
			<textarea rows="10" cols="10" name="texttest" id="texttest"><?php echo esc_attr( get_option('texttest') );?></textarea>
			<p><input type="submit" name="submit" value="Update Email" /></p>
		</form>
	</div>
	<?php
}

function cccomm_plugin_menu(){
	//add_options_page("CC Comments Settings","CC Comments",'manage_options','cc-comments-plugin','cccomm_option_page');
	add_menu_page("CC Comments Settings",
					"CC Comments",
					'manage_options',
					'cc-comments-plugin',
					'cccomm_option_page',
					'/wp-content/plugins/cc_icon.png',30);
	//add_submenu_page('cc-comments-plugin','CC Comments Options 2', 'CC Comments Options 2', 'manage_options','cc_comments-plugin2', 'subM');
	add_submenu_page( 'cc-comments-plugin', 'Page cc sub2', 'subM', 'manage_options', 'cc_comments-plugin3', 'subM' );
}
function subM(){
	echo "This the submenu page";
}
add_action('admin_menu','cccomm_plugin_menu');

