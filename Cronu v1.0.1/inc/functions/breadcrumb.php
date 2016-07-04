<?php
/**************************************************************
 *
 * BreadCrumb function
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/breadcrumb.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

////////////////////////////////////////////////////////
// Breadcrumbs functions
if(!function_exists('custom_breadcrumbs')){
	function custom_breadcrumbs(){
		   
		// Settings
		$separator          = '&gt;';
		$breadcrums_id      = 'breadcrumbs';
		$breadcrums_class   = 'breadcrumbs';
		$home_title         = __('Home', 'truewordpress');
		  
		// If you have any custom post types with custom taxonomies, put the taxonomy name below(e.g. product_cat)
		$custom_taxonomy    = 'product_cat';
		   
		// Get the query & post information
		global $post, $wp_query;
		   
		// Do not display on the homepage
		if(!is_front_page()): ?>

			<!-- Build the breadcrums -->
			<ul id = "<?php echo $breadcrums_id; ?>" class = "<?php echo $breadcrums_class; ?> after-clear">
				<!-- Home page -->
				<li class = "item-home">
					<a class = "bread-link bread-home" href = "<?php echo get_home_url(); ?>" title = "<?php echo $home_title; ?>">
						<?php echo $home_title; ?>
					</a>
				</li>
				<li class = "separator separator-home"><?php echo $separator; ?></li>
				
				<?php if(is_archive() && !is_tax() && !is_category() && !is_tag()): ?>
						  
					<li class = "item-current item-archive">
						<span class = "bread-current bread-archive">
							<?php echo post_type_archive_title($prefix, false); ?>
						</span>
					</li>
						  
				<?php elseif(is_archive() && is_tax() && !is_category() && !is_tag()): 
						  
					// If post is a custom post type
					$post_type = get_post_type();
					  
					// If it is a custom post type display name and link
					if($post_type != 'post'):
						  
						$post_type_object = get_post_type_object($post_type);
						$post_type_archive = get_post_type_archive_link($post_type);
					  
						?>

						<li class = "item-cat item-custom-post-type-<?php echo $post_type; ?>">
							<a class = "bread-cat bread-custom-post-type-<?php echo $post_type; ?>" href = "<?php echo $post_type_archive; ?>" title = "<?php echo $post_type_object->labels->name; ?>">
								<?php echo $post_type_object->labels->name; ?>
							</a>
						</li>
						<li class = "separator"><?php echo $separator; ?></li>
					
					<?php endif; ?>
					
					<li class = "item-current item-archive">
						<span class = "bread-current bread-archive"><?php echo get_queried_object()->name; ?></span>
					</li>
						  
				<?php elseif(is_single()):
				  
					// If post is a custom post type
					$post_type = get_post_type();
					  
					// If it is a custom post type display name and link
					if($post_type != 'post'):
						  
						$post_type_object = get_post_type_object($post_type);
						$post_type_archive = get_post_type_archive_link($post_type);
					  
						?>
						<li class = "item-cat item-custom-post-type-<?php echo $post_type; ?>">
							<a class = "bread-cat bread-custom-post-type-<?php echo $post_type; ?>" href = "<?php echo $post_type_archive; ?>" title = "<?php echo $post_type_object->labels->name; ?>">
								<?php echo $post_type_object->labels->name; ?>
							</a>
						</li>
						<li class = "separator"><?php echo $separator; ?></li>
					  
					<?php endif;

					// Get post category info
					$category = get_the_category();
					 
					if(!empty($category)){
					  
						// Get last category post is in
						$last_category = end(array_values($category));
						  
						// Get parent any categories and create array
						$get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','), ',');
						$cat_parents = explode(',',$get_cat_parents);
						  
						// Loop through parent categories and store in variable $cat_display
						$cat_display = '';
						foreach($cat_parents as $parents){
							$cat_display .= '<li class = "item-cat">'.$parents.'</li>';
							$cat_display .= '<li class = "separator"> '.$separator.' </li>';
						}
					 
					}
				  
					// If it's a custom post type within a custom taxonomy
					$taxonomy_exists = taxonomy_exists($custom_taxonomy);
					if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists){
						   
						$taxonomy_terms = get_the_terms($post->ID, $custom_taxonomy);
						$cat_id         = $taxonomy_terms[0]->term_id;
						$cat_nicename   = $taxonomy_terms[0]->slug;
						$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
						$cat_name       = $taxonomy_terms[0]->name;
					   
					}
					  
					// Check if the post is in a category
					if(!empty($last_category)):
						echo $cat_display;
						?>

						<li class = "item-current item-<?php echo $post->ID; ?>">
							<span class = "bread-current bread-<?php echo $post->ID; ?>" title = "<?php echo get_the_title(); ?>"><?php the_title(); ?></span>
						</li>

						<?php
						  
					// elseif post is in a custom taxonomy
					elseif(!empty($cat_id)): ?>

						<li class = "item-cat item-cat-<?php echo $cat_id; ?> item-cat-<?php echo $cat_nicename; ?>">
							<a class = "bread-cat bread-cat-<?php echo $cat_id; ?> bread-cat-<?php echo $cat_nicename; ?>" href = "<?php echo $cat_link; ?>" title = "<?php echo $cat_name; ?>">
								<?php echo $cat_name; ?>
							</a>
						</li>
						<li class = "separator"><?php echo $separator; ?></li>
						<li class = "item-current item-<?php echo $post->ID; ?>">
							<span class = "bread-current bread-<?php echo $post->ID; ?>" title = "<?php echo get_the_title(); ?>"><?php the_title(); ?></span>
						</li>
					  
					<?php else: ?>
						  
						<li class = "item-current item-<?php echo $post->ID; ?>">
							<span class = "bread-current bread-<?php echo $post->ID; ?>" title = "<?php echo get_the_title(); ?>"><?php the_title(); ?></span>
						</li>
						  
					<?php endif;
				  
				elseif(is_category()): ?>

					<!-- Category page -->
					<li class = "item-current item-cat">
						<span class = "bread-current bread-cat"><?php echo single_cat_title('', false); ?></span>
					</li>
					   
				<?php elseif(is_page()):

					// Standard page
					if($post->post_parent):
						   
						// If child page, get parents 
						$anc = get_post_ancestors($post->ID);
						   
						// Get parents in the right order
						$anc = array_reverse($anc);
						   
						// Parent page loop
						foreach($anc as $ancestor){
							$parents .= '<li class = "item-parent item-parent-'.$ancestor.'"><a class = "bread-parent bread-parent-'.$ancestor.'" href = "'.get_permalink($ancestor).'" title = "'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
							$parents .= '<li class = "separator separator-'.$ancestor.'"> '.$separator.' </li>';
						}
						   
						// Display parent pages
						echo $parents;
						?>  
						
						<!-- Current page -->
						<li class = "item-current item-<?php echo $post->ID; ?>">
							<span title = "<?php echo get_the_title(); ?>"><?php the_title(); ?></span>
						</li>
						  
					<?php else: ?>

						<!-- Just display current page if not parents -->						
						<li class = "item-current item-<?php echo $post->ID; ?>">
							<span class = "bread-current bread-<?php echo $post->ID; ?>"><?php the_title(); ?></span>
						</li>

					<?php endif;
					   
				elseif(is_tag()):
					   
					// Tag page
					   
					// Get tag information
					$term_id        = get_query_var('tag_id');
					$taxonomy       = 'post_tag';
					$args           = 'include='.$term_id;
					$terms          = get_terms($taxonomy, $args);
					$get_term_id    = $terms[0]->term_id;
					$get_term_slug  = $terms[0]->slug;
					$get_term_name  = $terms[0]->name;
					   
					?>

					<!-- Display the tag name -->
					<li class = "item-current item-tag-<?php echo $get_term_id; ?> item-tag-<?php echo $get_term_slug; ?>">
						<span class = "bread-current bread-tag-<?php echo $get_term_id; ?> bread-tag-<?php echo $get_term_slug; ?>">
							<?php echo $get_term_name; ?>
						</span>
					</li>
				   
				<?php elseif(is_day()): ?>
					   
					<!-- Day archive -->
					   
					<!-- Year link -->
					<li class = "item-year item-year-<?php echo get_the_time('Y'); ?>">
						<a class = "bread-year bread-year-<?php echo get_the_time('Y'); ?>" href = "<?php echo get_year_link(get_the_time('Y')); ?>" title = "<?php echo get_the_time('Y'); ?>">
							<?php echo get_the_time('Y'); ?> <?php echo __('Archives', 'truewordpress'); ?>
						</a>
					</li>
					<li class = "separator separator-<?php echo get_the_time('Y'); ?>"> <?php echo $separator; ?> </li>
					   
					<!-- Month link -->
					<li class = "item-month item-month-<?php echo get_the_time('m'); ?>">
						<a class = "bread-month bread-month-<?php echo get_the_time('m'); ?>" href = "<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>" title = "<?php echo get_the_time('M'); ?>">
							<?php echo get_the_time('M'); ?> <?php echo __('Archives', 'truewordpress'); ?>
						</a>
					</li>
					<li class = "separator separator-<?php echo get_the_time('m'); ?>"> <?php echo $separator; ?> </li>
					   
					<!-- Day display -->
					<li class = "item-current item-<?php echo get_the_time('j'); ?>">
						<span class = "bread-current bread-<?php echo get_the_time('j'); ?>"> 
							<?php echo get_the_time('jS'); ?> <?php echo get_the_time('M'); ?> <?php echo __('Archives', 'truewordpress'); ?>
						</span>
					</li>
					   
				<?php elseif(is_month()): ?>
					   
					<!-- Month Archive -->
					   
					<!-- Year link -->
					<li class = "item-year item-year-<?php echo get_the_time('Y'); ?>">
						<a class = "bread-year bread-year-<?php echo get_the_time('Y'); ?>" href = "<?php echo get_year_link(get_the_time('Y')); ?>" title = "<?php echo get_the_time('Y'); ?>">
							<?php echo get_the_time('Y'); ?> <?php echo __('Archives', 'truewordpress'); ?>
						</a>
					</li>
					<li class = "separator separator-<?php echo get_the_time('Y'); ?>"> <?php echo $separator; ?> </li>
					   
					<!-- Month display -->
					<li class = "item-month item-month-<?php echo get_the_time('m'); ?>">
						<span class = "bread-month bread-month-<?php echo get_the_time('m'); ?>" title = "<?php echo get_the_time('M'); ?>">
							<?php echo get_the_time('M'); ?> <?php echo __('Archives', 'truewordpress'); ?>
						</span>
					</li>
					   
				<?php elseif(is_year()): ?>
					   
					<!-- Display year archive -->
					<li class = "item-current item-current-<?php echo get_the_time('Y'); ?>">
						<span class = "bread-current bread-current-<?php echo get_the_time('Y'); ?>" title = "<?php echo get_the_time('Y'); ?>">
							<?php echo get_the_time('Y'); ?> <?php echo __('Archives', 'truewordpress'); ?>
						</span>
					</li>
					   
				<?php elseif(is_author()): ?>
					   
					<!-- Auhor archive -->
					
					<?php
						// Get the author information
						global $author;
						$userdata = get_userdata($author);
					?>
					
					<!-- Display author name -->
					<li class = "item-current item-current-<?php echo $userdata->user_nicename; ?>">
						<span class = "bread-current bread-current-<?php echo $userdata->user_nicename; ?>" title = "<?php echo $userdata->display_name; ?>">
							<?php echo __('Author:', 'truewordpress'); ?> <?php echo $userdata->display_name; ?>
						</span>
					</li>
				   
				<?php elseif(get_query_var('paged')): ?>
					   
					<!-- Paginated archives -->
					<li class = "item-current item-current-<?php echo get_query_var('paged'); ?>">
						<span class = "bread-current bread-current-<?php echo get_query_var('paged'); ?>" title = "Page <?php echo get_query_var('paged'); ?>">
							<?php echo __('Page', 'truewordpress'); ?> <?php echo get_query_var('paged'); ?>
						</span>
					</li>
					   
				<?php elseif(is_search()): ?>
				   
					<!-- Search results page -->
					<li class = "item-current item-current-<?php echo get_search_query(); ?>">
						<span class = "bread-current bread-current-<?php echo get_search_query(); ?>" title = "Search results for: <?php echo get_search_query(); ?>">
							<?php echo __('Search results for:', 'truewordpress'); ?> <?php echo get_search_query(); ?>
						</span>
					</li>
				   
				<?php elseif(is_404()): ?>
					   
					<!-- 404 page -->
					<li><?php echo __('Error 404', 'truewordpress'); ?></li>
				
				<?php else: ?>
					
					<?php $pageID = get_option('page_for_posts'); ?>
					
					<!-- Current page -->
					<li class = "item-current item-<?php echo $pageID; ?>">
						<span title = "<?php echo apply_filters('the_title', get_page($pageID)->post_title); ?>"><?php echo apply_filters('the_title', get_page($pageID)->post_title); ?></span>
					</li>

				<?php endif; ?>

			</ul>

		<?php endif;
	}
}

?>