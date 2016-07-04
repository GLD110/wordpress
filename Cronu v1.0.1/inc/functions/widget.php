<?php
/**************************************************************
 *
 * Widget Settings function
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/widget.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

////////////////////////////////////////////////////////
// widget functions
function tw_truewordpress_widgets(){
	
	register_sidebar(array(
		'name' => __('Footer Widget', 'truewordpress'),
		'id' => 'footer_widget',
		'description' => 'Display your widgets in the footer section.',
		'before_widget' => '<div class = "col-lg-4 col-md-4 footer-widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<label>',
		'after_title' => '</label>',
	));	
	
	register_sidebar(array(
		'name' => __('Post Sidebar', 'truewordpress'),
		'id' => 'post_sidebar',
		'description' => 'Display your widgets in the post sidebar.',
		'before_widget' => '<div class = "col-lg-12 col-md-12 widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));	
	
	register_sidebar(array(
		'name' => __('Page Sidebar', 'truewordpress'),
		'id' => 'page_sidebar',
		'description' => 'Display your widgets in the General page sidebar.',
		'before_widget' => '<div class = "col-lg-12 col-md-12 widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));	
	
	register_sidebar(array(
		'name' => __('E-shop Sidebar', 'truewordpress'),
		'id' => 'eshop_sidebar',
		'description' => 'Display your widgets in the E-shop page sidebar.',
		'before_widget' => '<div class = "col-lg-12 col-md-12 widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => __('Buddypress Sidebar', 'truewordpress'),
		'id' => 'buddypress_sidebar',
		'description' => 'Display your widgets in the Buddypress page sidebar.',
		'before_widget' => '<div class = "col-lg-12 col-md-12 widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => __('bbpress Sidebar', 'truewordpress'),
		'id' => 'bbpress_sidebar',
		'description' => 'Display your widgets in the bbpress page sidebar.',
		'before_widget' => '<div class = "col-lg-12 col-md-12 widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
}
add_action('widgets_init', 'tw_truewordpress_widgets');

?>