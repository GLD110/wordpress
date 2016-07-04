<?php
/**************************************************************
 *
 * Single Post page - chat content Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/content-chat.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	
?>

<article id = "post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class = "entry-content after-clear">
		<?php
			/* translators: %s: Name of current post */
			the_content(sprintf(
				__('Continue reading %s <span class = "meta-nav">&raquo;</span>', 'truewordpress'),
				the_title('<span class = "screen-reader-text">', '</span>', false)
			));

			wp_link_pages(array(
				'before' => '<div class = "page-links"><span class = "page-links-title">'.__('Pages:', 'truewordpress').'</span>', 
				'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>'
			));
		?>
	</div><!-- .entry-content -->
</article>
