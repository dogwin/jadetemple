<?php
/**
 * @author dogwin
 * @date 2013-03-07
 */

// use wp_list_pages to display parent and all child pages all generations (a tree with parent)
/*$parent = 57;
$args=array(
		'child_of' => $parent,
		'sort_column'=>'menu_order'
		
);
$pages = get_pages($args);
if ($pages) {
	$pageids = array();
	foreach ($pages as $page) {
		$pageids[]= $page->ID;
	}

	$args=array(
			//'title_li' => 'Tree of Parent Page ' . $parent,
			'title_li' =>'',
			'include' =>  $parent . ',' . implode(",", $pageids)
	);
	wp_list_pages($args);
}
*/

?>
<div id="know_left">
	<p>了解玉佛寺</p>
	<ul class="know_nav">
		<li><a href="<?php echo home_url("/know/intro/");?>">简介</a></li>
		<li><a href="<?php echo home_url("/know/history/");?>">历史</a></li>
		<li><a href="<?php echo home_url("/know/abbot/");?>">住持</a></li>
	</ul>
</div><!-- #know_left -->
<?php 
/*End the file know_left.php*/
/*Location /themes/jade/know_left.php*/