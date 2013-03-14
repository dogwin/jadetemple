<?php
/**
 * Plugin Name: My Widget
 * Plugin URI: http://www.dogwin.net/wp/plugin/My_Widget
 * Description: dogwin learn wordpress plugin
 * Author: dogwin
 * Author URI: http://www.dogwin.net
 */
class My_Widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		$widget_options = array(
				'classname'		=>		'simple-widget',
				'description' 	=>		'Just a simple widget'
		);
		
		parent::WP_Widget('My_Widget', 'My Widget', $widget_options);
	}

	public function form( $instance ) {
		// outputs the options form on admin
		?>
		<label for="<?php echo $this->get_field_id('title'); ?>">
		Title: 
		<input id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>"
				value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</label>
		<br />
		<label for="<?php echo $this->get_field_id('body'); ?>">
		Message: 
		<textarea id="<?php echo $this->get_field_id('body'); ?>"
					name="<?php echo $this->get_field_name('body'); ?>"><?php echo esc_attr( $instance['body'] ); ?></textarea>
		</label>
		<?php 
	}
/*
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}*/

	public function widget( $args, $instance ) {
		extract ( $args, EXTR_SKIP );
		$title = ( $instance['title'] ) ? $instance['title'] : 'A simple widget';
		$body = ( $instance['body'] ) ? $instance['body'] : 'A simple message'
		?>
		<?php echo $before_widget ?>
		<?php echo $before_title . $title . $after_title ?>
		<p><?php echo $body ?></p>
		<?php 
	}
}
function My_Widget_init() {
	register_widget("My_Widget");
}
add_action('widgets_init','My_Widget_init');

//register_widget( 'My_Widget' );