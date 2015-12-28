<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title(); ?></title>
	
	<meta name="title" content="<?php wp_title(); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="author" content="Hilary Seselja">
	<meta name="Copyright" content="Hilary Seselja. All Rights Reserved.">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>
    
    <!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php //Add page title as class name
			$title = str_replace(" ", "", get_the_title());
			body_class($title); ?>>
		
        <header id="header">
        
<!-- FOUNDATION TOPBAR setup -->        	

<div class="site-navigation">

<div id="nav-wrapper">
	<a class="nav-title" data-dropdown="drop1" data-dropdown="hover1" data-options="is_hover:true; hover_timeout:5000"aria-controls="drop1" aria-expanded="false">Menu</a>
	<ul id="drop1" class="f-dropdown nav" data-dropdown-content aria-hidden="true" tabindex="-1">
	 	<?php wp_nav_menu( array(	'theme_location' => 'primary-menu', 
									'container'  => false,
									'container_class' => 'nav-wrapper',
									'items_wrap' => '%3$s' /*removes 'ul'*/ ) ); ?>
		</ul>
   	</div><!-- end .nav-wrapper -->
    
   
<div id="header-search">
	<?php get_search_form(); ?>
	</div><!-- end header-search -->

</div><!-- end site-navigation --> 
    
<div class="blogInfo">
     <a href="<?php 	$homeurl = home_url(); echo $homeurl; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/domscode_logo.png" alt="doms code logo" /></a>
    <h1><?php bloginfo('the_title'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    
    </div><!-- end .blogTitle -->
    
    </header>
        
    <div id="wrapper">