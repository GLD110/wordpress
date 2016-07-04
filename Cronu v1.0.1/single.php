<?php 
/**************************************************************
 *
 * Default Sinple Post Template
 *
 * @package			 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 single.php
 * @author	 		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

///////////////////////////////////////////////////////////////
// Header
get_header();

// get widget position
$postID = get_the_ID();


$widget_pos = get_post_meta($postID, 'post_widget_position');
$title_bg = get_post_meta($postID, 'post_title_bg');

// get Social Links
$facebook = get_post_meta($postID, 'post_facebook');
$twitter = get_post_meta($postID, 'post_twitter');
$google = get_post_meta($postID, 'post_google');
$linkedin = get_post_meta($postID, 'post_linkedin');
$breadcrumb_section = get_post_meta($pageID, 'page_breadcrumb_active')[0];

?>

<div id = "page-singlepost" class = "subpage-wrapper <?php echo ot_get_option('blog_viewtype'); ?>">
	
	<?php if($breadcrumb_section != 'off'): ?>
		<!-- Page title & Breadcrumb - from -->
		<section class = "breadcrumb-wrapper" data-parallax = "scroll" data-image-src = "<?php echo $title_bg[0]? $title_bg[0]: ot_get_option('blog_title_bgImage'); ?>">
			<div class = "container">
				<div class = "row">
					<div class = "col-lg-12 col-md-12">
						<h2 class = "breadcrumb-title"><?php the_title(); ?></h2>
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
			<?php embed_ads($postID); ?>

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
					<div class = "subpage-content col-lg-12 col-md-12">
				<?php else: ?>
					<div class = "subpage-content col-lg-9 col-md-9">
				<?php endif; ?>

					<?php if(have_posts()): ?>
						<div class = "detail-container row">

							<div class = "content-title">							
								<h2><?php the_title(); ?>

								<?php if(ot_get_option('blog_postformat') == 'on'): ?>
									<label class = "post-format-icon post-format-<?php echo get_post_format(); ?>"></label>
								<?php endif; ?></h2>
							</div>

							<div class = "detail-info">
								<span class = "post-user">By <a href = "<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class = "fa fa-user"></i><?php the_author(); ?></a></span>
								<span class = "post-comments"><i class = "fa fa-comments"></i> <?php echo get_comments_number(); ?></span>
								<span class = "post-date"><i class = "fa fa-calendar"></i><?php the_time('M d, Y'); ?></span>

								<?php if(get_the_category()): ?>
									<span class = "post-categories"><i class = "fa fa-folder"></i> <?php the_category(' '); ?></span>
								<?php endif; ?>

								<?php if(get_the_tags()): ?>
									<span class = "post-tags"><i class = "fa fa-tags"></i> <?php the_tags(' '); ?></span>
								<?php endif; ?>
							</div>
							
							<?php if(has_post_thumbnail()): ?>
								<div class = "detail-thumb">
									<?php the_post_thumbnail('full'); ?>
								</div>
							<?php endif; ?>

							<!-- Post Content -->
							<div class = "detail-description mceContentBody">
								<?php 
									if(have_posts()){
										while(have_posts()){
											the_post();
											
											if(ot_get_option('blog_postformat') == 'on'){
												if(get_post_format()){
													get_template_part('templates/content-'.get_post_format());
												} else {
													get_template_part('templates/content');
												}
											} else {
												the_content();
											}
										}
									}
								?>
							</div>
							
							<?php edit_post_link(__('[Edit]', 'truewordpress'), '<div class = "detail-post-edit">', '</div>'); ?>

							<div class = "detail-action after-clear">
								<div class = "col-lg-6 col-md-6 text-left">
									<?php if($facebook[0]): ?>
										<a href = "http://<?php echo $facebook[0]; ?>" target = "_blank" class = "social-btn color-facebook<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-facebook"></i></a>
									<?php endif; ?>

									<?php if($twitter[0]): ?>
										<a href = "http://<?php echo $twitter[0]; ?>" target = "_blank" class = "social-btn color-twitter<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-twitter"></i></a>
									<?php endif; ?>

									<?php if($google[0]): ?>
										<a href = "http://<?php echo $google[0]; ?>" target = "_blank" class = "social-btn color-google-plus<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-google-plus"></i></a>
									<?php endif; ?>

									<?php if($linkedin[0]): ?>
										<a href = "http://<?php echo $linkedin[0]; ?>" target = "_blank" class = "social-btn color-linkedin<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-linkedin"></i></a>
									<?php endif; ?>
								</div>

								<div class = "col-lg-6 col-md-6 text-right">
									<?php previous_post_link('%link', '<i class = "fa fa-chevron-left"></i> '.__('Previous Post', 'truewordpress'), true); ?>
									<?php next_post_link('%link', __('Next Post', 'truewordpress').'<i class = "fa fa-chevron-right"></i> ', true); ?> 
								</div>
							</div>

							<div class = "detail-comment-wrapper">
								<?php comments_template(); ?>

								<div class = "comment-responde">
									<?php get_template_part('templates/comment-form'); ?>
								</div>
							</div>
							
							<div class = "detail-related-posts">
								<?php get_template_part('templates/related-posts'); ?>
							</div>

						</div>

					<?php else:						
						// show empty content
						get_template_part('templates/empty');
					endif; ?>	
					
				</div>
				<!-- Sub page content form - to -->

				<!-- Sub page widget - from -->
				<?php 
					if($widget_pos[0] != 'n' && ($widget_pos[0] == 'r' || ($widget_pos[0] != 'l' && $widget_pos[0] != 'r' && ot_get_option('default_page_widget_position') == 'r'))){
						get_sidebar();
					}
				?>
				<!-- Sub page widget - to -->
			</div>
			
			<!-- embed google adsense -->
			<?php embed_ads($postID, 'bottom'); ?>

		</div>
	</section>
	<!-- Sub page content - to -->
</div>

<?php
////////////////////////////////////////////
// embed google adwords for the page
if(get_post_meta($postID, 'page_adwords_embed') == 'on'){
	echo get_post_meta($postID, 'page_adwords_analytics');
}

///////////////////////////////////////////////////////////////
// Footer
get_footer();
?>

 	