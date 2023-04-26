<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<title><?php echo bloginfo( 'name' ); ?></title>

	<link rel="stylesheet" href="./assets/css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Allura&family=Playfair+Display:wght@600&family=Roboto:wght@100;300;400;700&family=Satisfy&display=swap"
		rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="l-header">
		<div class="l-header__wrapper">
			<div class="l-header__container">
				<h1 class="l-header__title">
					AKIHITO MUROI
				</h1>
				<nav class="l-header-nav">
					<ul class="l-header-nav__container">
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url() ); ?>" class="l-header-nav__link">Home</a>
						</li>
						<li class="l-header-nav__item">
							<a href="#profile" class="l-header-nav__link">Profile</a>
						</li>
						<li class="l-header-nav__item">
							<a href="#skils" class="l-header-nav__link">Skils</a>
						</li>
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header-nav__link">Contact</a>
						</li>
					</ul>
				</nav>
				<div class="l-header-hamburger">
					<button type="button" id="js-buttonHamburger" class="c-button p-hamburger"
						aria-controls="global-nav" aria-expanded="false">
						<span class="l-header-hamburger__line1"></span>
						<span class="l-header-hamburger__line2"></span>
						<span class="l-header-hamburger__line3"></span>
						<span class="l-header-hamburger__visually-hidden"></span>
						<!-- </span> -->
					</button>
				</div>
			</div>
		</div>
	</header>
	<!-- /.header -->

	<section class="l-drawer">
		<nav class="l-drawer__content">
			<ul class="l-drawer__content-items">
				<li class="l-drawer__content-item"><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
				<li class="l-drawer__content-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Profile</a>
				</li>
				<li class="l-drawer__content-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Skils</a>
				</li>
				<li class="l-drawer__content-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Contact</a></li>
			</ul>
		</nav>
	</section>
