<?php
/**************************************************************
 *
 * Window Pre loader Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/pre-loader.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

 // check slider visible
if(ot_get_option('general_preloader') != 'on'){
	return false;
}

?>

<!-- Winodw Pre Loader -->
<div id = "window-preloader"><div id = "window-loader-bar" class = "rotating"></div></div>
