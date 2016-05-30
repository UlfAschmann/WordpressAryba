<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta charset="UTF-8">
		<title>Aryba
			<?php wp_title('|'); ?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="robots" content="index, follow" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<!--=============== css  ===============-->
		<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
		<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugins.css">
		<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<!--=============== favicons ===============-->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	</head>

	<body <?php body_class(); ?>>
		<!-- loader -->
		<div class="loader">
			<div id="movingBallG">
				<div class="movingBallLineG"></div>
				<div id="movingBallG_1" class="movingBallG"></div>
			</div>
		</div>
		<!-- loader end -->
		<!--================= main start ================-->
		<div id="main">
			<!--=============== header ===============-->
			<header>
				<!-- header-inner  -->
				<div class="header-inner">
					<!-- header logo -->
					<div class="logo-holder">
						<a href="<?php echo get_home_url();  ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
					</div>
					<!-- header logo end -->
					<!-- mobile nav button -->
					<div class="nav-button-holder">
						<div class="nav-button vis-m"><span></span><span></span><span></span></div>
					</div>
					<!-- mobile nav button end -->

					<!-- navigation  -->
					<div class="nav-holder">
						<nav>
							<ul>
								<li><a href="<?php echo get_home_url();  ?>/quienes-somos">Quienes Somos </a></li>
								<li><a href="<?php echo get_home_url();  ?>/proyectos">Proyectos</a></li>
								<li><a href="<?php echo get_home_url();  ?>/servicios">Servicios</a></li>
								<li><a href="<?php echo get_home_url();  ?>/desarrollos">Desarollos</a></li>
								<li><a href="<?php echo get_home_url();  ?>/socios">Socios</a></li>
								<li><a href="<?php echo get_home_url();  ?>/premios">Premios</a></li>
								<li><a href="<?php echo get_home_url();  ?>/contacto">Contacto</a></li>
							</ul>
						</nav>
					</div>
					<!-- navigation  end -->
				</div>
				<!-- header-inner  end -->
				<!-- share button  -->
				<div class="show-share isShare">
					<span>Compartir</span>
					<i class="fa fa-chain-broken"></i>
				</div>
				<!-- share  end-->
			</header>
			<div id="wrapper">
