<?php 
/**************************************************************
 *
 * Woocommerce product detail content Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 woocommerce-single-product.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

?>

<div class = "product-wrapper">
	<div class = "entry-header">
		<h1 class = "entry-title"><?php the_title(); ?></h1>
	</div><!-- .entry-header -->

	<div class = "entry-content after-clear">
		<?php woocommerce_content(); ?>
	</div><!-- .entry-content -->
	
</div>
