/**************************************************************
 *
 * Custom Javascript for TRUEWordpres Theme
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file	 		 assets/js/script.js
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url 	 http://www.gnu.org/licenses/gpl-3.0.html
 * @descrpition		 Main custom javascript code for TUREWordpress-Blog theme
 * @created			 12/20/2015
 **************************************************************/


/******************************************************************************
 * Table of Contents:
 *-----------------------------------------------------------------------------
 * 1. Pre load
 * 2. Home Slider
 * 3. Social Sider bar
 * 4. form scrolling
 * 5. Block slider
 * 6. Chart
 * 7. Google Map
 * 8. collapsed navbar in mobile
 * 9. WOW effect
 * 10. Portfolio Gallery
 * 11. Dynamic Grid
 * 12. Smmooth scrolling
 * 13. parallax scrolling
 * 14. gallery function
 * ----------------------------------------------------------------------------
 */

(function($){
	"use strict";

	$(document).ready(function(){
		
		////////////////////////////////////

		var homeSlider = function(){
			/////////////
			// 2. Home Slider
			if($("#slider").length){
				
				// approve size of slider as window size
				if($(window).height() > 900){
					$(".sl-slider-wrapper").css("height", $(window).height() + "px");
				}

				var Page =(function(){
					var autoCustomPlayTimer = null,
						autoCustomPlayDuration = 10000,
						autoCustomPlay = function(){
							clearInterval(autoCustomPlayTimer);
							autoCustomPlayTimer = setInterval(function(){
								slitslider.next();
							}, autoCustomPlayDuration);
						},
						$navArrows = $("#nav-arrows"),
						$nav = $("#nav-dots > span"),
						slitslider = $("#slider").slitslider({
							speed : 1500,			  // if true the item's slices will also animate the opacity value
							optOpacity : true,					
							translateFactor : 100,	// amount(%) to translate both slices - adjust as necessary
							onBeforeChange: function(slide, pos){
								$nav.removeClass("nav-dot-current");
								$nav.eq(pos).addClass("nav-dot-current");

							}
						}),

						init = function(){
							initEvents();
							autoCustomPlay();
						},

						initEvents = function(){				
							// add navigation events
							$navArrows.children(":last").on("click", function(){
								slitslider.next();

								autoCustomPlay();
								return false;
							});

							$navArrows.children(":first").on("click", function(){					
								slitslider.previous();

								autoCustomPlay();
								return false;
							});

							$nav.each(function(i){				
								$(this).on("click", function(event){						
									var $dot = $(this);
									
									if(!slitslider.isActive()){
										$nav.removeClass("nav-dot-current");
										$dot.addClass("nav-dot-current");						
									}
									
									slitslider.jump(i + 1);
									return false;					
								});					
							});
						};

					return{ init: init };
				})();
		
				Page.init();			
			}
		};

		/////////////////////////////////
		// 1. Pre load
		if($("#window-preloader").length){
			$(window).load(function() { // makes sure the whole site is loaded

				$("#window-loader-bar").fadeOut(); // will first fade out the loading animation
				$("#window-preloader").delay(100).fadeOut("slow"); // will fade out the white DIV that covers the website.
				
				// 2. Home Slider
				homeSlider();				
			});
		} else {
			// 2. Home Slider
			homeSlider();
		}


		//////////////////////////////////////
		// 3. Social Sider bar
		if($("#socialsiderbar").length){
			$("#socialsiderbar").socialSiderBar();
		}


		////////////////////
		// 4. form scrolling
		if($("#main-navigation").length){
			var scrollPosFix = 0;
			$("#main-navigation a[href*=#]:not([href=#])").click(function(e){
				e.preventDefault();

				if(location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") || location.hostname == this.hostname){
					/////////////
					scrollPosFix = $(".navbar-toggle").is(":visible")? 0: $("header").height() - 70;

					var target = $(this.hash);
					if(target.length) {
						$("html, body").stop(true, false).animate({
							scrollTop: target.offset().top - scrollPosFix
						}, 2000, 'easeOutCubic');
						return false;
					}
				}
			});
			
			var menu_scroll_init = function(){
				var winScrollTop = $(window).scrollTop();
					
				$("#main-navigation").find("a").each(function(){
					var formSectionID = $(this).attr("href").split("#");
					var formSectionObj = "";
					if(typeof(formSectionID[1]) == undefined){
						formSectionObj = $("#" + formSectionID[0].replace(/[^\w\s]/gi, ""));
					} else {
						formSectionObj = $("#" + formSectionID[1]);
					} 

					if(formSectionObj.length && winScrollTop > formSectionObj.offset().top - 80){
						$("#main-navigation li").removeClass("current_page_item");
						$("#main-navigation a").removeClass("actived");
						$(this).addClass("actived");
					} else {
						$(this).removeClass("actived");
					}
				});

				if(winScrollTop > $(window).height() / 3){
					$("#go-to-top").fadeIn(1000);
				} else {
					$("#go-to-top").fadeOut(1000);
				}
			};
			$(window).scroll(function(){
				menu_scroll_init();
			});

			menu_scroll_init();
		}

		// button to go to top
		if($("#go-to-top").length){
			$("#go-to-top").hide();
			$("#go-to-top").click(function(event){
				event.preventDefault();

				$("html, body").animate({scrollTop: 0}, 2000, 'easeOutCubic');
			});
		}
		

		//////////////////////////
		// 5. Block slider
		if($(".block-slider").length){
			$("body").find(".block-slider").each(function(){
				var c = $(this).data("item-count");

				$(this).owlCarousel({
					margin: 0,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						1000: {
							items: c? c: 4,
							nav: true,
							loop: false
						}
					}
				});				
			});				
		}


		/////////////////////////////////////
		// 6. Chart
		if($("canvas#pricing-statistic").length){
			var canvasObj = $("canvas#pricing-statistic");
			var chartType = canvasObj.data("chart-type");

			var createdChartObj = "";
			var initChart = function(){
				// init chart Canvas
				if(createdChartObj && $.isFunction(createdChartObj.destroy)){
					createdChartObj.destroy();
				}
				$("[data-dynamic-canvas]").remove();
				
				// get chart data
				
				var chartLabel = new Array;
				var chartData = new Array; 
				var chartDataPie = new Array; 
				var chartDataPolar = new Array; 

				for(var k in canvasObj.data("chart")){
					chartLabel.push(canvasObj.data("chart")[k].label);
					chartData.push(canvasObj.data("chart")[k].value);
					chartDataPolar.push({
							value: canvasObj.data("chart")[k].value,
							color: "#" + Math.floor(Math.random() * 16777215).toString(16),
							label: canvasObj.data("chart")[k].label						
					});
					chartDataPie.push([
						{
							value: 100 - canvasObj.data("chart")[k].value,
							color: "rgba(255, 255, 255, 0.4)",
							label: ""					
						},
						{
							value: canvasObj.data("chart")[k].value,
							color: canvasObj.data('color-graph')? canvasObj.data('color-graph'): "#fff",
							label: canvasObj.data("chart")[k].label						
						}
					]);
				}
				var datasets = [{
					fillColor : "rgba(255, 255, 255, 0.2)",
					strokeColor : canvasObj.data('color-graph')? canvasObj.data('color-graph'): "#fff",
					pointColor : canvasObj.data('color-graph')? canvasObj.data('color-graph'): "#fff",
					pointStrokeColor : canvasObj.data('color-graph')? canvasObj.data('color-graph'): "#fff",
					pointHighlightFill : canvasObj.data('color-graph')? canvasObj.data('color-graph'): "#fff",
					pointHighlightStroke : canvasObj.data('color-graph')? canvasObj.data('color-graph'): "#fff",
					data : chartData
				}];

				// create chart				
				var chartOptions = {
					// global settings
					scaleGridLineColor: "rgba(255, 255, 255, 0.1)",
					tooltipFontSize: 16,
					scaleFontSize: 14,
					scaleLineColor: canvasObj.data('color-axis')? canvasObj.data('color-axis'): "#fff",
					scaleFontColor: canvasObj.data('color-font')? canvasObj.data('color-font'): "#fff",
					tooltipTemplate: "<%= label %> : <%= value %>",
					responsive: true,
					maintainAspectRatio: false,
					animation: false,
					onAnimationComplete: function(){},
					
					// bar chart configuration
					isFixedWidth: true,
					barWidth: 80,
				};

				createdChartObj = new Chart(canvasObj[0].getContext("2d"));
				switch(chartType){
					case "line":
						createdChartObj.Line({
							labels: chartLabel,
							datasets: datasets,
						}, chartOptions);

						///////
						break;
					case "bar":
						createdChartObj.Bar({
							labels: chartLabel,
							datasets: datasets,
						}, chartOptions);

						///////
						break;
					case "polar":
						createdChartObj.PolarArea(chartDataPolar);
						break;
					case "cycle":
						canvasObj.hide();
						
						for(var c = 0; c < chartDataPie.length; c++){
							$(canvasObj.parent("div")).append("<div data-dynamic-canvas class = \"col-md-3\"><div><canvas id = \"pricing-statistic-" + c + "\"></canvas></div></div>");

							// fix canvas tag height
							if($("#pricing-statistic-" + c).height() > $("#pricing-statistic-" + c).parent().width()){
								$("#pricing-statistic-" + c).height($("#pricing-statistic-" + c).parent().width());
							}

							var ctx = $("#pricing-statistic-" + c)[0].getContext("2d");

							chartOptions.showTooltips = false;
							chartOptions.onAnimationComplete =  function() {
								if(chartDataPie[c]){
									var canvasWidthvar = $("#pricing-statistic-" + c).width();
									var canvasHeight = $("#pricing-statistic-" + c).height();
									ctx.font = "14px Arial";
									ctx.textBaseline = "middle"; 
									ctx.fillStyle = canvasObj.data("color-font")? canvasObj.data("color-font"): "#fff"; 
								
									var tpercentage = chartDataPie[c][1].label;
									var textWidth = ctx.measureText(tpercentage).width;
									textWidth = textWidth > 60? 60: textWidth;
									var txtPosx = Math.round((canvasWidthvar - textWidth) / 2);								
									ctx.fillText(tpercentage, txtPosx, canvasHeight / 2 - 20);

									ctx.font = "16px Arial";								
									tpercentage = chartDataPie[c][1].value + "%";
									textWidth = ctx.measureText(tpercentage).width;
									var txtPosx = Math.round((canvasWidthvar - textWidth) / 2);
									ctx.fillText(tpercentage, txtPosx, canvasHeight / 2 + 25);
								}
							};
							new Chart(ctx).Doughnut(chartDataPie[c], chartOptions);
						}
						break;
					case "pie":
						canvasObj.hide();
						
						for(var c = 0; c < chartDataPie.length; c++){
							$(canvasObj.parent("div")).append("<div data-dynamic-canvas class = \"col-md-3\"><div><canvas id = \"pricing-statistic-" + c + "\"></canvas></div></div>");

							// fix canvas tag height
							if($("#pricing-statistic-" + c).height() > $("#pricing-statistic-" + c).parent().width()){
								$("#pricing-statistic-" + c).height($("#pricing-statistic-" + c).parent().width());
							}

							var ctx = $("#pricing-statistic-" + c)[0].getContext("2d");

							chartOptions.showTooltips = false;
							chartOptions.animation = false;
							chartOptions.onAnimationComplete =  function() {
								if(chartDataPie[c] && c < chartDataPie.length){
									var canvasWidthvar = $("#pricing-statistic-" + c).width();
									var canvasHeight = $("#pricing-statistic-" + c).height();
									ctx.font = "14px Arial";
									ctx.textBaseline = "middle"; 
									ctx.fillStyle = canvasObj.data("color-font")? canvasObj.data("color-font"): "#fff"; 
								
									var tpercentage = chartDataPie[c][1].label;
									var textWidth = ctx.measureText(tpercentage).width;
									textWidth = textWidth > 60? 60: textWidth;
									var txtPosx = Math.round((canvasWidthvar - textWidth) / 2);								
									ctx.fillText(tpercentage, txtPosx, canvasHeight / 2 - 20);

									ctx.font = "16px Arial";								
									tpercentage = chartDataPie[c][1].value + "%";
									textWidth = ctx.measureText(tpercentage).width;
									var txtPosx = Math.round((canvasWidthvar - textWidth) / 2);
									ctx.fillText(tpercentage, txtPosx, canvasHeight / 2 + 25);
								}
							};
							new Chart(ctx).Pie(chartDataPie[c], chartOptions);
						}
						break;
					default:
						return false;
						break;
				}
				
			};
			initChart();

			$(window).resize(function(){
				if(chartType == "cycle" || chartType == "pie" || chartType == "polar")
				setTimeout(function(){
					initChart();
				}, 100);
			});
		}


		/////////////////////////////////////
		// 7. Google Map
		if($("#contactus-map").length){
			var pos = $("#contactus-map").data("location");

			$("#contactus-map").gmap().bind("init", function(ev, map) {
				$("#contactus-map").gmap("addMarker", {
					position: pos.long + "," + pos.lat, 
					bounds: true,
					icon: {
						url: pos.pin,
						// This marker is 20 pixels wide by 32 pixels high.
						scaledSize: new google.maps.Size(40, 60),
						// The origin for this image is(0, 0).
						origin: new google.maps.Point(0, 0),
						// The anchor for this image is the base of the flagpole at(0, 32).
						anchor: new google.maps.Point(0, 60)
					}
				});
				$("#contactus-map").gmap("option", "zoom", 13);
				map.setOptions({
					scrollwheel: false, 
					disableDoubleClickZoom: false,
					styles: [{
						stylers: [{
							saturation: -100
						}]
					}]
				});
				// centering
				var lastCenter = map.getCenter();
				google.maps.event.trigger(map, "resize");
				map.setCenter(lastCenter);
			});			
		}


		////////////////////////////////////
		// 8. collapsed navbar in mobile
		if($(".navbar-nav li a").length){
			$(".navbar-nav li a").click(function() {
				$(".navbar-collapse").collapse("hide");
			});
		}


		////////////////////////////////////
		// 9. WOW effect
		new WOW({
			animateClass:	"animated",
			offset:			100
		}).init();


		/////////////////////////////////////
		// 10. Portfolio Gallery
		if($(".gallery-wrapper").length){
			
			var initThumb = function(){
				var thumbsCol = 4;
				if($(window).width() < 1200){
					if($(window).width() < 480){
						thumbsCol = 1;
					} else if($(window).width() < 960){
						thumbsCol = 2;
					} else {
						thumbsCol = 3;
					}
				}
				// set & get size of thumb images
				var thumbnailWidth = parseInt(($(window).width() - 10) / thumbsCol);

				// change size of thumb images
				$("a.gallery-thumbnail img").css({
					width: thumbnailWidth + "px",
					height: thumbnailWidth * 2 / 3 + "px"
				});
			};
			initThumb();

			// Thumbs spacing, default is 15px
			var thumbsSpacing = 0;
			var currentFilter = "";

			var checkViewport = function(){

				// check and fix propertiers of thumb images
				var photosWidth = $(".gallery-photos").width(),
					thumbsContainerWidth = $(".gallery-thumbnail-wrapper").width(),
					thumbnailWidth = $("a.gallery-thumbnail:first-child").outerWidth();

				if(photosWidth < thumbsContainerWidth){
					positionThumbs();
				} else {
					$(".gallery-thumbnail-wrapper").css({
						"left": (photosWidth - thumbsContainerWidth) / 2
					});
				}

				if((photosWidth - thumbnailWidth) > thumbsContainerWidth){
					positionThumbs();
				}
				
				if(currentFilter){
					filterThumbs(currentFilter);
				}
			};
			var filterThumbs = function(category){
				// filtering
				$("a.gallery-thumbnail").each(function(){
					var thumbCategory = $(this).data("categories");

					if(category === "all"){
						$(this).addClass("showThumb").removeClass("hideThumb").attr("rel", "group");
					} else{
						if(thumbCategory.indexOf(category) !== -1){
							$(this).addClass("showThumb").removeClass("hideThumb").attr("rel", "group");
						} else{
							$(this).addClass("hideThumb").removeClass("showThumb").attr("rel", "none");
						}
					}
				});

				positionThumbs();

			};
			var positionThumbs = function(){
				// check and fix position of thumb images

				var newWidth = 0,
					newHeight = 0;

				var containerWidth = $(".gallery-photos").width(),
					thumbRow = 0,
					thumbColumn = 0,
					thumbWidth = $(".gallery-thumbnail img:first-child").outerWidth() + thumbsSpacing,
					thumbHeight = $(".gallery-thumbnail img:first-child").outerHeight() + thumbsSpacing,
					maxColumns = Math.floor(containerWidth / thumbWidth);

				$("a.gallery-thumbnail.showThumb").each(function(index){
					var remainder =(index % maxColumns) / 100,
						maxIndex = 0;

					if(remainder === 0){
						if(index !== 0){
							thumbRow += thumbHeight;
						}
						thumbColumn = 0;
					} else{
						thumbColumn += thumbWidth;
					}
				
					$(this).css({
						"top": thumbRow + "px",
						"left": thumbColumn + "px"
					}, 500);

					newWidth = (index < maxColumns)? thumbColumn + thumbWidth: newWidth;
					newHeight = thumbRow + thumbHeight;
					
				});

				$(".gallery-thumbnail-wrapper").css({
					"left": (containerWidth - newWidth) / 2,
					"width": newWidth + "px",
					"height": newHeight + "px"
				});
			};

			var findFancyBoxLinks = function(){
				// enable fancy light box
				$("a.fancybox[rel=\"group\"]").fancybox({
					transitionIn	: "elastic",
					transitionOut	: "elastic",
					titlePosition	: "over",
					speedIn			: 500,
					autoSize		: true,
					overlayColor	: "#000",
					padding			: 0,
					overlayOpacity	: .75,
					margin			: 90
				});
			};
			findFancyBoxLinks();

			$(".gallery-filter-wapper").css("margin-bottom", thumbsSpacing + "px");
			$(".gallery-thumbnail").addClass("showThumb").addClass("fancybox").attr("rel", "group");

			$("a.gallery-filter-sort").on("click", function(e){
				e.preventDefault();
				$("a.gallery-filter-sort").removeClass("selected");
				$(this).addClass("selected");

				var category = $(this).data("category");
				currentFilter = category;
				filterThumbs(category);
			});

			positionThumbs(); // fix position of thumbs
			
			$(window).resize(function(){
				initThumb();
				positionThumbs();
			});

			setInterval(checkViewport, 500); // check positions for responsive in real time
		}

		
		/////////////////////////////////////
		// 11. Dynamic Grid
		if($(".grid-container").length){
			var columns = parseInt($(".grid-container").data("grid-columns"));

			$(".grid-container").gridalicious({
				selector: ".grid-item",
				gutter: 16,
				width: parseInt(900 / columns)
			});
		}

		
		/////////////////////////////////////
		// 12. Smmooth scrolling
		if(!$.browser.mobile){
			$("html").niceScroll({
				zindex: 99
			});
		}


		///////////////////////////////////////////////////
		// 13. parallax scrolling
		$("[data-parallax=scroll]").each(function(){
			$(this).css({"background-image": "url(" + $(this).data("image-src") + ")"}).jarallax();
		});


		////////////////////////////////////////////////
		// 14. gallery function
		if($(".gallery").length){
			$(".page-wrapper").find(".gallery").each(function(){
				var galleryID = $(this).attr("id");
				$(this).find(".gallery-item a").attr({"rel": galleryID});

				$("a[rel=" + galleryID + "]").fancybox({
					transitionIn	: "elastic",
					transitionOut	: "elastic",
					titlePosition	: "over",
					speedIn			: 500,
					autoSize		: true,
					overlayColor	: "#000",
					padding			: 0,
					overlayOpacity	: .75,
					margin			: 90
				});
			});
		}


		////////////////////////////////////////////////
		// 14. fix Woocommerce problems
		var selectedTabs = 0;
		$(".woocommerce-tabs .tabs").find("li").each(function(){
			if($(this).hasClass("active")){
				selectedTabs++;
			}
		});
		if(!selectedTabs){
			setTimeout(function(){
				$(".woocommerce-tabs .tabs li:eq(0)").addClass("active");
				$(".woocommerce-tabs " + $(".woocommerce-tabs .tabs li:eq(0) a").attr("href")).show();
			}, 100);
		}

		
		///////////////////////////////////////////////
		// social link window popup
		if($(".social-btn").length){
			$(".social-btn").click(function(){
				var socialLink = $(this).attr("href");
				window.open(socialLink, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=0, left=0, width=500, height=400");
				return false;
			});
		}

	});
})(jQuery);