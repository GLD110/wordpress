<?php
/**************************************************************
 *
 * Home Chart section Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/home-chart.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

// check slider visible
if(ot_get_option('home_general_chart') != 'on'){
	return false;
}

// get chart data
$chartData = ot_get_option('home_chart_data');

if(!is_array($chartData)){
	return false;
}

$chart = array();
foreach($chartData as $c){
	if(trim($c['title']) && trim($c['chart_value'])){
		array_push($chart, array(
			'label' => $c['title'],
			'value' => $c['chart_value']
		));
	}
}

?>

<section id = "chart" class = "form-section form-style-chart" data-parallax = "scroll" data-image-src = "<?php echo ot_get_option('home_chart_bg'); ?>">
	<div class = "container text-center">
		<div class = "col-md-12">
			<div class = "form-content after-clear <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<?php //if(ot_get_option('home_chart_type') == 'line'): ?>
					<canvas id = "pricing-statistic" 
						data-chart-type = "<?php echo ot_get_option('home_chart_type'); ?>" 
						data-color-font = "<?php echo ot_get_option('home_chart_fontColor'); ?>" 
						data-color-axis = "<?php echo ot_get_option('home_chart_axisColor'); ?>" 
						data-color-graph = "<?php echo ot_get_option('home_chart_graphColor'); ?>" 
						data-chart = '<?php echo json_encode($chart); ?>'
					></canvas>
				<?php //endif; ?>
			</div>
		</div>
	</div>
</section>