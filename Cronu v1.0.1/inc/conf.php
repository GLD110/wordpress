<?php
/**************************************************************
 *
 * Configuration Post
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/conf.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

/////////////////////////////////////////////////////////
// 1. integrate another plugin themes after theme setup
if(!function_exists('truewordpress_setup')){
	// Sets up theme defaults and registers support for various WordPress features.
	function truewordpress_setup() {
		
		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		
		// Enable support for Post Formats.
		add_theme_support('post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
		));

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		
		// refer woocommerce default theme
		add_theme_support('woocommerce');

		// refer buddypress default theme
		//add_theme_support('buddypress');
	}
}
add_action('after_setup_theme', 'truewordpress_setup');


/////////////////////////////////////////////////////////
// 2. thumb image settings
add_image_size('image-blog-thumb', 210, 150, true);			// blog post thumb images


/////////////////////////////////////////////////////////
// 3. reset filter
// gallery 
add_filter('use_default_gallery_style', '__return_false');

// Woocommerce functions -----
//  reset columns in products page
add_filter('loop_shop_columns', create_function('$cols', 'return 4;'));

//  reset items count in products page
add_filter('loop_shop_per_page', create_function('$cols', 'return 20;'));

/*
// Disable verification function of Budypress for Local test
add_filter('bbp_verify_nonce_request_url', 'my_bbp_verify_nonce_request_url', 999, 1);
function my_bbp_verify_nonce_request_url($requested_url){
    return 'http://172.16.200.60:800'.$_SERVER['REQUEST_URI'];
}
*/
?>