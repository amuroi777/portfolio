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

<?php
esc_html( get_template_part( 'template-parts/front-page/fv' ) );
esc_html( get_template_part( 'template-parts/front-page/profile' ) );
esc_html( get_template_part( 'template-parts/front-page/skils' ) );
?>


<?php
get_footer();