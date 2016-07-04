/**************************************************************
 *
 * add shortcode to tinyMCE editor for TRUEWordpres Theme
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 assets/js/shortcode-popup.js
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url 	 http://www.gnu.org/licenses/gpl-3.0.html
 * @descrpition		 Main custom javascript code for TUREWordpress-Blog theme
 * @created			 3/1/2016
 **************************************************************/


(function($){
	"use strict";

	$(document).ready(function(){

		//init Thickbox			
		var ed = tinyMCE.activeEditor;
		
		//events
		$("#add-shortcode").click(function(){
			// insert shortcode to tinyMCE editor
			ed.selection.setContent(get_shortcode($(this).prev().val()));

			// close popup
			tb_remove();

			////////////////////////
			return true;
		});

		///////////////////////////////////////////
		// get shortcode
		
		var get_shortcode = function(sc){
			// get shortocded template
			var code = $("#shortcode-tpl").val();

			// replace template string with real values
			$(".shortcode-form").find(".form-control").each(function(){
				if($(this).data("encode")){
					code = code.replace("{{" + $(this).attr("id") + "}}", encodeURIComponent($(this).val()));
				} else {
					code = code.replace("{{" + $(this).attr("id") + "}}", $(this).val());
				}
			});

			// return shortcode string
			return code;
		};
		
		///
		if($(".icons-wrapper").length){
			
			var selectIcon = function(obj){
				$("#sc-ico").val(obj.attr("class"));

				$(".icons-wrapper i.fa").removeClass("selected");
				obj.addClass("selected");
			};

			//
			selectIcon($(".icons-wrapper i.fa").eq(0));
			
			///
			$(".icons-wrapper i.fa").click(function(){
				selectIcon($(this));
			});

		}
	});

	/////////////////////////////////////////////////////////////////////////////////////////////////

})(jQuery);