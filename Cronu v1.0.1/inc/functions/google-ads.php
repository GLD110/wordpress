<?php	
/**************************************************************
 *
 * embed google ads function
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/google-ads.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

////////////////////////////////////////////////////////
// google ads functions
if(!function_exists('embed_ads')){

	function embed_ads($pageID = 0, $section = 'top'){

		// embed google ads
		if(ot_get_option('ads_embed') == 'on' || (isset(get_post_meta($pageID, 'page_ads_embed')[0]) && get_post_meta($pageID, 'page_ads_embed')[0] == 'on')){

			?><div class = "row google-ads-wrapper"><?php

				$ads = get_post_meta($pageID, 'page_ads_'.$section);

				if(!isset($ads[0]) || !is_array($ads) || empty($ads)){
					$ads = ot_get_option('ads_'.$section);
				} else {
					$ads = $ads[0];
				}

				if(is_array($ads)){
					foreach($ads as $a){
						if($a['embed_code']){
							?><div class = "google-ads-items"><?php echo $a['embed_code']; ?></div><?php
						}
					}
				}

			?></div><?php
		}

	}

}

?>