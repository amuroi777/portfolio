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
get_template_part( 'template-parts/front-page/fv' );
echo '<div class="p-index-counter">';
get_template_part( 'template-parts/front-page/profile' );
get_template_part( 'template-parts/front-page/skils' );
get_template_part( 'template-parts/front-page/works' );
get_template_part( 'template-parts/front-page/blog' );
?>


<?php
get_footer();