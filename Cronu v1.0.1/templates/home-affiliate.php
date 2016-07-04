<?php
/**************************************************************
 *
 * Home Affiliate section Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/home-affiliate.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// check affiliate section visible
if(ot_get_option('home_general_affiliate') != 'on'){
	return false;
}

// get Affiliate Data
$affiliateData = ot_get_option('home_affiliate_data');

if(!is_array($affiliateData)){
	return false;
}

?>

<section id = "affiliate" class = "form-section white-transparent" data-parallax = "scroll" data-image-src = "<?php echo ot_get_option('home_affiliate_bg'); ?>">
	<div class = "container text-center">
		<div class = "col-md-12">
			<div class = "form-content <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">					
				<div class = "block-slider" data-item-count = "5">

					<?php foreach($affiliateData as $t): ?>
						<?php if(trim($t['affiliate_image'])): ?>
							<div class = "slider-item">
								<a href = "http://<?php echo $t['affiliate_link']? $t['affiliate_link']: '#'; ?>" target = "_blank"><img src = "<?php echo $t['affiliate_image']; ?>"/></a>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</section>