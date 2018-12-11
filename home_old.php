<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage techiereef
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="google-site-verification" content="hx9xBRXoplTZvwaskvY-mHP0nQOPPnpLpPnkgJx5ONc" />
	<title>TechieReef - Digital Strategies</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
	
	
	
	<link rel='stylesheet' href='/wp-content/themes/techiereef/css/global.css' type='text/css' />

	
	<script src="/wp-content/themes/techiereef/js/particles.js"></script>
	<script src="/wp-content/themes/techiereef/js/modernizr.js"></script>
	
</head>

<body <?php body_class(); ?>>
	 <div id="topcontrol" title="Go to Top"></div>

  	<div id="new-grid">
	  	
	  	<?php include('/var/www/wordpress/wp-content/themes/techiereef/includes/menu.html'); ?>
		  	
	<div>
	    
	<section>
		<?php include('/var/www/wordpress/wp-content/themes/techiereef/includes/about_us_home.html');?>		
	</section>	    
	    
   
	<script src="/wp-content/themes/techiereef/js/TweenMax.js"></script>
	<script src="/wp-content/themes/techiereef/js/charming.min.js"></script>
	<script src="/wp-content/themes/techiereef/js/anime.min.js"></script>
	<script src="/wp-content/themes/techiereef/js/about.js"></script>
	<script src="/wp-content/themes/techiereef/js/menu.js"></script>
	<script src="/wp-content/themes/techiereef/js/wordFx.js"></script>
	<script src="/wp-content/themes/techiereef/js/triggerParticles.js"></script>
		
		
</body>
</html>
