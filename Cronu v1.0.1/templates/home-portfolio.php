<?php
/**************************************************************
 *
 * Home Portfolio section Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/home-portfolio.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

 
// check slider visible
if(ot_get_option('home_general_portfolio') != 'on'){
	return false;
}

// get portfolio data
$portfolio = ot_get_option('home_portfolio_data');
?>

<section id = "portfolio" class = "form-section form-style-gallery-1">
	<div class = "container text-left">
		<div class = "col-md-12">
			
			<!-- Section title -->
			<div class = "form-title text-center <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<?php echo ot_get_option('home_portfolio_title'); ?>
			</div>

			<div class = "form-content">
				
				<!-- section description -->
				<p class = "form-desc <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>"><?php echo ot_get_option('home_portfolio_desc'); ?></p>

			</div>

		</div>
	</div>
	
	<div class = "postfolio-wrapper">
		<?php  if(is_array($portfolio)): ?>
			<?php
				// get filters for portfolio
				$filter = array();
				foreach($portfolio as $p){
					if(trim($p['portfolio_filter'])){
						$filter[$p['portfolio_filter']] = true;
					}
				}
			?>

			<div class = "gallery-wrapper <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<div class = "gallery-filter-wapper">
					<div>
						<a href = "#" class = "gallery-filter-sort selected" data-category = "all">All</a>
						
						<!-- portfolio filter - start -->
						<?php foreach($filter as $k => $f): ?>
							<a href = "#" class = "gallery-filter-sort" data-category = "<?php echo $k; ?>"><?php echo $k; ?></a>
						<?php endforeach; ?>
						<!-- portfolio filter - end -->

						<div class = "clear"></div>
					</div>
				</div>

				<div class = "gallery-photos">						
					<div class = "gallery-thumbnail-wrapper">
						
						<!-- portfolio thumbs -->
						<?php foreach($portfolio as $p): ?>

							<?php if(trim($p['portfolio_image']) && trim($p['portfolio_thumb_image'])): ?>
								<a href = "<?php echo $p['portfolio_image']; ?>" class = "gallery-thumbnail" data-categories = "<?php echo $p['portfolio_filter']; ?>">
									<img src = "<?php echo $p['portfolio_thumb_image']; ?>"	alt = "<?php echo $p['title']; ?>"/>
									<div class = "portfolio-desc">
										<label><?php echo $p['title']; ?></label>
										<p><?php echo $p['portfolio_desc']; ?></p>
									</div>
								</a>	
							<?php endif; ?>

						<?php endforeach; ?>

					</div><!-- .thumbnail-wrap end -->
				</div><!-- .photos end -->					
			</div>

		<?php endif; ?>				
		
		<?php if(ot_get_option('home_portfolio_more_text') && ot_get_option('home_portfolio_more_link')): ?>
			<div class = "gallery-info-wrapper">
				<a href = "<?php echo ot_get_option('home_portfolio_more_link'); ?>" target = "_blank" class = "custom-btn btn-lg gallery-moreview"><?php echo ot_get_option('home_portfolio_more_text')?></a>
			</div>
		<?php endif; ?>

	</div>
</section>