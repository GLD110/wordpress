<?php
/**************************************************************
 *
 * Home Team member section Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/home-team.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// check team member section visible
if(ot_get_option('home_general_team') != 'on'){
	return false;
}

// get Team data
$teamData = ot_get_option('home_team_data');
?>

<section id = "team" class = "form-section form-style-block">
	<div class = "container text-left">
		<div class = "col-md-12">
			
			<!-- section title -->
			<div class = "form-title text-center <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
				<?php echo ot_get_option('home_team_title'); ?>
			</div>

			<div class = "form-content">
				<!-- section description -->
				<p class = "form-desc <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
					<?php echo ot_get_option('home_team_desc'); ?>
				</p>
				
				<div class = "block-slider <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>" data-item-count = "3">	
				
					<?php if(is_array($teamData)): ?>

						<?php foreach($teamData as $t): ?>

							<?php if($t['team_image'] && $t['title']): ?>

								<div class = "slider-item">
									<div class = "team-img">
										<img src = "<?php echo $t['team_image']; ?>"/>
									</div>

									<div class = "team-social">

										<?php if($t['team_social_fb']): ?>
											<a href = "http://<?php echo $t['team_social_fb']; ?>" target = "_blank" class = "social-btn color-facebook<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-facebook"></i></a>
										<?php endif; ?>

										<?php if($t['team_social_tt']): ?>
											<a href = "http://<?php echo $t['team_social_tt']; ?>" target = "_blank" class = "social-btn color-twitter<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-twitter"></i></a>
										<?php endif; ?>

										<?php if($t['team_social_gg']): ?>
											<a href = "http://<?php echo $t['team_social_gg']; ?>" target = "_blank" class = "social-btn color-google-plus<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-google-plus"></i></a>
										<?php endif; ?>

										<?php if($t['team_social_li']): ?>
											<a href = "http://<?php echo $t['team_social_li']; ?>" target = "_blank" class = "social-btn color-linkedin<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-linkedin"></i></a>
										<?php endif; ?>

									</div>

									<h3><?php echo $t['title']; ?></h3>
									<span><?php echo $t['team_role']; ?></span>												
									<p><?php echo $t['team_desc']; ?></p>
								</div>

							<?php endif; ?>

						<?php endforeach; ?>

					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>