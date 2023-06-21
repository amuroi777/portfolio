<?php
/**
 * Template Name: 固定テンプレート(profile)
 *
 * @package portfolio
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<section class="p-page-profile" id="profile">
	<div class="p-page-profile__wrapper">
		<div class="p-page-profile__container">
			<hgroup class="p-page-profile__title-inner">
				<span class="p-page-profile__title-en">Profile</span>
				<span class="p-page-profile__title-ja">私について</span>
			</hgroup>
		</div>
		<div class="p-page-profile__p-area">
			<div class="p-page-profile__img">
				<!-- <img src="../../img/profile.jpg" alt=""> -->
			</div>
			<div class="p-page-profile__text-area">
				<p class="p-page-profile__text">
					プログラミングと筋トレと猫をこよなく愛する３0代。 WEB制作やフロントエンド全般の開発をしています。 元バンドマン → SE → フリーランス。生まれは福島県。
					ホームページ制作を承っております。お気軽にお問い合わせください！
				</p>
			</div>
		</div>

		<section class="p-page-profile-career">
			<div class="p-page-profile-career__wrapper">
				<div class="p-page-profile-career__container">
					<h3 class="p-page-profile-career__title">略歴</h3>
					<ul class="p-page-profile-career__timeline">
						<li class="p-page-profile-career__timeline-list">
							<div class="p-page-profile-career__timeline-content">
								<h3>2020年プログラミングについて制作開始</h3>
								<p>保有スキル:・FLOCSSのCSS設計からのマークアップ・npm
									scriptsを用いたタスクランナー・WordPressによるweb開発（ノーコードではなく、プラグイン、テーマ開発まで。）・javascript
									・html,csss,scssを使ったマークアップ
								</p>
							</div>
						</li>
						<li class="p-page-profile-career__timeline-list">
							<div class="p-page-profile-career__timeline-content">
								<h3>comming soon</h3>
								<p>comming soon</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="p-page-profile-skils">
			<div class="p-page-profile-skils__wrapper">
				<div class="p-page-profile-skils__container">

					<div class="p-page-profile-skils__p-area">
						<div class="p-page-profile-skils__text-area">
							<h3 class="p-page-profile-skils__text-title">スキル</h3>
							<div class="p-page-profile-skils__text">
								<div class="p-page-profile-skils__text-main">静的マークアップ</div>
								<p class="p-page-profile-skils__text-content">
									デザインやワイヤーフレームをもとに、HTML、CSS、JavaScript、GSAPなどの技術を使用してコーディングしモバイルファーストなサイトを構築します。
								</p>
							</div>
							<div class="p-page-profile-skils__text-bottom">
								<div class="p-page-profile-skils__text-main">WordPress CMS設計</div>
								<p class="p-page-profile-skils__text-content">
									WordPressでの開発にあたり、テーマとプラグインの選定や設計に注力しパフォーマンスやセキュリティにも重点を置きサイトの高速化や脆弱性を考慮しながらサイトの開発にあたります。
								</p>
							</div>
							<div class="p-page-profile-skils__text-sub">
								<p class="p-page-profile-skils__text-sub-title">Tools & Langages<br>
								<p class="p-page-profile-skils__text-sub-content">
									VSCODE/Docker/wp-env/npm scripts<br>
									HTML/CSS/SCSS/ Javascript/php/
									<br><br>
									検証ツールを開くとこのサイトで用いたCSS設計がわかります。
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="p-page-profile-message">
			<div class="p-page-profile-message__wrapper">
				<div class="p-page-profile-message__container">
					<h3 class="p-page-profile-message__title">私と仕事がしたいあなたへメッセージ</h3>
					<div class="p-page-profile-message__text-area">
						<p class="p-page-profile-message__text">
							エンジニアを選んだ理由は、新しいテクノロジーや革新的なアイデアが未来を変える力を持っていると信じています。これまでの技術の進歩を振り返ってみると、
							私たちの生活やビジネスのあり方がどんどん変わっていることを感じます。そんな中で、私は自分自身も成長し続けたいと考え、エンジニアの道を選びました。
							<br><br>

							ITの力を活用し売り上げや集客を向上させるための戦略やプロセスを構築します。
							私と一緒に仕事をすることで、私が持っているスキルや知識を活かし、事業の成果に貢献できると思っています。
							<br><br>
							私と一緒に、新しいプロジェクトに取り組んでみませんか？もし興味をお持ちいただけたら、ぜひご連絡ください。
						</p>
					</div>
					<div class="p-page-profile-message__button">
						<a href="<?php echo esc_url( home_url( './contact' ) ); ?>"
							class="p-page-profile-message__btn">仕事の相談をする</a>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>

<section class="p-page-profile-works">
	<div class="p-page-profile-works__wrapper">
		<div class="p-page-profile-works__title-inner">
			<div class="p-front-section__title-inner">
				<span class="c-section-title__english">Works</span>
				<span class="c-section-title__ja">これまで制作したもの</span>
			</div>

			<div class="p-page-profile-works__xscroll">
				<div class="p-page-profile-works__container">
					<?php
					$work_query = new WP_Query(
						array(
							'post_type'      => 'works',
							'posts_per_page' => -1,
							'order'          => 'DESC',
						)
					);
					if ( $work_query->have_posts() ) :
						while ( $work_query->have_posts() ) :
							$work_query->the_post();
							?>
					<div class="p-page-profile-works__column">
						<article class="c-article-card p-index-works__card-items">
							<a href="<?php esc_url( the_permalink() ); ?>"
								class="c-article-card__link p-index-works__card-item">
								<picture class="c-article-card__image-inner">
									<?php
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( 'full' );
										?>
									<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="">
									<?php endif; ?>
								</picture>
								<div class="c-article-card__content-inner">
									<span class="c-article-card__category">
										<?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?>
									</span>
									<h3 class="c-article-card__title"><?php the_title(); ?></h3>
								</div>
							</a>
						</article>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
</section>




<?php get_footer(); ?>
