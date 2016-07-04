<?php
/**************************************************************
 *
 * Make Theme options
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/ot-framework/theme-options.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

///////////////////////////////////////////////////////////////////////////
// 
add_action('admin_init', 'custom_theme_options');
function custom_theme_options() {
	$sections = array();
	$settings = array();
	
	////////////////////////////////////////////////////////////////////////////////////////////////////

	//// General settings
	
	// add section	
	array_push($sections, array(
		'id'	 => 'settings_general',
		'title'	 => __('General', 'truewordpress')
	));

	// add general setting form
	array_push($settings, 

		// general tab
		array(			
			'id'	   => 'settings_general_form',
			'label'	   => __('General', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_general',
		),

		// general settings forms
		array(
			'id'	   => 'general_logo',
			'label'	   => __('Logo Uploader', 'truewordpress'),
			'desc'	   => sprintf(__('Upload your logo here. Best size for logo is 200 x 50')),
			'type'     => 'upload',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'general_favicon',
			'label'    => __('Favicon Uploader', 'truewordpress'),
			'desc'     => __('Upload your favicon here. Best size is 16 x 16 or 32 x 32 or 96 x 96 or 192 x 192', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'general_menu_target',
			'label'    => __('Menu Item URL Targets for front Landing Page', 'truewordpress'),
			'desc'    => __('<strong>Put this id\'s to menu items url field for appropriately scrolling sections while creating menu.</strong> <br/><br/>1. home = #home <br/>2. our business section = #business <br/>3. our works (portfolio) section = #portfolio <br/>4. our team section = #team <br/>5. Pricing section = #pricing <br/>6. Contact us section = #contactus', 'truewordpress'),
			'type'     => 'textblock-titled',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'general_empty_text',
			'label'    => __('Empty form text', 'truewordpress'),
			'type'     => 'text',
			'std'      => 'Sorry! Nothing Found',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'general_preloader',
			'label'    => __('Pre-loader', 'truewordpress'),
			'type'     => 'on-off',
			'std'     => 'on',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'general_scrolltop',
			'label'    => __('Scroll Top Button', 'truewordpress'),
			'type'     => 'on-off',
			'std'     => 'on',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'general_animation',
			'label'    => __('CSS3 animation', 'truewordpress'),
			'type'     => 'on-off',
			'std'     => 'on',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'default_page_widget_position',
			'label'    => __('Default Widget Position', 'truewordpress'),
			'desc'	   => __('This is options for decision default position (Left & Right & No Widget) of Widget in all page', 'truewordpress'),
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
				),
			),
			'std'      => 'l',
			'section'  => 'settings_general'
		),			
		array(
			'id'       => 'default_page_posts_view',
			'label'    => __('Default Posts View', 'truewordpress'),
			'desc'	   => __('This is options for decision default view type of Blog Posts & Category page, if this page is posts page', 'truewordpress'),
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
			'section'  => 'settings_general'
		)
	);

	// add Header setting form
	array_push($settings, 

		// Header tab
		array(			
			'id'	   => 'settings_header_form',
			'label'	   => __('Header', 'truewordpress'),
			'desc'	   => sprintf(__('Please make header settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_general',
		),

		// general Header settings forms
		array(
			'id'       => 'header_structure',
			'label'    => __('Header Structure', 'truewordpress'),
			'desc'	   => __('This option is for the position of Logo and Menu sections', 'truewordpress'),
			'type'     => 'radio-image',
			'choices'  => array(
				array(
					'value' => 'lr',
					'label' => __('Left Logo & Right Menu', 'truewordpress'),
					'src'   => get_template_directory_uri().'/assets/images/admin/header-structure-lr.png'
				),
				array(
					'value' => 'rl',
					'label' => __('Left Menu & Right logo', 'truewordpress'),
					'src'   => get_template_directory_uri().'/assets/images/admin/header-structure-rl.png'
				)
			),
			'std'      => 'lr',
			'section'  => 'settings_general',
		)
	);

	// add Footer setting form
	array_push($settings, 

		// Footer tab
		array(			
			'id'	   => 'settings_footer_form',
			'label'	   => __('Footer', 'truewordpress'),
			'desc'	   => sprintf(__('Please make footer settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_general',
		),

		// general Footer settings forms		
		array(
			'id'       => 'footer_structure',
			'label'    => __('Footer Structure', 'truewordpress'),
			'desc'     => __('This option is for the position of footer-widget & footer-content sections', 'truewordpress'),
			'type'     => 'radio-image',
			'choices'  => array(
				array(
					'value' => 'tb',
					'label' => __('Top Footer-Widget & Bottom Footer-Content', 'truewordpress'),
					'src'   => get_template_directory_uri().'/assets/images/admin/footer-structure-tb.png'
				),
				array(
					'value' => 'bt',
					'label' => __('Bottom Footer-Widget & Top Footer-Content', 'truewordpress'),
					'src'   => get_template_directory_uri().'/assets/images/admin/footer-structure-bt.png'
				)
			),
			'std'  => 'tb',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'footer_widget_logo',
			'label'    => __('Footer Widget - Logo', 'truewordpress'),
			'desc'     => __('Upload your Footer Logo here. Best size for logo is 200 x 175', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'footer_widget_bg',
			'label'    => __('Footer Widget - Background Color', 'truewordpress'),
			'desc'     => __('Select Footer Widget background color. (default: #444444)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#444444',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'footer_widget_title_color',
			'label'    => __('Footer Widget - Title Color', 'truewordpress'),
			'desc'     => __('Select Footer Widget Title-Font color. (default: #cccccc)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#cccccc',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'footer_widget_text_color',
			'label'    => __('Footer Widget - General Text Color', 'truewordpress'),
			'desc'     => __('Select Footer Widget Text-Font color. (default: #888888)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#888888',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'footer_contactinfo',
			'label'    => __('Footer Widget - Contact Info', 'truewordpress'),
			'desc'     => __('Edit contact info of footer section. You can add new rows while click [Add More] button.', 'truewordpress'),
			'type'     => 'textarea-simple',
			'section'  => 'settings_general'
		),
		array(
			'id'       => 'footer_content_bg',
			'label'    => __('Footer Content - Background Color', 'truewordpress'),
			'desc'     => __('Select Footer Content background color. (default: #222222)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#222222',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'footer_content_color',
			'label'    => __('Footer Content - Text Color', 'truewordpress'),
			'desc'     => __('Select Footer Content text font color. (default: #888888)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#888888',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'footer_copyright_structure',
			'type'     => 'button_set',
			'label'    => __('Footer-content Structure', 'truewordpress'),
			'desc'     => __('Choose the position info of Copyright and Author of footer-content section', 'truewordpress'),
			
			'type'     => 'radio-image',
			'choices'  => array(
				array(
					'value' => 'lr',
					'label' => __('Left Copyright & Right Author text', 'truewordpress'),
					'src'   => get_template_directory_uri().'/assets/images/admin/footer-structure-lr.png'
				),
				array(
					'value' => 'rl',
					'label' => __('Right Copyright & Left Author text', 'truewordpress'),
					'src'   => get_template_directory_uri().'/assets/images/admin/footer-structure-rl.png'
				)
			),
			'std'  => 'lr',
			'section'  => 'settings_general'
		),
		array(
			'id'       => 'general_footer_copyright',
			'label'    => __('Footer-content Copyright text', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'general_footer_author',
			'label'    => __('Footer-content Author text', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_general',
		)
	);

	// add Social Sider setting form
	array_push($settings, 

		// Social Sider Bar tab
		array(			
			'id'	   => 'settings_socialsider_form',
			'label'	   => __('Social Sider Bar', 'truewordpress'),
			'desc'	   => sprintf(__('Please make social sider bar settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_general',
		),

		// general Social Sider Bar settings forms
		array(
			'id'       => 'socialsider_color',
			'label'    => __('Social link icon background color.', 'truewordpress'),
			'desc'     => __('Select `on` for natural color background of Social link icon, but background color of Social link icon is black-white if this option is `off`.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'socialsider_structure',
			'label'    => __('Social Sider Bar Structure', 'truewordpress'),
			'desc'     => __('Select the position of Social Sider Bar section.', 'truewordpress'),
			'type'     => 'radio-image',
			'choices'  => array(
				array(
					'value' => 'l',
					'label' => __('Left - Social Sider bar', 'truewordpress'),
					'src'   => get_template_directory_uri().'/assets/images/admin/socialsider-structure-l.png'
				),
				array(
					'value' => 'n',
					'label' => __('No Social Sider bar', 'truewordpress'),
					'src'   => get_template_directory_uri().'/assets/images/admin/socialsider-structure-n.png'
				),
				array(
					'value' => 'r',
					'label' => __('Right - Social Sider bar', 'truewordpress'),
					'src'   => get_template_directory_uri().'/assets/images/admin/socialsider-structure-r.png'
				)
			),
			'std'  => 'l',
			'section'  => 'settings_general',
		),
		array(
			'id'       => 'socialsider_datas',
			'label'    => __('Social Links', 'truewordpress'),
			'desc'    => __('Enter Social informations. <br/> If Link or Name field is empty, Social icon will not be displayed. <br/> If no Title, display Name instead of Title.', 'truewordpress'),
			'type'     => 'social-links',
			'section'  => 'settings_general',
		)
	);
	
	//////////////////////////////////////////////////
	//// Color settings form
	array_push($sections, array(
		'id'	 => 'settings_google',
		'title'	 => __('Google Service', 'truewordpress')
	));
	
	// general color settings
	array_push($settings, 

		// Header tab
		array(			
			'id'	   => 'settings_googleservice_adwords',
			'label'	   => __('Google Adwords', 'truewordpress'),
			'desc'	   => sprintf(__('Please make google adwords settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_google',
		),

		// google adwords
		array(
			'id'       => 'adwords_embed',
			'label'    => __('Enable Google Adwords', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_google',
		),
		array(
			'id'       => 'adwords_analytics',
			'label'    => __('Google Analytics', 'truewordpress'),
			'desc'     => __('In this area, paste your Google Analytics tracking code.', 'truewordpress'),
			'type'     => 'textarea-simple',
			'section'  => 'settings_google',
		),
		array(
			'id'       => 'adwords_webmaster',
			'label'    => __('Webmaster Tools', 'truewordpress'),
			'desc'     => __('In this area, paste your Google Webmaster Tools HTML tag for verifying your site. If you need help getting this code, visit <a target="_blank" href="https://support.google.com/webmasters/bin/answer.py?hl=en&answer=35659">this page</a>', 'truewordpress'),
			'type'     => 'textarea-simple',
			'section'  => 'settings_google',
		),
		
		// Header tab
		array(			
			'id'	   => 'settings_googleservice_ads',
			'label'	   => __('Google Adsense', 'truewordpress'),
			'desc'	   => sprintf(__('Please make google adsense settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_google',
		),

		// google adwords
		array(
			'id'       => 'ads_embed',
			'label'    => __('Enable Global Google Adsense', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_google',
		),
		array(
			'id'       => 'ads_top',
			'label'    => __('Top Google Adsense', 'truewordpress'),
			'desc'     => __('Enter your google adsense embed code to add to top section of page container.', 'truewordpress'),
			'type'     => 'list-item',			
			'settings'   => array(
				array(
					'id'    => 'embed_code',
					'label' => __('Google Ads Embed Code', 'truewordpress'),
					'type'  => 'textarea-simple'
				)
			),
			'section'  => 'settings_google',
		),
		array(
			'id'       => 'ads_bottom',
			'label'    => __('Bottom Google Adsense', 'truewordpress'),
			'desc'     => __('Enter your google adsense embed code to add to bottom section of page container.', 'truewordpress'),
			'type'     => 'list-item',			
			'settings'   => array(
				array(
					'id'    => 'embed_code',
					'label' => __('Google Ads Embed Code', 'truewordpress'),
					'type'  => 'textarea-simple'
				)
			),
			'section'  => 'settings_google',
		)
	);
	//////////////////////////////////////////////////
	//// Color settings form
	array_push($sections, array(
		'id'	 => 'settings_color',
		'title'	 => __('Color Settings', 'truewordpress')
	));
	
	// general color settings
	array_push($settings, 

		// Header tab
		array(			
			'id'	   => 'settings_color_general',
			'label'	   => __('General', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general color settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_color',
		),

		// settings forms
		array(
			'id'       => 'color_text_basic',
			'label'    => __('Basic Text color', 'truewordpress'),
			'desc'     => __('This color is using for basic text. (default: #000000) <br/> - page & form title text color <br/> - `a` tag hover color <br/> etc.', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#000000',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_text_important',
			'label'    => __('Important Text color', 'truewordpress'),
			'desc'     => __('This color is using for important text. (default: #333333) <br/> - page & form title text color <br/> etc.', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#333333',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_text_general',
			'label'    => __('General Text color', 'truewordpress'),
			'desc'     => __('This color is using for general text .(default: #666666) <br/> - page & form description text color <br/> - general `a` tag color <br/> etc.', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#666666',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_text_light',
			'label'    => __('Light Text color', 'truewordpress'),
			'desc'     => __('This color is using for the light text. (default: #888888) <br/> - input placeholder text color <br/> etc.', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#888888',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_input_border',
			'label'    => __('Input tag border color', 'truewordpress'),
			'desc'     => __('This border color is using for Input tag. (default: #dddddd)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#dddddd',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_input_focus',
			'label'    => __('Input tag focus border color', 'truewordpress'),
			'desc'     => __('This border color is using for Input tag focus. (default: #aaaaaa)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#aaaaaa',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_general_btn_bg',
			'label'    => __('General Button background color', 'truewordpress'),
			'desc'     => __('This background color is using for the general button. (default: #888888)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#888888',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_general_btn_bg_hover',
			'label'    => __('General Button background hover color', 'truewordpress'),
			'desc'     => __('This background hover color is using for the general button. (default: #666666)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#666666',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_general_btn_text',
			'label'    => __('General Button text color', 'truewordpress'),
			'desc'     => __('This color is using for general button text. (default: #ffffff)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#ffffff',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_light_btn_bg',
			'label'    => __('Light Button background color', 'truewordpress'),
			'desc'     => __('This background color is using for light button. (default: #aaaaaa)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#aaaaaa',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_light_btn_bg_hover',
			'label'    => __('Light Button background hover color', 'truewordpress'),
			'desc'     => __('This background hover color is using for the light button. (default: #888888)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#888888',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_light_btn_text',
			'label'    => __('Light Button text color', 'truewordpress'),
			'desc'     => __('This color is using for light button text. (default: #ffffff)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#ffffff',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_link_btn_textborder',
			'label'    => __('Link button text and border color', 'truewordpress'),
			'desc'     => __('This text and border color is using for link button. (default: #888888) <br/> - input placeholder color <br/> etc.', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#888888',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_general_icon',
			'label'    => __('General Icon color', 'truewordpress'),
			'desc'     => __('This text and border color is using for general Icon. (default: #333333) <br/> - input placeholder color <br/> etc.', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#333333',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_light_icon',
			'label'    => __('Light Icon color', 'truewordpress'),
			'desc'     => __('This text and border color is using for light Icon. (default: #666666) <br/> - input placeholder color <br/> etc.', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#666666',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_featured_icon',
			'label'    => __('Featured Icon color', 'truewordpress'),
			'desc'     => __('This text and border color is using for featured Icon. (default: #000000) <br/> - icon of sale products <br/> etc.', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#000000',
			'section'  => 'settings_color',
		)
	);

	// add Header setting form
	array_push($settings, 

		// Header tab
		array(			
			'id'	   => 'settings_color_header',
			'label'	   => __('Header', 'truewordpress'),
			'desc'	   => sprintf(__('Please make header color settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_color',
		),

		// general Header color settings forms
		array(
			'id'       => 'color_header_bg',
			'label'    => __('Header Background Color', 'truewordpress'),
			'desc'     => __('Select header background color. (default: rgba(0, 0, 0, 0.8)).', 'truewordpress'),
			'type'     => 'colorpicker-opacity',
			'std'      => 'rgba(0, 0, 0, 0.8)',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_header_menu',
			'label'    => __('Header Menu Font Color', 'truewordpress'),
			'desc'     => __('Select header Menu font color. (default: #ffffff).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#ffffff',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_header_button',
			'label'    => __('Header Mobile Menu button Color', 'truewordpress'),
			'desc'     => __('Select header Menu button color. (default: #ffffff).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#ffffff',
			'section'  => 'settings_color',
		)
	);
	
	// add Footer setting form
	array_push($settings, 

		// Footer tab
		array(			
			'id'	   => 'settings_color_footer',
			'label'	   => __('Footer', 'truewordpress'),
			'desc'	   => sprintf(__('Please make footer color settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_color',
		),

		// general Footer color settings forms
		array(
			'id'       => 'color_footer_widget_bg',
			'label'    => __('Footer Widget - Background Color', 'truewordpress'),
			'desc'     => __('Select Footer Widget background color. (default: #444444)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#444444',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_footer_widget_title',
			'label'    => __('Footer Widget - Title Color', 'truewordpress'),
			'desc'     => __('Select Footer Widget title font color. (default: #cccccc)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#cccccc',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_footer_widget_text',
			'label'    => __('Footer Widget - General Text Color', 'truewordpress'),
			'desc'     => __('Select Footer Widget text font color. (default: #888888)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#888888',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_footer_content_bg',
			'label'    => __('Footer Content - Background Color', 'truewordpress'),
			'desc'     => __('Select Footer Content background color. (default: #222222)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#222222',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_footer_content',
			'label'    => __('Footer Content - Text Color', 'truewordpress'),
			'desc'     => __('Select Footer Content text font color. (default: #888888)', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#888888',
			'section'  => 'settings_color',
		)
	);
	
	// widget color settings
	array_push($settings, 

		// Header tab
		array(			
			'id'	   => 'settings_color_widget',
			'label'	   => __('Widget', 'truewordpress'),
			'desc'	   => sprintf(__('Please make widget color settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_color',
		),

		// settings forms
		array(
			'id'       => 'color_widget_title',
			'label'    => __('Widget Items Title text color', 'truewordpress'),
			'desc'     => __('This color is using for Widget items title text. (default: #333333).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#333333',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_widget_list_item_text',
			'label'    => __('Widget Items general text color', 'truewordpress'),
			'desc'     => __('This color is using for Widget items general text. (default: #aaaaaa).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#aaaaaa',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_widget_link_text',
			'label'    => __('Widget Items general link text color', 'truewordpress'),
			'desc'     => __('This color is using for Widget items general link text. (default: #666666).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#666666',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_widget_link_text_hover',
			'label'    => __('Widget Items general link text hover color', 'truewordpress'),
			'desc'     => __('This hover color is using for Widget items general link text. (default: #000000).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#000000',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_widget_search_btn_bg',
			'label'    => __('Widget search button background color', 'truewordpress'),
			'desc'     => __('This hover color is using for Widget search button background color. (default: #333333).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#333333',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_price_slider_point',
			'label'    => __('Woocommerce Widget - Price slider point color', 'truewordpress'),
			'desc'     => __('This hover color is using for Price slider point color in Woocommerce Widget. (default: #aaaaaa).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#aaaaaa',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_price_slider_bar',
			'label'    => __('Woocommerce Widget - Price slider bar color', 'truewordpress'),
			'desc'     => __('This hover color is using for Price slider bar color in Woocommerce Widget. (default: #eeeeee).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#eeeeee',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_price_slider_bar_active',
			'label'    => __('Woocommerce Widget - Price slider bar activated color', 'truewordpress'),
			'desc'     => __('This hover color is using for Price slider bar activated color in Woocommerce Widget. (default: #cccccc).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#cccccc',
			'section'  => 'settings_color',
		)
	);
	
	// home color settings
	array_push($settings, 

		// Header tab
		array(			
			'id'	   => 'settings_color_home',
			'label'	   => __('Home', 'truewordpress'),
			'desc'	   => sprintf(__('Please make home color settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_color',
		),

		// settings forms
		array(
			'id'       => 'color_home_pricing_table',
			'label'    => __('Pricing Table default font & border color', 'truewordpress'),
			'desc'     => __('This color is using for main pricing table. (default: #aaaaaa).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#aaaaaa',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_home_pricing_table_recommended',
			'label'    => __('Recommended Pricing Table font & border color', 'truewordpress'),
			'desc'     => __('This color is using for recommended pricing table. (default: #333333).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#333333',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_home_slider_title',
			'label'    => __('Slider title text font & border color', 'truewordpress'),
			'desc'     => __('This color is using for slider title text. (default: #ffffff).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#ffffff',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_home_slider_desc',
			'label'    => __('Slider description text front & border color', 'truewordpress'),
			'desc'     => __('This color is using for slider description. (default: #ffffff).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#ffffff',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_home_slider_link',
			'label'    => __('Slider link color', 'truewordpress'),
			'desc'     => __('This color is using for slider link. (default: #ffffff).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#ffffff',
			'section'  => 'settings_color',
		)
	);
	
	// page color settings
	array_push($settings, 

		// Header tab
		array(			
			'id'	   => 'settings_color_page',
			'label'	   => __('Page', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general page color settings for using theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_color',
		),

		// settings forms
		array(
			'id'       => 'color_page_header_bg',
			'label'    => __('General Page Header Background Color', 'truewordpress'),
			'desc'     => __('This background color is using for general page header section. (default: rgba(0, 0, 0, 0.4)).', 'truewordpress'),
			'type'     => 'colorpicker-opacity',
			'std'      => 'rgba(0, 0, 0, 0.4)',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_page_header_title',
			'label'    => __('General Page Header Title Text Color', 'truewordpress'),
			'desc'     => __('This color is using for general page header title text. (default: #eeeeee).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#eeeeee',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_page_header_title_wrapper_bg',
			'label'    => __('General Page Header Title Wrapper Background Color', 'truewordpress'),
			'desc'     => __('This background color is using for general page header title wrapper. (default: rgba(0, 0, 0, 0.6)).', 'truewordpress'),
			'type'     => 'colorpicker-opacity',
			'std'      => 'rgba(0, 0, 0, 0.6)',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_page_breadcrumb_text',
			'label'    => __('General Page Breadcrumb Text Color', 'truewordpress'),
			'desc'     => __('This color is using for general page header breadcrumb text. (default: #888888).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#888888',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_page_breadcrumb_active',
			'label'    => __('General Page Breadcrumb Actived Text Color', 'truewordpress'),
			'desc'     => __('This color is using for general page header breadcrumb actived text. (default: #eeeeee).', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#eeeeee',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_page_breadcrumb_text_wrapper_bg',
			'label'    => __('General Page Header Breadcrumb Wrapper Background Color', 'truewordpress'),
			'desc'     => __('This background color is using for general page breadcrumb title wrapper. (default: rgba(0, 0, 0, 0.6)).', 'truewordpress'),
			'type'     => 'colorpicker-opacity',
			'std'      => 'rgba(0, 0, 0, 0.6)',
			'section'  => 'settings_color',
		),
		array(
			'id'       => 'color_page_bg_blockview',
			'label'    => __('Page background color for Block view', 'truewordpress'),
			'desc'     => __('Select page background color for Block view. default color is #eeeeee.', 'truewordpress'),
			'type'     => 'colorpicker',
			'std'      => '#eeeeee',
			'section'  => 'settings_color',
		)
	);

	////////////////////////////////////////////////////
	//// Home settings
	array_push($sections, array(
		'id'	 => 'settings_home',
		'title'	 => __('Home', 'truewordpress')
	));

	// add Home setting form
	array_push($settings, 

		// Home -  General tab
		array(			
			'id'	   => 'settings_home_form',
			'label'	   => __('General', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for home page of theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_home',
		),

		// general settings forms
		array(
			'id'       => 'home_general_slider',
			'label'    => __('Home Slider section', 'truewordpress'),
			'desc'     => __('Select \'on\' if you want to see Slider in Home page.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_general_business',
			'label'    => __('Business section', 'truewordpress'),
			'desc'     => __('Select \'on\' if you want to see Business section in Home page.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_general_portfolio',
			'label'    => __('Portfolio section', 'truewordpress'),
			'desc'     => __('Select \'on\' if you want to see Portfolio section in Home page.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_general_team',
			'label'    => __('Team Member section', 'truewordpress'),
			'desc'     => __('Select \'on\' if you want to see Team Member section in Home page.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_general_pricing',
			'label'    => __('Pricing section', 'truewordpress'),
			'desc'     => __('Select \'on\' if you want to see Pricing section in Home page.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_general_chart',
			'label'    => __('Chart section', 'truewordpress'),
			'desc'     => __('Select \'on\' if you want to see Chart section in Home page.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_general_contactus',
			'label'    => __('Contact Us section', 'truewordpress'),
			'desc'     => __('Select \'on\' if you want to see Contact Us section in Home page.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_general_affiliate',
			'label'    => __('Affiliate section', 'truewordpress'),
			'desc'     => __('Select \'on\' if you want to see Affiliate section in Home page.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_home',
		)
	);

	// add Home setting form
	array_push($settings, 

		// Home -  Slider tab
		array(			
			'id'	   => 'settings_slider_form',
			'label'	   => __('Slider', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for home slider of theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_home',
		),

		// general home slider settings forms
		array(
			'id'       => 'home_slider_type',
			'label'    => __('Slider Type', 'truewordpress'),
			'desc'     => __('Select Home slider type.', 'truewordpress'),
			'type'     => 'select',
			'std'      => 'slitslider',
			'choices'   => array(
				array(
					'label' => __('Slit Slider', 'truewordpress'),
					'value' => 'slitslider'
				),
			),
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_slider_data',
			'label'    => __('Slider Items', 'truewordpress'),
			'desc'     => __('Edit Slider items.', 'truewordpress'),
			'type'     => 'list-item',
			'settings'   => array(
				array(
					'id'    => 'slider_desc',
					'label' => __('Description', 'truewordpress'),
					'type'  => 'textarea-simple'
				),
				array(
					'id'    => 'slider_author',
					'label' => __('Author Text', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'slider_link_text',
					'label' => __('Detail Page Link Button Text', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'slider_link',
					'label' => __('Detail Page Link', 'truewordpress'),
					'desc'  => __('Enter a link to view more detail data. Remember to add the <code>http://</code> part to the front of the link.', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'slider_image',
					'label' => __('Banner Image', 'truewordpress'),
					'desc' => __('Enter Banner Image. Best size is 2000 x 1000 or more', 'truewordpress'),
					'type'  => 'upload'
				),
			),
			'section'  => 'settings_home',
		)
	);

	// add Home setting form
	array_push($settings, 

		// Home -  Business tab
		array(			
			'id'	   => 'settings_business_form',
			'label'	   => __('Business', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for home business section of theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_home',
		),

		// general home slider settings forms
		array(
			'id'       => 'home_business_title',
			'label'    => __('Business Section Title', 'truewordpress'),
			'desc'     => __('Enter section\'s title.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_business_desc',
			'label'    => __('Business Section Description', 'truewordpress'),
			'desc'     => __('Enter Business section\'s description.', 'truewordpress'),
			'type'     => 'textarea-simple',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_business_data',
			'label'    => __('Business Items', 'truewordpress'),
			'desc'     => __('Edit Business items.', 'truewordpress'),
			'type'     => 'list-item',
			'settings' => array(
				array(
					'id'    => 'business_desc',
					'label' => __('Description', 'truewordpress'),
					'type'  => 'textarea-simple'
				),
				array(
					'id'    => 'business_image',
					'label' => __('Business Item Image', 'truewordpress'),
					'desc'  => __('Enter Business Item Image. Best size is 180 x 180 or more', 'truewordpress'),
					'type'  => 'upload'
				),
			),
			'section'  => 'settings_home',
		)
	);

	// add Home setting form
	array_push($settings, 

		// Home -  Portfolio tab
		array(			
			'id'	   => 'settings_portfolio_form',
			'label'	   => __('Portfolio', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for home portfolio section of theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_home',
		),

		// general home slider settings forms
		array(
			'id'       => 'home_portfolio_title',
			'label'    => __('Portfolio Section Title', 'truewordpress'),
			'desc'     => __('Enter Portfolio section\'s title.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_portfolio_desc',
			'label'    => __('Portfolio Section Description', 'truewordpress'),
			'desc'     => __('Enter Portfolio section\'s description.', 'truewordpress'),
			'type'     => 'textarea-simple',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_portfolio_more_text',
			'label'    => __('`View More` button text of Portfolio', 'truewordpress'),
			'desc'     => __('Enter text of `View More` button.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_portfolio_more_link',
			'label'    => __('`View More` button link of Portfolio', 'truewordpress'),
			'desc'     => __('Enter link of `View More` button.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_portfolio_data',
			'label'    => __('Portfolio Items', 'truewordpress'),
			'desc'     => __('Edit Portfolio items.', 'truewordpress'),
			'type'     => 'list-item',
			'settings' => array(
				array(
					'id'    => 'portfolio_desc',
					'label' => __('Description', 'truewordpress'),
					'type'  => 'textarea-simple'
				),
				array(
					'id'    => 'portfolio_filter',
					'label' => __('Filter Word', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'portfolio_thumb_image',
					'label' => __('Portfolio Item Thumbnail Image', 'truewordpress'),
					'desc' => __('Enter portfolio Item Thumbnail Image. Best size is 500 x 330 or more', 'truewordpress'),
					'type'  => 'upload'
				),
				array(
					'id'    => 'portfolio_image',
					'label' => __('Portfolio Item Full Image', 'truewordpress'),
					'desc'  => __('Enter portfolio Item Full Image. Best size is 2000 x 1000 or more', 'truewordpress'),
					'type'  => 'upload'
				),
			),
			'section'  => 'settings_home',
		)
	);

	// add Home setting form
	array_push($settings, 

		// Home -  Team tab
		array(			
			'id'	   => 'settings_team_form',
			'label'	   => __('Team', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for home team section of theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_home',
		),

		// general home slider settings forms
		array(
			'id'       => 'home_team_title',
			'label'    => __('Team Section Title', 'truewordpress'),
			'desc'     => __('Enter Team section\'s title.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_team_desc',
			'label'    => __('Team Section Description', 'truewordpress'),
			'desc'     => __('Enter Team section\'s description.', 'truewordpress'),
			'type'     => 'textarea-simple',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_team_data',
			'label'    => __('Team Items', 'truewordpress'),
			'desc'     => __('Edit Team items.', 'truewordpress'),
			'type'     => 'list-item',
			'settings' => array(
				array(
					'id'    => 'team_role',
					'label' => __('Role', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'team_desc',
					'label' => __('Description', 'truewordpress'),
					'type'  => 'textarea-simple'
				),
				array(
					'id'    => 'team_image',
					'label' => __('Team Item Image', 'truewordpress'),
					'desc' => __('Enter team Item Image. Best size is 320 x 320 or more', 'truewordpress'),
					'type'  => 'upload'
				),
				array(
					'id'    => 'team_social_fb',
					'label' => __('Social Link - Facebook', 'truewordpress'),
					'desc'  => __('Enter a social link for Team member. Remember to add the <code>http://</code> part to the front of the link.', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'team_social_tt',
					'label' => __('Social Link - Twitter', 'truewordpress'),
					'desc'  => __('Enter a social link for Team member. Remember to add the <code>http://</code> part to the front of the link.', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'team_social_gg',
					'label' => __('Social Link - Google+', 'truewordpress'),
					'desc'  => __('Enter a social link for Team member. Remember to add the <code>http://</code> part to the front of the link.', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'team_social_li',
					'label' => __('Social Link - LinkedIn', 'truewordpress'),
					'desc'  => __('Enter a social link for Team member. Remember to add the <code>http://</code> part to the front of the link.', 'truewordpress'),
					'type'  => 'text'
				),
			),
			'section'  => 'settings_home',
		)
	);

	// add Home setting form
	array_push($settings, 

		// Home -  Pricing tab
		array(			
			'id'	   => 'settings_pricing_form',
			'label'	   => __('Pricing', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for home pricing section of theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_home',
		),

		// general home slider settings forms
		array(
			'id'       => 'home_pricing_title',
			'label'    => __('Pricing Section Title', 'truewordpress'),
			'desc'     => __('Enter Pricing section\'s title.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_pricing_desc',
			'label'    => __('Pricing Section Description', 'truewordpress'),
			'desc'     => __('Enter Pricing section\'s description.', 'truewordpress'),
			'type'     => 'textarea-simple',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_pricing_data',
			'label'    => __('Pricing Items', 'truewordpress'),
			'desc'     => __('Edit Pricing items.', 'truewordpress'),
			'type'     => 'list-item',
			'settings'   => array(
				array(
					'id'    => 'pricing_price',
					'label' => __('Price', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'pricing_unit',
					'label' => __('Price Unit', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'pricing_desc',
					'label' => __('Description', 'truewordpress'),
					'desc'  => __('Enter descirption of pricing item. <br/> <br/> - Make break line as each list item <br/> <br/> - Add links<br/> &lt; a href = "http://yoursite.com" &gt;Go to yoursite.com &lt; /a &gt;<br/> <br/> - Add bold text<br/> &lt; strong &gt; Something important &lt; /strong &gt;<br/> etc.', 'truewordpress'),
					'type'  => 'textarea'
				),
				array(
					'id'    => 'pricing_selectText',
					'label' => __('Price Select Button Text', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'pricing_selectLink',
					'label' => __('Price Select Button Link', 'truewordpress'),
					'desc' => __('Enter link when clicked Price Select Button.', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'pricing_recommended',
					'label' => __('Pricing Item Recommended', 'truewordpress'),
					'desc'  => __('Check this element if you want to recommend this Pricing Item.', 'truewordpress'),
					'type'  => 'radio',
					'std'	=> 'no',
					'choices'     => array(
						array(
							'value' => 'yes',
							'label' => __('Yes', 'truewordpress'),
						),
						array(
							'value' => 'no',
							'label' => __('No', 'truewordpress'),
						)
					)
				)
			),
			'section'  => 'settings_home',
		)
	);

	// add Home setting form
	array_push($settings, 

		// Home -  Chart tab
		array(			
			'id'	   => 'settings_chart_form',
			'label'	   => __('Chart', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for home chart section of theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_home',
		),

		// general home chart settings forms
		array(
			'id'       => 'home_chart_bg',
			'label'    => __('Chart Section Background image', 'truewordpress'),
			'desc'	   => __('Enter Chart section background image. Best size is 2000 x 1000 or more', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_chart_type',
			'label'    => __('Chart type', 'truewordpress'),
			'type'     => 'select',
			'std'	   => 'line',
			'choices'  => array(
				array(
					'value' => 'line',
					'label' => __('Line', 'truewordpress'),
				),
				array(
					'value' => 'bar',
					'label' => __('Bar', 'truewordpress'),
				),
				array(
					'value' => 'polar',
					'label' => __('Polar', 'truewordpress'),
				),
				array(
					'value' => 'cycle',
					'label' => __('Cycle', 'truewordpress'),
				),
				array(
					'value' => 'pie',
					'label' => __('Pie', 'truewordpress'),
				),
			),
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_chart_fontColor',
			'label'    => __('Chart font color', 'truewordpress'),
			'desc'     => __('Select Chart font color. (default: rgba(255, 255, 255, 1)).', 'truewordpress'),
			'type'     => 'colorpicker-opacity',
			'std'      => 'rgba(255, 255, 255, 1)',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_chart_axisColor',
			'label'    => __('Chart axis color', 'truewordpress'),
			'desc'     => __('Select Chart axis color. (default: rgba(255, 255, 255, 1)).', 'truewordpress'),
			'type'     => 'colorpicker-opacity',
			'std'      => 'rgba(255, 255, 255, 1)',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_chart_graphColor',
			'label'    => __('Chart color', 'truewordpress'),
			'desc'     => __('Select Chart color. (default: rgba(255, 255, 255, 1)).', 'truewordpress'),
			'type'     => 'colorpicker-opacity',
			'std'      => 'rgba(255, 255, 255, 1)',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_chart_data',
			'label'    => __('Chart Items', 'truewordpress'),
			'desc'     => __('Edit Chart items.', 'truewordpress'),
			'type'     => 'list-item',
			'settings'   => array(
				array(
					'id'    => 'chart_value',
					'label' => __('Value', 'truewordpress'),
					'type'  => 'text'
				),
			),
			'section'  => 'settings_home',
		)
	);
	
	// add Home setting form
	array_push($settings, 

		// Home -  Contact Us tab
		array(			
			'id'	   => 'settings_contactUs_form',
			'label'	   => __('Contact Us', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for home contactUs section of theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_home',
		),

		// general home contact us settings forms
		array(
			'id'       => 'home_contactUs_title',
			'label'    => __('Contact Us Section Title', 'truewordpress'),
			'desc'     => __('Enter Contact Us section\'s title.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_contactUs_desc',
			'label'    => __('Contact Us Section Description', 'truewordpress'),
			'desc'     => __('Enter Contact Us section\'s description.', 'truewordpress'),
			'type'     => 'textarea-simple',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_contactUs_form',
			'label'    => __('Contact Us form short-code', 'truewordpress'),
			'desc'     => __('Enter short code of worpdress Contact plugin for Contact Us section\'s description.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_contactUs_map_long',
			'label'    => __('Google Map location - Longitude', 'truewordpress'),
			'desc'     => __('Enter Longitude number of your location for Google Map.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_contactUs_map_lat',
			'label'    => __('Google Map location - Latitude', 'truewordpress'),
			'desc'     => __('Enter Latitude number of your location for Google Map.', 'truewordpress'),
			'type'     => 'text',
			'section'  => 'settings_home',
		),
		array(
			'id'	   => 'home_contactUs_map_icon',
			'label'    => __('Google Map Pin icon', 'truewordpress'),
			'desc'     => __('Enter Google Map Pin icon image. Best size is 40 x 60.', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_home'
		)
	);
	
	// add Home setting form
	array_push($settings, 

		// Home -  Affiliate tab
		array(			
			'id'	   => 'settings_affiliate_form',
			'label'	   => __('Affiliate', 'truewordpress'),
			'desc'	   => sprintf(__('Please make general settings for home Affiliate section of theme.')),
			'type'	   => 'tab',
			'section'  => 'settings_home',
		),

		// general home affiliate settings forms
		array(
			'id'       => 'home_affiliate_bg',
			'label'    => __('Affiliate Section Background Image', 'truewordpress'),
			'desc'     => __('Enter parallax background image for Affiliate section. Best size is 2000 x 1000.', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_home',
		),
		array(
			'id'       => 'home_affiliate_data',
			'label'    => __('Affiliate Items', 'truewordpress'),
			'desc'     => __('Edit Affiliate items.', 'truewordpress'),
			'type'     => 'list-item',
			'settings' => array(
				array(
					'id'    => 'affiliate_link',
					'label' => __('Affiliate Link', 'truewordpress'),
					'type'  => 'text'
				),
				array(
					'id'    => 'affiliate_image',
					'label' => __('Affiliate Image', 'truewordpress'),
					'desc'  => __('Enter Affiliate image. Best size is 230 x 65.', 'truewordpress'),
					'type'  => 'upload'
				)
			),
			'section'  => 'settings_home',
		)
	);
	
	////////////////////////////////////////////////////
	//// Blog Settings
	array_push($sections, array(
		'id'	 => 'settings_blog',
		'title'	 => __('Blog', 'truewordpress')
	));

	// add Blog setting form
	array_push($settings, 

		// general Blog settings forms
		array(
			'id'       => 'blog_title_bgImage',
			'label'    => __('Default post title parallax - background image', 'truewordpress'),
			'desc'     => __('Upload Title background image. Best size is 2000 x 1000', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_blog',
		),
		array(
			'id'       => 'blog_postformat',
			'label'    => __('Show Post Format', 'truewordpress'),
			'desc'     => __('Select `on` to show Post format icon.', 'truewordpress'),
			'type'     => 'on-off',
			'std'      => 'on',
			'section'  => 'settings_blog',
		),
		array(
			'id'       => 'blog_viewtype',
			'label'    => __('Page View Type', 'truewordpress'),
			'desc'     => __('Select view type.', 'truewordpress'),
			'type'	   => 'select',
			'choices'  => array(
				array(
					'label' => __('Block View', 'truewordpress'),
					'value' => 'block'
				),
				array(
					'label' => __('Full View', 'truewordpress'),
					'value' => 'full'
				)
			),
			'stc'	   => 'block',
			'section'  => 'settings_blog',
		)
	);
	
	/////////////////////////////////////////////////////
	//// Normal Page Settings
	array_push($sections, array(
		'id'	 => 'settings_page',
		'title'	 => __('Page', 'truewordpress')
	));

	// add Normal Page setting form
	array_push($settings, 

		// general Normal Page settings forms
		array(
			'id'       => 'page_title_bgImage',
			'label'    => __('Default page title parallax - background image', 'truewordpress'),
			'desc'     => __('Upload Title background image. Best size is 2000 x 1000', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_page',
		),
		array(
			'id'       => 'page_viewtype',
			'label'    => __('Page View Type', 'truewordpress'),
			'desc'     => __('Select view type.', 'truewordpress'),
			'type'	   => 'select',
			'choices'  => array(
				array(
					'label' => __('Block View', 'truewordpress'),
					'value' => 'block'
				),
				array(
					'label' => __('Full View', 'truewordpress'),
					'value' => 'full'
				)
			),
			'stc'	   => 'block',
			'section'  => 'settings_page',
		)
	);

	//////////////////////////////////////////////////////
	//// E-shop Page Settings
	array_push($sections, array(
		'id'	 => 'settings_eshop',
		'title'	 => __('E-shop', 'truewordpress')
	));

	// E-shop Normal Page setting form
	array_push($settings, 

		// general E-shop Page settings forms
		array(
			'id'       => 'eshop_title_bgImage',
			'label'    => __('Default page title parallax - background image', 'truewordpress'),
			'desc'     => __('Upload Title background image. Best size is 2000 x 1000', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_eshop',
		),
		array(
			'id'       => 'eshop_viewtype',
			'label'    => __('Page View Type', 'truewordpress'),
			'desc'     => __('Select view type.', 'truewordpress'),
			'type'	   => 'select',
			'choices'  => array(
				array(
					'label' => __('Block View', 'truewordpress'),
					'value' => 'block'
				),
				array(
					'label' => __('Full View', 'truewordpress'),
					'value' => 'full'
				)
			),
			'stc'	   => 'block',
			'section'  => 'settings_eshop',
		)
	);

	//////////////////////////////////////////////////////
	//// buddypress Page Settings
	array_push($sections, array(
		'id'	 => 'settings_buddypress',
		'title'	 => __('Buddypress', 'truewordpress')
	));

	// add buddypress Page setting form
	array_push($settings, 

		// general buddypress Page settings forms
		array(
			'id'       => 'buddypress_title_bgImage',
			'label'    => __('Default page title parallax - background image', 'truewordpress'),
			'desc'     => __('Upload Title background image. Best size is 2000 x 1000', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_buddypress',
		),
		array(
			'id'       => 'buddypress_viewtype',
			'label'    => __('Page View Type', 'truewordpress'),
			'desc'     => __('Select view type.', 'truewordpress'),
			'type'	   => 'select',
			'choices'  => array(
				array(
					'label' => __('Block View', 'truewordpress'),
					'value' => 'block'
				),
				array(
					'label' => __('Full View', 'truewordpress'),
					'value' => 'full'
				)
			),
			'stc'	   => 'block',
			'section'  => 'settings_buddypress',
		)
	);

	//////////////////////////////////////////////////////
	//// bbpress Page Settings
	array_push($sections, array(
		'id'	 => 'settings_bbpress',
		'title'	 => __('BBpress', 'truewordpress')
	));

	// add bbpress Page setting form
	array_push($settings, 

		// general bbpress Page settings forms
		array(
			'id'       => 'bbpress_title_bgImage',
			'label'    => __('Default page title parallax - background image', 'truewordpress'),
			'desc'     => __('Upload Title background image. Best size is 2000 x 1000', 'truewordpress'),
			'type'     => 'upload',
			'section'  => 'settings_bbpress',
		),
		array(
			'id'       => 'bbpress_viewtype',
			'label'    => __('Page View Type', 'truewordpress'),
			'desc'     => __('Select view type.', 'truewordpress'),
			'type'	   => 'select',
			'choices'  => array(
				array(
					'label' => __('Block View', 'truewordpress'),
					'value' => 'block'
				),
				array(
					'label' => __('Full View', 'truewordpress'),
					'value' => 'full'
				)
			),
			'stc'	   => 'block',
			'section'  => 'settings_bbpress',
		)
	);

	/////////////////////////////////////////////////////////////////////////////////////////////
	
	$saved_settings = get_option(ot_settings_id(), array());
	
	// Custom settings array that will eventually be passes to the OptionTree Settings API Class.
	$custom_settings = array(
		'parent_slug'     => apply_filters('ot_theme_options_parent_slug', ''),
		'contextual_help' => array(
		/*	'content'			 => array(
				array(
					'id'		 => 'option_types_help',
					'title'		 => __('Option Types', 'theme-text-domain'),
					'content'	 => '<p>' . __('Help content goes here!', 'truewordpress') . '</p>'
				)
			),
			'sidebar'			 => '<p>' . __('Sidebar content goes here!', 'truewordpress') . '</p>'*/
		),
		'sections'				 => $sections,
		'settings'				 => $settings
	);

	// allow settings to be filtered before saving
	$custom_settings = apply_filters(ot_settings_id().'_args', $custom_settings);
	
	// settings are not the same update the DB
	if ($saved_settings !== $custom_settings) {
		update_option(ot_settings_id(), $custom_settings); 
	}	
}

?>