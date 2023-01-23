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
?>


<?php
get_footer();