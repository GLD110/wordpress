<?php
/**************************************************************
 *
 * Single Post page - none format content Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/content-none.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	
?>

<header class = "page-header">
	<h1 class = "page-title"><?php __('Nothing Found', 'truewordpress'); ?></h1>
</header>

<div class = "page-content after-clear">
	
	<?php if(is_home() && current_user_can('publish_posts')): ?>

		<p><?php printf(__('Ready to publish your first post? <a href = "%1$s">Get started here</a>.', 'truewordpress'), admin_url('post-new.php')); ?></p>

	<?php elseif (is_search()): ?>

		<p><?php _e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'truewordpress'); ?></p>
		<?php get_search_form(); ?>

	<?php else: ?>

		<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'truewordpress'); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>

</div><!-- .page-content -->
