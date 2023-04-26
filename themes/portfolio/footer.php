<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

<footer class="l-footer">
	<div class="l-footer__wrapper">
		<div class="l-footer__container">
			<div class="l-footer__area">
				<div class="l-footer__title-area">
					<h1 class="l-footer__title">
						Contact
					</h1>
					<a class="l-footer__contact">お問い合わせはこちら</a>
				</div>
				<nav class="l-footer-nav">
					<ul class="l-footer-nav__container">
						<li class="l-footer-nav__item">
							<a href="<?php echo esc_url( home_url() ); ?>" class="l-footer-nav__link">Home</a>
						</li>
						<li class="l-footer-nav__item">
							<a href="#profile" class="l-footer-nav__link">Profile</a>
						</li>
						<li class="l-footer-nav__item">
							<a href="#skils" class="l-footer-nav__link">Skils</a>
						</li>
						<li class="l-footer-nav__item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-footer-nav__link">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="l-footer__bottom-area">
				<p class="l-footer__privacy">プライバシーポリシー</p>
				<p class="l-footer__copyright">2023,All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<script src="script.js" defer></script>

<?php wp_footer(); ?>

</body>

</html>
