<?php
/**************************************************************
 *
 * Logo Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/logo.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/

// logo
$logo = ot_get_option('general_logo');

if($logo){
	?><a href = "<?php echo site_url(); ?>" class = "navbar-brand"><img src = "<?php echo ot_get_option('general_logo'); ?>" alt = "<?php echo get_bloginfo('name'); ?>"></a><?php
} else {
	?><a href = "<?php echo site_url(); ?>" class = "navbar-brand logo-text"><?php bloginfo(); ?></a><?php
}

?>