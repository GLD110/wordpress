/*-----------------------------------------------
--- Created: 12/20/2015
--- Social Sider Bar Plguin for TUREWordpress theme
-----------------------------------------------*/

(function($){
	"use strict";

	$.fn.socialSiderBar = function(){
		var socialSiderBarObj = $(this);
		
		// example: [{key: "facebook", link: "http://facebook.com"}]
		var socialInfo = new Array;	
		
		socialInfo["500px"] = {icon: "pe-so-500px", label: "500px"};
		socialInfo["aim"] = {icon: "pe-so-aim", label: "Aim"};
		socialInfo["amazon"] = {icon: "pe-so-amazon", label: "Amazon"};
		socialInfo["android"] = {icon: "pe-so-android", label: "Android"};
		socialInfo["appstore"] = {icon: "pe-so-app-store", label: "App Store"};
		socialInfo["apple"] = {icon: "pe-so-apple", label: "Apple"};
		socialInfo["behance"] = {icon: "pe-so-behance", label: "Behance"};
		socialInfo["bitbucket"] = {icon: "pe-so-bitbucket", label: "Bitbucket"};
		socialInfo["blogger"] = {icon: "pe-so-blogger", label: "Blogger"};
		socialInfo["bootstrap"] = {icon: "pe-so-bootstrap", label: "Bootstrap"};
		socialInfo["chrome"] = {icon: "pe-so-chrome", label: "Chrome"};
		socialInfo["codepen"] = {icon: "pe-so-codepen", label: "Codepen"};
		socialInfo["css3"] = {icon: "pe-so-css3", label: "Css3"};
		socialInfo["delicious"] = {icon: "pe-so-delicious", label: "Delicious"};
		socialInfo["deviantart"] = {icon: "pe-so-deviantart-1", label: "Deviantart"};
		socialInfo["deviantart1"] = {icon: "pe-so-deviantart-1", label: "Deviantart"};
		socialInfo["deviantart2"] = {icon: "pe-so-deviantart-2", label: "Deviantart"};
		socialInfo["digg"] = {icon: "pe-so-digg", label: "Digg"};
		socialInfo["dribbble"] = {icon: "pe-so-dribbble", label: "Dribbble"};
		socialInfo["dropbox"] = {icon: "pe-so-dropbox", label: "Dropbox"};
		socialInfo["drupal"] = {icon: "pe-so-drupal", label: "Drupal"};
		socialInfo["ebay"] = {icon: "pe-so-ebay", label: "Ebay"};
		socialInfo["etsy"] = {icon: "pe-so-etsy", label: "Etsy"};
		socialInfo["evernote"] = {icon: "pe-so-evernote", label: "Evernote"};
		socialInfo["facebook"] = {icon: "pe-so-facebook", label: "Facebook"};
		socialInfo["firefox"] = {icon: "pe-so-firefox", label: "Firefox"};
		socialInfo["flattr"] = {icon: "pe-so-flattr", label: "Flattr"};
		socialInfo["flickr"] = {icon: "pe-so-flickr", label: "Flickr"};
		socialInfo["forrst"] = {icon: "pe-so-forrst", label: "Forrst"};
		socialInfo["foursquare"] = {icon: "pe-so-foursquare", label: "Foursquare"};
		socialInfo["git"] = {icon: "pe-so-git", label: "Git"};
		socialInfo["github"] = {icon: "pe-so-github", label: "Github"};
		socialInfo["googledrive"] = {icon: "pe-so-google-drive", label: "Google Drive"};
		socialInfo["google_"] = {icon: "pe-so-google-plus", label: "Google+"};
		socialInfo["grooveshark"] = {icon: "pe-so-grooveshark", label: "Grooveshark"};
		socialInfo["habbo"] = {icon: "pe-so-habbo", label: "Habbo"};
		socialInfo["hackernews"] = {icon: "pe-so-hacker-news", label: "Hacker-News"};
		socialInfo["html5"] = {icon: "pe-so-html5", label: "Html5"};
		socialInfo["ie"] = {icon: "pe-so-ie", label: "IE"};
		socialInfo["instagram"] = {icon: "pe-so-instagram", label: "Instagram"};
		socialInfo["joomla"] = {icon: "pe-so-joomla", label: "Joomla"};
		socialInfo["jsfiddle"] = {icon: "pe-so-jsfiddle", label: "Jsfiddle"};
		socialInfo["lanyrd"] = {icon: "pe-so-lanyrd", label: "Lanyrd"};
		socialInfo["lastfm"] = {icon: "pe-so-lastfm", label: "Lastfm"};
		socialInfo["like"] = {icon: "pe-so-like", label: "Like"};
		socialInfo["linkedin"] = {icon: "pe-so-linkedin", label: "Linkedin"};
		socialInfo["linux"] = {icon: "pe-so-linux", label: "Linux"};
		socialInfo["love"] = {icon: "pe-so-love", label: "Love"};
		socialInfo["magento"] = {icon: "pe-so-magento", label: "Magento"};
		socialInfo["myspace"] = {icon: "pe-so-myspace", label: "Myspace"};
		socialInfo["odnolassniki"] = {icon: "pe-so-odnolassniki", label: "Odnolassniki"};
		socialInfo["openid"] = {icon: "pe-so-openid", label: "Openid"};
		socialInfo["opera"] = {icon: "pe-so-opera", label: "Opera"};
		socialInfo["paypal"] = {icon: "pe-so-paypal-1", label: "Paypal"};
		socialInfo["paypal1"] = {icon: "pe-so-paypal-1", label: "Paypal"};
		socialInfo["paypal2"] = {icon: "pe-so-paypal-2", label: "Paypal"};
		socialInfo["picasa"] = {icon: "pe-so-picasa", label: "Pied-Picasa"};
		socialInfo["piedpiper"] = {icon: "pe-so-pied-piper", label: "Piper"};
		socialInfo["pinterest"] = {icon: "pe-so-pinterest", label: "Pinterest"};
		socialInfo["pixeden"] = {icon: "pe-so-pixeden", label: "Pixeden"};
		socialInfo["qq"] = {icon: "pe-so-qq", label: "Qq"};
		socialInfo["qzone"] = {icon: "pe-so-qzone", label: "Qzone"};
		socialInfo["rdio"] = {icon: "pe-so-rdio", label: "Rdio"};
		socialInfo["reddit"] = {icon: "pe-so-reddit", label: "Reddit"};
		socialInfo["renren"] = {icon: "pe-so-renren", label: "Renren"};
		socialInfo["rss"] = {icon: "pe-so-rss", label: "Rss"};
		socialInfo["safari"] = {icon: "pe-so-safari-1", label: "Safari"};
		socialInfo["safari1"] = {icon: "pe-so-safari-1", label: "Safari"};
		socialInfo["safari2"] = {icon: "pe-so-safari-2", label: "Safari"};
		socialInfo["sass"] = {icon: "pe-so-sass", label: "Sass"};
		socialInfo["share"] = {icon: "pe-so-share", label: "Share"};
		socialInfo["skype"] = {icon: "pe-so-skype", label: "Skype"};
		socialInfo["slideshare"] = {icon: "pe-so-slideshare", label: "Slideshare"};
		socialInfo["soundcloud"] = {icon: "pe-so-soundcloud", label: "Soundcloud"};
		socialInfo["spotify"] = {icon: "pe-so-spotify", label: "Spotify"};
		socialInfo["stackexchange"] = {icon: "pe-so-stack-exchange", label: "Stack Exchange"};
		socialInfo["stackoverflow"] = {icon: "pe-so-stack-overflow", label: "Stack Overflow"};
		socialInfo["steam"] = {icon: "pe-so-steam", label: "Steam"};
		socialInfo["stumbleupon"] = {icon: "pe-so-stumbleupon", label: "Stumbleupon"};
		socialInfo["tencentweibo"] = {icon: "pe-so-tencent-weibo", label: "Tencent-Weibo"};
		socialInfo["trello"] = {icon: "pe-so-trello", label: "Trello"};
		socialInfo["tripadvisor"] = {icon: "pe-so-tripadvisor", label: "Tripadvisor"};
		socialInfo["tumblr"] = {icon: "pe-so-tumblr", label: "Tumblr"};
		socialInfo["twitch"] = {icon: "pe-so-twitch", label: "Twitch"};
		socialInfo["twitter"] = {icon: "pe-so-twitter", label: "Twitter"};
		socialInfo["ubuntu"] = {icon: "pe-so-ubuntu", label: "Ubuntu"};
		socialInfo["viadeo"] = {icon: "pe-so-viadeo", label: "Viadeo"};
		socialInfo["vimeo"] = {icon: "pe-so-vimeo", label: "Vimeo"};
		socialInfo["vine"] = {icon: "pe-so-vine", label: "Vine"};
		socialInfo["vk_com"] = {icon: "pe-so-vk", label: "Vk.com"};
		socialInfo["wechat"] = {icon: "pe-so-wechat", label: "Wechat"};
		socialInfo["weibo"] = {icon: "pe-so-weibo", label: "Weibo"};
		socialInfo["wikipedia"] = {icon: "pe-so-wikipedia", label: "Wikipedia"};
		socialInfo["windows"] = {icon: "pe-so-windows", label: "Windows"};
		socialInfo["wordpress"] = {icon: "pe-so-wordpress-1", label: "Wordpress"};
		socialInfo["wordpress1"] = {icon: "pe-so-wordpress-1", label: "Wordpress"};
		socialInfo["wordpress2"] = {icon: "pe-so-wordpress-2", label: "Wordpress"};
		socialInfo["xing"] = {icon: "pe-so-xing", label: "Xing"};
		socialInfo["yahoo"] = {icon: "pe-so-yahoo-1", label: "Yahoo"};
		socialInfo["yahoo1"] = {icon: "pe-so-yahoo-1", label: "Yahoo"};
		socialInfo["yahoo2"] = {icon: "pe-so-yahoo-2", label: "Yahoo"};
		socialInfo["yelp"] = {icon: "pe-so-yelp", label: "Yelp"};
		socialInfo["youtube"] = {icon: "pe-so-youtube-1", label: "Youtube"};
		socialInfo["youtube1"] = {icon: "pe-so-youtube-1", label: "Youtube"};
		socialInfo["youtube2"] = {icon: "pe-so-youtube-2", label: "Youtube"};
		socialInfo["zerply"] = {icon: "pe-so-zerply", label: "Zerply"};

		var socialData = socialSiderBarObj.data("social");
		var socialIconRoot = socialSiderBarObj.data("icon-root")? socialSiderBarObj.data("icon-root"): "";

		socialSiderBarObj.append("<div class = \"sidebar-wrapper\"></div>");
		socialSiderBarObj.append("<label id = \"view-control\"></label>");

		// generating bars
		for(var k in socialData){
			socialData[k].key = socialData[k].key.replace(".", "_").replace("+", "_");

			if(typeof(socialInfo[socialData[k].key]) != "undefined"){
				$(".sidebar-wrapper").append("\
					<div class = \"sc-item pe-so-bg-" + socialData[k].key + "\" data-link = \"" + socialData[k].link + "\">\
						<span>" + (socialData[k].label? socialData[k].label: typeof(socialInfo[socialData[k].key].label) == "undefined"? socialInfo["share"].label: socialInfo[socialData[k].key].label) + "</span>\
						<i class = \"" + (typeof(socialInfo[socialData[k].key].icon) == "undefined"? socialInfo["share"].icon: socialInfo[socialData[k].key].icon) + "\"></i>\
					</div>\
				");
			}
		}
		
		// bar click event
		$(".sc-item").click(function(){
			var socialLink = $(this).data("link");
			window.open(socialLink, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=0, left=0, width=500, height=400");
		});

		if($("[data-socialsider]").data("socialsider") == "right"){
			// mouse hover event
			$(".sc-item").mouseenter(function(){
				if(!socialSiderBarObj.hasClass("mobile-screen")){
					$(this).stop(true).clearQueue().animate({
						right : "0px"
					}, 300);
				}
			});

			// mouse out event
			$(".sc-item").mouseleave(function(){
				if(!socialSiderBarObj.hasClass("mobile-screen")){
					$(this).animate({
						right: "-102px"
					}, 700, "easeOutBounce");
				}
			});
			
		} else{
			// mouse hover event
			$(".sc-item").mouseenter(function(){
				if(!socialSiderBarObj.hasClass("mobile-screen")){
					$(this).stop(true).clearQueue().animate({
						left : "100px"
					}, 300);
				}
			});

			// mouse out event
			$(".sc-item").mouseleave(function(){
				if(!socialSiderBarObj.hasClass("mobile-screen")){
					$(this).animate({
						left:"0px"
					}, 700, "easeOutBounce");
				}
			});			
		}

		$("#view-control").click(function(){
			$(this).toggleClass("hide-control");
			$(".sidebar-wrapper").toggleClass("hide-sidebar");
		});
		
		// make mobile scial sidebar
		var initMobild = function(){
			if($(window).width() < 767){
				$(this).addClass("hide-control");
				socialSiderBarObj.addClass("mobile-screen");
				$(".sidebar-wrapper").addClass("hide-sidebar");
			} else {
				$(this).removeClass("hide-control");
				socialSiderBarObj.removeClass("mobile-screen");
				$(".sidebar-wrapper").removeClass("hide-sidebar");
			}
		};
		initMobild();

		$(window).resize(function(){
			initMobild();
		});
	};
})(jQuery);
