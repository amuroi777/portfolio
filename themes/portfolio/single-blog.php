<?php
/**
 * カスタム投稿タイプ（blog）詳細ページ
 *
 * @package portfolio
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<main>
		<div class="p-single-blog-title">
			<div class="p-single-blog-title__wrapper">
				<h2 class="p-single-blog-title__en font-italic">blog</h2>
				<p class="p-single-blog-title__jp">ブログ</p>
				<div class="p-single-blog-title__icon">
				</div>
			</div>

			<section class="p-single-blog-contents">
				<div class="p-single-blog-contents__wrapper">
					<div class="p-single-blog-contents__container">
						<div class="p-single-blog-contents__archive-blog p-blog-contents__main">
							<div class="p-single-blog-contents__breadcrumb">
								<img class="p-single-blog-contents___breadcrumb-icon"
									src="<?php echo esc_url( get_template_directory_uri() . '/img/home-icon.png' ); ?>"
									alt="">
								<p class="p-single-blog-contents__breadcrumb-padding">></p>
								<p class="p-single-blog-contents__breadcrumb-title"><?php the_archive_title(); ?></p>
							</div>
						</div>
						<div class="p-single-blog-contents__img-company"></div>

						<article>
							<div class="p-single-blog-contents__detail">
								<div class="p-single-blog-contents__detail-title">
									<?php echo $post->post_title; ?>
								</div>


								<div class="p-single-blog-contents__detail-date">
									<div class="p-single-blog-contents__detail-post">
										<img class="p-single-blog-contents__detail-icon"
											src="<?php echo esc_url( get_template_directory_uri() . '/img/time-icon.png' ); ?>"
											alt="">
										<?php echo get_the_date( 'Y/m/d' ); ?>
									</div>
									<div class="p-single-blog-contents__detail-update">
										<img class="p-single-blog-contents__detail-icon"
											src="<?php echo esc_url( get_template_directory_uri() . '/img/update-icon.png' ); ?>"
											alt="">
										<?php echo get_the_modified_date( 'Y/m/d' ); ?>
									</div>
								</div>

								<div class="p-single-blog-contents__single-content">
									<?php the_content(); ?>
								</div>
							</div>

						</article>
					</div>
				</div>
			</section>

	</main>

	<?php get_footer(); ?>
