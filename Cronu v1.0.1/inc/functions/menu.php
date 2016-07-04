<?php
/**************************************************************
 *
 * Menu Settings
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/menu.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

////////////////////////////////////////////////////////
// menu functions
add_action('init', 'tw_register_menu');
function tw_register_menu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu('tw-home-menu', __('Home Menu', 'truewordpress')); // Home menu
	}
}
																		
function tw_default_menu(){																	
	?><ul id = "top-menu" class = "nav navbar-nav navbar-right main_nav"><?php

	if('page' != get_option('show_on_front')){
		?><li class = "active"><a href = "<?php echo home_url(); ?>/">Home</a></li><?php
	}

	wp_list_pages('title_li=');
	?></ul><?php
}
register_nav_menu('tw-blog-menu', __('Blog Menu', 'truewordpress'));				// Blog menu
register_nav_menu('tw-eshop-menu', __('Eshop Menu', 'truewordpress'));				// Eshop menu
register_nav_menu('tw-buddypress-menu', __('Buddypress Menu', 'truewordpress'));	// Buddypress menu
register_nav_menu('tw-bbpress-menu', __('BBpress Menu', 'truewordpress'));			// BBpress menu

?>