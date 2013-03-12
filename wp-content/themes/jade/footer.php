<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<nav id='footer_menu'>
			<div id="footer_Nav1">
				<p>佛教文化</p>
				<?php wp_nav_menu( array( 'theme_location' => 'footer_Nav1')); ?>
			</div><!-- #footer_Nav1 -->
			
			<div id="footer_Nav2">
				<p>佛教故事</p>
				<?php wp_nav_menu( array( 'theme_location' => 'footer_Nav2')); ?>
			</div><!-- #footer_Nav2 -->
			
			<div id="footer_Nav3">
				<p>佛教典籍</p>
				<?php wp_nav_menu( array( 'theme_location' => 'footer_Nav3')); ?>
			</div><!-- #footer_Nav3 -->
			
			<div id="footer_Nav4">
				<p>诸佛菩萨</p>
				<?php wp_nav_menu( array( 'theme_location' => 'footer_Nav4')); ?>
			</div><!-- #footer_Nav4 -->
            <div class="clear"></div>                        
		</nav><!-- #footer_menu -->
		
		<div id="theright">
			<p>版权所有：玉佛寺&copy;2013	开发者：妙缘</p>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>