<?php
/**************************************************************
 *
 * General Page Side Bar - Widget section
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 sidebar-page.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

?>
<!-- Start Page sidebar -->
<div id = "widget_page" class = "col-lg-3 col-md-3 subpage-widget <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">		

	<!-- Start sidebar -->
	<?php if(!dynamic_sidebar('page_sidebar')): ?>
		<a href = "<?php bloginfo('url');?>/wp-admin/widgets.php"><?php __('Click here to add widgets', 'truewordpress'); ?></a>
	<?php endif; ?>

</div>
<!-- End Page sidebar -->