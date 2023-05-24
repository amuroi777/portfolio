<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio
 */


?>

<?php get_header(); ?>

<div id="container" class="wrapper">
	<main>
		<div class="p-single-works-title">
			<div class="p-single-works-title__wrapper">
				<h2 class="p-single-works-title__en font-italic">Works</h2>
				<p class="p-single-works-title__jp">ワークス</p>
				<p>
					<img class="p-single-works-title__icon"
						src="<?php echo esc_url( get_template_directory_uri() . '/img/circle.png' ); ?>" alt="">
				</p>
			</div>
		</div>
	</main>

	<section class="p-single-works-contents">
		<div class="p-single-works-contents__wrapper">
			<div class="p-single-works-contents__container">
				<main class="p-single-works-contents__archive-works p-works-contents__main">
					<div class="p-single-works-contents__breadcrumb">
						<img class="p-single-works-contents___breadcrumb-icon"
							src="<?php echo esc_url( get_template_directory_uri() . '/img/home-icon.png' ); ?>" alt="">
						<p class="p-single-works-contents__breadcrumb-padding">></p>
						<p class="p-single-works-contents__breadcrumb-title"><?php the_archive_title(); ?></p>
					</div>
				</main>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>
