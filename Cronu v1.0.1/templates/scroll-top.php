<?php
/**************************************************************
 *
 * Scroll Top button Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/scroll-top.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

 // check slider visible
if(ot_get_option('general_scrolltop') != 'on'){
	return false;
}

?>

<!-- Scroll Top Button -->
<a id = "go-to-top" href = "#">go-to-top</a>
