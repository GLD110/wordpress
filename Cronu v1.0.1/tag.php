<?php 
/**************************************************************
 *
 * Default Tag Posts Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 category.php
 * @author   		 tag Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

///////////////////////////////////////////////////////////////
// Header
get_header();

// get posts page ID
$pageID = get_option('page_for_posts')? get_option('page_for_posts'): get_the_ID();

// get widget position
$widget_pos = get_post_meta($pageID, 'page_widget_position');
$posts_view = get_post_meta($pageID, 'page_posts_view');
$title_bg = get_post_meta($pageID, 'post_title_bg');
$breadcrumb_section = get_post_meta($pageID, 'page_breadcrumb_active')[0];

?>

<div id = "page-blog-tag" class = "subpage-wrapper <?php echo ot_get_option('blog_viewtype'); ?>">
	
	<?php if($breadcrumb_section != 'off'): ?>
		<!-- Page title & Breadcrumb - from -->
		<section class = "breadcrumb-wrapper" data-parallax = "scroll" data-image-src = "<?php echo $title_bg[0]? $title_bg[0]: ot_get_option('blog_title_bgImage'); ?>">
			<div class = "container">
				<div class = "row">
					<div class = "col-lg-12 col-md-12">
						<h2 class = "breadcrumb-title">
							<?php 
								if(is_tag()){
									printf(__('<span>Tag:</span> %s', 'truewordpress'), single_tag_title('', false));
								} else {
									the_title();
								}
							?>
						</h2>
					</div>
				</div>
				<div class = "row">
					<div class = "col-lg-12 col-md-12">
						<h2 class = "breadcrumb-content">
							<?php custom_breadcrumbs(); ?>
						</h2>
					</div>
				</div>
			</div>
		</section>
		<!-- Page title & Breadcrumb - to -->
	<?php endif; ?>

	<!-- Sub page content - from -->
	<section class = "subpage-content-wrapper text-left <?php echo $breadcrumb_section && $breadcrumb_section == 'off'? 'no-breadcrumb': ''; ?>">
        <div class = "container">
			
			<!-- embed google adsense -->
			<?php embed_ads($pageID); ?>

            <div class = "row">
				<!-- Sub page widget - from -->
				<?php 
					if($widget_pos[0] != 'n' && ($widget_pos[0] == 'l' || ($widget_pos[0] != 'l' && $widget_pos[0] != 'r' && ot_get_option('default_page_widget_position') == 'l'))){
						get_sidebar();
					}
				?>
				<!-- Sub page widget - to -->

				<!-- Sub page Posts form - from -->
				<?php if($widget_pos[0] == 'n' || ($widget_pos[0] != 'l' && $widget_pos[0] != 'r' && ot_get_option('default_page_widget_position') == 'n')): ?>
					<div class = "subpage-content col-lg-12 col-md-12 <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<?php else: ?>
					<div class = "subpage-content col-lg-9 col-md-9 <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<?php endif; ?>

					<!-- Posts section -->
					<?php
						if(have_posts()){

							// if exist posts
							if($posts_view[0] == 'g' || ($posts_view[0] != 'g' && $posts_view[0] != 'l' && ot_get_option('default_page_posts_view') == 'g')){
								
								?><div class = "grid-container row" data-grid-columns = "3"><?php

									while(have_posts()){
										the_post();
								
										// post item template									
										get_template_part('templates/post-grid-item');
									} 

								?></div><?php

							} else {
								while(have_posts()){
									the_post();
								
									// post item template
									?><div class = "list-container row"><?php
										get_template_part('templates/post-list-item');
									?></div><?php
								}
							}
							
						} else {
							// show empty content
							get_template_part('templates/empty');
						}
					?>

					<!-- Pagination section -->
					<div class = "row col-lg-12 col-md-12">
						<?php
							// Pagination section
							echo blog_pagination();
						?>
					</div>
                </div>
				<!-- Sub page Posts form - to -->
				
				<!-- Sub page widget - from -->
				<?php 
					if($widget_pos[0] != 'n' && ($widget_pos[0] == 'r' || ($widget_pos[0] != 'l' && $widget_pos[0] != 'r' && ot_get_option('default_page_widget_position') == 'r'))){
						get_sidebar();
					}
				?>
				<!-- Sub page widget - to -->
            </div>
			
			<!-- embed google adsense -->
			<?php embed_ads($pageID, 'bottom'); ?>

        </div>
    </section>
	<!-- Sub page content - to -->
</div>

<?php
////////////////////////////////////////////
// embed google adwords for the page
if(get_post_meta($pageID, 'page_adwords_embed') == 'on'){
	echo get_post_meta($pageID, 'page_adwords_analytics');
}

///////////////////////////////////////////////////////////////
// Footer
get_footer();
?>

 	