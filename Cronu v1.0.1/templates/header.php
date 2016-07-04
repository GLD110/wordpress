<?php
/**************************************************************
 *
 * Header Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/header.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	
?>

<header class = "header-wrapper">
	<div id = "main-nav" class = "navbar navbar-inverse bs-docs-nav" role = "banner" data-structure = "<?php echo ot_get_option('header_structure'); ?>">
		<div class = "container">
			<div class = "navbar-header responsive-logo">
				<!-- LOGO -->
				<?php get_template_part('templates/logo'); ?>
			</div>
			
			<button class = "navbar-toggle collapsed" type = "button" data-toggle = "collapse" data-target = ".bs-navbar-collapse">
				<span class = "sr-only">Toggle navigation</span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>

			<nav class = "navbar-collapse bs-navbar-collapse collapse" role = "navigation" id = "main-navigation">
				<?php get_template_part('templates/menu'); ?>
			</nav>
			<div class = "clear"></div>
		</div>
	</div>
</header>
