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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="l-header">
		<div class="l-header__wrapper">
			<div class="l-header__container">
				<h1 class="header__title">
					AKIHITO MUROI
				</h1>
				<nav class="l-header-nav">
					<ul class="l-header-nav__container">
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url() ); ?>" class="l-header-nav__link">Home</a>
						</li>
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header-nav__link">Profile</a>
						</li>
						<li class="l-header-nav__item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header-nav__link">Skils</a>
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
	<!-- ./drawer-icon -->


	<!-- 以下はデフォルト -->
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
						rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
						rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$portfolio_description = get_bloginfo( 'description', 'display' );
			if ( $portfolio_description || is_customize_preview() ) :
				?>
				<p class="site-description">
					<?php echo $portfolio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu"
					aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'portfolio' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header>