<?php 
/**************************************************************
 *
 * Load Global Functions
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 functions.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// admin functions
include_once('inc/functions/admin.php');

/////////////////////////////////////////////////////////

// configuration
include_once('inc/conf.php');

// Load enqueue
include_once('inc/functions/enqueue.php');

// Load customized theme
include_once('inc/functions/apply.php');

// menu functions
include_once('inc/functions/menu.php');

// breadcrumbs functions
include_once('inc/functions/breadcrumb.php');

// widget functions
include_once('inc/functions/widget.php');

// post functions
include_once('inc/functions/post.php');

//pagination
include_once('inc/functions/pagination.php');

//shortcode
include_once('inc/functions/shortcode.php');
include_once('inc/functions/tinymce.php');

//google ads function
include_once('inc/functions/google-ads.php');

// TGM activation
require_once('inc/tgm/class-tgm-plugin-activation.php');
require_once('inc/tgm/example.php');


// meta box & theme options with optionTree framework
include_once('inc/ot-framework/ot-loader.php');
include_once('inc/ot-framework/meta-boxes.php');
include_once('inc/ot-framework/theme-options.php');
include_once('inc/ot-framework/filters.php');

?>