<?php
/**************************************************************
 *
 * applying Theme Color as admin settings
 *
 * @package  		TRUEWordpress Theme 1E
 * @Version			1.0.1
 * @file			inc/functions/apply.php
 * @author			TRUEWordpress Team
 * @Author Link 	http://truewordpress.com
 * @license			GNU General Public License
 * @license url: 	http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// this is actived in functions.php	

///////////////////////////////////////
// applying color
add_action('wp_head', 'truewordpress_theme_colors');
function truewordpress_theme_colors(){

?>
<style type="text/css">

/**
 * 1. Global
 * ----------------------------------------------------------------------------
 */
html, body, div, span, applet, object, iframe, article, header, footer
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend, span,
table, caption, tbody, tfoot, thead, tr, th, td {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}

/* a */
a {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}
a:hover {
	<?php echo ot_get_option('color_text_basic')? 'color: '.ot_get_option('color_text_basic').';': ''; ?>
}

/* input */
input[type=text],
input[type=url],
input[type=email],
input[type=password],
input[type=number],
input[type=tel],
input[type=search],
textarea,
select {
	<?php echo ot_get_option('color_input_border')? 'border-color: '.ot_get_option('color_input_border').';': ''; ?>
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}

input[type=text]:focus,
input[type=url]:focus,
input[type=email]:focus,
input[type=password]:focus,
input[type=number]:focus,
input[type=tel]:focus,
input[type=search]:focus,
textarea:focus,
select:focus { 
	<?php echo ot_get_option('color_input_focus')? 'border-color: '.ot_get_option('color_input_focus').';': ''; ?>
}

/* button */
button,
input[type=button],
input[type=submit] {
	<?php echo ot_get_option('color_general_btn_bg')? 'background-color: '.ot_get_option('color_general_btn_bg').';': ''; ?>
	<?php echo ot_get_option('color_general_btn_text')? 'color: '.ot_get_option('color_general_btn_text').';': ''; ?>
}

button:hover,
input[type=button]:hover,
input[type=submit]:hover {
	<?php echo ot_get_option('color_general_btn_bg_hover')? 'background-color: '.ot_get_option('color_general_btn_bg_hover').';': ''; ?>
	<?php echo ot_get_option('color_general_btn_text')? 'color: '.ot_get_option('color_general_btn_text').';': ''; ?>
}

