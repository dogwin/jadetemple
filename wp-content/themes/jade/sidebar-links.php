<?php
/**
 * @author dogwin
 * @date 2013-03-11
 */
$cate_id = the_category_ID( $echo ); 
?>


<div id="sidebar-links">
	<ul>
		<?php query_posts('category_name='.get_the_category_by_ID($cate_id));?>
		<?php if(have_posts()):while(have_posts()):the_post();?>
                
          <li style='width: 200px;float: left;border-bottom: 1px dashed #FF8900;margin: 10px;'>
              <p><a href="<?php the_permalink(); ?>?cateID=7"><?php the_title(); ?></a></p>
          </li>           
         <?php endwhile;endif;?>
	</ul>
</div>

<?php
/*End the file sidebar-links.php*/
/*Location /themes/jade/sidebar-links.php*/