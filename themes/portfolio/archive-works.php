<?php
/**
 * カスタム投稿タイプ(works)一覧ページ
 *
 * @package portfolio
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<main>
		<div class="p-works-title">
			<div class="p-works-title__wrapper">
				<hgroup>
					<h2 class="p-works-title__en font-italic">Works</h2>
					<p class="p-works-title__jp">ワークス</p>
				</hgroup>
				<div class="p-works-title__icon">
				</div>

			</div>
			<!-- ./title -->

			<section class="p-works-contents">
				<div class="p-works-contents__wrapper">
					<div class="p-works-contents__container">
						<main class="p-works-contents__archive-works p-works-contents__main">
							<div class="p-works-contents__breadcrumb">
								<img class="p-works-contents___breadcrumb-icon"
									src="<?php echo esc_url( get_template_directory_uri() . '/img/home-icon.svg' ); ?>"
									alt="">
								<p class="p-works-contents__breadcrumb-padding">></p>
								<p class="p-works-contents__breadcrumb-title"><?php the_archive_title(); ?></p>
							</div>
							<?php
							if ( have_posts() ) :
								while ( have_posts() ) :
									the_post();
									?>
							<article>
								<a href="<?php esc_url( the_permalink() ); ?>"
									class="p-works-contents__archive-works-item">
									<div class="p-works-contents__archive-works-thumbnail">
										<?php the_post_thumbnail( 'medium_large', array( 'class' => 'p-works-contents__archive-works-thumbnail-image' ) ); ?>
									</div>
									<div class="p-works-contents__archive-works-body">
										<h2 class="p-works-contents__archive-works-title">
											<?php echo $post->post_title; ?>
										</h2>
										<div class="p-works-contents__meta p-works-contents__archive-works_meta">
											<img class="p-works-contents__time-icon"
												src="<?php echo esc_url( get_template_directory_uri() . '/img/time-icon.svg' ); ?>"
												alt="">
											<time
												class="p-works-contents__meta-time"><?php the_time( 'Y.m.d' ); ?></time>
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
