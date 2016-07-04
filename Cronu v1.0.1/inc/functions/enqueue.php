<?php
/**************************************************************
 *
 * Loading Javascript & CSS files function
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 inc/functions/enqueue.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

///////////////////////////////////////////////
// load script
function turewordpress_scripts(){

	// Register --------------------------------
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//code.jquery.com/jquery-1.11.3.min.js', false, '1.11.3');
	wp_register_script('jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', false, '1.2.1');
	wp_register_script('jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js', false, '1.11.3');	
	
	// bootstrap UI
	wp_register_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', false, '3.3.6');
	
	// HTML5
	wp_register_script('ie-html5shiv', '//html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js', false, null);
	
	// google map JS API
	wp_register_script('gmap-js', '//maps.googleapis.com/maps/api/js', false, null);
	wp_register_script('jquery-ui-map', get_template_directory_uri().'/assets/lib/jquery/jquery.ui.map.js', false, null);

	// jQuery smooth scrolling js
	wp_register_script('jquery-nicescroll', get_template_directory_uri().'/assets/lib/jquery/jquery.nicescroll.js', false, null);

	// Slit slider js
	wp_register_script('modernizr-custom', get_template_directory_uri().'/assets/lib/fullscreenSlitSlider/modernizr.custom.js', false, null);
	wp_register_script('jquery-ba-cond', get_template_directory_uri().'/assets/lib/fullscreenSlitSlider/jquery.ba-cond.min.js', false, null);
	wp_register_script('jquery-slitslider', get_template_directory_uri().'/assets/lib/fullscreenSlitSlider/jquery.slitslider.js', false, null);
	
	// Fancy box
	wp_register_script('jquery-fancybox', get_template_directory_uri().'/assets/lib/fancybox/jquery.fancybox.js', false, null);
	
	// film_roll slider
	wp_register_script('owl_carousel', get_template_directory_uri().'/assets/lib/owl.carousel/owl.carousel.js', false, null);

	// chart js
	wp_register_script('chart', get_template_directory_uri().'/assets/lib/chart.min.js', false, null);

	// parallax js
	wp_register_script('jarallax', get_template_directory_uri().'/assets/lib/jarallax.js', false, null);

	// social slider
	wp_register_script('social-sider-bar', get_template_directory_uri().'/assets/lib/socialSiderBar/socialSiderBar.js', false, null);

	// wow scroll effect
	wp_register_script('wow', get_template_directory_uri().'/assets/lib/WOWeffect/wow.min.js', false, null);

	// jquery dynamic grid js
	wp_register_script('jquery-grid-a-licious', get_template_directory_uri().'/assets/lib/jquery.grid-a-licious.min.js', false, null);

	// custom js
	wp_register_script('script', get_template_directory_uri().'/assets/js/script.js', false, null);


	// active all registred js files -----------------------------
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-migrate');
	wp_enqueue_script('jquery-ui');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('ie-html5shiv');	
	wp_script_add_data('ie-html5shiv', 'conditional', 'lt IE 9');

	wp_enqueue_script('gmap-js');
	wp_enqueue_script('jquery-ui-map');
	wp_enqueue_script('jquery-nicescroll');
	wp_enqueue_script('modernizr-custom');
	wp_enqueue_script('jquery-ba-cond');
	wp_enqueue_script('jquery-slitslider');
	wp_enqueue_script('jquery-fancybox');
	wp_enqueue_script('owl_carousel');
	wp_enqueue_script('chart');
	wp_enqueue_script('jarallax');
	wp_enqueue_script('social-sider-bar');
	wp_enqueue_script('wow');
	wp_enqueue_script('jquery-grid-a-licious');
	wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'turewordpress_scripts');

///////////////////////////////////////////////
// load stylesheet files
function turewordpress_styles(){	
	// register stylesheet files ----------------------
	// bootstrap ui css
	wp_register_style('turewordpress-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', 'all');
	
	// slit slider css
	wp_register_style('turewordpress-fullscreenSlitSlider-style', get_template_directory_uri().'/assets/lib/fullscreenSlitSlider/fullscreenSlitSlider-style.css', 'all');
	wp_register_style('turewordpress-fullscreenSlitSlider-custom', get_template_directory_uri().'/assets/lib/fullscreenSlitSlider/fullscreenSlitSlider-custom.css', 'all');
	wp_register_style('turewordpress-fullscreenSlitSlider-styleNoJS', get_template_directory_uri().'/assets/lib/fullscreenSlitSlider/fullscreenSlitSlider-styleNoJS.css', 'all');
	
	// jquery fancy box css
	wp_register_style('turewordpress-jquery-fancybox', get_template_directory_uri().'/assets/lib/fancybox/jquery.fancybox.css', 'all');

	// social siderbar css
	wp_register_style('turewordpress-socialSiderBar', get_template_directory_uri().'/assets/lib/socialSiderBar/socialSiderBar.css', 'all');

	// wow effect
	wp_register_style('turewordpress-animate', get_template_directory_uri().'/assets/lib/WOWeffect/animate.css', 'all');

	// wow effect
	wp_register_style('turewordpress-owl_carousel', get_template_directory_uri().'/assets/lib/owl.carousel/owl.carousel.css', 'all');

	// ie stylsheet
	wp_register_style('turewordpress-ie', get_template_directory_uri().'/assets/css/ie.css', 'all');

	// TinyMCE stylesheet
	wp_register_style('turewordpress-editor', get_template_directory_uri().'/assets/css/editor-style.css', 'all');

	// google fonts
	wp_register_style('turewordpress-googlefont-Lato', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,900,700italic,900italic&subset=latin,latin-ext', 'all');

	// awesome text & icon font
	wp_register_style('turewordpress-font-awesome', get_template_directory_uri().'/assets/fonts/Awesome/font-awesome.min.css', 'all');

	// awesome text & icon font
	wp_register_style('turewordpress-font-socialIcon', get_template_directory_uri().'/assets/fonts/SocialIcon/Pe-icon-social.css', 'all');
	

	// active all registred css files -----------------------------
	wp_enqueue_style('turewordpress-bootstrap');

	wp_enqueue_style('turewordpress-fullscreenSlitSlider-style');
	wp_enqueue_style('turewordpress-fullscreenSlitSlider-custom');
	//wp_enqueue_style('turewordpress-fullscreenSlitSlider-styleNoJS');

	wp_enqueue_style('turewordpress-jquery-fancybox');
	wp_enqueue_style('turewordpress-socialSiderBar');
	wp_enqueue_style('turewordpress-animate');
	wp_enqueue_style('turewordpress-owl_carousel');
	wp_enqueue_style('turewordpress-ie');
	wp_script_add_data('turewordpress-ie', 'conditional', 'lt IE 9');

	wp_enqueue_style('turewordpress-editor');
	wp_enqueue_style('turewordpress-googlefont-Lato');
	wp_enqueue_style('turewordpress-font-awesome');
	wp_enqueue_style('turewordpress-font-socialIcon');
	wp_enqueue_style('turewordpress-font-dashicons', get_stylesheet_uri(), array('dashicons'), '1.0');
}
add_action('wp_enqueue_scripts', 'turewordpress_styles');
?>