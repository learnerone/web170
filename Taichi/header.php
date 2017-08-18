<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo(); ?>">
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<title><?php title_tag() ?></title>
<!--Remy Sharp Shim --> 
<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script> 
<![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<!--<link href="style.css" type="text/css" rel="stylesheet">-->
		 
<link href="css/blueberry.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
<link href='http://fonts.googleapis.com/css?family=Dosis:400,800' rel='stylesheet' type='text/css'>
		
<?php /*?> Always have wp_head() just before the closing </head>
	 	tag of your theme. Many plugins use this hook to add 
       elements to <head> such as styles, scripts, and meta tags.
	  <?php */?>
	
<?php wp_head(); ?>

</head>

<body <?php body_class() ?>>
	
	 
<div id="wrapper"><!--start of wrapper-->

<header>
	<img id="logo" src="<?php bloginfo('template_url'); ?>/images/logo-1.png" id="logo" alt="My Logo">
<!--	<img id="logo" src="images/logo-1.png"  alt="logo">-->
	<h1>Lighthouse Tai Chi</h1>
</header>

	 <nav> 
		<?php wp_nav_menu( array( 
							'theme_location' => 'main-menu' ,
							'menu' => 'Main Menu' ,
							'container'  => 'ul li', 

						) ); ?> 
			</nav>
	
	
<!--
<nav>
<ul>
	<li><a href="index.html">Home</a></li>
	<li><a href="about.html">About</a></li>
	<li><a href="locations.html">Locations</a></li>
	<li><a href="membership.html">Membership</a></li>
	<li><a href="contact.html">Contact</a></li>
</ul>
</nav>-->
