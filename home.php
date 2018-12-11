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
	
	
	
	<link rel='stylesheet' href='/wp-content/themes/techiereef/css/global_grid.css' type='text/css' />

	
	<script src="/wp-content/themes/techiereef/js/particles.js"></script>
		
</head>

<body <?php body_class(); ?>>
	

<div class="grid-container">
  <div class="logo">
    <img src="http://techiereef.com/wp-content/themes/techiereef/assets/images/techiereef-logo.png"/>
  </div>
  <div class="menu">
    <svg id="icon-menu" viewBox="0 0 119 25" width="100%" height="100%">
      <title>techireef logo</title>
      <path class="hover-menu-color" d="M36,8 L36,0 L100,0 L100,8 L36,8 Z M0,8 L0,0 L24,0 L24,8 L0,8 Z M0,28 L0,20 L71,20 L71,28 L0,28 Z"></path>
    </svg>
  </div>
  <div class="slogan-container">
    
        <h1>creating digital solutions</h1>
    
  </div>  
  <div class="button">
	  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
</div>
	
  	<div id="menu-grid">
	  	<div class="portfolio">portfolio</div>
	  	<div class="video">
		  	
    	</div>
		<div class="particles">particles</div>
		<div class="photo"><svg id="icon-close" viewBox="0 0 119 25" width="100%" height="100%">	  		
	  		<path d="M36,8 L36,0 L100,0 L100,8 L36,8 Z M0,8 L0,0 L24,0 L24,8 L0,8 Z M0,28 L0,20 L71,20 L71,28 L0,28 Z"></path>
    		</svg></div>
		
		<nav class="navigation">navigation</nav>  	
	</div>

    
	
	<script>
	    jQuery(document).ready(function(){
			jQuery('#icon-menu').click(function(){
				openMenu();
			});
		});
		
		function openMenu(){
			jQuery('#menu-grid').addClass('active');

				setTimeout(
					()=> {
						jQuery('#menu-grid').addClass('move');
		    			});
		}
	    
	    
	    
	    jQuery(document).ready(function(){
			jQuery('#icon-close').click(function(){
				closeMenu();
			});
		});
		
		function closeMenu(){
			
			jQuery('#menu-grid').removeClass('move');

				setTimeout(
					()=> {jQuery('#menu-grid').removeClass('active');

			}, 500);
		}

	    
	   </script>
			
</body>
</html>
