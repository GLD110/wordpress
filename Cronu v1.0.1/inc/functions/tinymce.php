<?php	
/**************************************************************
 *
 * customiz TinyMCE editor to add Shortcode Javascript for TRUEWordpres Theme
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/tinymce.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

/////////////////////////////////////////////////
// customize wordpress TinyMCE editor to add shortcode automatically

add_action('init', 'init_shortcodes_menu');

function init_shortcodes_menu(){

    if (!current_user_can('edit_posts') && !current_user_can('edit_pages'))
        return;

    if (get_user_option('rich_editing') == 'true'){
        add_filter('mce_external_plugins', 'add_shortcode_plugins');
        add_filter('mce_buttons', 'register_shortcode_menu_buttons');
    }
}

function add_shortcode_plugins($plugin_array){
    $plugin_array['TWshortcodes'] = get_template_directory_uri().'/assets/js/shortcode.js';
    return $plugin_array;
}

function register_shortcode_menu_buttons($buttons){
    array_push($buttons, "|", 'tw_shortcode_button');
    return $buttons;
}


add_action('admin_init', 'admin_init_shortcodes_menu');
function admin_init_shortcodes_menu(){
    wp_localize_script('jquery', 'twEditor', array('popup' => get_template_directory_uri().'/inc/functions/tinymce-popup.php?'));
}

?>