<?php
/**************************************************************
 *
 * Single Post page - gallery content Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/content-gallery.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	
?>

<article id = "post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class = "entry-content after-clear">

		<?php echo get_post_gallery(); ?>

	</div><!-- .entry-content -->	
</article>
