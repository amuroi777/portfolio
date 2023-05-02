<?php
/**
 * カスタム投稿タイプ(blog)一覧ページ
 *
 * @package portfolio
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<main>
		<div class="p-blog-title">
			<div class="p-blog-title__wrapper">
				<h2 class="p-blog-title__en font-italic">blog</h2>
				<p class="p-blog-title__jp">ワークス</p>
				<p>
					<img class="p-blog-title__icon"
						src="<?php echo esc_url( get_template_directory_uri() . '/img/circle.png' ); ?>" alt="">
				</p>
			</div>

		</div>
		<!-- ./title -->

		<section class="p-blog-contents">
			<div class="p-blog-contents__wrapper">
				<div class="p-blog-contents__container">
					<main class="p-blog-contents__archive-blog p-blog-contents__main">
						<div class="p-blog-contents__breadcrumb">
							<img class="p-blog-contents___breadcrumb-icon"
								src="<?php echo esc_url( get_template_directory_uri() . '/img/home-icon.png' ); ?>"
								alt="">
							<p class="p-blog-contents__breadcrumb-padding">></p>
							<p class="p-blog-contents__breadcrumb-title"><?php the_archive_title(); ?></p>
						</div>
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();
								?>
						<article>
							<a href="<?php esc_url( the_permalink() ); ?>" class="p-blog-contents__archive-blog-item">
								<div class="p-blog-contents__archive-blog-thumbnail">
									<?php the_post_thumbnail( 'medium_large', array( 'class' => 'p-blog-contents__archive-blog-thumbnail-image' ) ); ?>
								</div>
								<div class="p-blog-contents__archive-blog-body">
									<h2 class="p-blog-contents__archive-blog-title"><?php echo $post->post_title; ?>
									</h2>
									<div class="p-blog-contents__meta p-blog-contents__archive-blog_meta">
										<img class="p-blog-contents__time-icon"
											src="<?php echo esc_url( get_template_directory_uri() . '/img/time-icon.png' ); ?>"
											alt="">
										<time class="p-blog-contents__meta-time"><?php the_time( 'Y.m.d' ); ?></time>
									</div>
								</div>
							</a>
						</article>


						<?php endwhile; ?>
						<?php else : ?>
						<p>記事がありません</p>
						<?php endif; ?>

						<div class="pagination">
							<?php
							$args = array(
								'mid_size'           => 1,
								'prev_text'          => '&lt;&lt;前へ',
								'next_text'          => '次へ&gt;&gt;',
								'screen_reader_text' => ' ',
							);
							the_posts_pagination( $args );
							?>
						</div>

					</main>
				</div>
			</div>
		</section>
		<!-- ./sidebar -->



	</main>

</div>

<?php get_footer(); ?>
