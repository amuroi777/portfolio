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
			<div class="p-front-section__title-inner">
				<h2 class="c-section-title">
					<span class="c-section-title__english">Works</span>
					これまで制作したもの
				</h2>
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
		</div>
	</div>
</section>