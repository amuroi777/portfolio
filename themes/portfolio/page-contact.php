<?php
/**
 * Template Name:contactページテンプレート（/contact）
 *
 * @package portfolio
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<main>
	<div class="p-contact-title">
		<div class="p-contact-title__wrapper">
			<h2 class="p-contact-title__en font-italic">contact</h2>
			<p class="p-contact-title__jp">お問い合わせ</p>
			<p>
				<img class="p-contact-title__icon"
					src="<?php echo esc_url( get_template_directory_uri() . '/img/circle.png' ); ?>">
			</p>
		</div>
	</div>


	<section class="p-contact-item">
		<div class="p-contact-item__wrapper">
			<div class="p-contact-item__container">
				<p class="p-contact-item__intro">
					下記のフォームからお問い合わせ内容をご記入ください。<br>

				<div class="p-contact-item__form">
					<h2 class="p-contact-item__form-top-title">お問い合わせ</h2>
					<form id="js-form" action="" class="p-contact-item__form-lists">
						<dl class="p-contact-item__form-list">
							<?php echo do_shortcode( '[mwform_formkey key="55"]' ); ?>
						</dl>
						<div class="p-contact-item__form-footer">
							<p class="p-contact-item__form-footer-text">
								<label class="p-contact-item__form-privacy">
									<input type="checkbox" name="" class="p-contact-item__form-privacy-input">
									<span class="p-contact-item__form-privacy-part"></span>
								</label>
								<a href="" class="p-contact-item__form-privacy-link" target="_blank">個人情報保護方針</a>に同意します。
							</p>
							<div class="p-contact-item__form-submit">
								<button id="js-submit" class="p-contact-item__button" -submit type="submit">送　信</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- ./contact-item -->

	<?php get_footer(); ?>
