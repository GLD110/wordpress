<?php
/**************************************************************
 *
 * Pagination function
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/pagination.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

///////////////////////////////////////////////////////////////////////////
// Dynamic Pagination actived in functions.php	
function blog_pagination($pages = '', $range = 2){ 
	$showitems = ($range * 2) + 1;

	global $paged;
	if(empty($paged)){
		$paged = 1;
	}

	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
			$pages = 1;
		}
	}	
	
	if($pages != 1){
		?><ul class = "pagination after-clear <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>"><?php

		/////////////////////////////////////////
		// Previous button
		if($paged > 2 && $paged > $range + 1 && $showitems < $pages){
			?><li><a href = "<?php echo get_pagenum_link(1); ?>"><i class = "fa fa-angle-double-left"></i></a></li><?php
		}
		if($paged > 1 && $showitems < $pages){
			?><li><a href = "<?php echo get_pagenum_link($paged - 1); ?>"><i class = "fa fa-angle-left"></i></a></li><?php
		}

		for($i = 1; $i <= $pages; $i++){
			if(1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)){
				if($paged == $i){
					?><li><a class = "active"><?php echo $i; ?></a></li><?php
				} else {
					?><li><a href = "<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a></li><?php
				}
			}
		}

		// Next button
		if($paged < $pages && $showitems < $pages){
			?><li><a href = "<?php echo get_pagenum_link($paged + 1); ?>"><i class = "fa fa-angle-right"></i></a></li><?php
		}
		if($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){
			?><li><a href = "<?php echo get_pagenum_link($pages); ?>"><i class = "fa fa-angle-double-right"></i></a></li><?php
		}
		///////////////////////////////////////
		?></ul><?php
	}
}
?>