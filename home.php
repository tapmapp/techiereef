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
<html <?php //language_attributes(); ?> class="no-js">
<head>
	<meta name="google-site-verification" content="hx9xBRXoplTZvwaskvY-mHP0nQOPPnpLpPnkgJx5ONc" />
	<title>TechieReef - Digital Strategies</title>
	<meta charset="<?php //bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!--[if lt IE 9]>
	<script src="<?php //echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php //wp_head(); ?>
	<link rel='stylesheet'  href='https://fonts.googleapis.com/css?family=Ubuntu%3A300%3A400%3A700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
	<link rel='stylesheet' href="<?php $url ?>css/global_grid.css" type="text/css"/>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/particles.js"></script>
</head>

<body>
<div id="home-grid">
	<div class="logo">
		<a href="/">
			<img src="<?php $url ?>assets/images/techiereef-logo.png"/>
		</a>
	</div>
	<div class="menu">
		<svg id="icon-menu" viewBox="0 0 119 25" width="100%" height="100%">
			<title>techireef logo</title>
			<path class="hover-menu-color" d="M36,8 L36,0 L100,0 L100,8 L36,8 Z M0,8 L0,0 L24,0 L24,8 L0,8 Z M0,28 L0,20 L71,20 L71,28 L0,28 Z"></path>
		</svg>
	</div>
	<div class="slogan-container">
		<h1>creating digital solutions</h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	</div>  
	<div class="button">
		
	</div>
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
