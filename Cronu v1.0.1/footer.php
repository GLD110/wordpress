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
	<!-- embed google adwords -->
	<div class = "googleads container">
		<?php
			if(!is_front_page() && ot_get_option('adwords_embed') == 'on'){
				echo stripslashes(ot_get_option('adwords_webmaster'));
				echo stripslashes(ot_get_option('adwords_analytics'));
			}
		?>
	</div>

	<footer>
		<?php 
			if(ot_get_option('footer_structure') == 'tb'){
				get_template_part('templates/footer');
				get_template_part('templates/footer-copyright');
			} else {
				get_template_part('templates/footer-copyright');
				get_template_part('templates/footer');
			}
		?>
	</footer>
</div>

<?php wp_footer();?>
</body>
</html>
