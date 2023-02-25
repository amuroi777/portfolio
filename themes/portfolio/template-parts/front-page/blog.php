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
		<div class="p-index-blog__container">
			<div class="p-front-section__title">
				<h2 class="c-section-title">
					<span class="c-section-title__english">Blog</span>
					◯◯を発信しています。
				</h2>
			</div>
			<div class="p-index-blog__card">
				<div class="splide">
					<div class="splide__track">
						<ul class="splide__list">
							<?php
									$blog_query = new WP_Query(
										array(
											'post_type' => 'blog',
											'posts_per_page' => -1,
											'order'     => 'DESC',
										)
									);
									?>
							<?php if ( $blog_query->have_posts() ) : ?>
							<?php while ( $blog_query->have_posts() ) : ?>
							<?php $blog_query->the_post(); ?>

							<li class="splide__slide">
								<div class="p-index-blog__card-items">
									<a href="<?php esc_url( the_permalink() ); ?>" class="p-index-blog__card-item">
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