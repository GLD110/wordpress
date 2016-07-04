<?php
/**************************************************************
 *
 * Home Slider Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/home-slider.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

// check slider visible
if(ot_get_option('home_general_slider') != 'on'){
	return false;
}

// get slider data
$slider = ot_get_option('home_slider_data');

if(!is_array($slider)){
	return false;
}

foreach($slider as $k => $s){
	if(empty(trim($s['slider_image']))){
		array_splice($slider, $k , 1);
	}
}

?>
<section id = "slider" class = "sl-slider-wrapper">

	<div class = "sl-slider">
		<?php foreach($slider as $s): ?>
			<div class = "sl-slide" data-orientation = "<?php echo rand(0, 1) > 0? 'horizontal': 'vertical'; ?>" data-slice1-rotation = "<?php echo rand(-25, 25); ?>" data-slice2-rotation = "<?php echo rand(-25, 25); ?>" data-slice1-scale = "<?php echo rand(1, 20) / 10; ?>" data-slice2-scale = "<?php echo rand(1, 20) / 10; ?>">
				<div class = "sl-slide-inner">
					<div class = "bg-img" style = "background-image: url(<?php echo $s['slider_image']; ?>);"></div>
					<div class = "slide-contents-container">
						<h2><?php echo $s['title']; ?></h2>
						<blockquote>
							<p><?php echo $s['slider_desc']; ?></p>
							<cite><?php echo $s['slider_author']; ?></cite>
							<?php if($s['slider_link']): ?>
								<a href = "http://<?php echo $s['slider_link']; ?>" target = "_blank" class = "sub-link"><?php echo $s['slider_link_text']? $s['slider_link_text']: __('More View', 'truewordpress'); ?></a>
							<?php endif; ?>
						</blockquote>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div><!-- /sl-slider -->
	
	<?php if(count($slider) > 0): ?>
		<nav id = "nav-dots" class = "nav-dots">
			<?php for($i = 0; $i < count($slider); $i++): ?>
				<span <?php echo $i == 0? 'class = "nav-dot-current"': '' ?>></span>
			<?php endfor; ?>
		</nav>
		
		<nav id = "nav-arrows" class = "nav-arrows">
			<span class = "nav-arrow-prev">Previous</span>
			<span class = "nav-arrow-next">Next</span>
		</nav>
	<?php endif; ?>

</section><!-- /slider-wrapper -->