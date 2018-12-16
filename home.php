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

	$values = [];

	class Value
	{
		public $title;
		public $description;
		public $type;
		public $sound;
	}

	$value = new Value();
	$value->postId = 0;
	$value->header = "do you have hope?";
	$value->title = "hope";
	$value->type = "noun";
	$value->sound = "həʊp";
	$value->description = '1. a feeling of expectation and desire for a particular thing to happen';

	array_push($values, $value);

	$value = new Value();
	$value->postId = 1;
	$value->header = "can you imagine?";
	$value->title = "imagine";
	$value->type = "noun";
	$value->sound = "həʊp";
	$value->description = '2. a feeling of expectation and desire for a particular thing to happen';

	array_push($values, $value);

	$value = new Value();
	$value->postId = 2;
	$value->header = "belief?";
	$value->title = "belief";
	$value->type = "noun";
	$value->sound = "həʊp";
	$value->description = '3. a feeling of expectation and desire for a particular thing to happen';

	array_push($values, $value);

	$value = new Value();
	$value->postId = 3;
	$value->header = "then visualize";
	$value->title = "visualize";
	$value->type = "noun";
	$value->sound = "həʊp";
	$value->description = '4. a feeling of expectation and desire for a particular thing to happen';

	array_push($values, $value);

?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta name="google-site-verification" content="hx9xBRXoplTZvwaskvY-mHP0nQOPPnpLpPnkgJx5ONc" />
	<title>TechieReef - Digital Strategies</title>
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
<div id="hero-grid">
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
<?php include('includes/portfolio_home.php'); ?>
<?php include('includes/servicios_home.php'); ?>

<script>

	jQuery(document).ready(function(){

		// CLICK EVENTS
		jQuery('#icon-menu').click(function(){
			openMenu();
		});

		jQuery('#icon-close').click(function(){
			closeMenu();
		});

		jQuery('#open-values-menu').click(function(){
			openValuesMenu();
		});

		jQuery('#close-values-menu').click(function(){
			closeValuesMenu();
		});

		jQuery('.forwards').click(function() {
			var postId = jQuery(this).attr('data-postId');
			var nextPost = parseInt(postId) + 1;			
			if(jQuery('#' + nextPost)[0]) {
				jQuery('#' + postId).removeClass('active');
				jQuery('#' + nextPost).addClass('active');
			}
		});

		jQuery('.backwards').click(function() {
			var postId = jQuery(this).attr('data-postId');
			var previousPost = parseInt(postId) - 1;
			if(jQuery('#' + previousPost)[0]) {
				jQuery('#' + postId).removeClass('active');
				jQuery('#' + previousPost).addClass('active');
			}
		});

	});
	
	function openMenu() {
		jQuery('#menu-grid').addClass('active');
		setTimeout(()=> {
			jQuery('#menu-grid').addClass('move');
		});
	}
	
	function closeMenu() {
		jQuery('#menu-grid').removeClass('move');
			setTimeout(()=> {
				jQuery('#menu-grid').removeClass('active');
		}, 500);
	}

	function openValuesMenu() {
		jQuery('.values-submenu').addClass('active');
	}

	function closeValuesMenu() {
		jQuery('.values-submenu').removeClass('active');
	}

	<?php
		$js_array = json_encode($values);
		echo "var values = ". $js_array . ";\n";
	?>

</script>			
</body>
</html>