/* placeholder colors */
*::-webkit-input-placeholder {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
*:-moz-placeholder {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
*::-moz-placeholder {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
*:-ms-input-placeholder {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
*::-ms-input-placeholder {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
*:-o-input-placeholder {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
*::-o-input-placeholder {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
*:input-placeholder {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
*::input-placeholder {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}

/* Home */
.form-section .form-title,
.form-section.form-style-list-1 .form-content h1 {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}
.form-section .form-content .form-desc,
.form-section.form-style-list-1 .form-content p {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}

.gallery-filter-wapper a {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}

.gallery-filter-wapper a.selected {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
	<?php echo ot_get_option('color_text_important')? 'border-color: '.ot_get_option('color_text_important').';': ''; ?>
}

.gallery-moreview {
	<?php echo ot_get_option('color_link_btn_textborder')? 'color: '.ot_get_option('color_link_btn_textborder').';': ''; ?>
	<?php echo ot_get_option('color_link_btn_textborder')? 'border-color: '.ot_get_option('color_link_btn_textborder').';': ''; ?>
}

.block-slider .slider-item h3 {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}


/* Sub page */
.subpage-content {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}
.subpage-content .entry-header {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}

/* pagination */
.pagination > li > a.active {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}

.pagination > li a, 
.pagination > li span {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}

.pagination li a.active {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}

.pagination li a:focus,
.pagination li a:hover {
    <?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}

/* grid content */
.grid-item-wrapper a {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}

.grid-item-wrapper .item-info,
.list-item .item-info {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
.grid-item-wrapper .item-description,
.list-item .item-content .item-description {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}

/* detail */
.detail-container .detail-info {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
.detail-container a {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}
.detail-container .detail-action {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
.detail-container .detail-comment-wrapper {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}
.comment-responde .comment-notes,
.comment-responde .form-allowed-tags,
.comment-responde span,
.comment-responde code {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}



/* icon */
.subpage-wrapper .post-format-icon:before,
.subpage-wrapper a.post-format-icon:before {
	<?php echo ot_get_option('color_general_icon')? 'color: '.ot_get_option('color_general_icon').';': ''; ?>
}

.fa {
	<?php echo ot_get_option('color_light_icon')? 'color: '.ot_get_option('color_light_icon').';': ''; ?>
}


/**
 * 2. Widget
 * ----------------------------------------------------------------------------
 */

/* widget text color */
.subpage-widget .widget-item,
.subpage-widget #calendar_wrap caption {
	<?php echo ot_get_option('color_widget_list_item_text')? 'color: '.ot_get_option('color_widget_list_item_text').';': ''; ?>
}

.subpage-widget .widget-item h3 {
	<?php echo ot_get_option('color_widget_title')? 'color: '.ot_get_option('color_widget_title').';': ''; ?>
}

.subpage-widget#widget_eshop ul.product_list_widget li a,
.subpage-widget a {
	<?php echo ot_get_option('color_widget_link_text')? 'color: '.ot_get_option('color_widget_link_text').';': ''; ?>
}

.subpage-widget#widget_eshop ul.product_list_widget li a:hover,
.subpage-widget a:hover {
	<?php echo ot_get_option('color_widget_link_text_hover')? 'color: '.ot_get_option('color_widget_link_text_hover').';': ''; ?>
}

/* widget search button */
.subpage-widget #searchform input[type=submit] {
	<?php echo ot_get_option('color_widget_search_btn_bg')? 'background-color: '.ot_get_option('color_widget_search_btn_bg').';': ''; ?>
}




/**
 * 3. Header
 * ----------------------------------------------------------------------------
 */
header.header-wrapper {
	<?php echo ot_get_option('color_header_bg')? 'background-color: '.ot_get_option('color_header_bg').';': ''; ?>
}

header.header-wrapper .navbar-inverse #main-navigation li a {
	<?php echo ot_get_option('color_header_menu')? 'color: '.ot_get_option('color_header_menu').';': ''; ?>
}

header.header-wrapper .navbar-inverse .navbar-toggle,
header.header-wrapper .navbar-inverse .navbar-toggle:hover,
header.header-wrapper .navbar-inverse .navbar-toggle:focus {
	<?php echo ot_get_option('color_header_button')? 'border-color: '.ot_get_option('color_header_button').';': ''; ?>
}

header.header-wrapper .navbar-inverse .navbar-toggle .icon-bar {
	<?php echo ot_get_option('color_header_button')? 'background-color: '.ot_get_option('color_header_button').';': ''; ?>
}


/**
 * 4. Footer
 * ----------------------------------------------------------------------------
 */
footer {
	<?php echo ot_get_option('color_footer_widget_bg')? 'background-color: '.ot_get_option('color_footer_widget_bg').';': ''; ?>
}

footer,
footer .footer-content ul li,
footer .footer-content ul div,
footer .footer-content ul li a {
	<?php echo ot_get_option('color_footer_widget_text')? 'color: '.ot_get_option('color_footer_widget_text').';': ''; ?>
}

footer .footer-content .footer-widget-item ul li {
	<?php echo ot_get_option('color_footer_widget_text')? 'border-color: '.ot_get_option('color_footer_widget_text').';': ''; ?>
}

footer .footer-content .footer-widget-item label,
footer .footer-content ul li a:hover {
	<?php echo ot_get_option('color_footer_widget_title')? 'color: '.ot_get_option('color_footer_widget_title').';': ''; ?>
}

footer .footer-copyright {	
	<?php echo ot_get_option('color_footer_content_bg')? 'background-color: '.ot_get_option('color_footer_content_bg').';': ''; ?>
}
footer .footer-copyright div {
	<?php echo ot_get_option('color_footer_content')? 'color: '.ot_get_option('color_footer_content').';': ''; ?>
}


/**
 * 5. Home 
 * ----------------------------------------------------------------------------
 */

/* 5.1. Slider */
.sl-slider-wrapper .sl-slider h2 {
	<?php echo ot_get_option('color_home_slider_title')? 'color: '.ot_get_option('color_home_slider_title').';': ''; ?>
}
.sl-slider-wrapper .sl-slider blockquote  {
	<?php echo ot_get_option('color_home_slider_desc')? 'color: '.ot_get_option('color_home_slider_desc').';': ''; ?>
}
.sl-slider-wrapper .sub-link {
	<?php echo ot_get_option('color_home_slider_link')? 'color: '.ot_get_option('color_home_slider_link').';': ''; ?>
	<?php echo ot_get_option('color_home_slider_link')? 'border-color: '.ot_get_option('color_home_slider_link').';': ''; ?>
}

/* 5.2. Pricing */
.block-group .pricing-item,
.block-group .pricing-item label{
	<?php echo ot_get_option('color_home_pricing_table')? 'border-color: '.ot_get_option('color_home_pricing_table').';': ''; ?>
	<?php echo ot_get_option('color_home_pricing_table')? 'color: '.ot_get_option('color_home_pricing_table').';': ''; ?>
}

.block-group .pricing-item.default-pricing,
.block-group .pricing-item.default-pricing label {
	<?php echo ot_get_option('color_home_pricing_table_recommended')? 'border-color: '.ot_get_option('color_home_pricing_table_recommended').';': ''; ?>
	<?php echo ot_get_option('color_home_pricing_table_recommended')? 'color: '.ot_get_option('color_home_pricing_table_recommended').';': ''; ?>
}

.block-group .pricing-item div.price,
.block-group .pricing-item .price-btn {
	<?php echo ot_get_option('color_home_pricing_table')? 'background-color: '.ot_get_option('color_home_pricing_table').';': ''; ?>
}

.block-group .pricing-item.default-pricing div.price,
.block-group .pricing-item.default-pricing .price-btn,
.block-group .pricing-item .price-btn:hover {
	<?php echo ot_get_option('color_home_pricing_table_recommended')? 'background-color: '.ot_get_option('color_home_pricing_table_recommended').';': ''; ?>
}
.block-group .pricing-item.default-pricing .fa-check {
	<?php echo ot_get_option('color_home_pricing_table_recommended')? 'color: '.ot_get_option('color_home_pricing_table_recommended').';': ''; ?>
}


/**
 * 6. General Page
 * ----------------------------------------------------------------------------
 */

.breadcrumb-wrapper {
	<?php echo ot_get_option('color_page_header_bg')? 'background-color: '.ot_get_option('color_page_header_bg').';': ''; ?>
}
.breadcrumb-wrapper .breadcrumb-title {
	<?php echo ot_get_option('color_page_header_title_wrapper_bg')? 'background-color: '.ot_get_option('color_page_header_title_wrapper_bg').';': ''; ?>
}
.breadcrumb-wrapper .breadcrumb-title,
.breadcrumb-wrapper .breadcrumb-title span {
	<?php echo ot_get_option('color_page_header_title')? 'color: '.ot_get_option('color_page_header_title').';': ''; ?>
}
.breadcrumb-wrapper .breadcrumb-content {
	<?php echo ot_get_option('color_page_breadcrumb_text')? 'color: '.ot_get_option('color_page_breadcrumb_text').';': ''; ?>
	<?php echo ot_get_option('color_page_breadcrumb_text_wrapper_bg')? 'background-color: '.ot_get_option('color_page_breadcrumb_text_wrapper_bg').';': ''; ?>
}
.breadcrumb-wrapper .breadcrumb-content a {
	<?php echo ot_get_option('color_page_breadcrumb_active')? 'color: '.ot_get_option('color_page_breadcrumb_active').';': ''; ?>
}

.subpage-content-wrapper {
	<?php echo ot_get_option('color_page_bg_blockview')? 'background-color: '.ot_get_option('color_page_bg_blockview').';': ''; ?>
}

/*----- woocommerce -----*/
.subpage-widget#widget_eshop .woocommerce-product-search input[type=submit] {
	<?php echo ot_get_option('color_widget_search_btn_bg')? 'background-color: '.ot_get_option('color_widget_search_btn_bg').';': ''; ?>
}

.price_slider_wrapper .ui-slider .ui-slider-handle {
	<?php echo ot_get_option('color_price_slider_point')? 'border-color: '.ot_get_option('color_price_slider_point').';': ''; ?>
	<?php echo ot_get_option('color_price_slider_point')? 'background-color: '.ot_get_option('color_price_slider_point').';': ''; ?>
}
.price_slider_wrapper .ui-slider .ui-slider-range {
	<?php echo ot_get_option('color_price_slider_bar_active')? 'background-color: '.ot_get_option('color_price_slider_bar_active').';': ''; ?>
}
.price_slider_wrapper .ui-widget-content.ui-slider-horizontal {
	<?php echo ot_get_option('color_price_slider_bar')? 'background-color: '.ot_get_option('color_price_slider_bar').';': ''; ?>
}

/**/
.woocommerce-page #respond input#submit,
.woocommerce-page a.button, 
.woocommerce-page button.button, 
.woocommerce-page input.button,
.woocommerce-page #respond input#submit.alt, 
.woocommerce-page a.button.alt, 
.woocommerce-page button.button.alt, 
.woocommerce-page input.button.alt {
	<?php echo ot_get_option('color_general_btn_bg')? 'background-color: '.ot_get_option('color_general_btn_bg').';': ''; ?>
	<?php echo ot_get_option('color_general_btn_text')? 'color: '.ot_get_option('color_general_btn_text').';': ''; ?>
}

.woocommerce-page #respond input#submit:hover,
.woocommerce-page a.button:hover, 
.woocommerce-page button.button:hover, 
.woocommerce-page input.button:hover,

.woocommerce-page #respond input#submit.alt:hover, 
.woocommerce-page a.button.alt:hover, 
.woocommerce-page button.button.alt:hover, 
.woocommerce-page input.button.alt:hover {
	<?php echo ot_get_option('color_general_btn_bg_hover')? 'background-color: '.ot_get_option('color_general_btn_bg_hover').';': ''; ?>
	<?php echo ot_get_option('color_general_btn_text')? 'color: '.ot_get_option('color_general_btn_text').';': ''; ?>
}

.woocommerce-page nav.woocommerce-pagination ul li a, 
.woocommerce-page nav.woocommerce-pagination ul li span {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}

.woocommerce-pagination li a.active {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
	<?php echo ot_get_option('color_general_btn_bg_hover')? 'background-color: '.ot_get_option('color_general_btn_bg_hover').';': ''; ?>
}

.woocommerce-page nav.woocommerce-pagination ul li a:focus, 
.woocommerce-page nav.woocommerce-pagination ul li a:hover {
    <?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
	<?php echo ot_get_option('color_general_btn_bg')? 'background-color: '.ot_get_option('color_general_btn_bg').';': ''; ?>
}

.woocommerce-page ul.products li.product .price,
.woocommerce-page ul.products li.product a.added_to_cart,
.woocommerce-page div.product .summary p.price span, 
.woocommerce-page div.product .summary p.price del, 
.woocommerce-page div.product .summary span.price span,
.woocommerce-page div.product .stock {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}

.woocommerce div.product .woocommerce-tabs ul.tabs li a {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}
.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}

.woocommerce-page span.onsale {
	<?php echo ot_get_option('color_general_btn_bg_hover')? 'border-color: '.ot_get_option('color_general_btn_bg_hover').'; color: '.ot_get_option('color_general_btn_bg_hover').';': ''; ?>
}

.woocommerce .woocommerce-error, 
.woocommerce .woocommerce-info, 
.woocommerce .woocommerce-message,
.woocommerce-checkout #payment div.payment_box {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}


/* Buddypress */
#buddypress .dir-search input[type=search],
#buddypress .dir-search input[type=text],
#buddypress .groups-members-search input[type=search],
#buddypress .groups-members-search input[type=text],
#buddypress .standard-form input[type=color],
#buddypress .standard-form input[type=date],
#buddypress .standard-form input[type=datetime-local],
#buddypress .standard-form input[type=datetime],
#buddypress .standard-form input[type=email],
#buddypress .standard-form input[type=month],
#buddypress .standard-form input[type=number],
#buddypress .standard-form input[type=password],
#buddypress .standard-form input[type=range],
#buddypress .standard-form input[type=search],
#buddypress .standard-form input[type=tel],
#buddypress .standard-form input[type=text],
#buddypress .standard-form input[type=time],
#buddypress .standard-form input[type=url],
#buddypress .standard-form input[type=week],
#buddypress .standard-form select, 
#buddypress .standard-form textarea,
#buddypress input[type=text],
#buddypress input[type=url],
#buddypress input[type=email],
#buddypress input[type=password],
#buddypress input[type=number],
#buddypress input[type=tel],
#buddypress input[type=search],
#buddypress textarea,
#buddypress select {
	<?php echo ot_get_option('color_input_border')? 'border-color: '.ot_get_option('color_input_border').';': ''; ?>
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}

#buddypress .dir-search input[type=search]:focus,
#buddypress .dir-search input[type=text]:focus,
#buddypress .groups-members-search input[type=search]:focus,
#buddypress .groups-members-search input[type=text]:focus,
#buddypress .standard-form input[type=color]:focus,
#buddypress .standard-form input[type=date]:focus,
#buddypress .standard-form input[type=datetime-local]:focus,
#buddypress .standard-form input[type=datetime]:focus,
#buddypress .standard-form input[type=email]:focus,
#buddypress .standard-form input[type=month]:focus,
#buddypress .standard-form input[type=number]:focus,
#buddypress .standard-form input[type=password]:focus,
#buddypress .standard-form input[type=range]:focus,
#buddypress .standard-form input[type=search]:focus,
#buddypress .standard-form input[type=tel]:focus,
#buddypress .standard-form input[type=text]:focus,
#buddypress .standard-form input[type=time]:focus,
#buddypress .standard-form input[type=url]:focus,
#buddypress .standard-form input[type=week]:focus,
#buddypress .standard-form select:focus, 
#buddypress .standard-form textarea:focus,
#buddypress input[type=text]:focus,
#buddypress input[type=url]:focus,
#buddypress input[type=email]:focus,
#buddypress input[type=password]:focus,
#buddypress input[type=number]:focus,
#buddypress input[type=tel]:focus,
#buddypress input[type=search]:focus,
#buddypress textarea:focus,
#buddypress select:focus { 
	<?php echo ot_get_option('color_input_focus')? 'border-color: '.ot_get_option('color_input_focus').';': ''; ?>
}

#buddypress button,
#buddypress input[type=button],
#buddypress input[type=submit],
#buddypress a.button,
#buddypress ul.button-nav li a, 
#buddypress a.bp-title-button,
#buddypress div.activity-meta a {
	<?php echo ot_get_option('color_general_btn_bg')? 'background-color: '.ot_get_option('color_general_btn_bg').';': ''; ?>
	<?php echo ot_get_option('color_general_btn_text')? 'color: '.ot_get_option('color_general_btn_text').';': ''; ?>
}

#buddypress button:hover,
#buddypress input[type=button]:hover,
#buddypress input[type=submit]:hover,
#buddypress a.button:hover,
#buddypress ul.button-nav li a:hover, 
#buddypress a.bp-title-button:hover {
	<?php echo ot_get_option('color_general_btn_bg_hover')? 'background-color: '.ot_get_option('color_general_btn_bg_hover').';': ''; ?>
	<?php echo ot_get_option('color_general_btn_text')? 'color: '.ot_get_option('color_general_btn_text').';': ''; ?>
}

#buddypress p.warning, 
#buddypress body.profile_page_bp-profile-edit.modal-open #TB_ajaxContent p.warning,
#buddypress body.users_page_bp-profile-edit.modal-open #TB_ajaxContent p.warning,
#buddypress div#message p, 
#buddypress #sitewide-notice p,
#buddypress div.item-list-tabs ul li a span,
#buddypress form#whats-new-form textarea {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}

#buddypress div.item-list-tabs ul li.current a, 
#buddypress div.item-list-tabs ul li.selected a,
#buddypress a.activity-time-since {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}

#buddypress div.item-list-tabs ul li.current a:hover, 
#buddypress div.item-list-tabs ul li.selected a:hover {	
	<?php echo ot_get_option('color_text_basic')? 'color: '.ot_get_option('color_text_basic').';': ''; ?>
}

#buddypress .drag-drop-inside p,
#buddypress span.bbp-author-ip,
#buddypress .bbp-forum-header a.bbp-forum-permalink, 
#buddypress .bbp-topic-header a.bbp-topic-permalink, 
#buddypress .bbp-reply-header a.bbp-reply-permalink,
#buddypress span.bbp-admin-links a {
	<?php echo ot_get_option('color_text_light')? 'color: '.ot_get_option('color_text_light').';': ''; ?>
}
#buddypress .bbp-forum-header a.bbp-forum-permalink:hover, 
#buddypress .bbp-topic-header a.bbp-topic-permalink:hover, 
#buddypress .bbp-reply-header a.bbp-reply-permalink:hover,
#buddypress span.bbp-admin-links a:hover {
	<?php echo ot_get_option('color_text_basic')? 'color: '.ot_get_option('color_text_basic').';': ''; ?>
}

#buddypress legend,
#buddypress .activity-list .activity-content .activity-header, 
#buddypress .activity-list .activity-content .comment-header,
#buddypress .field-visibility-settings, 
#buddypress .field-visibility-settings-notoggle, 
#buddypress .field-visibility-settings-toggle {
	<?php echo ot_get_option('color_text_general')? 'color: '.ot_get_option('color_text_general').';': ''; ?>
}


/*----- Bbpress -----*/
.subpage-widget#widget_bbpress #bbp-search-form input[type=submit] {
	<?php echo ot_get_option('color_widget_search_btn_bg')? 'background-color: '.ot_get_option('color_widget_search_btn_bg').';': ''; ?>
}

#page-bbpress div.bbp-template-notice a {
	<?php echo ot_get_option('color_text_important')? 'color: '.ot_get_option('color_text_important').';': ''; ?>
}

#page-bbpress div.bbp-template-notice a:hover {	
	<?php echo ot_get_option('color_text_basic')? 'color: '.ot_get_option('color_text_basic').';': ''; ?>
}

</style>
<?php

}


?>