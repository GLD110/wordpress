<?php
/**************************************************************
 *
 * Home Business section Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/home-business.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

 // check slider visible
if(ot_get_option('home_general_business') != 'on'){
	return false;
}

// get business data
$businessData = ot_get_option('home_business_data');
?>

<section id = "business" class = "form-section form-style-list-1">
	<div class = "container text-left">
		<div class = "col-md-12">
			
			<!-- business section title -->
			<div class = "form-title text-center <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<?php echo ot_get_option('home_business_title'); ?>
			</div>
			
			<!-- business detail -->
			<div class = "form-content">
				
				<!-- business summary -->
				<p class = "form-desc <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>"><?php echo ot_get_option('home_business_desc'); ?></p>

				<!-- business items  -->
				<?php if(is_array($businessData)): ?>
					
					<div class = "row">

						<?php foreach($businessData as $k => $d): ?>
							
							<?php if(trim($d['title'])): ?>

								<div class = "col-md-4 <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
									<?php if(trim($d['business_image'])): ?>
										<img src = "<?php echo $d['business_image']; ?>"/>
									<?php endif; ?>

									<h1><?php echo $d['title']; ?></h1>
									<p><?php echo $d['business_desc']; ?></p>
								</div>

							<?php endif; ?>

						<?php endforeach; ?>

					</div>

				<?php endif; ?>

			</div>
		</div>
	</div>
</section>