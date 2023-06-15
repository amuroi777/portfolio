<?php
/**
 * Template Name: トップページテンプレート(profile)
 *
 * @package portfolio
 * @since 1.0.0
 */

?>

<section class="p-index-profile" id="profile">
	<div class="p-index-profile__wrapper">
		<div class="p-index-profile__container">
			<div class="c-front-section__title-inner">
				<h2 class="c-section-title">
					<span class="c-section-title__english">Profile</span>
					<span class="c-section-title__ja">私について</span>
				</h2>
			</div>
		</div>
		<div class="p-index-profile__p-area">
			<div class="p-index-profile__img">
				<img src="../../img/about-bg.jpg" alt="">
			</div>
			<div class="p-index-profile__text-area">
				<p class="p-index-profile__text">
					プログラミングと筋トレと猫をこよなく愛する３0代。
					WEB制作やフロントエンド全般の開発をしています。
					元バンドマン → SE → フリーランス。生まれは福島県。
					ホームページ制作を承っております。お気軽にお問い合わせください！
				</p>
			</div>

			<div class="p-index-profile__button-area">
				<a href="<?php echo esc_url( home_url( '/profile ' ) ); ?>" class="p-index-profile__button">
					more
				</a>
			</div>
		</div>
	</div>
</section>
