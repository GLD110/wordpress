<?php
/**************************************************************
 *
 * Social Sider Bar Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/social-siderbar.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

 // check slider visible
$socialsider = ot_get_option('socialsider_datas');

if(ot_get_option('socialsider_structure') == 'n' || !is_array($socialsider)){
	return false;
}

$parsed = array();
foreach($socialsider as $s){
	if($s['name'] && $s['href']){
		array_push($parsed, array(
			'key' => strtolower($s['name']),
			'label' => strtolower($s['title']),
			'link' => 'http://'.strtolower($s['href']),
		));
	}
}

?>

<!-- Social Sider Bar section -->
<div id = "socialsiderbar" class = "natual-color-<?php echo ot_get_option('socialsider_color'); ?>" data-social = '<?php echo json_encode($parsed); ?>' data-icon-root = "<?php echo get_template_directory_uri(); ?>/"></div>
