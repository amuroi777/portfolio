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
				<div class="p-contact-item__form">
					<h2 class="p-contact-item__form-top-title">お問い合わせフォーム</h2>
					<form id="js-form" action="" class="p-contact-item__form-lists validationForm" novalidate>
						<dl class="p-contact-item__form-list">
							<div class="p-contact-item__form-item">
								<dt class="p-contact-item__form-title" data-sub="*">
									お名前
								</dt>
								<dd class="p-contact-item__input">
									<input class="required maxlength" data-maxlength="10" type="text" name="name"
										placeholder="お名前太郎">
								</dd>
							</div>
							<div class="p-contact-item__form-item">
								<dt class="p-contact-item__form-title" data-sub="*">
									メールアドレス
								</dt>
								<dd class="p-contact-item__input">
									<input class="email" type="email" id="email" name="email"
										placeholder="bcd@amuro.com" required>
								</dd>
							</div>

							<div class="p-contact-item__form-item">
								<dt class="p-contact-item__form-title">
									お問合せ内容
								</dt>
								<dd class="p-contact-item__input">
									<textarea class="query" placeholder="お問合せ内容を入力してください。"></textarea>
								</dd>
							</div>
						</dl>
						<div class="p-contact-item__form-submit">
							<button id="#js-submit" class="p-contact-item__button" -submit type="submit">送信する</button>
						</div>
					</form>
				</div>
			</div>
	</section>

	<!-- ./contact-item -->

	<?php get_footer(); ?>
