<?php
/**************************************************************
 *
 * Header Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 header.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class = "ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class = "ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<!-- Meta -->
	<meta charset = "<?php bloginfo('charset'); ?>"/>
	<meta name = "viewport" content = "width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<?php if(is_search()): ?>
	   <meta name = "robots" content = "noindex, nofollow"/> 
	<?php endif; ?>

	<meta http-equiv = "X-UA-Compatible" content = "IE=edge"/>
	<meta charset = "<?php bloginfo('charset'); ?>"/>
	<meta http-equiv = "Content-Type" content = "<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

	<!-- Page Title -->
	<title>
		<?php
			// Print the <title> tag based on what is being viewed.
			global $page, $paged;

			wp_title('|', true, 'right');

			// Add the blog name.
			bloginfo('name');

			// Add the blog description for the home/front page.
			$site_description = get_bloginfo('description', 'display');
			if($site_description && (is_home() || is_front_page())){
				echo ' | '.$site_description;
			}

			// Add a page number if necessary:
			if ($paged >= 2 || $page >= 2){
				echo ' |'.sprintf(__('Page %s','truewordpress'), max($paged, $page));
			}

		?>
	</title>

	<link rel = "profile" href = "http://gmpg.org/xfn/11"/>
	<link rel = "pingback" href = "<?php bloginfo('pingback_url'); ?>"/>

	<!-- Favicon -->
	<?php if(ot_get_option('general_favicon')): ?>
		<link rel = "shortcut icon" type = "image/x-icon" href = "<?php echo ot_get_option('general_favicon'); ?>"/>
	<?php endif; ?>		
	
	<!-- Load Head -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-socialsider = "<?php echo ot_get_option('socialsider_structure')  == 'l'? 'left': (ot_get_option('socialsider_structure')  == 'r'? 'right': ''); ?>">

<!-- Window Pre Loader -->
<?php get_template_part('templates/pre-loader');?>

<!-- Scroll Top button  -->
<?php get_template_part('templates/scroll-top');?>

<!-- Socia Sider Bar  -->
<?php get_template_part('templates/social-siderbar');?>


<div class = "page-wrapper">

	<!-- Header content -->
	<?php get_template_part('templates/header');?>
	