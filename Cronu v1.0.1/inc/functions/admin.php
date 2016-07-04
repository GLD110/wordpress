<?php
/**************************************************************
 *
 * Admin Page style function
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/admin.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

////////////////////////////////////////////////////////
// add css file to admin panel
function truewordpress_admin_style(){
	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/assets/css/admin.css'.'" type="text/css" media="all" />';wp_register_style('custom_wp_admin_css', get_template_directory_uri().'/assets/css/admin.css', true, '1.0.0');
}
add_action('admin_head', 'truewordpress_admin_style');



