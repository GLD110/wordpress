<?php	
/**************************************************************
 *
 * Shortcode Settings function
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/shortcode.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

////////////////////////////////////////////////////////
// shortcode functions

// colmun content
function shortcode_callback_column($atts, $content, $tag){
	
	$columns_num = isset($atts['number']) && (int)$atts['number'] <= 4 && (int)$atts['number'] > 0? (int)$atts['number']: 1;
	$class_name = isset($atts['class']) && $atts['class']? $atts['class']: '';
	
	return '<div class = "col-md-'.(12 / $columns_num).' '.$class_name.'">'.$content.'</div>';
	
}
add_shortcode('column', 'shortcode_callback_column');

// column text
function shortcode_callback_columntext($atts, $content, $tag){
	
	$columns_num = isset($atts['number']) && (int)$atts['number'] <= 6 && (int)$atts['number'] > 0? (int)$atts['number']: 1;
	$gap = isset($atts['column-space'])? (int)$atts['column-space']: '';
	$rule_style = isset($atts['spacing-line'])? $atts['spacing-line']: '';

	$class_name = isset($atts['class']) && $atts['class']? $atts['class']: '';
	
	return '
		<div style = "
			-webkit-column-count: '.$columns_num.'; -moz-column-count: '.$columns_num.'; column-count: '.$columns_num.'; 
			-webkit-column-gap: '.$gap.'px; -moz-column-gap: '.$atts['column-space'].'px; column-gap: '.$atts['column-space'].'px;
			-webkit-column-rule-style: '.$rule_style.'; -moz-column-rule-style: '.$rule_style.'; column-rule-style: '.$rule_style.';
			-webkit-column-rule-width: 1px; -moz-column-rule-width: 1px; column-rule-width: 1px;
		"
		class = "col-md-12 '.$class_name.'"
		>
			'.$content.'
		</div>
	';
	
}
add_shortcode('column-text', 'shortcode_callback_columntext');

// buttons
function shortcode_buttons($atts, $content, $tag){
	
	$size = isset($atts['size'])? $atts['size']: 'normal';	// small, middle, normal, large
	$round = isset($atts['round'])? $atts['round']: 'normal';	// small, middle, normal, large
	$action = isset($atts['action'])? 'javascript: '.str_replace("'", "\\'", urldecode($atts['action'])): '';	// 

	return '<button class = "btn-size-'.$size.' btn-round-'.$round.'" onclick = \''.$action.'\'>'.$content.'</button>';
	
}
add_shortcode('button', 'shortcode_buttons');

// media
function shortcode_media($atts, $content, $tag){
	
	$type = isset($atts['type'])? $atts['type']: '';
	$src = $content? $content: '';
	
	return '<div class = "embed-responsive embed-responsive-16by9"><iframe class = "embed-responsive-item" src = "'.$src.'"></iframe></div>';
	
}
add_shortcode('media', 'shortcode_media');

// icons
function shortcode_icon($atts, $content, $tag){
	
	$type = isset($atts['type'])? $atts['type']: '';
	
	return '<i class="'.$type.'"></i>';
	
}
add_shortcode('icon', 'shortcode_icon');


?>