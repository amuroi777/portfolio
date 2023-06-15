<?php
/**
 * Template Name: トップページテンプレート(blog)
 *
 * @package portfolio
 * @since 1.0.0
 */

?>

<section class="p-index-blog">
	<div class="p-index-blog__wrapper">
		<div class="p-front-section__title-inner">
			<h2 class="c-section-title">
				<span class="c-section-title__english">blog</span>
				<span class="c-section-title__ja">プログラミングやITについて発信しています</span>
			</h2>
		</div>

		<div class="p-index-blog__xscroll">
			<div class="p-index-blog__container">
				<?php
					$blog_query = new WP_Query(
						array(
							'post_type'      => 'blog',
							'posts_per_page' => -1,
							'order'          => 'DESC',
						)
					);
					if ( $blog_query->have_posts() ) :
						while ( $blog_query->have_posts() ) :
							$blog_query->the_post();
							?>
				<div class="p-index-blog__column">
					<article class="c-article-card p-index-blog__card-items">
						<a href="<?php esc_url( the_permalink() ); ?>"
							class="c-article-card__link p-index-blog__card-item">
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
								<span
									class="c-article-card__category"><?php echo esc_html( get_the_terms( get_the_ID(), 'genre2' )[0]->name ); ?></span>
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
