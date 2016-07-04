/**************************************************************
 *
 * customiz TinyMCE editor to add Shortcode Javascript for TRUEWordpres Theme
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 assets/js/shortcode.js
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url 	 http://www.gnu.org/licenses/gpl-3.0.html
 * @descrpition		 Main custom javascript code for TUREWordpress-Blog theme
 * @created			 3/1/2016
 **************************************************************/

(function($){
	"use strict";
	
	// embed custom button to tinyMCE editor
	tinymce.create("tinymce.plugins.TWshortcodes", {
        init : function(ed, url){

            ed.addButton("tw_shortcode_button", {
				type: "menubutton",
				text: "TW",
				title: "Insert TW Shortcode",
                icon: false,
				
				menu: [
					{
						text: "Buttons",
                        onclick: function(){
							tb_show("Add Button", twEditor.popup + "&width=500&height=400&sc=btns&inlineId=btns");
                        }
					},						
					{
						text: "Columns",                        
						onclick: function(){
							tb_show("Add Columns", twEditor.popup + "&width=500&height=400&sc=cols&inlineId=cols");
                        }
					},
					{
						text: "Column Text",
                        onclick: function(){
							tb_show("Add Column Text", twEditor.popup + "&width=500&height=400&sc=coltxt&inlineId=coltxt");
                        }
                    },					
					{
						text: "Media",
						menu: [
							{
								text: "Youtube Video",
								onclick: function(){
									tb_show("Add Media - Youtube Video", twEditor.popup + "&width=500&height=400&sc=mediayoutube&inlineId=mediayoutube");
								}
							},							
							{
								text: "Vimeo Video",
								onclick: function(){
									tb_show("Add Media - Vimeo Video", twEditor.popup + "&width=500&height=400&sc=mediavimeo&inlineId=mediavimeo");
								}
							}
						
						]
					},
					{
						text: "Icon",
                        onclick: function(){
							tb_show("Add Awesome Icon", twEditor.popup + "&width=500&height=400&sc=ico&inlineId=ico");
                        }
                    },
				]
            });
             
        }
    });
    // Register plugin
    tinymce.PluginManager.add("TWshortcodes", tinymce.plugins.TWshortcodes);
	

	/////////////////////////////////////////////////////////////////////////////////////////////////

})(jQuery);