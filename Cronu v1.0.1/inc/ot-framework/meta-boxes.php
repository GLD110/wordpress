<?php
/**************************************************************
 *
 * Metabox settings
 *
 * @package			TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/ot-framework/meta-boxes.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

//Initialize the custom Meta Boxes. /
add_action('admin_init', 'custom_meta_boxes');

function custom_meta_boxes() {
	
	// Create a custom meta boxes array that we pass to the OptionTree Meta Box API Class.
	$meta_args_array = array(

		///////////////////////////////////////////////////
		// 1. Meta Box for Add New & Edit Page 
		///////////////////////////////////////////////////

		// 1.1 page structure
		array(
			'id'		=> 'page_structure_settings',
			'title'		=> 'Page Structure Settings',
			'pages'		=> array('page'),
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields'	=> array(
				array(
					'id'       => 'page_widget_position',
					'label'    => __('Widget Position', 'truewordpress'),
					'desc'	   => __('This is options for decision position (Left & Right & No Widget) of Widget in this page', 'truewordpress'),
					'type'     => 'radio-image',
					'choices'  => array(
						array(
							'value' => 'l',
							'label' => __('Left Widget', 'truewordpress'),
							'src'   => get_template_directory_uri().'/assets/images/admin/widget-position-l.png'
						),
						array(
							'value' => 'r',
							'label' => __('Right Widget', 'truewordpress'),
							'src'   => get_template_directory_uri().'/assets/images/admin/widget-position-r.png'
						),
						array(
							'value' => 'n',
							'label' => __('No Widget', 'truewordpress'),
							'src'   => get_template_directory_uri().'/assets/images/admin/widget-position-n.png'
						)
					),
					'std'      => 'l',
				),			
				array(
					'id'       => 'page_posts_view',
					'label'    => __('Posts View', 'truewordpress'),
					'desc'	   => __('This is options for decision view type of Blog Posts page, if this page is posts page', 'truewordpress'),
					'type'     => 'radio-image',
					'choices'  => array(
						array(
							'value' => 'g',
							'label' => __('Grid View', 'truewordpress'),
							'src'   => get_template_directory_uri().'/assets/images/admin/posts-structure-g.png'
						),
						array(
							'value' => 'l',
							'label' => __('List View', 'truewordpress'),
							'src'   => get_template_directory_uri().'/assets/images/admin/posts-structure-l.png'
						),
					),
					'std'      => 'g',
				),
			)
		),
		// 1.2 page header
		array(
			'id'		=> 'page_title_bg_section',
			'title'		=> 'Page Title Parallax Background Image',
			'pages'		=> array('page'),
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields'	=> array(
				array(
					'id'       => 'page_title_bg',
					'label'    => __('Background Image', 'truewordpress'),
					'desc'	   => __('Enter parallax background image for This Page title section', 'truewordpress'),
					'type'     => 'upload'
				)
			)
		),

		///////////////////////////////////////////////////
		// 2. Meta Box for Add New & Post 
		///////////////////////////////////////////////////

		// 2.1 post structure
		array(
			'id'		=> 'post_widget_settings',
			'title'		=> 'Post Widget Position Settings',
			'pages'		=> array('post'),
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields'	=> array(
				array(
					'id'       => 'post_widget_position',
					'label'    => __('Widget Position', 'truewordpress'),
					'desc'	   => __('This is options for decision position (Left & Right & No Widget) of Widget in this page', 'truewordpress'),
					'type'     => 'radio-image',
					'choices'  => array(
						array(
							'value' => 'l',
							'label' => __('Left Widget', 'truewordpress'),
							'src'   => get_template_directory_uri().'/assets/images/admin/widget-position-l.png'
						),
						array(
							'value' => 'r',
							'label' => __('Right Widget', 'truewordpress'),
							'src'   => get_template_directory_uri().'/assets/images/admin/widget-position-r.png'
						),
						array(
							'value' => 'r',
							'label' => __('No Widget', 'truewordpress'),
							'src'   => get_template_directory_uri().'/assets/images/admin/widget-position-n.png'
						)
					),
					'std'      => 'l',
				)
			)
		),	
		// 2.2 single post page title background image
		array(
			'id'		=> 'post_title_bg_section',
			'title'		=> 'Post Page Title Parallax Background Image',
			'pages'		=> array('post'),
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields'	=> array(
				array(
					'id'       => 'post_title_bg',
					'label'    => __('Background Image', 'truewordpress'),
					'desc'	   => __('Enter parallax background image for Post Page title section', 'truewordpress'),
					'type'     => 'upload'
				)
			)
		),
		// 2.3 single post page - social links
		array(
			'id'		=> 'post_social',
			'title'		=> 'Post Social Sharing',
			'pages'		=> array('post'),
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields'	=> array(
				array(
					'id'       => 'post_facebook',
					'label'    => __('Facebook Link', 'truewordpress'),
					'desc'	   => __('Enter a link to view more detail data. Remember to add the <code>http://</code> part to the front of the link.', 'truewordpress'),
					'type'     => 'text',
				),
				array(
					'id'       => 'post_twitter',
					'label'    => __('Twitter Link', 'truewordpress'),
					'desc'	   => __('Enter a link to view more detail data. Remember to add the <code>http://</code> part to the front of the link.', 'truewordpress'),
					'type'     => 'text',
				),
				array(
					'id'       => 'post_google',
					'label'    => __('Google+ Link', 'truewordpress'),
					'desc'	   => __('Enter a link to view more detail data. Remember to add the <code>http://</code> part to the front of the link.', 'truewordpress'),
					'type'     => 'text',
				),
				array(
					'id'       => 'post_linkedin',
					'label'    => __('LinkedIn Link', 'truewordpress'),
					'desc'	   => __('Enter a link to view more detail data. Remember to add the <code>http://</code> part to the front of the link.', 'truewordpress'),
					'type'     => 'text',
				),
			)
		),
		
		///////////////////////////////////////////////////
		// 3. Google Adwords
		///////////////////////////////////////////////////

		// 3.1 metabox
		array(
			'id'		=> 'page_adwords_settings',
			'title'		=> 'Page Google Adwords Settings',
			'pages'		=> array('page', 'post'),
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields'	=> array(
				array(
					'id'       => 'page_adwords_embed',
					'label'    => __('Embed Google Adwords for this page', 'truewordpress'),
					'type'     => 'on-off',
					'std'      => 'on',
				),
				array(
					'id'       => 'page_adwords_analytics',
					'label'    => __('Google Analytics for this page', 'truewordpress'),
					'desc'     => __('In this area, paste your Google Analytics tracking code for this page.', 'truewordpress'),
					'type'     => 'textarea-simple',
				)
			)
		),

		// 3.2 adsense
		array(
			'id'		=> 'page_adsense_settings',
			'title'		=> 'Page Google Adsense Settings',
			'pages'		=> array('page', 'post'),
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields'	=> array(
				array(
					'id'       => 'page_ads_embed',
					'label'    => __('Embed Google Adsense', 'truewordpress'),
					'type'     => 'on-off',
					'std'      => 'on',
				),
				array(
					'id'       => 'page_ads_top',
					'label'    => __('Top Google Adsense', 'truewordpress'),
					'desc'     => __('Enter your google adsense embed code to add to top section of page container.', 'truewordpress'),
					'type'     => 'list-item',			
					'settings'   => array(
						array(
							'id'    => 'embed_code',
							'label' => __('Google Ads Embed Code', 'truewordpress'),
							'type'  => 'textarea-simple'
						)
					)
				),
				array(
					'id'       => 'page_ads_bottom',
					'label'    => __('Bottom Google Adsense', 'truewordpress'),
					'desc'     => __('Enter your google adsense embed code to add to bottom section of page container.', 'truewordpress'),
					'type'     => 'list-item',			
					'settings'   => array(
						array(
							'id'    => 'embed_code',
							'label' => __('Google Ads Embed Code', 'truewordpress'),
							'type'  => 'textarea-simple'
						)
					)
				)
			)
		),
		
		///////////////////////////////////////////////////
		// 4. hide & show breacrumb section
		///////////////////////////////////////////////////

		// 4.1 hide & show breacrumb section
		array(
			'id'		=> 'page_breadcrumb',
			'title'		=> 'Page Breadcrumb section',
			'pages'		=> array('page', 'post'),
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields'	=> array(
				array(
					'id'       => 'page_breadcrumb_active',
					'label'    => __('Select `off` if you want to not see breadcrumb section in the page or post.', 'truewordpress'),
					'type'     => 'on-off',
					'std'      => 'on',
				),
			)
		)
	);
	
	///////////////////////////////////////////////////////////////////////////////////////
	// Register our meta boxes using the ot_register_meta_box() function.
	if (function_exists('ot_register_meta_box')){
		foreach($meta_args_array as $m){
			ot_register_meta_box($m);
		}
	}
}
?>