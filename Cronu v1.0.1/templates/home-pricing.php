<?php
/**************************************************************
 *
 * Home Pricing section Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/home-pricing.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

// check slider visible
if(ot_get_option('home_general_pricing') != 'on'){
	return false;
}

// get Pricing Data
$pricingData = ot_get_option('home_pricing_data');

if(!is_array($pricingData)){
	return false;
}

$col = 0;
foreach($pricingData as $k => $p){
	if(trim($p['title']) && trim($p['pricing_price'])){
		$col++;
	} else {
		array_splice($pricingData, $k, 1);
	}
}

// get column number
$colSize = 12 / $col > 3? (int)(12 / $col): 3;
?>

<section id = "pricing" class = "form-section form-style-block">
	<div class = "container text-left">
		<div class = "col-md-12">
			<!-- Section title -->
			<div class = "form-title text-center <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<?php echo ot_get_option('home_pricing_title'); ?>
			</div>

			<div class = "form-content">
				<!-- section description -->
				<p class = "form-desc <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
					<?php echo ot_get_option('home_pricing_desc'); ?>
				</p>
				
				<?php if(is_array($pricingData)): ?>

					<div class = "block-group text-center">
						<div class = "row <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
							
							<?php foreach($pricingData as $p): ?>

								<div class = "col-sm-<?php echo $colSize; ?>">
									<div class = "pricing-item  <?php echo $p['pricing_recommended'] == 'yes'? 'default-pricing': '' ?>">
										<?php echo $p['pricing_recommended'] == 'yes'? '<i class = "fa fa-check"></i>': '' ?>
										<label><?php echo $p['title']; ?></label>
										<div class = "price">
											<strong><?php echo $p['pricing_price']; ?></strong>
											<?php echo $p['pricing_unit']? ' / '.$p['pricing_unit']: ''; ?>
										</div>
										<ul class = "price-features">
											<?php foreach(preg_split('/$\R?^/m', $p['pricing_desc']) as $l): ?>
												<?php if(trim($l)): ?>
													<li><?php echo $l; ?></li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
										<a href = "<?php echo $p['pricing_selectLink']? $p['pricing_selectLink']: '#'; ?>" class = "price-btn custom-normal-btn">
											<?php echo $p['pricing_selectText']? $p['pricing_selectText']: __('Select Plan', 'truewordpress'); ?>
										</a>
									</div>
								</div>

							<?php endforeach; ?>
							
						</div>
					</div>

				<?php endif; ?>

			</div>
		</div>
	</div>
</section>