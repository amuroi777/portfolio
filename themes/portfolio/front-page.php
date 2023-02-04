<?php
/**
 * トップページテンプレート
 *
 * @package portfolio
 * @since 1.0.0
 */

?>

<?php
get_header();
?>
<main>
	<?php
	esc_html( get_template_part( 'template-parts/front-page/fv' ) );
	?>

</main>


<?php
get_footer();
