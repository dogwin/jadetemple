<?php
/**
 * @author dogwin
 * @date 2013-03-08
 */
get_header();
global $wp_query;
$big = 99999;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>
<div id="primary" class="site-content">
	<div id="content" role="main">
	<p>念佛堂</p>
	<div class="archive_box_main">
            	<ul>
            		<?php if(is_page()):?>
            		<?php query_posts('category_name=buddhist&posts_per_page=10&paged='.$paged);?>
            		<?php if(have_posts()):while(have_posts()):the_post();?>
	                
	                    <li style='width: 400px;float: left;border-bottom: 1px dashed #FF8900;margin: 10px;'>
	                        
	                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
	                    </li>
	               
	                    
	              <?php endwhile;endif;?>
	              <?php 
	         
					echo paginate_links(array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
						));
					?>
					
	              <?php //wp_reset_query(); ?>
	              <?php endif;?>
            	</ul>
            </div>
	
	</div><!-- #content -->
</div><!-- #primary -->

<?php
get_sidebar('page');
get_footer();
/*End the file page-buddhist.php*/
/*Location /themes/jade/page-buddhist.php*/