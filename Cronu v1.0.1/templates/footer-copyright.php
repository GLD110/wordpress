<?php
/**************************************************************
 *
 * Footer Copyright section Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 footer-copyright.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	
?>

<div class = "footer-copyright">
	<div class = "container">
		<div class = "col-md-12">
			<div class = "col-md-6 text-left">
				<?php echo ot_get_option('footer_copyright_structure') == 'lr'? ' '.ot_get_option('general_footer_copyright'): ot_get_option('general_footer_author'); ?>
			</div>
			<div class = "col-md-6 text-right">
				<?php echo ot_get_option('footer_copyright_structure') == 'rl'? ' '.ot_get_option('general_footer_copyright'): ot_get_option('general_footer_author'); ?>
			</div>
		</div>
	</div>
</div>