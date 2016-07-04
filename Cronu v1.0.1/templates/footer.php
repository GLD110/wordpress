<?php
/**************************************************************
 *
 * Footer Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 footer.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	
?>

<div class = "footer-content <?php echo ot_get_option('general_animation') == 'on'? 'wow rubberBand': ''; ?>">
	<div class = "container">
		<div class = "col-md-12 text-left">

			<div class = "col-md-4">
				<div class = "footer-logo">
					<?php if(ot_get_option('footer_widget_logo')): ?>
						<img src = "<?php echo ot_get_option('footer_widget_logo'); ?>"/>
					<?php endif; ?>
				</div>
			</div>

			<div class = "col-md-8">
				<div class = "col-md-4 contact-info">
					<ul>
						<?php foreach(preg_split('/$\R?^/m', ot_get_option('footer_contactinfo')) as $l): ?>
							<li><?php echo $l; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
				
				<?php if(!dynamic_sidebar('footer_widget')): ?>
					<a href = "<?php bloginfo('url');?>/wp-admin/widgets.php"><?php __('Click here to add widgets', 'truewordpress'); ?></a>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</div>