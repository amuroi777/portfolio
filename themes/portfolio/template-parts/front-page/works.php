<?php
/**
 * Template Name: トップページテンプレート(works)
 *
 * @package portfolio_
 * @since 1.0.0
 */

?>

<section class="p-index-works">
	<div class="p-index-works__wrapper">
		<div class="p-index-works__container">
			<div class="p-index-works__title">
				<p class="p-index-works__title-n">03</p>
				<p class="p-index-works__title-main">Works</p>
				<p class="p-index-works__title-sub">これまで制作したもの</p>
			</div>
			<div class="p-index-works__card">
				<div class="splide">
					<div class="splide__track">
						<ul class="splide__list">
							<?php
									$work_query = new WP_Query(
										array(
											'post_type' => 'works',
											'posts_per_page' => -1,
											'order'     => 'DESC',
										)
									);
									?>
							<?php if ( $work_query->have_posts() ) : ?>
								<?php while ( $work_query->have_posts() ) : ?>
									<?php $work_query->the_post(); ?>

							<li class="splide__slide">
								<div class="p-index-works__card-items">
									<a href="<?php esc_url( the_permalink() ); ?>" class="p-index-works__card-item">
										<div class="card_img"><?php the_post_thumbnail( 'full' ); ?></div>
										<div class="card_title"><?php the_title(); ?></div>
										<div class="card_text"><?php the_content(); ?></div>
									</a>
								</div>
							</li>

							<?php endwhile; ?>
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>

						</ul>
					</div>
				</div>
			</div>
</section>
