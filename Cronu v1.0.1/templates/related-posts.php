<?php
/**************************************************************
 *
 * Related Posts list Template for Single Post page
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/related-posts.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/


// get related Posts
$orig_post = $post;

global $post;
$categories = get_the_category($post->ID);

if($categories){
	$category_ids = array();
	foreach($categories as $individual_category){
		$category_ids[] = $individual_category->term_id;
	}

	$args=array(
		'category__in'			=> $category_ids,
		'post__not_in'			=> array($post->ID),
		'posts_per_page'		=> 4, // Number of related posts that will be shown.
		'ignore_sticky_posts'	=> 1
	);

	$my_query = new wp_query($args);

	if($my_query->have_posts()){
		?>
			<div class = "related-posts-wrapper">
				<div class = "content-title">You may also like <i class = "fa fa-thumbs-o-up"></i></div>
				<div class = "content-body">
					<?php while($my_query->have_posts()):
						$my_query->the_post();?>

						<div class = "slider-item col-lg-3 col-md-3">
							<a href = "<?php the_permalink();?>">
								<?php 
									if(has_post_thumbnail()){
										the_post_thumbnail('about-slide-images', array('alt' => get_the_title(),'class' => 'media-object'));
									} else {
										?><img src = "<?php echo get_template_directory_uri().'/assets/images/default-post.jpg'?>" alt = "<?php the_title();?>"/><?php
									}
								?>
								<span class = "related-post-title"><?php the_title();?></span>
								<span class = "related-post-date"><?php the_time('M d, Y') ?></span>
							</a>
						</div>		
					
					<?php endwhile; ?>
				</div>
			</div>
		<?php
	}
}

$post = $orig_post;
wp_reset_query(); 

?>