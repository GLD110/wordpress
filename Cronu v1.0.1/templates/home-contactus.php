<?php
/**************************************************************
 *
 * Home Contact Us section Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/home-contactus.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// check slider visible
if(ot_get_option('home_general_contactus') != 'on'){
	return false;
}

// get contact us form
$contactusSortcode = ot_get_option('home_contactUs_form');
?>

<section id = "contactus" class = "form-section form-style-normal">
	<div class = "container text-left">
		<div class = "col-md-12">
			<div class = "form-title text-center <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>"><?php echo ot_get_option('home_contactUs_title'); ?></div>
			<div class = "form-content">

				<div class = "sub-form">
					<p class = "form-desc <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
						<?php echo ot_get_option('home_contactUs_desc'); ?>
					</p>
				</div>
				
				<?php if($contactusSortcode): ?>
					<div class = "block-group text-center">
						<div class = "contactus-form">
							<?php echo do_shortcode($contactusSortcode); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section id = "gmap" class = "form-section form-style-normal">
	<div class = "contact-map">
	<!-- BEGAIN GOOGLE MAP -->
		<div id = "contactus-map" data-location = '{"long":"<?php echo (float)ot_get_option('home_contactUs_map_long')? (float)ot_get_option('home_contactUs_map_long'): 40.741173; ?>","lat":"<?php echo (float)ot_get_option('home_contactUs_map_lat')? (float)ot_get_option('home_contactUs_map_lat'): -74.006028; ?>","pin":"<?php echo ot_get_option('home_contactUs_map_icon')? ot_get_option('home_contactUs_map_icon'): get_template_directory_uri().'/assets/images/googlemap-pin.png'; ?>"}'></div>
	</div>
</section>