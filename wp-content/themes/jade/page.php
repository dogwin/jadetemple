<?php
/**
 * @author dogwin
 * @date 2013-03-08
 */
get_header('intro');

?>
<div id="primary" class="site-content">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
			<?php //comments_template( '', true ); ?>
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->
<?php 
	if(is_page(array('57','19','21','22'))):
		get_template_part('know_left');
	else:
		echo "other";
	endif;
?>
<div class="clear"></div><!-- .clear -->
<?php
get_footer();
/*End the file page.php*/
/*Location /themes/jade/page.php*/