<?php 
/**************************************************************
 *
 * Template Name: Landing Page Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 front-page.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

///////////////////////////////////////////////////////////////
// Header
get_header();

?>

<div id = "home" class = "home-wrapper">

	<?php
		// Slider section
		get_template_part('templates/home-slider');

		// Business section
		get_template_part('templates/home-business');

		// Portfolio section
		get_template_part('templates/home-portfolio');

		// Team Member section
		get_template_part('templates/home-team');

		// Pricing section
		get_template_part('templates/home-pricing');

		// Chart section
		get_template_part('templates/home-chart');

		// Contact Us section
		get_template_part('templates/home-contactus');

		// Affiliate section
		get_template_part('templates/home-affiliate');
	?>

</div>

<?php
///////////////////////////////////////////////////////////////
// Footer
get_footer();
?>

 	