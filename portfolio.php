<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage techiereef
 * @since Twenty Fifteen 1.0
 */

	$url = 'http://localhost/techiereef/';
	//$url = '/wp-content/themes/techiereef/';
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta name="google-site-verification" content="hx9xBRXoplTZvwaskvY-mHP0nQOPPnpLpPnkgJx5ONc" />
	<title>TechieReef - Portfolio</title>
	<meta charset="<?php //bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<?php //wp_head(); ?>

	<!--[if lt IE 9]>
	<script src="<?php //echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Ubuntu%3A300%3A400%3A700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
	<link rel='stylesheet' href="<?php $url ?>css/global_grid.css" type="text/css"/>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/particles.js"></script>
</head>
<body>
<div id="portfolio-grid">
	
</div>
<?php include('includes/menu.php'); ?>
<?php include('includes/values.php'); ?>	
<script>
	jQuery(document).ready(function(){
		jQuery('#icon-menu').click(function(){
			openMenu();
		});
		jQuery('#icon-close').click(function(){
			closeMenu();
		});
	});
	
	function openMenu(){
		jQuery('#menu-grid').addClass('active');
		setTimeout(()=> {
			jQuery('#menu-grid').addClass('move');
		});
	}
	
	function closeMenu(){
		
		jQuery('#menu-grid').removeClass('move');
			setTimeout(()=> {
				jQuery('#menu-grid').removeClass('active');
		}, 500);
	}

</script>			
</body>
</html>
