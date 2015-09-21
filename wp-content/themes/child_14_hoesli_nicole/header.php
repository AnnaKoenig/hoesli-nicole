<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" media="all" type="text/css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.css" media="all" type="text/css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.transitions.css" media="all" type="text/css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->


	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/isotope.pkgd.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/fake-element.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.7.1.min.js"></script>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.10.2.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		 <nav class="navbar navbar-inverse navbar-fixed-top">

      <div class="header-main">
		<div class="navbar-header">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
	  </div>


    </nav>
    <script type="text/javascript">
				$(document).ready(function() {

				  $("#owl-demo").owlCarousel({
				    autoPlay : 3000,
				    stopOnHover : true,
				    navigation:true,
				    paginationSpeed : 1000,
				    goToFirstSpeed : 2000,
				    singleItem : true,
				    autoHeight : true,
				    transitionStyle:"fade"
				  });

				});
			</script>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
