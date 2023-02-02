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
				<?php
				$args      = array(
					'post_type'      => 'news',
					'posts_per_page' => 3,
					'order'          => 'DESC',
				);
				$the_query = new WP_Query( $args );
				?>

				<?php
				if ( $the_query->have_posts() ) :
					;
					?>
				<?php
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>

				<div class="p-index-works__card-items">
					<a href="<?php esc_url( the_permalink() ); ?> class=" p-index-works__card-item">
						<div class="card_img"><img src="../../img/about-bg.jpg" alt=""></div>
						<div class="card_title">タイトルタイトル</div>
						<div class="card_text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
					</a>
					<?php endwhile; ?>
					<?php else : ?>
					<p>記事がありません</p>
					<?php
						endif;
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
</section>