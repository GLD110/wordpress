<?php
/**************************************************************
 *
 * Post functions
 *   - Post nav link
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/post.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

////////////////////////////////////////////////////////
// add classes into post nav links
add_filter('next_post_link', 'post_link_next_attr');
function post_link_next_attr($output){
	$injection = 'class = "next_nav"';
	return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

add_filter('previous_post_link', 'post_link_prev_attr');
function post_link_prev_attr($output){
	$injection = 'class = "prev_nav"';
	return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

?>