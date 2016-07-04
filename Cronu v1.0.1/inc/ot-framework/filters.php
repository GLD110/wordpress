<?php
/**************************************************************
 *
 * Add Filter for OptionTree Settings
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/ot-framework/filters.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

///////////////////////////////////////////////////////////////////////////
// add filter
//add_filter('ot_show_pages', '__return_false');
//add_filter('ot_show_new_layout', '__return_false');
add_filter('ot_theme_mode', '__return_true');
?>