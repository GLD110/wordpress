<?php 
/**************************************************************
 *
 * Template Name: Bbpress Page Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 bbpress.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

///////////////////////////////////////////////////////////////
// Header
get_header();

// get widget position
$pageID = get_the_ID();

$widget_pos = get_post_meta($pageID, 'page_widget_position');
$title_bg = get_post_meta($pageID, 'page_title_bg');
$breadcrumb_section = get_post_meta($pageID, 'page_breadcrumb_active')[0];
?>

<div id = "page-bbpress" class = "subpage-wrapper <?php echo ot_get_option('bbpress_viewtype'); ?>">
	
	<?php if($breadcrumb_section != 'off'): ?>
		<!-- Page title & Breadcrumb - from -->
		<section class = "breadcrumb-wrapper" data-parallax = "scroll" data-image-src = "<?php echo $title_bg[0]? $title_bg[0]: ot_get_option('bbpress_title_bgImage'); ?>">
			<div class = "container">
				<div class = "row">
					<div class = "col-lg-12 col-md-12">
						<h2 class = "breadcrumb-title">
							<?php the_title(); ?>
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
						get_sidebar('bbpress');
					}
				?>
				<!-- Sub page widget - to -->

				<!-- Sub page Posts form - from -->
				<?php if($widget_pos[0] == 'n' || ($widget_pos[0] != 'l' && $widget_pos[0] != 'r' && ot_get_option('default_page_widget_position') == 'n')): ?>
					<div class = "subpage-content col-lg-12 col-md-12 <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<?php else: ?>
					<div class = "subpage-content col-lg-9 col-md-9 <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<?php endif; ?>

					<div class = "article-wrapper">
						<?php while(have_posts()): ?>
							<?php the_post(); ?>

							<article id = "post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class = "entry-header">
									<?php if(has_post_thumbnail() && !post_password_required()): ?>
										<div class = "entry-thumbnail">
											<?php the_post_thumbnail(); ?>
										</div>
									<?php endif; ?>

									<h1 class = "entry-title"><?php the_title(); ?></h1>
								</div><!-- .entry-header -->

								<div class = "entry-content after-clear">
									<?php the_content(); ?>
									<?php wp_link_pages(array('before' => '<div class = "page-links"><span class = "page-links-title">'.__('Pages:', 'truewordpress'). '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
								</div><!-- .entry-content -->

								<div class = "entry-footer">
									<?php edit_post_link(__('[Edit]', 'truewordpress'), '<span class = "edit-link">', '</span>'); ?>
								</div><!-- .entry-meta -->
							</article><!-- #post -->

							<?php comments_template(); ?>
						<?php endwhile; ?>
					</div>
                </div>
				<!-- Sub page Posts form - to -->
				
				<!-- Sub page widget - from -->
				<?php 
					if($widget_pos[0] != 'n' && ($widget_pos[0] == 'r' || ($widget_pos[0] != 'l' && $widget_pos[0] != 'r' && ot_get_option('default_page_widget_position') == 'r'))){
						get_sidebar('bbpress');
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
