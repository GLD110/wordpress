<?php
/**************************************************************
 *
 * Load Menu Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/menu.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	


if(is_front_page()) {
	if (function_exists('wp_nav_menu')){
		wp_nav_menu(
			array(
				'theme_location' => 'tw-home-menu',
				'container' => false,
				'fallback_cb' => 'tw_default_menu',
				'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list',
				'menu_id' => 'top-menu'
			)
		);
	} else {
		tw_default_menu();
	}
} else if(function_exists('is_woocommerce') && is_woocommerce()) {
	if (function_exists('wp_nav_menu')) {
		wp_nav_menu(
			array(
				'theme_location' => 'tw-eshop-menu',
				'fallback_cb' => 'tw_default_menu',
				'container' => false,
				'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list',
				'menu_id' => 'top-menu'
			)
		);
	} else {
		tw_default_menu();
	}
} else if(function_exists('is_buddypress') && is_buddypress()) {
	if (function_exists('wp_nav_menu')) {
		wp_nav_menu(
			array(
				'theme_location' => 'tw-buddypress-menu',
				'fallback_cb' => 'tw_default_menu',
				'container' => false,
				'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list',
				'menu_id' => 'top-menu'
			)
		);
	} else {
		tw_default_menu();
	}
} else if(function_exists('is_bbpress') && is_bbpress()) {
	if (function_exists('wp_nav_menu')) {
		wp_nav_menu(
			array(
				'theme_location' => 'tw-bbpress-menu',
				'fallback_cb' => 'tw_default_menu',
				'container' => false,
				'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list',
				'menu_id' => 'top-menu'
			)
		);
	} else {
		tw_default_menu();
	}
} else {
	if (function_exists('wp_nav_menu')) {
		wp_nav_menu(
			array(
				'theme_location' => 'tw-blog-menu',
				'fallback_cb' => 'tw_default_menu',
				'container' => false,
				'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list',
				'menu_id' => 'top-menu'
			)
		);
	} else {
		tw_default_menu();
	}
}
?>