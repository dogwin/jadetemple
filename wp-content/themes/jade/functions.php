<?php
/**
 * @author dogwin
 * @date	2013-03-07
 */
function dogwin_setup(){
	register_nav_menu( 'footer_Nav1', __( 'Footer Menu One', 'twentytwelve' ) );
	register_nav_menu( 'footer_Nav2', __( 'Footer Menu Two', 'twentytwelve' ) );
	register_nav_menu( 'footer_Nav3', __( 'Footer Menu Three', 'twentytwelve' ) );
	register_nav_menu( 'footer_Nav4', __( 'Footer Menu Four', 'twentytwelve' ) );
	register_sidebar( array(
							'name' => __( 'dogwin Widget Area', 'twentytwelve' ),
							'id' => 'sidebar-4',
							'description' => __( 'dogwin test widget use sidebar', 'twentytwelve' ),
							'before_widget' => '<aside id="%1$s" class="widget %2$s">',
							'after_widget' => '</aside>',
							'before_title' => '<h3 class="widget-title">',
							'after_title' => '</h3>',
					) );
}
add_action( 'after_setup_theme', 'dogwin_setup',11 );
function get_announcement_subName($type){
	$subNameArr = array(
			'recitation'=>'佛七日程安排',
			'puja'=>'放生法会',
			'salvation'=>'超度',
			'others'=>'其他',
			);
	return $subNameArr[$type];
}
//get announcement id;

/*End the file functions.php*/
/*Location /themes/jade/functions.php*/