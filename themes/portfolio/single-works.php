<?php
/**
 * カスタム投稿タイプ（works）詳細ページ
 *
 * @package portfolio
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<main>
		<div class="p-single-works-title">
			<div class="p-single-works-title__wrapper">
				<h2 class="p-single-works-title__en font-italic">Works</h2>
				<p class="p-single-works-title__jp">ワークス</p>

				<div class="p-single-works-title__icon">

				</div>
			</div>

			<section class="p-single-works-contents">
				<div class="p-single-works-contents__wrapper">
					<div class="p-single-works-contents__container">
						<div class="p-single-works-contents__archive-works p-works-contents__main">
							<div class="p-single-works-contents__breadcrumb">
								<img class="p-single-works-contents___breadcrumb-icon"
									src="<?php echo esc_url( get_template_directory_uri() . '/img/home-icon.png' ); ?>"
									alt="">
								<p class="p-single-works-contents__breadcrumb-padding">></p>
								<p class="p-single-works-contents__breadcrumb-title"><?php the_archive_title(); ?></p>
							</div>
						</div>
						<div class="p-single-works-contents__img-company"></div>

						<article>
							<div class="p-single-works-contents__detail">
								<div class="p-single-works-contents__detail-title">
									<?php echo $post->post_title; ?>
								</div>


								<div class="p-single-works-contents__detail-date">
									<div class="p-single-works-contents__detail-post">
										<img class="p-single-works-contents__detail-icon"
											src="<?php echo esc_url( get_template_directory_uri() . '/img/time-icon.png' ); ?>"
											alt="">
										<?php echo get_the_date( 'Y/m/d' ); ?>
									</div>
									<div class="p-single-works-contents__detail-update">
										<img class="p-single-works-contents__detail-icon"
											src="<?php echo esc_url( get_template_directory_uri() . '/img/update-icon.png' ); ?>"
											alt="">
										<?php echo get_the_modified_date( 'Y/m/d' ); ?>
									</div>
								</div>

								<div class="p-single-works-contents__single-content">
									<?php the_content(); ?>
								</div>
							</div>

						</article>
					</div>
				</div>
			</section>

	</main>

	<?php get_footer(); ?>
