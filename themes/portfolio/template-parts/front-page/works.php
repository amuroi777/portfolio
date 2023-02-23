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
		<div class="p-front-section__title-inner">
			<h2 class="c-section-title">
				<span class="c-section-title__english">Works</span>
				これまで制作したもの
			</h2>
		</div>
		<div class="p-index-works__xscroll">
			<div class="p-index-works__container">
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
				<div class="p-index-works__column">
					<article class="c-article-card p-index-works__card-items">
						<a href="<?php esc_url( the_permalink() ); ?>" class="c-article-card__link p-index-works__card-item">
							<picture class="c-article-card__image-inner">
								<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail( 'full' );
									?>
								<?php else : ?>
								<img src="" alt="" class="c-article-card__noimage">
								<?php endif; ?>
							</picture>
							<div class="c-article-card__content-inner">
								<span class="c-article-card__category">tekisuto</span>
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
